<?php
require_once 'base/smarty.base.php';
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/util.php';

$settings = json_decode( file_get_contents('base/postavke.json'));

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $settings->{'trajanjeKolacica'} = ocistiString($_POST["trajanjeKolacica"]);
    $settings->{'brojElPoStranici'} = ocistiString($_POST["brEl"]);

    file_put_contents('base/postavke.json', json_encode($settings) );
} 

$smarty->assign('trajanjeKolacica', $settings->{'trajanjeKolacica'});
$smarty->assign('brojElPoStranici', $settings->{'brojElPoStranici'});
$smarty->display('postavke.tpl');
?>