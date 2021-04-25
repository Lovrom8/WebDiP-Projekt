<?php
require_once 'base/smarty.base.php';
require_once 'base/sesija.php';
require_once 'base/korisnici.php';

$smarty->assign('svi', Sesija::tipKorisnika() >= 1);
$smarty->display('index.tpl');
?>

