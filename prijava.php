<?php
include_once 'base/baza.php';
include_once 'base/util.php';
include_once 'base/obilazak.php';
include_once 'base/korisnici.php';
include_once 'base/sesija.php';

$baza = new Baza();
$korisnickoIme = "";
$lozinka = "";
$greske = "";

if(Sesija::provjeriSesiju()){
    header("Location: index.php");
    die();
}

$myJSON = json_encode(Obilazak::dohvatiSve(4));

echo $myJSON;

if($_SERVER["REQUEST_METHOD"]== "POST") 
{
    if(empty($_POST["korIme"])) 
        $greske .= "Niste unijeli korisnicko ime.</br>";
    else
        $korisnickoIme = ocistiString($_POST["korIme"]);

    if(empty($_POST["lozinka"])) 
        $greske .= "Niste unijeli lozinku.</br>";
    else
        $lozinka = ocistiString($_POST["lozinka"]);

    if(empty($_POST["zapamti"])) 
    {
        $zapamti = "";
        setcookie("korisnik", $korisnickoIme, time()-3600, "/");
    }
    else
        $zapamti = $_POST["zapamti"];

    if($greske == "")
    {
        $greske = Korisnik::Prijavi($korisnickoIme, $lozinka, $zapamti);

        if($greske == "") {
            header("Location: index.php");
            die();
        }
        else
            echo $greske;
    }
}
else
{
    $korisnik = "";

    if(isset($_COOKIE["korisnik"]))
        $korisnik = $_COOKIE["korisnik"];
}
?>

<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Stranica za prijavu 25.3.2021.">
        <meta name="keywords" content="Prijava, Username, Password">
        <meta name="author" content="Lovro Posarić">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/lposaric.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <title>Prijava</title>
    </head>
    <body>
        <header class="header">
            <h1><a href="#sadrzaj">Prijava</a></h1>
			<nav class="navigacija">
                <a href="index.php">Početna</a>
                <?php if (!isset($_SESSION["korisnik"])) { ?>
                    <a href="prijava.php">Prijava</a>
                    <a href="registracija.php">Registracija</a>
                <?php } else {  ?>
                    <a href="logout.php" id="odjava">Odjava</a>
                <?php } ?> 
				<a href="autor.html">O autoru</a>
			</nav>
        </header>
        <main>
            <section id="sadrzaj">
                <form class="form__obrazac" id="prijava" method="POST">
                    <label for="korIme">Korisničko ime:</label><br>
                    <input type="text" id="korIme" name="korIme"><br>
                    <label for="lozinka">Lozinka:</label><br>
                    <input type="password" id="lozinka" name="lozinka" required> <br>
                    <label for="zapamti">Zapamti</label><br>
                    <input type="checkbox" id="zapamti" name="zapamti"></br>
                    <input type="submit" value="Prijavi se" name="Submit" />
                  </form>
            </section>
        </main>
        <footer>
            <p><a href="../autor.html">Autor: Lovro Posarić &copy; 2021</a></p>
            <figure>
                <a target="_blank" href="http://validator.w3.org/check?uri=http://barka.foi.hr/WebDiP/2020/zadaca_01/lposaric/obrasci/prijava.html">
                    <img class="footer__img" alt="HTML Valid" src="../multimedija/HTML5.png">
                </a>
                <a target="_blank" href="https://jigsaw.w3.org/css-validator/validator?uri=http://barka.foi.hr/WebDiP/2020/zadaca_01/lposaric/obrasci/prijava.html">
                    <img class="footer__img" alt="CSS Valid" src="../multimedija/CSS3.png">
                </a>
            </figure>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--<script src="../javascript/lposaric_jquery.js"></script>-->
    </body>
</html>