<?php

function ocistiString($podaci) {
  $podaci = trim($podaci);
  $podaci = stripslashes($podaci);
  $podaci = htmlspecialchars($podaci);
  return $podaci;
}

function nasumicniString($duljina) {
  $znakovi = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  return substr(str_shuffle($znakovi), 0, $duljina);
}

function hashirajLozinku($lozinka, $sol) {
  return hash("sha256", $lozinka . $sol);
}

function dohvatiSPomakom() {

}

function dohvatiTrenutoVrijeme() {
  $postavke = json_decode( file_get_contents('base/postavke.json'));
  $pomak = $postavke->{'pomakVremena'};

  $trenutnoVrijeme = new DateTime();
  $trenutnoVrijeme->add(new DateInterval("PT{$pomak}H"));
  $vrijemeSPomakom = $trenutnoVrijeme->format('Y-m-d H:i:s');

  return $vrijemeSPomakom;
}

?>