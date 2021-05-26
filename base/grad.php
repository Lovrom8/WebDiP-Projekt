<?php
require_once 'baza.php';

class Grad {
    static function dodaj($naziv) {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("INSERT INTO Grad (Naziv) VALUES (?)");
        $upit->bind_param("s", $naziv);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function dohvatiSve() {
        $baza = new Baza();
        $gradovi = array();
        $upit = "SELECT * FROM Grad";
        $rezultat = $baza->dohvati($upit);

        while($red=$rezultat->fetch_assoc())
            $gradovi[] = $red;
        
        return $gradovi;
    }

    static function dohvatiId($naziv) {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("SELECT ID_grada FROM Grad WHERE Naziv=?");
        $upit->bind_param("s", $naziv);
        $upit->execute();

        $result = $upit->get_result()->fetch_assoc();

        $idGrad = -1;
        if($result != null) {
           $idGrad = $result['ID_grada'];
        } else {
            $upit = $veza->prepare("INSERT INTO Grad (Naziv) VALUES (?)");
            $upit->bind_param("s", $naziv);
            $upit->execute();

            if($upit->affected_rows == 1)
                $idGrad = $upit->insert_id;
        }

        $upit->close();

        return $idGrad;
    }
}

?>