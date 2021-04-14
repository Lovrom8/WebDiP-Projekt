<?php
require_once 'baza.php';

class Grad {
    static function dodaj($naziv) {
        $baza = new Baza();
        $upit = "INSERT INTO Grad (Naziv) VALUES ('$naziv')";

        return $baza->provedi($upit);
    }

    static function dohvatiSve() {
        $baza = new Baza();
        $gradovi = array();
        $upit = "SELECT * FROM Grad";
        $rezultat = $baza->dohvati($upit);

        while($red=$rezultat->fetch_assoc()){
            $gradovi[] = $red;
        }
        return $gradovi;
    }
}

?>