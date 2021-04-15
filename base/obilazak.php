<?php
require_once 'baza.php';

class Obilazak {
    static function evidentiraj($idKorisnika, $idDionice, $datum)
    {
        $baza = new Baza();
        $upit = "INSERT INTO Obilazak (ID_korisnik, ID_dionica, Datum) VALUES ('$idKorisnika', '$idDionice', '$datum')";
        
        return $baza->provedi($upit);
    }

    static function dohvatiSve($idKorisnika)
    {
        $baza = new Baza();
        $upit = "SELECT Oznaka, Datum FROM Obilazak O JOIN Dionica D ON D.ID_dionica = O.ID_dionica WHERE O.ID_korisnik = '$idKorisnika'";

        $obilasci = array();
        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $obilasci[] = $red;
        }

        return $obilasci;
    }
}

?>