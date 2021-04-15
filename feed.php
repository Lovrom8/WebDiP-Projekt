<?php
require_once 'base/baza.php';

header("Content-type: text/xml"); 
echo "<?xml version='1.0' encoding='UTF-8'?>
<rss version='2.0'>
<channel>
<title>WebDiP - Zatvorene dionice</title>
<description>Zatvorene dionice</description>
<language>hr-HR</language>"; 

$baza = new Baza();
$upit = "";

$upit = "SELECT Oznaka, Broj_kilometara, P.Naziv AS Polaziste, O.Naziv AS Odrediste, K.Naziv_kategorije AS NazivKat FROM Dionica D
         JOIN Grad P ON P.ID_grada = D.ID_grada_polazište
         JOIN Grad O ON O.ID_grada = D.ID_grada_odredište
         JOIN Kategorija K ON K.ID_kategorija = D.ID_kategorija  
         WHERE Otvorena = 0";

$rezultat = $baza->dohvati($upit);
while($red=$rezultat->fetch_assoc()){
    $oznaka = $red['Oznaka']; 
    $brojKilometara = $red['Broj_kilometara']; 
    $polaziste = $red['Polaziste'];
    $odrediste = $red['Odrediste']; 
    $kategorija = $red['NazivKat'];

    echo "<dionica>
    <oznaka>$oznaka</oznaka>
    <brojKilometara>$brojKilometara</brojKilometara>
    <polaziste>$polaziste</polaziste>
    <odrediste>$odrediste</odrediste>
    <kategorija>$kategorija</kategorija>
    </dionica>"; 
}

echo "</channel></rss>"; 
?>