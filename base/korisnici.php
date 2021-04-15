<?php
require_once 'baza.php';

abstract class Korisnici {
    const Neregistiran = 1;
    const Prometnik = 2;
    const Moderator = 3;
    const Administrator = 4;
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

    static function DodajKorisnika($korisnickoIme, $lozinka, $email, $ime, $prezime) {
        $baza = new Baza();

    }

    static function ProvjerEmail($email) {
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
}

?>