<?php
include_once 'base/baza.php';

class Dionica {
    static function dodaj($oznaka, $idPocetak, $idOdrediste, $idKategorija, $brojKilometara, $otvorena) 
    {
        $baza = new Baza();
        $upit = "INSERT INTO Dionica (Oznaka, Broj_kilometara, Otvorena, ID_grada_polazište, ID_grada_odredište, ID_kategorija) VALUES ('$oznaka', '$brojKilometara', '$otvorena', '$idPocetak', '$idOdrediste', '$idKategorija')";

        return $baza->provedi($upit);
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