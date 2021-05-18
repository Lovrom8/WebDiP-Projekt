<?php

include_once './sesija.php';
include_once './dionica.php';
include_once './dokument.php';
include_once './problem.php';
include_once './obilazak.php';
include_once './kategorija.php';
include_once './dnevnik.php';
include_once './grad.php';
include_once './util.php';

$sortStupac = '';
$paginacija = 6;
$brojStranice = 0;

/* POSTAVKE PAGINACIJE */
if (isset($_POST['sort_stupac']))
    $sortStupac = ocistiString($_POST['sort_stupac']);

if (isset($_POST['paginacija']))
    $paginacija = ocistiString($_POST['paginacija']);
    
if (isset($_POST['trenutna_stranica']))
    $brojStranice = ocistiString($_POST['trenutna_stranica']);

/* TABLICE */
if (isset($_POST['podaci'])) {
    $naziv = $_POST['podaci'];

    if($naziv === 'problemi')
        echo json_encode(Problem::dohvatiSveProbleme($sortStupac, $paginacija, $brojStranice));
    elseif ($naziv === 'obilasci')
        echo json_encode(Obilazak::dohvatiSve(Sesija::dohvatiSesiju(), $sortStupac, $paginacija, $brojStranice));
    elseif ($naziv === 'statistika_problema')
        echo json_encode(Problem::dohvatiStatistiku($sortStupac, $paginacija, $brojStranice));
    elseif ($naziv === 'kategorije')
        echo json_encode(Kategorija::dohvatiSve($sortStupac, $paginacija, $brojStranice));
    elseif ($naziv === 'statistika_koristenja')
        echo json_encode(Dnevnik::dohvatiStatistikuKoristenja($sortStupac, $paginacija, $brojStranice));
    elseif ($naziv === 'dionice')
        echo json_encode(Dionica::dohvatiSve());
    elseif ($naziv === 'korisnici') {
        if(Sesija::tipKorisnika() == Korisnici::Administrator) {
            echo json_encode(Korisnik::dohvatiSve($sortStupac, $paginacija, $brojStranice));
        } 
    }
    elseif ($naziv == 'dokumenti') {
        if(Sesija::tipKorisnika() > Korisnici::Prometnik) 
            echo json_encode(Dokument::dohvatiDokumente(false, $sortStupac, $paginacija, $brojStranice));
        else
            echo json_encode(Dokument::dohvatiDokumente(true, $sortStupac, $paginacija, $brojStranice));
    }
}

if (isset($_POST['moderatori_kategorije'])) {
    echo json_encode(Kategorija::dohvatiSModeratorima($_POST['moderatori_kategorije']));
}

/* OSTALI UI */

if (isset($_POST['vrste_dokumenata'])) {
    echo json_encode(Dokument::dohvatiVrsteDokumenata());
}

if (isset($_POST['dionice'])) {
    echo json_encode(Dionica::dohvatiSve());
}

if (isset($_POST['gradovi'])) {
    echo json_encode(Grad::dohvatiSve());
}

/* VALIDACIJA */

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



?>