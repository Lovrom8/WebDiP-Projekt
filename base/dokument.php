<?php
require_once 'baza.php';

class Dokument {
    static function dodajNovi($naslov, $status, $idVrste, $idDionice, $poveznica)
    {
        $baza = new Baza();
        $upit = "INSERT INTO (Naslov, Status, ID_vrste, ID_dionica, Poveznica) VALUES ('$naslov', '$status', '$idVrste', '$idDionice', '$poveznica')";
        
        return $baza->provedi($upit);
    }

    static function promjeniStatus($idDokument, $status)
    {
        $baza = new Baza();
        $upit = "UPDATE Dokument SET Status = '$status' WHERE ID_dokument = '$idDokument'";

        return $baza->provedi($upit);
    }
    
    static function dohvatiDokumente($samoPotvrdene)
    {
        $baza = new Baza();
        $dokumenti = array();
        $upit = "";

        if($samoPotvrdene)
            $upit = "SELECT * FROM Dokument WHERE Status=1";
        else
            $upit = "SELECT * FROM Dokument";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $dokumenti[] = $red;
        }
        return $dokumenti;
    }

    static function dohvatiVrsteDokumenata()
    {
        $baza = new Baza();
        $vrste = array();
        $upit = "SELECT * FROM VrstaDokumenta";
        $rezultat = $baza->dohvati($upit);

        while($red=$rezultat->fetch_assoc()){
            $vrste[] = $red;
        }
        return $vrste;
    }
}

?>