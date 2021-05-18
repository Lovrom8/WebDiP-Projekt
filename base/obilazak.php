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

    static function dohvatiSve($idKorisnika, $sortStupac, $paginacija, $trenutnaStranica)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = "SELECT Oznaka, Datum, Broj_kilometara FROM Obilazak O JOIN Dionica D ON D.ID_dionica = O.ID_dionica WHERE O.ID_korisnik = ?";
        
        $ukupnoStranica = 1;
        if($sortStupac)
            $upit .= ' ORDER BY '.$sortStupac;

        if($paginacija){
            $brRedova = $baza->dohvati("SELECT COUNT(*) FROM Obilazak")->fetch_row();
            $ukupnoStranica = ceil($brRedova[0]/$paginacija);
            $trenutnaPozicija = (($trenutnaStranica-1) * $paginacija);
 
            $upit .= ' LIMIT '.$trenutnaPozicija.', '.$paginacija;
        }

        $upit = $veza->prepare($upit);
        $upit->bind_param("i", $idKorisnika); 
        $upit->execute();
        
        $rezultat = $upit->get_result();

        $obilasci = array();
        while($red=$rezultat->fetch_assoc()){
            $obilasci[] = $red;
        }

        $upit->close();

        $ret = array(
            'podaci' => $obilasci,
            'brojStranica' => $ukupnoStranica
        );

        return $ret;
    }
}

?>