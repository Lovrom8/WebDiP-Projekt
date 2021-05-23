<?php
require_once 'baza.php';

class Kategorija
{
    static function dohvatiSve($sortStupac = '', $paginacija = '', $trenutnaStranica = '', $filteri='')
    {
        $baza = new Baza();
        $kategorije = array();
        $upit = "SELECT * FROM Kategorija";

        $upitFilteri = "";
        if(!empty($filteri['Kategorija'])){
            $kategorija = $filteri['Kategorija'];
            $upitFilteri .= " WHERE Naziv_kategorije LIKE '%$kategorija%' ";
        }

        $upit .= $upitFilteri;

        if ($sortStupac)
            $upit .= ' ORDER BY ' . $sortStupac;

        $ukupnoStranica = 1;
        if ($paginacija)
        {
            $brRedova = $baza->dohvati("SELECT COUNT(*) FROM Kategorija")->fetch_row();
            $ukupnoStranica = ceil($brRedova[0] / $paginacija);
            $trenutnaPozicija = (($trenutnaStranica - 1) * $paginacija);

            $upit .= ' LIMIT ' . $trenutnaPozicija . ', ' . $paginacija;
        }

        $rezultat = $baza->dohvati($upit);
        while ($red = $rezultat->fetch_assoc())
            $kategorije[] = $red;

        $ret = array(
            'podaci' => $kategorije,
            'brojStranica' => $ukupnoStranica
        );

        return $ret;
    }

    static function dohvatiZaId($idKat)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("SELECT Naziv_kategorije FROM Kategorija WHERE ID_kategorija=?");
        $upit->bind_param("i", $idKat);
        $upit->execute();

        $rezultat = $upit->get_result()->fetch_assoc();

        $upit->close();

        return $rezultat;
    }

    static function dohvatiSModeratorima($idKat, $sortStupac, $paginacija, $trenutnaStranica, $filteri)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = "SELECT MK.ID_kategorija, MK.ID_moderator, M.Ime, M.Prezime, M.Korisnicko_ime, Kat.Naziv_kategorije FROM KategorijaModerator MK 
                        JOIN Korisnik M ON M.ID_korisnik = MK.ID_moderator
                        JOIN Kategorija Kat ON Kat.ID_kategorija = MK.ID_kategorija
                        WHERE MK.ID_kategorija = ?";

        $upitFilteri = "";
        if(!empty($filteri['Ime'])){
            $ime = $filteri['Ime'];
            $upitFilteri .= " AND M.Ime LIKE '%$ime%' ";
        }

        if(!empty($filteri['Prezime'])){
            $prezime = $filteri['Prezime'];
            $upitFilteri .= " AND M.Prezime LIKE '%$prezime%' ";
        }

        $upit .= $upitFilteri;

        $ukupnoStranica = 1;
        if ($sortStupac)
            $upit .= ' ORDER BY ' . $sortStupac;

        if ($paginacija)
        {
            $upitBroj = $veza->prepare("SELECT COUNT(*) FROM KategorijaModerator WHERE ID_kategorija = ?");
            $upitBroj->bind_param("i", $idKat);
            $upitBroj->execute();
        
            $brRedova = $upitBroj->get_result()->fetch_row();

            $ukupnoStranica = ceil($brRedova[0] / $paginacija);
            $trenutnaPozicija = (($trenutnaStranica - 1) * $paginacija);

            $upitBroj->close();
            $upit .= ' LIMIT ' . $trenutnaPozicija . ', ' . $paginacija;
        }

        $upit = $veza->prepare($upit);
        $upit->bind_param("i", $idKat);
        $upit->execute();

        $kategorije = array();

        $rezultat = $upit->get_result();
        while ($red = $rezultat->fetch_assoc())
            $kategorije[] = $red;

        $upit->close();

        $ret = array(
            'podaci' => $kategorije,
            'brojStranica' => $ukupnoStranica
        );

        return $ret;
    }

    static function dodaj($naziv)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("INSERT INTO Kategorija (Naziv_kategorije) VALUES (?)");
        $upit->bind_param("s", $naziv);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function osvjezi($id, $naziv)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("UPDATE Kategorija SET Naziv_kategorije = ? WHERE ID_kategorija = ?");
        $upit->bind_param("si", $naziv, $id);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function obrisi($id)
    {
        $baza = new Baza();
        $upit = "DELETE FROM Kategorija WHERE ID_kategorija = '$id'";

        return $baza->provedi($upit);
    }

    static function dodijeliModeratora($idKat, $idMod)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("INSERT INTO KategorijaModerator (ID_kategorija, ID_moderator) VALUES (?, ?)");
        $upit->bind_param("ii", $idKat, $idMod);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function ukloniModeratora($idKat, $idMod)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("DELETE FROM KategorijaModerator WHERE ID_kategorija = ? AND ID_moderator = ?");
        $upit->bind_param("ii", $idKat, $idMod);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }
}
