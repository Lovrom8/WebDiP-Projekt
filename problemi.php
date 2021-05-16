<?php
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/smarty.base.php';
require_once 'base/dionica.php';
require_once 'base/util.php';

if(!Sesija::provjeriSesiju() || Sesija::tipKorisnika() < Korisnici::Moderator){
    header("Location: index.php");
    die();
}

$poruke = '';
$greske = '';
$id = '';
$status = '';

if($_SERVER["REQUEST_METHOD"] == "GET") 
{
    if(isset($_GET["id"])){
        $id = ocistiString($_GET["id"]);

        if(!isset($_GET["status"])) 
            $greske .= "Niste unijeli status dionice.</br>";
        else
            $status = ocistiString($_GET["status"]);

        if(empty($greske)) {
            if(Dionica::promjeniStatus($id, $status)) {
                $poruke .= 'Uspješno promjenjen status dionice!';
            }else{
                $greske .= 'Neuspješna promjena statusa dionice!';
            }
        }
    }
}

$smarty->assign('greske', $greske);
$smarty->assign('poruke', $poruke);
$smarty->display('problemi.tpl');
?>