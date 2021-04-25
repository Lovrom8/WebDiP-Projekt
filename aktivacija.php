<?php
include_once 'base/korisnici.php';
include_once 'base/util.php';

$greske = "";
if(empty($_GET["token"]))
{
   $greske = "Nismo zaprimili aktivacijski kod";    
}
else
{
    $token = ocistiString($_GET["token"]);

    $baza = new Baza();
    $upit = "SELECT ID_korisnik, Vrijeme_registracije FROM Korisnik WHERE Token = '$token';";
    $rezultat = $baza->dohvati($upit);

    if($rezultat->num_rows != 0) {
        $red = $rezultat->fetch_assoc();

        $trenutno = new DateTime();
        $vrijeme = DateTime::createFromFormat("Y-m-d H:i:s", $red["Vrijeme_registracije"]);
        $interval = $trenutno->diff($vrijeme);
        
        if($interval->y == 0 || $interval->m == 0 || $interval->d == 0 || $interval->h < 18) {
            $upit = "UPDATE Korisnik SET Status = 1 WHERE ID_korisnik = ".$red["ID_korisnik"].";";

            if($baza->provedi($upit)) {
                $poruka = "Uspješno ste aktivirali svoj račun</br>Bit ćete preusmjereni za 5 sekundi.";
                Dnevnik::dodajZapis(Akcije::Aktivacija, "", $red["ID_korisnik"]);
                //header("Refresh:5; url=http://barka.foi.hr/WebDiP/2020_projekti/WebDiP2014x072/login.php", true, 303);
            } 
            else 
               $greske = "Nismo uspjeli aktvirati vaš račun, molimo pokušajte opet";
        }
        else
            $greske = "Vaš kod za aktivaciju je istekao</br>";    
    }
    else 
        $greske = "Ne postoji taj kod u bazi";
}

?>