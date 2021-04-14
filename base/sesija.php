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
}

?>