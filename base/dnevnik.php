<?php
require_once 'korisnici.php';
require_once 'util.php';

class Dnevnik {
    static function dodajZapis($akcijaId, $opis, $korisnikId)
    {
        $baza = new Baza();
        $datum = dohvatiTrenutoVrijeme();
        $upit = "INSERT INTO Dnevnik (ID_dnevnik, Opis, Datum_vrijeme, ID_korisnik, ID_tip_akcije) VALUES(DEFAULT, '$opis', '$datum', '$korisnikId', '$akcijaId')";
        $baza->provedi($upit);
    }

    static function dohvatiSveZapise()
    {
        $baza = new Baza();
        $zapisi = array();
        $upit = "SELECT * FROM Dnevnik D JOIN TipAkcije T ON T.ID_tip_akcije = D.ID_tip_akcije";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc())
            $zapisi[] = $red;

        return $zapisi;
    }

    static function dohvatiStatistikuKoristenja($sortStupac, $paginacija, $trenutnaStranica, $filteri) {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();
        $zapisi = array();
        $upitSql = "SELECT Opis, Datum_vrijeme, Korisnicko_ime FROM Dnevnik D
                 JOIN Korisnik K ON K.ID_korisnik = D.ID_korisnik
                 WHERE ID_tip_akcije = ".Akcije::Posjeta;
        $args = array();
        $upitArgs = "";

        $upitFilteri = "";
        if(!empty($filteri['Korisnik'])){
            $korisnik = "%".$filteri['Korisnik']."%";
            $upitFilteri .= " AND Korisnicko_ime LIKE ?";
            
            $args[] = $korisnik;
            $upitArgs .= "s";
        }

        if(!empty($filteri['Od'])) {
            $od = $filteri['Od'];
            $upitFilteri .= " AND Datum_vrijeme >= ?";

            $args[] = $od;
            $upitArgs .= "s";
        }

        if(!empty($filteri['Do'])) {
            $do = $filteri['Do'];
            $upitFilteri .= " AND Datum_vrijeme <= ?";

            $args[] = $do;
            $upitArgs .= "s";
        }

        $upitSql .= $upitFilteri;

        $ukupnoStranica = 1;
        if($sortStupac)
            $upitSql .= ' ORDER BY '.$sortStupac;

        if($paginacija){
            $brRedova = $baza->dohvati("SELECT COUNT(*) FROM Dnevnik WHERE ID_tip_akcije = ".Akcije::Posjeta)->fetch_row();
            $ukupnoStranica = ceil($brRedova[0]/$paginacija);
            $trenutnaPozicija = (($trenutnaStranica-1) * $paginacija);

            $upitSql .= ' LIMIT '.$trenutnaPozicija.', '.$paginacija;
        }

        $upit = $veza->prepare($upitSql);
        if(count($args)) $upit->bind_param($upitArgs, ...$args);
        $upit->execute();

        $rezultat = $upit->get_result();

        while($red=$rezultat->fetch_assoc())
            $zapisi[] = $red;
        
        $ret = array(
            'podaci' => $zapisi,
            'brojStranica' => $ukupnoStranica
        );

        return $ret;
    }

    static function dohvatiGrupiranuStatistiku() {
        $baza = new Baza();
        $zapisi = array();
        $upit = 'SELECT COUNT(*) AS BrojPosjeta, Opis FROM Dnevnik D
                 WHERE ID_tip_akcije = '.Akcije::Posjeta.' GROUP BY Opis';

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc())
            $zapisi[] = $red;
            
        return $zapisi;
    }
}

?>