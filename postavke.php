<?php
require_once 'base/smarty.base.php';
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/util.php';
require_once 'base/dnevnik.php';

$settings = json_decode( file_get_contents('base/postavke.json'));

if(!Sesija::provjeriSesiju() || Sesija::tipKorisnika() != Korisnici::Administrator){
    header("Location: index.php");
    die();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $settings->{'trajanjeKolacica'} = ocistiString($_POST["trajanjeKolacica"]);
    $settings->{'brojElPoStranici'} = ocistiString($_POST["brEl"]);
    $settings->{'pomakVremena'} = ocistiString($_POST["pomakVremena"]);
    $settings->{'datumUvjeta'} = ocistiString($_POST["datumUvjeta"]);
    $settings->{'maxNeuspjesnihPrijava'} = ocistiString($_POST["maxNeuspjesnihPrijava"]);
    $settings->{'maxVelicinaDokumenta'} = ocistiString($_POST["maxVelicinaDokumenta"]);

    file_put_contents('base/postavke.json', json_encode($settings) );
} else {
    Dnevnik::dodajZapis(Akcije::Posjeta, "Postavke", Sesija::provjeriSesiju());
}

$smarty->assign('trajanjeKolacica', $settings->{'trajanjeKolacica'});
$smarty->assign('brojElPoStranici', $settings->{'brojElPoStranici'});
$smarty->assign('pomakVremena', $settings->{'pomakVremena'});
$smarty->assign('datumUvjeta', $settings->{'datumUvjeta'});
$smarty->assign('maxNeuspjesnihPrijava', $settings->{'maxNeuspjesnihPrijava'});
$smarty->assign('maxVelicinaDokumenta', $settings->{'maxVelicinaDokumenta'});

$smarty->display('postavke.tpl');
?>