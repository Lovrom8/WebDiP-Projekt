<?php

require_once 'base/smarty.base.php';
require_once 'base/util.php';

$idDionica = '';
$dionica = '';
$greske = '';

if($_SERVER["REQUEST_METHOD"] == "POST") {

} else {
    if(empty($_GET["id"])) 
        $greske .= "Niste unijeli ID dionice.</br>";
    else
        $idDionica = ocistiString($_GET["id"]);  

    if(empty($_GET["oznaka"])) 
        $greske .= "Niste unijeli oznaku dionice.</br>";
    else
        $dionica = ocistiString($_GET["oznaka"]);  
}

$smarty->assign('greske', $greske);
$smarty->assign('oznaka', $dionica);
$smarty->display('dokumentDodaj.tpl');
?>