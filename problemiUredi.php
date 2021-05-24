<?php

require_once 'base/smarty.base.php';
require_once 'base/util.php';
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/problem.php';
require_once 'base/dnevnik.php';
require_once 'base/dionica.php';

$greske = '';
$poruke = '';

$id = '';
$idDionica = '';
$datum = '';
$opis = '';
$vrijeme = '';
$aktivan = '';
$dionice = array();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["opis"]))
        $greske .= "Niste unijeli opis problema.</br>";
    else
        $opis = ocistiString($_POST["opis"]);

    if (empty($_POST["datum"]))
        $greske .= "Niste unijeli datum problema.</br>";
    else
        $datum = ocistiString($_POST["datum"]);

    if (empty($_POST["vrijeme"]))
        $greske .= "Niste unijeli vrijeme problema.</br>";
    else
        $vrijeme = ocistiString($_POST["vrijeme"]);

    if (empty($_POST["dionica"]))
        $greske .= "Niste unijeli dionicu.</br>";
    else
        $idDionica = ocistiString($_POST["dionica"]);

    $aktivan = isset($_POST["aktivan"]) == 1;

    if (empty($greske))
    {
        if (!empty($_POST["id"]))
        {
            $id = ocistiString($_POST["id"]);

            if (Problem::uredi($id, $opis, $datum, $vrijeme, $idDionica, $aktivan))
            {
                Dnevnik::dodajZapis(Akcije::AzuriranjeProblema, $opis, Sesija::provjeriSesiju());
                $poruke .= 'Uspješno uređivanje problema.';

                header("refresh:5;index.php");
                die();
            }
        }
        else
        {
            if (Problem::dodaj($opis, $datum, $vrijeme, $idDionica, $aktivan))
            {
                Dnevnik::dodajZapis(Akcije::DodavanjeProblema, $opis, Sesija::provjeriSesiju());
                $poruke .= 'Uspješno dodavanje novog problema.';

                header("refresh:5;index.php");
                die();
            }
        }
    }
}
else
{
    if (isset($_GET["id"]))
    {
        $id = $_GET["id"];
        if (($rez = Problem::dohvatiZaId($id)) != null)
        {
            $opis = $rez['Opis'];
            $datum = $rez['Datum'];
            $vrijeme = $rez['Vrijeme'];
            $aktivan = $rez['Aktivna'];
            $idDionica = $rez['ID_dionica'];
        }
    }

    $dionice = Dionica::dohvatiNazive();
}

$smarty->assign('id', $id);
$smarty->assign('opis', $opis);
$smarty->assign('datum', $datum);
$smarty->assign('vrijeme', $vrijeme);
$smarty->assign('aktivan', $aktivan);
$smarty->assign('idDionica', $idDionica);
$smarty->assign('dionice', $dionice);

$smarty->assign('poruke', $poruke);
$smarty->assign('greske', $greske);
$smarty->display('problemiUredi.tpl');
