<?php

include_once './dionica.php';
include_once './dokument.php';

if (isset($_POST['dokumenti'])) {
    echo json_encode(Dokument::dohvatiDokumente(false));
}

if (isset($_POST['dionice'])) {
    echo json_encode(Dionica::dohvatiSve());
}

if (isset($_POST['problemi'])) {
    //echo json_encode(Problem::dohvatiSveZaDionicu());
}


?>