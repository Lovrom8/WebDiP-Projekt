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

    static function dohvatiSveProbleme($sortStupac, $paginacija, $trenutnaStranica, $filteri)
    {
        $baza = new Baza();
        $problemi = array();
        $upit = "SELECT * FROM Prijava P JOIN Dionica D ON P.ID_dionica = D.ID_dionica";

        $upitFilteri = "";
        if(!empty($filteri['Opis'])){
            $opis = $filteri['Opis'];
            $upitFilteri .= " WHERE Opis LIKE '%$opis%' ";
        }

        if(!empty($filteri['Dionica'])) {
            $dionica = $filteri['Dionica'];
            if(!empty($filteri['Opis']))
                $upitFilteri .= " AND Oznaka LIKE '%$dionica%'";
            else
                $upitFilteri .= " WHERE Oznaka LIKE '%$dionica%' ";
        }

        $upit .= $upitFilteri;

        $ukupnoStranica = 1;
        if($sortStupac)
            $upit .= ' ORDER BY '.$sortStupac;

        if($paginacija){
            $brRedova = $baza->dohvati("SELECT COUNT(*) FROM Prijava")->fetch_row();
            $ukupnoStranica = ceil($brRedova[0]/$paginacija);
            $trenutnaPozicija = (($trenutnaStranica-1) * $paginacija);
 
            $upit .= ' LIMIT '.$trenutnaPozicija.', '.$paginacija;
        }

 
        $rezultat = $baza->dohvati($upit);
        while ($red = $rezultat->fetch_assoc())
            $problemi[] = $red;

        $ret = array(
            'podaci' => $problemi,
            'brojStranica' => $ukupnoStranica
        );
        
        return $ret;
    }

    static function dohvatiStatistiku($sortStupac, $paginacija, $trenutnaStranica, $filteri)
    {
        $baza = new Baza();
        $problemi = array();
        $upit = "SELECT COUNT(*) AS BrojProblema, Naziv_kategorije FROM Prijava P 
                 JOIN Dionica D ON D.ID_dionica = P.ID_dionica
                 JOIN Kategorija K ON D.ID_kategorija = K.ID_kategorija 
                 WHERE Aktivna = 1";

        $upitFilteri = "";
        if(!empty($filteri['Kategorija'])){
            $kategorija = $filteri['Kategorija'];
            $upitFilteri .= " AND Naziv_kategorije LIKE '%$kategorija%' ";
        }

        if(!empty($filteri['MinProblema'])){
            $minProblema = $filteri['MinProblema'];
            $upitFilteri .= " AND BrojProblema > $minProblema ";
        }

        $upit .= ' GROUP BY Naziv_kategorije';
        $upit .= $upitFilteri;

        $ukupnoStranica = 1;
        if($sortStupac)
            $upit .= ' ORDER BY '.$sortStupac;

        if($paginacija){
            $brRedova = $baza->dohvati("SELECT COUNT(*) FROM Prijava P JOIN Dionica D ON D.ID_dionica = P.ID_dionica 
                                        JOIN Kategorija K ON D.ID_kategorija = K.ID_kategorija GROUP BY Naziv_kategorije")->fetch_row();
            $ukupnoStranica = ceil($brRedova[0]/$paginacija);
            $trenutnaPozicija = (($trenutnaStranica-1) * $paginacija);
    
            $upit .= ' LIMIT '.$trenutnaPozicija.', '.$paginacija;
        }

        $rezultat = $baza->dohvati($upit);
        while ($red = $rezultat->fetch_assoc())
            $problemi[] = $red;
    
        $ret = array(
            'podaci' => $problemi,
            'brojStranica' => $ukupnoStranica
        );
        
        return $ret;
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
