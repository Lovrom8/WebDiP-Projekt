<?php
require_once 'base/util.php';
require_once 'base/smarty.base.php';
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/kategorija.php';

$greske = '';
$uspjeh = '';

if(!(Sesija::provjeriSesiju()) || Sesija::tipKorisnika() != Korisnici::Administrator){
    header('Location: index.php');
    die();
}

if(empty($_GET['idMod'])) 
    $greske .= 'Niste unijeli moderatora<br>';
else
    $mod = ocistiString($_GET['idMod']);

if(empty($_GET['idKat']))
    $greske .= 'Niste unijeli kategoriju<br>';
else
    $kategorija = ocistiString($_GET['idKat']);

if(empty($greske)) {
    if(Kategorija::ukloniModeratora($kategorija, $mod)) {
        $uspjeh = 'Maknut je moderator za odabranu kategoriju! Preusmjeravamo natrag...';
        Dnevnik::dodajZapis(Akcije::BrisanjeModeratora, '', Sesija::provjeriSesiju());
    } 
    else
        $greske .= 'Nismo uspjeli ukloniti moderatora! Preusmjeravamo natrag...';
}

$smarty->assign('greske', $greske);
$smarty->assign('uspjeh', $uspjeh);
$smarty->display('prazno.tpl');

header('Refresh:3; Url=moderatoriKategorije.php?id='.$kategorija);
?>