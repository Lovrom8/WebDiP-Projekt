<?php

include_once './sesija.php';
include_once './dionica.php';
include_once './dokument.php';
include_once './problem.php';
include_once './obilazak.php';
include_once './kategorija.php';
include_once './dnevnik.php';
include_once './grad.php';

//session_start();

if (isset($_POST['dokumenti'])) {
    if(Sesija::tipKorisnika() > Korisnici::Prometnik) 
        echo json_encode(Dokument::dohvatiDokumente(false));
    else
        echo json_encode(Dokument::dohvatiDokumente(true));
}

if (isset($_POST['dionice'])) {
    echo json_encode(Dionica::dohvatiSve());
}

if (isset($_POST['problemi'])) {
    echo json_encode(Problem::dohvatiSveProbleme());
}

if (isset($_POST['obilasci'])) {
   echo json_encode(Obilazak::dohvatiSve(Sesija::dohvatiSesiju()));
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

if (isset($_POST['moderatori_kategorije'])) {
    echo json_encode(Kategorija::dohvatiSModeratorima($_POST['moderatori_kategorije']));
}

if (isset($_POST['gradovi'])) {
    echo json_encode(Grad::dohvatiSve());
}

?>