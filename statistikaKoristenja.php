<?php

require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/smarty.base.php';

if(Sesija::tipKorisnika() != Korisnici::Administrator) {
    header('index.php');
    die();
}

$smarty->display('statistikaKoristenja.tpl');

?>