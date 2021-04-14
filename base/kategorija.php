<?php
require_once 'baza.php';

class Kategorija 
{
    static function dodaj($naziv)
    {
        $baza = new Baza();
        $upit = "INSERT INTO Kategorija (Naziv) VALUES ('$naziv')";
        
        return $baza->provedi($upit);
    }

    static function osvjezi($id, $naziv)
    {
        $baza = new Baza();
        $upit = "UPDATE Kategorija SET Naziv = '$naziv' WHERE ID_kategorija = '$id'";

        return $baza->provedi($upit);
    }

    static function obrisi($id) 
    {
        $baza = new Baza();
        $upit = "DELETE FROM Kategorija WHERE ID_kategorija = '$id'";

        return $baza->provedi($upit);
    }

    static function dodijeliModeratora($idKat, $idMod) 
    {
        $baza = new Baza();
        $upit = "INSERT INTO KategorijaModerator (ID_kategorija, ID_moderator) VALUES ('$idKat', '$idMod')";

        return $baza->provedi($upit);
    }       

    static function ukloniModeratora($idKat, $idMod)
    {
        $baza = new Baza();
        $upit = "DELETE FROM KategorijaModerator WHERE ID_kategorija = '$idKat' AND ID_moderator = '$idMod'";

        return $baza->provedi($upit);
    }
}

?>