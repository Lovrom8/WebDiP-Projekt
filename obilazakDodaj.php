<?php
include_once 'base/baza.php';
include_once 'base/util.php';
include_once 'base/korisnici.php';
include_once 'base/sesija.php';
require_once 'base/smarty.base.php';
include_once 'base/obilazak.php';

if(!Sesija::provjeriSesiju() || Sesija::tipKorisnika() == Korisnici::Neregistiran) {
    header("Location: index.php");
    die();
}

$datum = dohvatiTrenutoVrijeme();

if(isset($_GET['idDionice'])) {
    $idDionica = $_GET['idDionice'];
    Obilazak::evidentiraj(Sesija::dohvatiSesiju(), $idDionica, $datum);
}



?>