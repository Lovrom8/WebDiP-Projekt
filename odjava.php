<?php

require_once 'base/sesija.php';
require_once 'base/dnevnik.php';
require_once 'base/korisnici.php';

Dnevnik::dodajZapis(Akcije::Odjava, "", Sesija::provjeriSesiju());
Sesija::zavrsiSesiju();
header("Location: prijava.php");
die();
?>