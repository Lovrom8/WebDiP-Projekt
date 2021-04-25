<?php

class Dnevnik {
    static function dodajZapis($akcijaId, $opis, $korisnikId)
    {
        $baza = new Baza();
        $datum = date("Y-m-d H:i:s");
        $upit = "INSERT INTO Dnevnik (ID_dnevnik, Opis, Datum_vrijeme, ID_korisnik, ID_tip_akcije) VALUES(DEFAULT, '$opis', '$datum', '$korisnikId', '$akcijaId')";
        $baza->provedi($upit);
    }

    static function dohvatiSveZapise()
    {
        $baza = new Baza();
        $upit = "SELECT * FROM Dnevnik D JOIN TipAkcije T ON T.ID_tip_akcije = D.ID_tip_akcije";
        return $baza->dohvati($upit);
    }
}

?>