<?php

class Sesija {
    const ID = "ID";
    const SESSION_NAME = "prijava_sesija";
    const TIP = "tip";
    const USERNAME = "username";
    const IME = "ime";
    const PREZIME = "prezime";
    const E_MAIL = "email";

    static function kreirajSesiju($id, $kor_ime, $ime, $prezime, $mail, $tip) 
    {
        session_name(self::SESSION_NAME);
        
        if(session_id() == ""){
            session_start();
        }

        $_SESSION[self::ID] = $id;
        $_SESSION[self::E_MAIL] = $mail;
        $_SESSION[self::USERNAME] = $kor_ime;
        $_SESSION[self::IME] = $ime;
        $_SESSION[self::PREZIME] = $prezime;
        $_SESSION[self::TIP] = $tip;
    }

    static function provjeriSesiju() {
        session_name(self::SESSION_NAME);

        /*
         * RADI NA PHP >= 5.4
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
         * 
         */
        
        if(session_id() == ""){
            session_start();
        }

        if (isset($_SESSION[self::ID])) {
            $id = $_SESSION[self::ID];
        } else {
            return null;
        }
        return $id;
    }

    static function dohvatiSesiju() 
    {
        session_name(self::SESSION_NAME);
        
        if(session_id() == ""){
            session_start();
        }

        if (isset($_SESSION[self::ID])) {
            $id = $_SESSION[self::ID];
        } else {
            return null;
        }
        return $id;
    }


    static function tipKorisnika(){
        if(Sesija::dohvatiSesiju())
        {
            if (isset($_SESSION[self::TIP])) 
            {
                $tip = $_SESSION[self::TIP];
            } 
            else 
            {
                $tip = null;
            }
        }
        else
        {
            $tip = null;
        }

        return $tip;
    }

    static function zavrsiSesiju(){
        session_name(self::SESSION_NAME);

        if(session_id() == "") 
        {
            session_start();
        }

        session_unset();
        session_destroy();
    }
/*
    const KORISNIK = "korisnik";
    const TIP = "tip";
    const KOSARICA = "kosarica";
    const SESSION_NAME = "prijava_sesija";

    static function kreirajSesiju() {
        session_name(self::SESSION_NAME);

        if (session_id() == "") {
            session_start();
        }
    }

    static function kreirajKorisnika($korisnik,$tip) {
        self::kreirajSesiju();
        $_SESSION[self::KORISNIK] = $korisnik;
        $_SESSION[self::TIP] = $tip;
    }

    static function kreirajKosaricu($kosarica) {
        self::kreirajSesiju();
        $_SESSION[self::KOSARICA] = $kosarica;
    }

    static function dajKorisnika() {
        self::kreirajSesiju();
        if (isset($_SESSION[self::KORISNIK])) {
            $korisnik[self::KORISNIK] = $_SESSION[self::KORISNIK];
            $korisnik[self::TIP] = $_SESSION[self::TIP];
        } else {
            return null;
        }
        return $korisnik;
    }

    static function dajKosaricu() {
        self::kreirajSesiju();
        if (isset($_SESSION[self::KOSARICA])) {
            $kosarica = $_SESSION[self::KOSARICA];
        } else {
            return null;
        }
        return $kosarica;
    }

    
    static function obrisiSesiju() {
        session_name(self::SESSION_NAME);

        if (session_id() != "") {
            session_unset();
            session_destroy();
        }
    }*/
}

?>