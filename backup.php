<?php

require_once './base/dnevnik.php';
require_once './base/sesija.php';
require_once './base/korisnici.php';
require_once './base/smarty.base.php';
require_once './base/backup.php';

if (!(Sesija::provjeriSesiju()) || Sesija::tipKorisnika() != Korisnici::Administrator)
{
    header("Location: index.php");
    die();
}

Dnevnik::dodajZapis(Akcije::Posjeta, "backup.php", Sesija::provjeriSesiju());

$skripte = array();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['skripta'])){
        Backup::osvjezi($_POST['skripta']);
    }
}
else
{
    $skripteLista = array_diff(scandir('./backup'), array('.', '..'));
    foreach ($skripteLista as $skripta) {
        $skripte[$skripta] = $skripta; 
    }    
    
    if (isset($_GET['op']))
    {
        $skriptaDokumenti = Backup::dohvatiZaTablicu('dokument');
        $skriptaDionice = Backup::dohvatiZaTablicu('dionica');

        Backup::spremi($skriptaDokumenti . '' . $skriptaDionice);

        header("Location: backup.php");
    }
}

$smarty->assign('skripte', $skripte);
$smarty->display('backup.tpl');
