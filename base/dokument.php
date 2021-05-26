<?php
require_once 'baza.php';

abstract class StatusDokumeta {
    const Nepotvrden = 0;
    const Potvrden = 1;
    const Odbijen = 2;
}

class Dokument {
    static function dodajNovi($naslov, $opis, $idVrste, $idDionice, $poveznica)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("INSERT INTO Dokument (Naslov, Opis, ID_vrste, ID_dionica, Poveznica) VALUES (?, ?, ?, ?, ?)");
        $upit->bind_param("ssiis", $naslov, $opis, $idVrste, $idDionice, $status);
        $upit->execute();
                
        $uspjesno = $upit->affected_rows == 1;

        $upit->close();
        return $uspjesno;
    }

    static function promjeniStatus($idDokument, $status)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("UPDATE Dokument SET Status = ? WHERE ID_dokument = ?");
        $upit->bind_param("ss", $status, $idDokument);
        $upit->execute();
                
        if($status == StatusDokumeta::Potvrden)
            Dnevnik::dodajZapis(Akcije::PotvrdaDokumenta, "", Sesija::provjeriSesiju());

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }
    
    static function dohvatiDokumente($samoPotvrdene, $sortStupac, $paginacija, $trenutnaStranica, $filteri)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();
        $dokumenti = array();
        $upitSql = "SELECT * FROM Dokument";
        $upitBroj = "SELECT COUNT(*) FROM Dokument";
        $upitArgs = "";
        $args = array();
        
        if($samoPotvrdene) {
            $upitSql .= " WHERE Status=1";
            $upitBroj .= " WHERE Status=1";
        }

        $upitFilteri = "";
        if(!empty($filteri['VrstaDokumenta'])){
            $vrstaDokumenta = $filteri['VrstaDokumenta'];

            if($vrstaDokumenta > 0) {
                if($samoPotvrdene)
                    $upitFilteri .= " AND ID_vrste = ?";
                else
                    $upitFilteri .= " WHERE ID_vrste = ?";
            }

            $args[] = $vrstaDokumenta;
            $upitArgs .= "i";
        }

        $upitSql .= $upitFilteri;

        $ukupnoStranica = 1;
        if($sortStupac)
            $upitSql .= ' ORDER BY '.$sortStupac;

        if($paginacija){
            $brRedova = $baza->dohvati($upitBroj)->fetch_row();
            $ukupnoStranica = ceil($brRedova[0]/$paginacija);
            $trenutnaPozicija = (($trenutnaStranica-1) * $paginacija);
    
            $upitSql .= ' LIMIT '.$trenutnaPozicija.', '.$paginacija;
        }
        
        $upit = $veza->prepare($upitSql);
        if(count($args)) $upit->bind_param($upitArgs, ...$args);
        $upit->execute();

        $rezultat = $upit->get_result();
        while($red=$rezultat->fetch_assoc())
            $dokumenti[] = $red;
        
        $ret = array(
            'podaci' => $dokumenti,
            'brojStranica' => $ukupnoStranica
        );
    
        return $ret;
    }

    static function dohvatiVrsteDokumenata()
    {
        $baza = new Baza();
        $vrste = array();
        $upit = "SELECT * FROM VrstaDokumenta";
        $rezultat = $baza->dohvati($upit);

        while($red=$rezultat->fetch_assoc()){
            $vrste[] = $red;
        }
        return $vrste;
    }

    static function provjeriFizickiDokument($link) {
        return file_exists($link);
    }
}

?>