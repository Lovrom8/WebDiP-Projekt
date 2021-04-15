<?php
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/util.php';

$settings = json_decode( file_get_contents('base/postavke.json'));

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $settings->{'trajanjeKolacica'} = ocistiString($_POST["trajanjeKolacica"]);
    $settings->{'brojElPoStranici'} = ocistiString($_POST["brEl"]);

    file_put_contents('base/postavke.json', json_encode($settings) );
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/lposaric.css">
        <title>Postavke</title>
    </head>
    <body>
    <header class="header">
            <h1><a href="#sadrzaj">Postavke</a></h1>
            <nav>
            <a href="dokumentacija.html">Dokumentacija</a>
            <a href="autor.html">O autoru</a>
            <?php if (!Sesija::provjeriSesiju()) { 
                   echo "<a href=\"prijava.php\">Prijava</a>
                         <a href=\"registracija.php\">Registracija</a> ";
                  } 
                  else {  
                    if(Sesija::tipKorisnika() >= Korisnici::Moderator) {
                        if(Sesija::tipKorisnika() == Korisnici::Administrator) {
                            echo "<a href=\"kategorije.php\">Kategorije</a>
                                  <a href=\"postavke.php\">Postavke</a> ";
                        }  

                        echo "<a href=\"dionicaDodaj.php\">Nova dionica</a> ";
                    } 
                    
                    echo "<a href=\"odjava.php\">Odjava</a> ";
                } 
            ?> 
            </nav>
        </header>
        <main id="sadrzaj">
                <form class="form__obrazac" id="prijava" method="POST">
                    <label for="trajanjeKolacica">Trajanje kolačića (u danima):</label><br>
                    <input type="number" id="trajanjeKolacica" name="trajanjeKolacica" value="<?php echo $settings->{'trajanjeKolacica'} ?>" required><br>
                    <label for="brEl">Broj elemenata po stranici:</label><br>
                    <input type="number" id="brEl" name="brEl"  value="<?php echo $settings->{'brojElPoStranici'} ?>" required> <br>
                    <input type="submit" value="Spremi" name="spremi" />
                </form>
        </main>
        <footer>
            <p><a href="autor.html">Autor: Lovro Posarić &copy; 2021</a></p>
            <figure>
                <a target="_blank" href="http://validator.w3.org/check?uri=http://barka.foi.hr/WebDiP/2020/zadaca_01/lposaric/obrasci/prijava.html">
                    <img class="footer__img" alt="HTML Valid" src="multimedija/HTML5.png">
                </a>
                <a target="_blank" href="https://jigsaw.w3.org/css-validator/validator?uri=http://barka.foi.hr/WebDiP/2020/zadaca_01/lposaric/obrasci/prijava.html">
                    <img class="footer__img" alt="CSS Valid" src="multimedija/CSS3.png">
                </a>
            </figure>
        </footer>
    </body>
</html>