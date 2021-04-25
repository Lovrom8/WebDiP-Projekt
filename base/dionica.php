<?php
include_once 'baza.php';

class Dionica {
    static function dodaj($oznaka, $idPocetak, $idOdrediste, $idKategorija, $brojKilometara, $otvorena) 
    {
        $baza = new Baza();
        $upit = "INSERT INTO Dionica (Oznaka, Broj_kilometara, Otvorena, ID_grada_polazište, ID_grada_odredište, ID_kategorija) VALUES ('$oznaka', '$brojKilometara', '$otvorena', '$idPocetak', '$idOdrediste', '$idKategorija')";

        return $baza->provedi($upit);
    }

    static function dohvatiSve() {
        $baza = new Baza();
        $dionice = array();
        $upit = "";

        $upit = "SELECT D.*, O.Naziv AS Odredište, P.Naziv AS Polazište FROM Dionica D
                 JOIN Grad O ON O.ID_grada = D.ID_grada_odredište
                 JOIN Grad P ON P.ID_grada = D.ID_grada_polazište";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            $dionice[] = $red;
        }
        return $dionice;
    }

    static function promjeniStatus($idDionica, $otvoreno) 
    {
        $baza = new Baza();
        $upit = "";

        if($otvoreno)
            $upit = "UPDATE Dionica SET Otvorena = 1 WHERE ID_dionica = '$idDionica'";
        else 
            $upit = "UPDATE Dionica SET Otvorena = 0 WHERE ID_dionica = '$idDionica'";

        return $baza->provedi($upit);
    }
}

?>