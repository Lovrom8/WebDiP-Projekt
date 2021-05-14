<?php
require_once 'baza.php';

class Obilazak {
    static function evidentiraj($idKorisnika, $idDionice, $datum)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("INSERT INTO Obilazak (ID_korisnik, ID_dionica, Datum) VALUES (?, ?, ?)");
        $upit->bind_param("iis", $idKorisnika, $idDionice, $datum);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function dohvatiSve($idKorisnika)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare( "SELECT Oznaka, Datum, Broj_kilometara FROM Obilazak O JOIN Dionica D ON D.ID_dionica = O.ID_dionica WHERE O.ID_korisnik = ?");
        $upit->bind_param("i", $idKorisnika); 
        $upit->execute();
        
        $rezultat = $upit->get_result();

        $obilasci = array();
        while($red=$rezultat->fetch_assoc()){
            $obilasci[] = $red;
        }

        $upit->close();

        return $obilasci;
    }
}

?>