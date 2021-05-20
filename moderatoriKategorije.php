<?php

include_once 'base/baza.php';
include_once 'base/util.php';
include_once 'base/korisnici.php';
include_once 'base/sesija.php';
require_once 'base/smarty.base.php';

$baza = new Baza();

if(!Sesija::provjeriSesiju() || Sesija::tipKorisnika() != Korisnici::Administrator){
    header("Location: index.php");
    die();
}

if(!isset($_GET['id'])) {
    echo 'Nije odabrana kategorija';
} else {
    $smarty->assign('idKat', $_GET['id']);
    $smarty->display('moderatoriKategorije.tpl');
}

?>