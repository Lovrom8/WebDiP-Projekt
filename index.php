<?php
require_once 'base/sesija.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/lposaric.css">
        <title>Promet</title>
    </head>
    <body>
    <header class="header">
            <h1><a href="#sadrzaj">Promet</a></h1>
            <nav>
            <?php if (!Sesija::provjeriSesiju()) { ?>
                    <a href="prijava.php">Prijava</a>
                    <a href="registracija.php">Registracija</a>
                <?php } else {  ?>
                    <a href="odjava.php" id="odjava">Odjava</a>
                <?php } ?> 
                <a href="dokumentacija.html">Dokumentacija</a>
                <a href="autor.html">O autoru</a>
            </nav>
        </header>
        <main id="sadrzaj">
            <table id="problemi">
                <thead>
                    <tr>
                        <th>Kategorija</th>
                        <th>Broj problema</th>
                    </tr>
                </thead>
            </table>

            <table id="dionice">
                <thead>
                    <tr>
                        <th>Oznaka</th>
                        <th>Početna dionica</th>
                        <th>Završna dionica</th>
                    </tr>
                </thead>
            </table>
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