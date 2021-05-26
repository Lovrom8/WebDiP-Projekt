<?php

require_once 'base/smarty.base.php';
require_once 'base/dionica.php';
require_once 'base/util.php';
require_once 'base/dnevnik.php';
require_once 'base/sesija.php';

$greske = '';
$poruke = '';

$id = '';
$brojKm = '';
$polaziste = '';
$odrediste = '';
$idKategorija = '';
$oznaka = '';
$otvorena = '';

if(!Sesija::provjeriSesiju() || Sesija::tipKorisnika() < Korisnici::Moderator){
    header("Location: index.php");
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["oznaka"]))
        $greske .= "Niste unijeli oznaku dionice.</br>";
    else
        $oznaka = ocistiString($_POST["oznaka"]);

    if (empty($_POST["broj_km"]))
        $greske .= "Niste unijeli broj kilometara.</br>";
    else
        $brojKm = ocistiString($_POST["broj_km"]);

    if (empty($_POST["polaziste"]))
        $greske .= "Niste unijeli broj kilometara.</br>";
    else
        $polaziste = ocistiString($_POST["polaziste"]);

    if (empty($_POST["odrediste"]))
        $greske .= "Niste unijeli odredište.</br>";
    else
        $odrediste = ocistiString($_POST["odrediste"]);

    if (empty($_POST["kategorija"]))
        $greske .= "Niste odabrali kategoriju.</br>";
    else
        $idKategorija = ocistiString($_POST["kategorija"]);

    $otvorena = isset($_POST["otvorena"]) == 1;
  
    if (empty($greske))
    {
        if (!empty($_POST["id"]))
        {
            $id = ocistiString($_POST["id"]);

            if (Dionica::uredi($id, $oznaka, $polaziste, $odrediste, $idKategorija, $brojKm, $otvorena))
            {
                Dnevnik::dodajZapis(Akcije::AzuriranjeDionice, $oznaka, Sesija::provjeriSesiju());
                $poruke .= 'Uspješno ažuriranje dionice.';

                header("refresh:3;dionice.php");
            }
        }
        else
        {
            if (Dionica::dodaj($oznaka, $polaziste, $odrediste, $idKategorija, $brojKm, $otvorena))
            {
                Dnevnik::dodajZapis(Akcije::DodavanjeDionice, $oznaka, Sesija::provjeriSesiju());
                $poruke .= 'Uspješno dodavanje nove dionice.';

                header("refresh:5;dionice.php");
            }
        }
    }
}
else
{
    if (isset($_GET["id"]))
    {
        $id = $_GET["id"];
        if (($rez = Dionica::dohvatiZaId($id)) != null)
        {
            $oznaka = $rez['Oznaka'];
            $brojKm = $rez['Broj_kilometara'];
            $odrediste = $rez['Odrediste'];
            $polaziste = $rez['Polaziste'];
            $otvorena = $rez['Otvorena'];
            echo $otvorena;
        }
    }
}

$smarty->assign('id', $id);
$smarty->assign('brojKm', $brojKm);
$smarty->assign('polaziste', $polaziste);
$smarty->assign('odrediste', $odrediste);
$smarty->assign('kategorija', $idKategorija);
$smarty->assign('oznaka', $oznaka);
$smarty->assign('otvorena', $otvorena);

$smarty->assign('greske', $greske);
$smarty->display('dionicaUredi.tpl');
