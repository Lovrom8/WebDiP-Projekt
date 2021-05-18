<?php
require_once 'base/util.php';
require_once 'base/korisnici.php';
require_once 'base/smarty.base.php';

$greske = "";
$ime = "";
$prezime = "";
$korIme = "";
$lozinka = "";

if($_SERVER["REQUEST_METHOD"]== "POST") {
    
    if(empty($_POST["fname"])) 
        $greske .= "Ime nije uneseno.</br>";
    else 
        $ime = ocistiString($_POST["fname"]);
    
    if(empty($_POST["lname"])) 
        $greske .= "Prezime nije uneseno.</br>";
    else 
        $prezime = ocistiString($_POST["lname"]);

    if(empty($_POST["email"])) 
        $greske .= "Email nije upisan";
    else {
        $email = ocistiString($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $greske .= "Email nije ispravnog oblika.<br>";
        }else{
            if(Korisnik::ProvjeriEmail($email)){
                $greske .= "Email je zauzet. </br>";
            }
        }
    }

    if(empty($_POST["username"])) 
        $greske .= "Korisničko ime nije upisano";
    else {
        $korIme = ocistiString($_POST["username"]);

        if(Korisnik::ProvjeriUsername($korIme)){
                $greske .= "Korisničko ime je je zauzeto. </br>";
        }
    }

    if(empty($_POST["pwd"]))
        $greske .= "Lozinka nije unesena. <br>";
    else
        $lozinka = ocistiString($_POST["pwd"]);

    if($greske != "") {
        $token = md5(rand(0,1000));
        if(Korisnik::DodajKorisnika($korIme, $lozinka, $email, $ime, $prezime, $token)) {
            Korisnik::PosaljiAktivacijskiMail($token, $email);
            echo 'proslo';
        }
        else
            echo 'fail';
        
        
    }else{
        echo $greske;
    }
} else {
}

$smarty->display('registracija.tpl');

?>