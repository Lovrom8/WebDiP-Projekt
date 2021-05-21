<?php
require_once 'base/util.php';
require_once 'base/sesija.php';
require_once 'base/kategorija.php';
require_once 'base/dnevnik.php';
require_once 'base/smarty.base.php';

$greske = '';
$uspjeh = '';
$mod = '';

if(!(Sesija::provjeriSesiju()) || Sesija::tipKorisnika() != Korisnici::Administrator){
    header('Location: index.php');
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(empty($_POST['idMod'])) 
        $greske .= 'Niste unijeli moderatora<br>';
    else
        $mod = ocistiString($_POST['idMod']);

    if(empty($_POST['idKat']))
        $greske .= 'Niste unijeli kategoriju<br>';
    else
        $kategorija = ocistiString($_POST['idKat']);

    if(empty($greske)) {
        if(Kategorija::dodijeliModeratora($kategorija, $mod)) {
            $uspjeh = 'Dodan je moderator za odabranu kategoriju! Preusmjeravamo natrag...';
            Dnevnik::dodajZapis(Akcije::DodavanjeModeratora, '', Sesija::dohvatiSesiju());
        } 
        else
            $greske .= 'Nismo uspjeli ukloniti moderatora! Preusmjeravamo natrag...';
    }
}

$smarty->assign('greske', $greske);
$smarty->assign('uspjeh', $uspjeh);
$smarty->display('prazno.tpl');

header('Refresh:3; Url=moderatoriKategorije.php?id='.$kategorija);
?>