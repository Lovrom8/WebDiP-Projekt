<?php

require_once 'base/smarty.base.php';
require_once 'base/korisnici.php';
require_once 'base/dnevnik.php';
require_once 'base/util.php';

if (isset($_GET["token"]))
{
    $token = $_GET["token"];
    $korisnik = Korisnik::dohvatiZaToken($token);

    $poruka = '';
    $lozinka = nasumicniString(8);

    if($korisnik !== -1) {
        $idKor = $korisnik['ID_korisnik'];
        $mail = $korisnik['email'];

        if (Korisnik::postaviLozinku($idKor, $lozinka))
        {
            $naslov = "Nova lozinka";
            $sadrzaj = "Vaša nova lozinka jest: '$lozinka'";
    
            Dnevnik::dodajZapis(Akcije::ResetLozinke, "", $idKor);
    
            if (mail($mail, $naslov, $sadrzaj))
                $poruka .= 'Vaša nova lozinka poslana je na email!';
            else
                $poruka .= 'Nismo uspjeli poslati novu lozinku na Vaš email!';
        }
        else
            $poruka .= 'Nismo uspjeli resetirati vašu lozinku!';
    }
    else
        $poruka .= 'Ne postoji korisnik za taj token!';

    $smarty->assign('poruka', $poruka);
    $smarty->display('resetirajLozinku.tpl');
}
else
{
    header("Location: index.php");
    die();
}
