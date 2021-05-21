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
$trenutnaStranica = 0;

/* POSTAVKE PAGINACIJE */
if (isset($_POST['sort_stupac']))
    $sortStupac = ocistiString($_POST['sort_stupac']);

if (isset($_POST['paginacija']))
    $paginacija = ocistiString($_POST['paginacija']);
    
if (isset($_POST['trenutna_stranica']))
    $trenutnaStranica = ocistiString($_POST['trenutna_stranica']);

/* TABLICE */
if (isset($_POST['podaci'])) {
    $naziv = $_POST['podaci'];

    if($naziv === 'problemi')
        echo json_encode(Problem::dohvatiSveProbleme($sortStupac, $paginacija, $trenutnaStranica));
    elseif ($naziv === 'obilasci')
        echo json_encode(Obilazak::dohvatiSve(Sesija::dohvatiSesiju(), $sortStupac, $paginacija, $trenutnaStranica));
    elseif ($naziv === 'statistika_problema')
        echo json_encode(Problem::dohvatiStatistiku($sortStupac, $paginacija, $trenutnaStranica));
    elseif ($naziv === 'kategorije')
        echo json_encode(Kategorija::dohvatiSve($sortStupac, $paginacija, $trenutnaStranica));
    elseif ($naziv === 'statistika_koristenja')
        echo json_encode(Dnevnik::dohvatiStatistikuKoristenja($sortStupac, $paginacija, $trenutnaStranica));
    elseif ($naziv === 'dionice')
        echo json_encode(Dionica::dohvatiSve($sortStupac, $paginacija, $trenutnaStranica));
    elseif ($naziv === 'moderatori_kategorije')
        echo json_encode(Kategorija::dohvatiSModeratorima($_POST['id'], $sortStupac, $paginacija, $trenutnaStranica));
    elseif ($naziv === 'korisnici') {
        if(Sesija::tipKorisnika() == Korisnici::Administrator) {
            echo json_encode(Korisnik::dohvatiSve($sortStupac, $paginacija, $trenutnaStranica));
        } 
    }    elseif ($naziv == 'dokumenti') {
        if(Sesija::tipKorisnika() > Korisnici::Prometnik) 
            echo json_encode(Dokument::dohvatiDokumente(false, $sortStupac, $paginacija, $trenutnaStranica));
        else
            echo json_encode(Dokument::dohvatiDokumente(true, $sortStupac, $paginacija, $trenutnaStranica));
    }
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

if (isset($_POST['moderatori'])) {
    echo json_encode(Korisnik::dohvatiModeratore());
}

if (isset($_POST['kategorije'])) {
    echo json_encode(Kategorija::dohvatiSve()['podaci']);
}

if (isset($_POST['statistika_koristenja_grupirano'])) {
    echo json_encode(Dnevnik::dohvatiGrupiranuStatistiku());
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