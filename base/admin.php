<?php
require_once 'base/baza.php';

class Admin {
   static function odblokirajKorisnika($idKor) {
      $baza = new Baza();
      $upit = "UPDATE Korisnik SET Status = 1 WHERE ID_korisnik = '$idKor'";
      
      $baza->provedi($upit);
   }  
}

?>