<?php
include_once 'baza.php';

class Problem {
    static function dohvatiSveZaDionicu($idDionica)
    {
        $baza = new Baza();
        $problemi = array();
        $upit = "SELECT FROM Prijava WHERE ID_dionica = '$idDionica'";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $problemi[] = $red;
        }
        return $problemi;
    }
}

?>