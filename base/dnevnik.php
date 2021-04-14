<?php

class Dnevnik {
    private $baza = null;

    static function dodajZapis($opis, $akcija, $korisnik)
    {
        $baza = new Baza();
        $datum = date("Y-m-d H:i:s");
        $upit = "INSERT INTO dnevnik VALUES(DEFAULT, '$opis')";
        $baza->provedi($upit);
    }

    static function dohvatiSveZapise()
    {
        $baza = new Baza();

        
    }
}

?>