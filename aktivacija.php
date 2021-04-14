<?php
$greske = "";
if(empty($_GET["kod"]))
{
   $greske = "Nismo zaprimili aktivacijski kod";    
}
else
{
    $kod = ocistiString($GET["kod"]);

    $baza = new Baza();
    $upit = "SELECT * FROM aktivacije WHERE kod = '$kod';";
    $rezultat = $baza->provedi($upit);

    if($rezultat->num_rows != 0){
        $trenutno = new DateTime();
        $vrijeme = DateTime::createFromFormat("Y-m-d H:i:s", $red["vrijeme"]);
        $interval = $trenutno->diff($vrijeme);

        if($interval->y > 0 || $interval->m > 0 || $interval->d > 0 || $interval->h > 24){
            $greske = "Vas kod za aktivaciju je istekao</br>";
        }else{
            $baza = new Baza();
            $upit = "UPDATE korisnici SET tipKorisnika = 1 WHERE idKorisnici = ".$red["korisnik"].";";

            if($baza->provedi($upit)){
                $poruka = "Uspjesno ste aktivirali svoj račun</br>Bit ćete preusmjereni za 5 sekundi.";
                //Dnevnik::zapisi("Aktivacija racuna", "Edit", $red["korisnik"]);
                //header("Refresh:5; url=http://barka.foi.hr/WebDiP/2020_projekti/WebDiP2014x072/login.php", true, 303);
            }else{
                $greske = "Nismo uspjeli aktvirati vaš račun, molimo pokušajte opet";
            }
            
        }
    }
    else
    {
        $greske = "Ne postoji taj kod u bazi";
    }
}

?>