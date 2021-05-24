<?php
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
include_once 'base/baza.php';
include_once 'base/util.php';
include_once 'base/sesija.php';
require_once 'base/smarty.base.php';
include_once 'base/dionica.php';

Sesija::provjeriSesiju();
$poruke = '';

$smarty->assign('poruke', $poruke);
$smarty->display('dionice.tpl');
?>