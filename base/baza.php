<?php
include_once 'base/baza.php';
include_once 'config.php';

class Baza {
    private $veza = null;

    private static function spojiNaBazu()
    {
        $baza = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if($baza->connect_errno) 
        {
            echo "Neuspješno spajanje sa bazom: ".$baza->connect_errno.", ".$baza->connect_error;
        }

        $baza->set_charset("utf8");
        return $baza;
    }

    private static function ugasiVezu()
    {
        self::$veza->close();
    }

    function provedi($upit)
    {
        $veza = self::spojiNaBazu();
        $rezultat = null;
        
        if($rezultat = $veza->query($upit))
        {
            self::ugasiVezu();
            return $rezultat;
        }
        else
        {
            echo "Pogreška kod upita: ".$veza->error;
            self::ugasiVezu();
            return $rezultat;
        }
    }
}
?>