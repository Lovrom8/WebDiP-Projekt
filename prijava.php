<?php
include_once 'base/baza.php';
include_once 'base/util.php';
include_once 'base/obilazak.php';
include_once 'base/korisnici.php';
include_once 'base/sesija.php';
require_once 'base/smarty.base.php';
include_once 'base/dnevnik.php';

$baza = new Baza();
$korisnickoIme = "";
$lozinka = "";
$greske = "";

if(Sesija::provjeriSesiju()){
    header("Location: index.php");
    die();
}

$myJSON = json_encode(Obilazak::dohvatiSve(4));

echo $myJSON;

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(empty($_POST["korIme"])) 
        $greske .= "Niste unijeli korisnicko ime.</br>";
    else
        $korisnickoIme = ocistiString($_POST["korIme"]);

    if(empty($_POST["lozinka"])) 
        $greske .= "Niste unijeli lozinku.</br>";
    else
        $lozinka = ocistiString($_POST["lozinka"]);

    if(empty($_POST["zapamti"])) 
    {
        $zapamti = "";
        setcookie("korisnik", $korisnickoIme, time()-3600, "/");
    }
    else
        $zapamti = $_POST["zapamti"];

    if($greske == "")
    {
        $greske = Korisnik::Prijavi($korisnickoIme, $lozinka, $zapamti);
        
        if($greske == "") {
            Dnevnik::dodajZapis(Akcije::Prijava, "", Sesija::dohvatiSesiju());
            //header("Location: index.php");
            //die();
        }
        else
            echo $greske;
    }
}
else
{
    $korisnik = "";

    if(isset($_COOKIE["korisnik"]))
        $korisnik = $_COOKIE["korisnik"];
}

$smarty->display('prijava.tpl');
?>