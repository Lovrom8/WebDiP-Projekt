<?php
include_once 'baza.php';
include_once 'grad.php';

class Dionica {
    static function dodaj($oznaka, $polaziste, $odrediste, $idKategorija, $brojKilometara, $otvorena) 
    {
        echo $idKategorija;

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $idPolaziste = -1;
        $idOdrediste = -1;

        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $idPolaziste = Grad::dohvatiId($polaziste);
        $idOdrediste = Grad::dohvatiId($odrediste);

        if($idPolaziste == -1 || $idOdrediste == -1)
            return false;

        $upit = $veza->prepare("INSERT INTO Dionica (Oznaka, Broj_kilometara, Otvorena, ID_grada_polazište, ID_grada_odredište, ID_kategorija) VALUES (?, ?, ?, ?, ?, ?)");
        $upit->bind_param("ssssss", $oznaka, $brojKilometara, $otvorena, $idPolaziste, $idOdrediste, $idKategorija);
        $upit->execute();
            
        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function dohvatiSve() {
        $baza = new Baza();
        $dionice = array();
        $upit = "";

        $upit = "SELECT D.*, O.Naziv AS Odredište, P.Naziv AS Polazište, K.Naziv_kategorije FROM Dionica D
                 JOIN Grad O ON O.ID_grada = D.ID_grada_odredište
                 JOIN Grad P ON P.ID_grada = D.ID_grada_polazište
                 JOIN Kategorija K ON K.ID_kategorija = D.ID_kategorija";

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