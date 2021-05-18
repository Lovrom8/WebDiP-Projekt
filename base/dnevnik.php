<?php
require_once 'korisnici.php';
require_once 'util.php';

class Dnevnik {
    static function dodajZapis($akcijaId, $opis, $korisnikId)
    {
        $baza = new Baza();
        $datum = dohvatiTrenutoVrijeme();
        $upit = "INSERT INTO Dnevnik (ID_dnevnik, Opis, Datum_vrijeme, ID_korisnik, ID_tip_akcije) VALUES(DEFAULT, '$opis', '$datum', '$korisnikId', '$akcijaId')";
        $baza->provedi($upit);
    }

    static function dohvatiSveZapise()
    {
        $baza = new Baza();
        $zapisi = array();
        $upit = "SELECT * FROM Dnevnik D JOIN TipAkcije T ON T.ID_tip_akcije = D.ID_tip_akcije";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $zapisi[] = $red;
        }

        return $zapisi;
    }

    static function dohvatiStatistikuKoristenja() {
        $baza = new Baza();
        $zapisi = array();
        $upit = "SELECT Opis, Datum_vrijeme, Korisnicko_ime FROM Dnevnik D
                 JOIN Korisnik K ON K.ID_korisnik = D.ID_korisnik
                 WHERE ID_tip_akcije = ".Akcije::Posjeta;

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $zapisi[] = $red;
        }
        
        return $zapisi;
    }
}

?>