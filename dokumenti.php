<?php
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
include_once 'base/baza.php';
include_once 'base/util.php';
include_once 'base/sesija.php';
require_once 'base/smarty.base.php';
include_once 'base/dokument.php';

if(!Sesija::provjeriSesiju() || Sesija::tipKorisnika() == Korisnici::Neregistiran){
    header("Location: index.php");
    die();
}

$poruke = "";

if($_SERVER["REQUEST_METHOD"]== "GET") {
    if (isset($_GET['idDokumenta']) && isset($_GET['status'])) {
        if(Sesija::tipKorisnika() >= Korisnici::Moderator){
            header("Location: index.php");
            die();
        }    

        $idDok = $_GET['idDokumenta'];
        $status = $_GET['status'];

        if($status != StatusDokumeta::Odbijen && $status != StatusDokumeta::Potvrden) {
            $poruke .= 'Neispravan status dokumenta';
        }
        else { 
            if(Dokument::promjeniStatus($idDok, $status)) {
                if($status == StatusDokumeta::Potvrden) {
                    $poruke .= 'Dokument uspješno potvrđen!';
                } elseif ($status == StatusDokumeta::Odbijen) {
                    $poruke .= 'Dokument uspješno odbijen!';
                }
            } 
            else 
                $poruke .= "Neuspješna promjena statusa dokumenta!";
        }
    }
}

$smarty->assign('poruke', $poruke );
$smarty->assign('svi', Sesija::tipKorisnika() > Korisnici::Prometnik);
$smarty->display('dokumenti.tpl');
?>