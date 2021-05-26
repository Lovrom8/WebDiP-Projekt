<?php
include_once 'baza.php';

class Problem
{
    static function dohvatiSveZaDionicu($idDionica)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $problemi = array();
        $upit = "SELECT FROM Prijava WHERE ID_dionica = ?";

        $upit = $veza->prepare($upit);
        $upit->bind_param("i", $idDionica);
        $upit->execute();

        $rezultat = $upit->get_result();
        while ($red = $rezultat->fetch_assoc())
            $problemi[] = $red;

        return $problemi;
    }

    static function dohvatiSveProbleme($sortStupac, $paginacija, $trenutnaStranica, $filteri)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();
        $problemi = array();
        $upit = "SELECT * FROM Prijava P JOIN Dionica D ON P.ID_dionica = D.ID_dionica";
        $upitArgs = "";
        $args = array();

        $upitFilteri = "";
        if(!empty($filteri['Opis'])){
            $opis = "%".$filteri['Opis']."%";
            $upitFilteri .= " WHERE Opis LIKE ? ";

            $args[] = $opis;
            $upitArgs = "s";
        }

        if(!empty($filteri['Dionica'])) {
            $dionica = "%".$filteri['Dionica']."%";
            if(!empty($filteri['Opis']))
                $upitFilteri .= " AND Oznaka LIKE ?";
            else
                $upitFilteri .= " WHERE Oznaka LIKE ?";

            $args[] = $dionica;
            $upitArgs = "s";
        }

        $upit .= $upitFilteri;

        $ukupnoStranica = 1;
        if($sortStupac)
            $upit .= ' ORDER BY '.$sortStupac;

        if($paginacija){
            $upitBroj = $veza->prepare("SELECT COUNT(P.ID_prijava) FROM Prijava P JOIN Dionica D ON P.ID_dionica = D.ID_dionica".$upitFilteri);
            if($args) $upitBroj->bind_param($upitArgs, ...$args);
            $upitBroj->execute();

            $brRedova = $upitBroj->get_result()->fetch_row();

            $ukupnoStranica = ceil($brRedova[0]/$paginacija);
            $trenutnaPozicija = (($trenutnaStranica-1) * $paginacija);
 
            $upit .= ' LIMIT '.$trenutnaPozicija.', '.$paginacija;
        }

        $upit = $veza->prepare($upit);
        if(count($args)) $upit->bind_param($upitArgs, ...$args);
        $upit->execute();

        $rezultat = $upit->get_result();
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
        $veza = $baza->dohvatiVezu();
        $args = array();
        $upitArgs = "";

        $upit = "SELECT COUNT(*) AS BrojProblema, Naziv_kategorije FROM Prijava P 
                 JOIN Dionica D ON D.ID_dionica = P.ID_dionica
                 JOIN Kategorija K ON D.ID_kategorija = K.ID_kategorija 
                 WHERE Aktivna = 1";

        $upitFilteri = "";
        if(!empty($filteri['Kategorija'])){
            $kategorija = "%".$filteri['Kategorija']."%";
            $upitFilteri .= " AND Naziv_kategorije LIKE ?";

            $args[] = $kategorija;
            $upitArgs .= "s";
        }

        if(!empty($filteri['MinProblema'])){
            $minProblema = $filteri['MinProblema'];
            $upitFilteri .= " AND BrojProblema > ? ";

            $args[] = $minProblema;
            $upitArgs .= "i";
        }

        $upit .= ' GROUP BY Naziv_kategorije';
        $upit .= $upitFilteri;

        $ukupnoStranica = 1;
        if($sortStupac)
            $upit .= ' ORDER BY '.$sortStupac;

        if($paginacija){
            $upitBroj = $veza->prepare("SELECT COUNT(*) OVER() FROM Prijava P 
                                        JOIN Dionica D ON D.ID_dionica = P.ID_dionica
                                        JOIN Kategorija K ON D.ID_kategorija = K.ID_kategorija 
                                        WHERE Aktivna = 1".$upitFilteri." GROUP BY Naziv_kategorije");          
            if($args) $upitBroj->bind_param($upitArgs, ...$args);
            $upitBroj->execute();
            
            $brRedova = $upitBroj->get_result()->fetch_row();
            $ukupnoStranica = ceil($brRedova[0]/$paginacija);
            $trenutnaPozicija = (($trenutnaStranica-1) * $paginacija);
    
            $upit .= ' LIMIT '.$trenutnaPozicija.', '.$paginacija;
        }

        $upit = $veza->prepare($upit);
        if(count($args)) $upit->bind_param($upitArgs, ...$args);
        $upit->execute();

        $rezultat = $upit->get_result();
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
