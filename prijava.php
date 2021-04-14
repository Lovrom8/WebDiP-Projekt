<?php
include_once 'base/baza.php';
include_once 'base/util.php';

$baza = new Baza();
$korisnickoIme = "";
$lozinka = "";
$greske = "";
if($_SERVER["REQUEST_METHOD"]== "POST") 
{
    if(empty($_POST["korisnicko_ime"])) 
    {
       
    }
    else
    {
        $korisnickoIme = ocistiString($_POST["korisnicko_ime"]);
    }

    if(empty($_POST["lozinka"])) 
    {

    }
    else
    {
        $lozinka = ocistiString($_POST["lozinka"]);
    }

    if(empty($_POST["zapamti"])) 
    {

    }
    else
    {
        $lozinka = ocistiString($_POST["lozinka"]);
    }

    if($greske != "")
    {
        return;
    }



}
else
{
    $korisnik = "";
    if(isset($_COOKIE["korisnik"]))
    {
        $korisnik = $_COOKIE["korisnik"];
    }
}
?>

<html>
    
</html>