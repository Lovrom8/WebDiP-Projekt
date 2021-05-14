<?php
include_once 'baza.php';

class Problem
{
    static function dohvatiSveZaDionicu($idDionica)
    {
        $baza = new Baza();
        $problemi = array();
        $upit = "SELECT FROM Prijava WHERE ID_dionica = '$idDionica'";

        $rezultat = $baza->dohvati($upit);
        while ($red = $rezultat->fetch_assoc())
        {
            $problemi[] = $red;
        }
        return $problemi;
    }

    static function dohvatiSveProbleme()
    {
        $baza = new Baza();
        $problemi = array();
        $upit = "SELECT * FROM Prijava P JOIN Dionica D ON P.ID_dionica = D.ID_dionica";

        $rezultat = $baza->dohvati($upit);
        while ($red = $rezultat->fetch_assoc())
        {
            $problemi[] = $red;
        }
        return $problemi;
    }

    static function dohvatiStatistiku()
    {
        $baza = new Baza();
        $problemi = array();
        $upit = "SELECT COUNT(*) AS BrojProblema, Naziv_kategorije FROM Prijava P 
                 JOIN Dionica D ON D.ID_dionica = P.ID_dionica
                 JOIN Kategorija K ON D.ID_kategorija = K.ID_kategorija 
                 WHERE Aktivna = 1 GROUP BY Naziv_kategorije";

        $rezultat = $baza->dohvati($upit);
        while ($red = $rezultat->fetch_assoc())
        {
            $problemi[] = $red;
        }
        return $problemi;
    }

    static function dohvatiZaId($idProblem)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("SELECT P.*, D.Oznaka FROM Prijava P JOIN Dionica D WHERE P.ID_prijava=?");
        $upit->bind_param("i", $idProblem);
        $upit->execute();

        $rezultat = $upit->get_result()->fetch_assoc();

        $upit->close();

        return $rezultat;
    }

    static function dodaj($opis, $datum, $vrijeme, $idDionica, $aktivan)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("INSERT INTO Prijava (Opis, Datum, Vrijeme, ID_dionica, Aktivna) VALUES (?, ?, ?, ?, ?)");
        $upit->bind_param("sssii", $opis, $datum, $vrijeme, $idDionica, $aktivan);
        $upit->execute();
            
        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function uredi($id, $opis, $datum, $vrijeme, $idDionica, $aktivan)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("UPDATE Prijava SET Opis = ?, Datum = ?, Vrijeme = ?, ID_dionica = ?, Aktivna = ? WHERE ID_prijava = ?");
        $upit->bind_param("sssiii", $opis, $datum, $vrijeme, $idDionica, $aktivan, $id);
        $upit->execute();
            
        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }
}
