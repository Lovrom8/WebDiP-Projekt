<?php

include_once './dionica.php';
include_once './dokument.php';
include_once './problem.php';
include_once './obilazak.php';
include_once './kategorija.php';

session_start();

if (isset($_POST['dokumenti'])) {
    echo json_encode(Dokument::dohvatiDokumente(false));
}

if (isset($_POST['dionice'])) {
    echo json_encode(Dionica::dohvatiSve());
}

if (isset($_POST['problemi'])) {
    echo json_encode(Problem::dohvatiSveProbleme());
}

if (isset($_POST['obilasci'])) {
   echo json_encode(Obilazak::dohvatiSve($_SESSION['ID']));
}

if (isset($_POST['korisnik'])) {
    if(Korisnik::ProvjeriUsername($_POST['korisnik'])){
        echo json_encode(array("postoji" => 0));
    }else{
        echo json_encode(array("postoji" => 1));
    }
}

if (isset($_POST['email'])) {
    if(Korisnik::ProvjeriEmail($_POST['email'])){
        echo json_encode(array("postoji" => 0));
    }else{
        echo json_encode(array("postoji" => 1));
    }
}

if (isset($_POST['statistika_problema'])) {
    echo json_encode(Problem::dohvatiStatistiku());
}

if (isset($_POST['statistika_koristenja'])) {
    echo json_encode(Dnevnik::dohvatiStatistikuKoristenja());
}

if (isset($_POST['kategorije'])) {
    echo json_encode(Kategorija::dohvatiSve());
}

?>