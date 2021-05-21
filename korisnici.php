<?php

require_once 'base/smarty.base.php';
require_once 'base/util.php';
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/dnevnik.php';
require_once 'base/korisnici.php';

$greske = '';

if (!Sesija::provjeriSesiju() || Sesija::tipKorisnika() != Korisnici::Administrator)
{
    header("Location: index.php");
    die();
}

Dnevnik::dodajZapis(Akcije::Posjeta, "korisnici.php", Sesija::dohvatiSesiju());

$idKor = '';
$status = '';
$greske = '';
$poruke = '';

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    if (isset($_GET["id"]))
    {
        $idKor = $_GET["id"];

        if (!isset($_GET["status"]))
            $greske .= "Niste unijeli status korisnika.</br>";
        else
            $status = ocistiString($_GET["status"]);

        if (Korisnik::promjeniStatus($idKor, $status))
        {
            if($status == StatusKorisnika::Aktiviran)
                $poruke .= 'Uspješno odblokiran korisnik!';
            else
                $poruke .= "Uspješno blokiran korisnik!";
        }
        else
        {
            $greske .= 'Neuspješna promjena statusa korisnika!';
        }
    }
}

$smarty->assign('poruke', $poruke);
$smarty->assign('greske', $greske);
$smarty->display('korisnici.tpl');
