<?php
include_once '../base/baza.php';

$baza = new Baza();

$sql = "SELECT * FROM Korisnik K JOIN Uloga U ON U.ID_uloga=K.ID_uloga";
$rezultat = $baza->dohvati($sql);
while ($red = $rezultat->fetch_assoc()) {
    echo $red['Korisnicko_ime'] ." ". $red["Lozinka"]." ".$red["Naziv_uloge"].'<br>';
}

?>