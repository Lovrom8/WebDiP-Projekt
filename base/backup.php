<?php

require_once 'dokument.php';
require_once 'baza.php';

class Backup {
    static function dohvatiZaTablicu($tablica) {
        $sqlSkripta = '';
        $baza = new Baza();
        
        $rezultat = $baza->dohvati('SELECT * FROM '.$tablica);
        $brojRedaka = mysqli_num_fields($rezultat);
        
        $sqlSkripta.= 'DROP TABLE '.$tablica.';';
        $createRed = $baza->dohvati('SHOW CREATE TABLE '.$tablica)->fetch_row();
        $sqlSkripta.= "\n\n".$createRed[1].";\n\n";
        
        while($row = $rezultat->fetch_row())
        {
            $sqlSkripta.= 'INSERT INTO '.$tablica.' VALUES(';
            for($j=0; $j < $brojRedaka; $j++) 
            {
                $row[$j] = str_replace("\n","\\n", addslashes($row[$j]));
                if (isset($row[$j])) { $sqlSkripta.= '"'.$row[$j].'"' ; } else { $sqlSkripta.= '""'; }
                if ($j < ($brojRedaka-1)) { $sqlSkripta.= ','; }
            }
            $sqlSkripta.= ");\n";
        }

        $sqlSkripta.="\n\n\n";

        return $sqlSkripta;
    }

    static function spremi($skripta) {
        echo $skripta;
        $handle = fopen('backup/'.date('Y-m-d_hia').'.sql','w+');
        fwrite($handle, $skripta);
        fclose($handle);
    }

    static function povrati($putanja) {
        $baza = new Baza();
        $sql = file_get_contents($putanja);
        $baza->provedi($sql);
    }

    static function osvjezi($skripta) {
        $baza = new Baza();
        
        self::povrati($skripta);

        $upit = "SELECT * FROM Dokument";

        $rezultat = $baza->dohvati($upit);
        while($red=$rezultat->fetch_assoc()){
            if(!Dokument::provjeriFizickiDokument($red['Poveznica']))
            {
                
            }
        }
      
    }
}

?>