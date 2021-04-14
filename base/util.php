<?php

function ocistiString($podaci) {
  $podaci = trim($podaci);
  $podaci = stripslashes($podaci);
  $podaci = htmlspecialchars($podaci);
  return $podaci;
}

?>