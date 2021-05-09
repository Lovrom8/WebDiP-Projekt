<?php
require_once 'baza.php';

class Kategorija 
{
    static function dohvatiSve() {
        $baza = new Baza();
        $kategorije = array();
        $upit = "SELECT * FROM Kategorija";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $kategorije[] = $red;
        }
        return $kategorije;
    }

    static function dohvatiSModeratorima($idKat) {
        $baza = new Baza();
        $upit = "SELECT MK.ID_kategorija, MK.ID_moderator, M.Ime, M.Prezime, M.Korisnicko_ime, Kat.Naziv_kategorije FROM KategorijaModerator MK 
                        JOIN Korisnik M ON M.ID_korisnik = MK.ID_moderator
                        JOIN Kategorija Kat ON Kat.ID_kategorija = MK.ID_kategorija
                        WHERE MK.ID_kategorija = '$idKat'";
        
        $kategorije = array();

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $kategorije[] = $red;
        }

        return $kategorije;
    }

    static function dodaj($naziv) {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("INSERT INTO Kategorija (Naziv_kategorije) VALUES (?)");
        $upit->bind_param("s", $naziv);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function osvjezi($id, $naziv) {
        $baza = new Baza();
        $upit = "UPDATE Kategorija SET Naziv = '$naziv' WHERE ID_kategorija = '$id'";

        return $baza->provedi($upit);
    }

    static function obrisi($id) {
        $baza = new Baza();
        $upit = "DELETE FROM Kategorija WHERE ID_kategorija = '$id'";

        return $baza->provedi($upit);
    }

    static function dodijeliModeratora($idKat, $idMod) {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("INSERT INTO KategorijaModerator (ID_kategorija, ID_moderator) VALUES (?, ?)");
        $upit->bind_param("ii", $idKat, $idMod);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }       

    static function ukloniModeratora($idKat, $idMod) {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("DELETE FROM KategorijaModerator WHERE ID_kategorija = ? AND ID_moderator = ?");
        $upit->bind_param("ii", $idKat, $idMod);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }
}

?>