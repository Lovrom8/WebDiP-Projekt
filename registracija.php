<?php
require_once 'base/util.php';
require_once 'base/korisnici.php';

$greske = "";
$ime = "";
$prezime = "";
$korIme = "";
$lozinka = "";

if($_SERVER["REQUEST_METHOD"]== "POST") {
    
    if(empty($_POST["fname"])) 
        $greske .= "Ime nije uneseno.</br>";
    else 
        $ime = ocistiString($_POST["fname"]);
    
    if(empty($_POST["lname"])) 
        $greske .= "Prezime nije uneseno.</br>";
    else 
        $prezime = ocistiString($_POST["lname"]);

    if(empty($_POST["email"])) 
        $greske .= "Email nije upisan";
    else {
        $email = ocistiString($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $greske .= "Email nije ispravnog oblika.<br>";
        }else{
            if(Korisnik::ProvjeriEmail($email)){
                $greske .= "Email je zauzet. </br>";
            }
        }
    }

    if(empty($_POST["username"])) 
        $greske .= "Korisničko ime nije upisano";
    else {
        $korIme = ocistiString($_POST["username"]);

        if(Korisnik::ProvjeriUsername($korIme)){
                $greske .= "Korisničko ime je je zauzeto. </br>";
        }
    }

    if(empty($_POST["pwd"]))
        $greske .= "Lozinka nije unesena. <br>";
    else
        $lozinka = ocistiString($_POST["pwd"]);

    if($greske != "") {
        $token = md5(rand(0,1000));
        if(Korisnik::DodajKorisnika($korIme, $lozinka, $email, $ime, $prezime, $token)) {
            Korisnik::PosaljiAktivacijskiMail($token, $email);
            echo 'proslo';
        }
        else
            echo 'fail';
        
        
    }else{
        echo $greske;
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Registracija na sustav, 20.3.2021.">
        <meta name="keywords" content="Registracija, Novi korisnik, Korisničko ime">
        <meta name="author" content="Lovro Posarić">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/lposaric.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="./js/valid/registracija.js" defer></script>
        <title>Registracija</title>
    </head>
    <body>
        <header class="header">
            <h1><a href="#sadrzaj">Registracija</a></h1>
			<nav>
				<a href="index.php">Početna</a>
				<a href="prijava.php">Prijava</a>
				<a href="autor.html">O autoru</a>
			</nav>
        </header>
        <main>
            <section id="sadrzaj">
                <form class="form__obrazac" id="obrazac_reg" novalidate method="POST" action="registracija.php">
                    <label for="fname">Ime:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Prezime:</label><br>
                    <input type="text" id="lname" name="lname"><br>
                    <label for="username">Korsničko ime:</label><br>
                    <input type="text" id="username" name="username" required><br>
                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="pwd">Lozinka:</label><br>
                    <input type="password" id="pwd" name="pwd" required><br>
                    <label for="pwdConfirm">Potvrda lozinke:</label><br>
                    <input type="password" id="pwdConfirm" name="pwdConfirm" required><br>
                    <input type="submit" value="Dovrši">
                  </form>
            </section>
        </main>
        <footer>
            <p><a href="../autor.html">Autor: Lovro Posarić &copy; 2021</a></p>
            <figure>
                <a target="_blank" href="http://validator.w3.org/check?uri=http://barka.foi.hr/WebDiP/2020/zadaca_01/lposaric/obrasci/registracija.html">
                    <img class="footer__img" alt="HTML Valid" src="../multimedija/HTML5.png">
                </a>
                <a target="_blank" href="https://jigsaw.w3.org/css-validator/validator?uri=http://barka.foi.hr/WebDiP/2020/zadaca_01/lposaric/obrasci/registracija.html">
                    <img class="footer__img" alt="CSS Valid" src="../multimedija/CSS3.png">
                </a>
            </figure>
        </footer>
    </body>
</html>