<?php
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/smarty.base.php';
require_once 'base/dnevnik.php';
require_once 'base/obilazak.php';

if(!Sesija::provjeriSesiju()) {
    header("index.php");
    die();
}

Dnevnik::dodajZapis(Akcije::Posjeta, "obilasci.php", Sesija::provjeriSesiju());

$greske = '';
if(isset($_GET['id'])) {
    $idDionice = $_GET['id'];
    $datum = dohvatiTrenutoVrijeme();

    if(Obilazak::evidentiraj(Sesija::provjeriSesiju(), $idDionice, $datum)) {
        Dnevnik::dodajZapis(Akcije::EvidentiranjeObilaska, "", Sesija::provjeriSesiju());
    }
    else
        $greske .= 'Neuspješno evidentiranje obilaska';
} else {
    Dnevnik::dodajZapis(Akcije::Posjeta, "obilasci.php", Sesija::provjeriSesiju());
}

$smarty->assign('greske', $greske);
$smarty->display('obilasci.tpl');
?>