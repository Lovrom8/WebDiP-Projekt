<?php

require_once 'base/sesija.php';
require_once 'base/dnevnik.php';

Dnevnik::dodajZapis("Odjava korisnika sa sustava", "", "");
Sesija::zavrsiSesiju();
header("Location: login.php");
?>