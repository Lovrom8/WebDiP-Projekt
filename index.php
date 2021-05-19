<?php
require_once 'base/smarty.base.php';
require_once 'base/sesija.php';
require_once 'base/korisnici.php';

Sesija::dohvatiSesiju();

$smarty->display('index.tpl');
?>

