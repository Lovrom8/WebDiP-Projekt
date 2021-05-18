<?php
require_once 'baza.php';

abstract class StatusDokumeta {
    const Nepotvrden = 0;
    const Potvrden = 1;
    const Odbijen = 2;
}

class Dokument {
    static function dodajNovi($naslov, $status, $idVrste, $idDionice, $poveznica)
    {
        $baza = new Baza();
        $upit = "INSERT INTO (Naslov, Status, ID_vrste, ID_dionica, Poveznica) VALUES ('$naslov', '$status', '$idVrste', '$idDionice', '$poveznica')";
        
        return $baza->provedi($upit);
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
            Dnevnik::dodajZapis(Akcije::PotvrdaDokumenta, "", Sesija::dohvatiSesiju());

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }
    
    static function dohvatiDokumente($samoPotvrdene, $sortStupac, $paginacija, $trenutnaStranica)
    {
        $baza = new Baza();
        $dokumenti = array();
        $upit = "SELECT * FROM Dokument";
        $upitBroj = "SELECT COUNT(*) FROM Dokument";

        if($samoPotvrdene) {
            $upit .= " WHERE Status=1";
            $upitBroj .= " WHERE Status=1";
        }

        $ukupnoStranica = 1;
        if($sortStupac)
            $upit .= ' ORDER BY '.$sortStupac;

        if($paginacija){
            $brRedova = $baza->dohvati($upitBroj)->fetch_row();
            $ukupnoStranica = ceil($brRedova[0]/$paginacija);
            $trenutnaPozicija = (($trenutnaStranica-1) * $paginacija);
    
            $upit .= ' LIMIT '.$trenutnaPozicija.', '.$paginacija;
        }
        
        $rezultat = $baza->dohvati($upit);
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