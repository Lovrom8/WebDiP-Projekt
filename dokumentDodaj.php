<?php

require_once 'base/smarty.base.php';
require_once 'base/util.php';
require_once 'base/dokument.php';

$idDionica = '';
$dionica = '';
$greske = '';
$naslov = '';
$idVrsta = '';
$poveznica = '';

if (!Sesija::provjeriSesiju() || Sesija::tipKorisnika() < Korisnici::Prometnik)
{
    header("Location: index.php");
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["id"]))
        $idDionica = ocistiString($_POST["id"]);
    else
        $greske .= "Niste unijeli ID dionice.</br>";

    if (isset($_POST["naslov"]))
        $naslov = ocistiString($_POST["naslov"]);
    else
        $greske .= "Niste unijeli naslov problema.</br>";

    if (isset($_POST["opis"]))
        $opis = ocistiString($_POST["opis"]);
    else
        $greske .= "Niste unijeli opis problema.</br>";

    if (isset($_POST["vrsta"]))
        $idVrsta = ocistiString($_POST["vrsta"]);
    else
        $greske .= "Niste unijeli vrstu dokumenta.</br>";

    if (isset($_POST["poveznica"]))
        $poveznica = ocistiString($_POST["poveznica"]);
    else
        $greske .= "Niste unijeli poveznicu na dokument.</br>";

    if (Dokument::dodajNovi($naslov, $opis, $idVrsta, $idDionica, $poveznica))
    {
        header("refresh:3;dokumenti.php");
    }
    else
        $greske .= "Neuspješno dodvanje dokumenta!";
}
else
{
    if (empty($_GET["id"]))
        $greske .= "Niste unijeli ID dionice.</br>";
    else
        $idDionica = ocistiString($_GET["id"]);

    if (empty($_GET["oznaka"]))
        $greske .= "Niste unijeli oznaku dionice.</br>";
    else
        $dionica = ocistiString($_GET["oznaka"]);
}

$smarty->assign('greske', $greske);
$smarty->assign('oznaka', $dionica);
$smarty->display('dokumentDodaj.tpl');
