<?php
include_once 'baza.php';
include_once 'grad.php';

class Dionica {
    static function dodaj($oznaka, $polaziste, $odrediste, $idKategorija, $brojKilometara, $otvorena) 
    {
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

    static function uredi($idDionica, $oznaka, $polaziste, $odrediste, $idKategorija, $brojKilometara, $otvorena) 
    {        
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $idPolaziste = Grad::dohvatiId($polaziste);
        $idOdrediste = Grad::dohvatiId($odrediste);

        if($idPolaziste == -1 || $idOdrediste == -1)
            return false;

        $upit = $veza->prepare("UPDATE Dionica SET Oznaka = ?, Broj_kilometara = ?, Otvorena = ?, ID_grada_polazište = ?, ID_grada_odredište = ?, ID_kategorija = ? WHERE ID_dionica = ?");
        $upit->bind_param("siiiiii", $oznaka, $brojKilometara, $otvorena, $idPolaziste, $idOdrediste, $idKategorija, $idDionica);
        $upit->execute();
            
        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function dohvatiNazive() {
        $baza = new Baza();
        $dionice = array();
        $upit = "";

        $upit = "SELECT ID_dionica, Oznaka FROM Dionica";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_array())
            $dionice[$red['ID_dionica']] = $red['Oznaka'];
        
        return $dionice;
    }

    static function dohvatiSve($sortStupac='', $paginacija='', $trenutnaStranica='', $filteri='') {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();
        $dionice = array();
        $args = array();

        $upitSql = "SELECT D.*, O.Naziv AS Odredište, P.Naziv AS Polazište, K.Naziv_kategorije FROM Dionica D
                 JOIN Grad O ON O.ID_grada = D.ID_grada_odredište
                 JOIN Grad P ON P.ID_grada = D.ID_grada_polazište
                 JOIN Kategorija K ON K.ID_kategorija = D.ID_kategorija";

        $upitFilteri = "";
        $upitArgs = "";
        if(!empty($filteri['Polazište'])){
            $polaziste = "%".$filteri['Polazište']."%";
            $upitFilteri .= " WHERE P.Naziv LIKE ?";
            
            $args[] = $polaziste;
            $upitArgs .= "s";
        }

        if(!empty($filteri['Odredište'])){
            $odrediste = "%".$filteri['Odredište']."%";

            if(!empty($filteri['Polazište']))
                $upitFilteri .= " AND O.Naziv LIKE ?";
            else
                $upitFilteri .= " WHERE O.Naziv LIKE ?";

            $args[] = $odrediste;
            $upitArgs .= "s";
        }

        $upitSql .= $upitFilteri;

        $ukupnoStranica = 1;
        if($sortStupac)
            $upitSql .= ' ORDER BY '.$sortStupac;

        if($paginacija){
            $upitBroj = $veza->prepare("SELECT COUNT(D.ID_dionica) FROM Dionica D JOIN Grad O ON O.ID_grada = D.ID_grada_odredište JOIN Grad P ON P.ID_grada = D.ID_grada_polazište".$upitFilteri);
            if($args) $upitBroj->bind_param($upitArgs, ...$args);
            $upitBroj->execute();

            $brRedova = $upitBroj->get_result()->fetch_row();
            $ukupnoStranica = ceil($brRedova[0]/$paginacija);
            $trenutnaPozicija = (($trenutnaStranica-1) * $paginacija);
    
            $upitSql .= ' LIMIT '.$trenutnaPozicija.', '.$paginacija;
        }
    
        $upit = $veza->prepare($upitSql);
        if(count($args)) $upit->bind_param($upitArgs, ...$args);
        $upit->execute();

        $rezultat = $upit->get_result();
        while($red=$rezultat->fetch_assoc())
            $dionice[] = $red;

        $ret = array(
            'podaci' => $dionice,
            'brojStranica' => $ukupnoStranica
        );
    
        return $ret;
    }

    static function dohvatiSveMod($sortStupac='', $paginacija='', $trenutnaStranica='', $filteri='') {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();
        $dionice = array();
        $args = array();

        $upitSql = "SELECT D.*, O.Naziv AS Odredište, P.Naziv AS Polazište, K.Naziv_kategorije FROM Dionica D
                 JOIN Grad O ON O.ID_grada = D.ID_grada_odredište
                 JOIN Grad P ON P.ID_grada = D.ID_grada_polazište
                 JOIN Kategorija K ON K.ID_kategorija = D.ID_kategorija";
    
        $upitFilteri = "";
        $upitArgs = "";

        $idMod = -1;
        if(Sesija::tipKorisnika() == Korisnici::Moderator) {
            $idMod = Sesija::provjeriSesiju();

            $upitArgs .= "i";
            $upitFilteri .= " JOIN KategorijaModerator KM ON KM.ID_kategorija = K.ID_kategorija WHERE KM.ID_moderator = ?";
            $args[] = $idMod;
        }
        
        if(!empty($filteri['Polazište'])){
            $polaziste = "%".$filteri['Polazište']."%";

            if($idMod == -1)
                $upitFilteri .= " WHERE P.Naziv LIKE ?";
            else
                $upitFilteri .= " AND P.Naziv LIKE ?";

            $args[] = $polaziste;
            $upitArgs .= "s";
        }

        if(!empty($filteri['Odredište'])){
            $odrediste = "%".$filteri['Odredište']."%";

            if(!empty($filteri['Polazište']) || $idMod != -1)
                $upitFilteri .= " AND O.Naziv LIKE ?";
            else
                $upitFilteri .= " WHERE O.Naziv LIKE ?";

            $args[] = $odrediste;
            $upitArgs .= "s";
        }

        $upitSql .= $upitFilteri;
        $ukupnoStranica = 1;
        if($sortStupac)
            $upitSql .= ' ORDER BY '.$sortStupac;

        if($paginacija){
            $upitBroj = $veza->prepare("SELECT COUNT(D.ID_dionica) FROM Dionica D JOIN Grad O ON O.ID_grada = D.ID_grada_odredište JOIN Grad P ON P.ID_grada = D.ID_grada_polazište JOIN Kategorija K ON K.ID_kategorija = D.ID_kategorija".$upitFilteri);
            if($args) $upitBroj->bind_param($upitArgs, ...$args);
            $upitBroj->execute();

            $brRedova = $upitBroj->get_result()->fetch_row();
            $ukupnoStranica = ceil($brRedova[0]/$paginacija);
            $trenutnaPozicija = (($trenutnaStranica-1) * $paginacija);
    
            $upitSql .= ' LIMIT '.$trenutnaPozicija.', '.$paginacija;
        }
    
        $upit = $veza->prepare($upitSql);
        if(count($args)) $upit->bind_param($upitArgs, ...$args);
        $upit->execute();

        $rezultat = $upit->get_result();
        while($red=$rezultat->fetch_assoc())
            $dionice[] = $red;

        $ret = array(
            'podaci' => $dionice,
            'brojStranica' => $ukupnoStranica
        );
    
        return $ret;
    }

    static function dohvatiZaId($idDionica) {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("SELECT Oznaka, Otvorena, Broj_kilometara, ID_grada_polazište, ID_grada_odredište, ID_kategorija, O.Naziv AS Odrediste, P.Naziv AS Polaziste 
                                FROM Dionica D
                                JOIN Grad O ON O.ID_grada = D.ID_grada_odredište
                                JOIN Grad P ON P.ID_grada = D.ID_grada_polazište
                                WHERE ID_dionica=?");
        $upit->bind_param("i", $idDionica); 
        $upit->execute();
        
        $rezultat = $upit->get_result()->fetch_assoc();
        
        $upit->close();

        return $rezultat;
    }

    static function promjeniStatus($idDionica, $otvoreno) 
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();
    
        $upit = $veza->prepare("UPDATE Dionica SET Otvorena = ? WHERE ID_dionica = ?");
        $upit->bind_param("ii", $otvoreno, $idDionica);
        $upit->execute();
                
        $uspjesno = $upit->affected_rows == 1;
    
        $upit->close();
    
        return $uspjesno;
    }
}

?>