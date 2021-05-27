<?php

require_once 'util.php';

class Sesija {
    const ID = "ID";
    const SESSION_NAME = "prijava_sesija";
    const TIP = "tip";
    const USERNAME = "username";
    const IME = "ime";
    const PREZIME = "prezime";
    const E_MAIL = "email";
    const POSLJEDNJA_AKTIVNOST = "posljednja_aktivnost";

    static function kreirajSesiju($id, $kor_ime, $ime, $prezime, $mail, $tip)
    {
        if (session_id() == "")
        {
            session_name(self::SESSION_NAME);
            session_start();
        }

        $_SESSION[self::ID] = $id;
        $_SESSION[self::E_MAIL] = $mail;
        $_SESSION[self::USERNAME] = $kor_ime;
        $_SESSION[self::IME] = $ime;
        $_SESSION[self::PREZIME] = $prezime;
        $_SESSION[self::TIP] = $tip;
        $_SESSION[self::POSLJEDNJA_AKTIVNOST] = dohvatiTrenutoVrijeme();
    }

    static function provjeriSesiju()
    {
        if (session_id() == "")
        {
            session_name(self::SESSION_NAME);
            session_start();
        }

        if(isset($_SESSION[self::POSLJEDNJA_AKTIVNOST]) && (strtotime(dohvatiTrenutoVrijeme()) - strtotime($_SESSION[self::POSLJEDNJA_AKTIVNOST])) > 60*dohvatiIstekSesije()) {
            self::zavrsiSesiju();
            return null;
        }
        
        $_SESSION[self::POSLJEDNJA_AKTIVNOST] = dohvatiTrenutoVrijeme();
        if (isset($_SESSION[self::ID]))
            return $_SESSION[self::ID];
        else
            return null;
    }

    static function tipKorisnika()
    {
        if (Sesija::provjeriSesiju())
        {
            if (isset($_SESSION[self::TIP]))
                $tip = $_SESSION[self::TIP];
            else
                $tip = null;
        }
        else
            $tip = null;

        return $tip;
    }

    static function zavrsiSesiju()
    {
        if (session_id() == "")
        {
            session_start();
            session_name(self::SESSION_NAME);
        }

        session_unset();
        session_destroy();
    }
}

?>