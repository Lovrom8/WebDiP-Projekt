<?php
include_once 'baza.php';

class Problem {
    static function dohvatiSveZaDionicu($idDionica) {
        $baza = new Baza();
        $problemi = array();
        $upit = "SELECT FROM Prijava WHERE ID_dionica = '$idDionica'";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $problemi[] = $red;
        }
        return $problemi;
    }

    static function dohvatiSveProbleme() {
        $baza = new Baza();
        $problemi = array();
        $upit = "SELECT * FROM Prijava P JOIN Dionica D ON P.ID_dionica = D.ID_dionica";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $problemi[] = $red;
        }
        return $problemi;
    }

    static function dohvatiStatistiku() {
        $baza = new Baza();
        $problemi = array();
        $upit = "SELECT COUNT(*) AS BrojProblema, Naziv_kategorije FROM Prijava P 
                 JOIN Dionica D ON D.ID_dionica = P.ID_dionica
                 JOIN Kategorija K ON D.ID_kategorija = K.ID_kategorija 
                 WHERE Aktivna = 1 GROUP BY Naziv_kategorije";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $problemi[] = $red;
        }
        return $problemi;
    }
}

?>