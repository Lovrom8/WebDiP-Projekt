<?php
require_once 'baza.php';
require_once 'dnevnik.php';

abstract class Korisnici
{
    const Neregistiran = 1;
    const Prometnik = 2;
    const Moderator = 3;
    const Administrator = 4;
}

abstract class StatusKorisnika
{
    const Neaktiviran = 1;
    const Aktiviran = 2;
    const Blokiran = 3;
}

abstract class Akcije
{
    const Ostalo = 0;
    const Prijava = 1;
    const Odjava = 2;
    const DodavanjeDokumenta = 3;
    const PotvrdaDokumenta = 4;
    const DodavanjeModeratora = 5;
    const BrisanjeModeratora = 6;
    const DodavanjeKategorije = 7;
    const BrisanjeKategorije = 8;
    const AzuriranjeKategorije = 9;
    const StvaranjeKopije = 10;
    const UcitavanjeKopije = 11;
    const DodavanjeDionice = 12;
    const AzuriranjeDionice = 13;
    const Registracija = 14;
    const Aktivacija = 15;
    const Posjeta = 16;
    const EvidentiranjeObilaska = 17;
    const DodavanjeProblema = 18;
    const AzuriranjeProblema = 19;
    const ResetLozinke = 20;
    const NeuspjesnaPrijava = 21;
}

class Korisnik
{
    static function Prijavi($korisnickoIme, $lozinka, $zapamti)
    {
        $baza = new Baza();
        $greske = "";

        $upit = "SELECT ID_korisnik, Ime, Prezime, Email, Status, ID_Uloga AS TipKorisnika
            FROM Korisnik
            WHERE Korisnicko_ime = '$korisnickoIme'
            AND Lozinka = '$lozinka'";

        $rezultat = $baza->Dohvati($upit);
        $red = mysqli_fetch_assoc($rezultat);

        if ($rezultat->num_rows == 0)
        {
            $greske .= "Ne postoji korisnik s tim korisničkim imenom i lozinkom.</br>";
            Dnevnik::dodajZapis(Akcije::NeuspjesnaPrijava, $korisnickoIme, 0);
        }
        else
        {
            if ($red["Status"] == StatusKorisnika::Neaktiviran)
                $greske .= "Vaš račun nije aktiviran.";
            else if ($red["Status"] == StatusKorisnika::Blokiran)
                $greske .= "Vaš račun je zaključan od strane administratora.";

            if ($greske == "")
            {
                Sesija::kreirajSesiju(
                    $red["ID_korisnik"],
                    $korisnickoIme,
                    $red["Ime"],
                    $red["Prezime"],
                    $red["Email"],
                    $red["TipKorisnika"]
                );

                if ($zapamti != "") setcookie("korisnik", $korisnickoIme, time() + (86400 * 365), "/");
            }
        }

        return $greske;
    }

    static function dohvatiSve($sortStupac, $paginacija, $trenutnaStranica)
    {
        $baza = new Baza();
        $korisnici = array();
        $upit = "SELECT * FROM Korisnik";

        $ukupnoStranica = 1;
        if ($sortStupac)
            $upit .= ' ORDER BY ' . $sortStupac;

        if ($paginacija)
        {
            $brRedova = $baza->dohvati("SELECT COUNT(*) FROM Korisnik")->fetch_row();
            $ukupnoStranica = ceil($brRedova[0] / $paginacija);
            $trenutnaPozicija = (($trenutnaStranica - 1) * $paginacija);

            $upit .= ' LIMIT ' . $trenutnaPozicija . ', ' . $paginacija;
        }

        $rezultat = $baza->dohvati($upit);
        while ($red = $rezultat->fetch_assoc())
            $korisnici[] = $red;

        $ret = array(
            'podaci' => $korisnici,
            'brojStranica' => $ukupnoStranica
        );

        return $ret;
    }

    static function dodajKorisnika($korisnickoIme, $lozinka, $email, $ime, $prezime, $token)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $lozinkaSha = $lozinka;
        $lozinkaSha = sha1($lozinka);

        $vrijemeReg = date('Y-m-d H:i:s');

        $upit = $veza->prepare("INSERT INTO Korisnik (Ime, Prezime, Lozinka, Lozinka_SHA1, Korisnicko_ime, Email, Status, ID_uloga, Token, Vrijeme_registracije) VALUES (?, ?, ?, ?, ?, ?, '0', '2', ?, ?)");
        $upit->bind_param("ssssssss", $ime, $prezime, $lozinka, $lozinkaSha, $korisnickoIme, $email, $token, $vrijemeReg);
        $upit->execute();

