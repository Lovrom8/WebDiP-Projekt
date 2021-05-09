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

Dnevnik::dodajZapis(Akcije::Posjeta, "kategorije.php", Sesija::dohvatiSesiju());

$smarty->display('kategorije.tpl');

?>