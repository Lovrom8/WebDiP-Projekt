<?php
require_once 'base/util.php';
require_once 'base/korisnici.php';
require_once 'base/smarty.base.php';

$greske = '';
$ime = '';
$prezime = '';
$korIme = '';
$email = '';
$lozinka = '';
$potvrdaLozinke = '';

if ($_SERVER["REQUEST_METHOD"] == 'POST')
{
    if (empty($_POST['ime']))
        $greske .= 'Ime nije uneseno.</br>';
    else
        $ime = ocistiString($_POST['ime']);

    if (empty($_POST['prezime']))
        $greske .= 'Prezime nije uneseno.</br>';
    else
        $prezime = ocistiString($_POST['prezime']);

    if (empty($_POST['email']))
        $greske .= 'Email nije unesen.<br>';
    else
    {
        $email = ocistiString($_POST['email']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $greske .= 'Email nije ispravnog oblika.<br>';
        else if (Korisnik::ProvjeriEmail($email))
            $greske .= 'Email je zauzet. </br>';
    }

    if (empty($_POST['korIme']))
        $greske .= "Korisničko ime nije unesen.<br>";
    else
    {
        $korIme = ocistiString($_POST['korIme']);

        if (Korisnik::ProvjeriUsername($korIme))
            $greske .= 'Korisničko ime je zauzeto. </br>';
    }

    if (empty($_POST['lozinka']))
        $greske .= 'Lozinka nije unesena. <br>';
    else
        $lozinka = ocistiString($_POST["lozinka"]);

    if (empty($_POST['potvrdaLozinke']))
        $greske .= 'Potvrda lozinke nije unesena. <br>';
    else
    {
        $potvrdaLozinke = ocistiString($_POST['potvrdaLozinke']);

        if (strlen($potvrdaLozinke) < 8)
            $greske .= 'Lozinka nije dovoljne duljine!';

        if ($potvrdaLozinke !== $lozinka)
            $greske .= 'Lozinka i potvrda se ne poklapaju!';
    }

    if (empty($greske))
    {
        $token = md5(rand(0, 1000));
        if (Korisnik::DodajKorisnika($korIme, $lozinka, $email, $ime, $prezime, $token))
        {
            Korisnik::PosaljiAktivacijskiMail($token, $email);
        }
    }
}

$smarty->assign('greske', $greske);
$smarty->display('registracija.tpl');
