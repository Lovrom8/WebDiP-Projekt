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

/*if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}*/

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
            Dnevnik::dodajZapis(Akcije::Prijava, "", Sesija::provjeriSesiju());
            header("Location: index.php");
            die();
        }
        else
            echo $greske;
    }
}
else
{
    if(isset($_COOKIE["korisnik"]))
        $korisnickoIme = $_COOKIE["korisnik"];
}

$smarty->assign('greske', $greske);
$smarty->assign('korIme', $korisnickoIme);
$smarty->display('prijava.tpl');
?>