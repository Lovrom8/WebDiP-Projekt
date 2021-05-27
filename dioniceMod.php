<?php
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
include_once 'base/baza.php';
include_once 'base/util.php';
include_once 'base/sesija.php';
require_once 'base/smarty.base.php';
include_once 'base/dionica.php';

if(!Sesija::provjeriSesiju() || Sesija::tipKorisnika() < Korisnici::Moderator){
    header("Location: index.php");
    die();
}

$poruke = '';

$smarty->assign('poruke', $poruke);
$smarty->display('dioniceMod.tpl');
?>