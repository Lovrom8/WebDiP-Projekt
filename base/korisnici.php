<?php
require_once 'baza.php';
require_once 'dnevnik.php';

abstract class Korisnici {
    const Neregistiran = 1;
    const Prometnik = 2;
    const Moderator = 3;
    const Administrator = 4;
}

abstract class StatusKorisnika {
    const Neaktiviran = 1;
    const Aktiviran = 2;
    const Blokiran = 3;
}

abstract class Akcije {
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
    const DodavnajeDionice = 12;
    const AzuriranjeDionice = 13;
    const Registracija = 14;
    const Aktivacija = 15;
}

class Korisnik {
    static function Prijavi($korisnickoIme, $lozinka, $zapamti) {
        $baza = new Baza();
        $greske = "";

        $upit = "SELECT ID_korisnik, Ime, Prezime, Email, Status, ID_Uloga AS TipKorisnika
            FROM Korisnik
            WHERE Korisnicko_ime = '$korisnickoIme'
            AND Lozinka = '$lozinka'";

        $rezultat = $baza->Dohvati($upit);
        $red = mysqli_fetch_assoc($rezultat);

        if($rezultat->num_rows == 0){
            $greske .= "Ne postoji korisnik s tim korisničkim imenom i lozinkom.</br>";
            //Dnevnik::zapisi("Kriva prijava", "Read");
        }else{
            if($red["Status"] == 0){
                $greske .= "Vaš račun nije aktiviran.";
            }
            else if($red["Status"] == 2) {
                $greske .= "Vaš račun je zaključan od strane administratora.";
            }

            if($greske == "") {
                Sesija::kreirajSesiju($red["ID_korisnik"],
                        $korisnickoIme,
                        $red["Ime"],
                        $red["Prezime"],
                        $red["Email"],
                        $red["TipKorisnika"]);

                if($zapamti != ""){
                    setcookie("korisnik", $korisnickoIme, time() + (86400 * 365), "/");
                }
            }

        }

        return $greske;
    }

    static function DodajKorisnika($korisnickoIme, $lozinka, $email, $ime, $prezime, $token) {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

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

    static function ProvjeriEmail($email) {
        $baza = new Baza();
        $upit = "SELECT email FROM Korisnik WHERE email='".$email."';";
        $rezultat = $baza->dohvati($upit);
    
        return $rezultat->num_rows == 0;
    }

    static function ProvjeriUsername($username) {
        $baza = new Baza();
        $upit = "SELECT Korisnicko_ime FROM Korisnik WHERE Korisnicko_ime='".$username."';";
        $rezultat = $baza->dohvati($upit);
    
        return $rezultat->num_rows == 0;
    }

    static function PosaljiAktivacijskiMail($token, $email){
        $rezultat = "";

        $actual_link = "http://$_SERVER[HTTP_HOST]/"."aktivacija.php?token=" . $token;
        $subject = "Aktivacijski mail";
        $content = "Kliknite ovdje da biste aktivirali svoj račun. <a href='" . $actual_link . "'>" . $actual_link . "</a>";
        $mailHeaders = "From: Admin\r\n";
        if(mail($email, $subject, $content, $mailHeaders)) {
            $rezultat = "Aktivacijski mail poslan je na Vaš email.";	
        }else{
            $rezultat = "Nismo uspjeli poslati aktivacijski račun na Vaš email.";
        }

        return $rezultat;
    }

    static function AktivirajRacun($token) {

    }
}

?>