        printf("%d row inserted.\n", $upit->affected_rows);

        Dnevnik::dodajZapis(Akcije::Registracija, "", $veza->insert_id);

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function ProvjeriEmail($email)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("SELECT email FROM Korisnik WHERE email=?");
        $upit->bind_param("s", $email);
        $upit->execute();

        $rezultat = $upit->get_result();

        $upit->close();

        return $rezultat->num_rows == 0;
    }

    static function ProvjeriUsername($username)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("SELECT Korisnicko_ime FROM Korisnik WHERE Korisnicko_ime=?");
        $upit->bind_param("s", $username);
        $upit->execute();

        $rezultat = $upit->get_result();

        $upit->close();

        return $rezultat->num_rows == 0;
    }

    static function PosaljiAktivacijskiMail($token, $email)
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]/" . "aktivacija.php?token=" . $token;
        $subject = "Aktivacijski mail";
        $content = "Kliknite ovdje da biste aktivirali svoj račun: $actual_link";
        $mailHeaders = "From: Admin\r\n";

        if (mail($email, $subject, $content, $mailHeaders))
            return "Aktivacijski link poslan je na Vaš email.";
        else
            return "Nismo uspjeli poslati aktivacijski link na Vaš email.";
    }

    static function posaljiMailZaResetLozinke($token, $email)
    {
        $actual_link = "http://$_SERVER[HTTP_HOST]/" . "resetirajLozinku.php?token=" . $token;
        $subject = "Reset lozinke";
        $content = "Kliknite ovdje da biste resetirali lozinku: $actual_link";
        $mailHeaders = "From: Admin\r\n";

        if (mail($email, $subject, $content, $mailHeaders))
            return "Link za reset poslan je na Vaš email.";
        else
            return "Nismo uspjeli poslati link za reset na Vaš email.";
    }

    static function AktivirajRacun($token)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("UPDATE Korisnik SET Status = 1 WHERE token = ?");
        $upit->bind_param("s", $token);
        $upit->execute();

        //Dnevnik::dodajZapis(Akcije::Aktivacija, "", $veza->insert_id);

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function postaviToken($idKor, $token)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("UPDATE Korisnik SET Token = ? WHERE ID_korisnik = ?");
        $upit->bind_param("si", $token, $idKor);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function dohvatiZaToken($token)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("SELECT ID_korisnik, email FROM Korisnik WHERE token = ? LIMIT 1");
        $upit->bind_param("s", $token);
        $upit->execute();


        $rezultat = $upit->get_result();

        if ($rezultat->num_rows > 0)
            return $rezultat->fetch_assoc();

        return -1;
    }

    static function dohvatiZaEmail($email)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("SELECT ID_korisnik FROM Korisnik WHERE email = ? LIMIT 1");
        $upit->bind_param("s", $email);
        $upit->execute();


        $rezultat = $upit->get_result();

        if ($rezultat->num_rows > 0)
            return $rezultat->fetch_assoc()['ID_korisnik'];

        return -1;
    }

    static function promjeniStatus($idKor, $status)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $upit = $veza->prepare("UPDATE Korisnik SET Status = ? WHERE ID_korisnik = ?");
        $upit->bind_param("ii", $status, $idKor);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function postaviLozinku($idKor, $lozinka)
    {
        $baza = new Baza();
        $veza = $baza->dohvatiVezu();

        $lozinkaSHA = sha1($lozinka);
        $upit = $veza->prepare("UPDATE Korisnik SET Lozinka = ?, Lozinka_SHA1 = ? WHERE ID_korisnik = ?");
        $upit->bind_param("ssi", $lozinka, $lozinkaSHA, $idKor);
        $upit->execute();

        $uspjesno = $upit->affected_rows == 1;

        $upit->close();

        return $uspjesno;
    }

    static function dohvatiModeratore()
    {
        $baza = new Baza();
        $moderatori = array();
        $prazno = ' ';
        $upit = 'SELECT ID_korisnik, CONCAT(Ime, Prezime) AS ImePrezime FROM Korisnik WHERE ID_uloga='.Korisnici::Moderator;
                 
        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc())
            $moderatori[] = $red;
            
        return $moderatori;
    }
}
