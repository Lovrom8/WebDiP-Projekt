<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Lovro Posarić">
        <link id="css_stil" rel="stylesheet" href="../../css/lposaric.css">
        <link id="css_stil_accesibility" rel="stylesheet" href="../css/lposaric_accesibility.css" disabled>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <title>{block name=title}{/block}Promet</title>
        {block name=css}{/block}
    </head>
    <body>
     <header class="header">
            <h1><a href="index.php">Promet</a></h1>
            <nav>
            <a href="dionice.php">Dionice</a>

            {if isset($smarty.session.ID) }
                {if ( $smarty.session.tip > 1)}
                    <a href="dokumenti.php">Dokumenti</a>
                    <a href="problemi.php">Problemi</a>            
                {/if}

                {if ( $smarty.session.tip eq 4)}
                    <a href="kategorije.php">Kategorije</a>
                    <a href="statistikaKoristenja.php">Dnevnik</a>
                    <a href="korisnici.php">Korisnici</a>
                    <a href="postavke.php">Postavke</a>
                {/if}
                
                <strong><a href="odjava.php">Odjava</a></strong>
            {else}
                <a href="prijava.php">Prijava</a>
                <a href="registracija.php">Registracija</a>
            {/if}   
            <a href="dokumentacija.html">Dokumentacija</a>
            <a href="autor.html">O autoru</a>
            </nav>
      </header>
      <main id="sadrzaj">
        {block name=sadrzaj}{/block}
      </main>
      <footer>
            <p><a href="autor.html">Autor: Lovro Posarić &copy; 2021</a></p>
            <figure>
                <img class="footer__img" id="icoPrilagodljivost" src="../multimedija/accessibility.png" alt="Postavi prilagodljivost"/>
            </figure>
        </footer>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="../../js/general.js"></script>
        {block name=javascript}
        {/block}
    </body>
</html>