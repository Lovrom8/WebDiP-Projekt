<?php

require_once 'base/smarty.base.php';
require_once 'base/util.php';
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/kategorija.php';
require_once 'base/dnevnik.php';

if(!Sesija::provjeriSesiju() || Sesija::tipKorisnika() != Korisnici::Administrator){
   header("Location: index.php");
   die();
}

$greske = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naziv = '';
    
    if(empty($_POST["kategorija"]))
        $greske .= "Niste unijeli naziv kategorije.<br>";
    else
        $naziv = ocistiString($_POST["kategorija"]);

    if(empty($greske)) {
        if(Kategorija::dodaj($naziv)){
            Dnevnik::dodajZapis(Akcije::DodavanjeKategorije, $naziv, Sesija::dohvatiSesiju());

            header("refresh:5;kategorije.php"); 
        }
        else 
            $greske .= 'Neuspješno dodavanje nove kategorije.';
    }
}

$smarty->display('kategorijaDodaj.tpl');

?>