<?php

require_once 'base/smarty.base.php';
require_once 'base/korisnici.php';
require_once 'base/util.php';

$email = '';
$poruke = '';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["email"]))
        $poruke .= "Niste upisali email!";
    else
        $email = ocistiString($_POST["email"]);

    if(empty($greske)) {
        $idKor = Korisnik::dohvatiZaEmail($email);

        if($idKor === -1)
            $poruke .= 'Ne postoji korisnik s tim emailom!';
        else 
        {
            $token = md5(rand(0,1000));
            Korisnik::postaviToken($idKor, $token);

            Dnevnik::dodajZapis(Akcije::ResetLozinke, "", $idKor);
            echo $email;
            $poruke = Korisnik::posaljiMailZaResetLozinke($token, $email);
        }
    }
}

$smarty->assign('email', $email);
$smarty->assign('poruke', $poruke);
$smarty->display('zaboravljenaLozinka.tpl');