<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Lovro Posarić">
        <link rel="stylesheet" href="../../css/lposaric.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <title>{block name=title}{/block}Promet</title>
        {block name=css}{/block}
    </head>
    <body>
     <header class="header">
            <h1><a href="#sadrzaj">Promet</a></h1>
            <nav>
            <a href="index.php">Početna</a>
            <a href="dokumentacija.html">Dokumentacija</a>
            <a href="autor.html">O autoru</a>

            {if isset($smarty.session.ID) }
                {if ( $smarty.session.tip > 1)}
                    <a href="dokumenti.php">Dokumenti</a>
                    <a href="problemi.php">Problemi</a>            
                {/if}

                {if ( $smarty.session.tip > 2)}
                    <a href="dionicaDodaj.php">Nova dionica</a>
                {/if}

                {if ( $smarty.session.tip eq 4)}
                    <a href="kategorije.php">Kategorije</a>
                    <a href="postavke.php">Postavke</a>
                {/if}
                
                <a href="odjava.php">Odjava</a>
            {else}
                <a href="prijava.php">Prijava</a>
                <a href="registracija.php">Registracija</a>
            {/if}   
      </header>
      <main id="sadrzaj">
        {block name=sadrzaj}{/block}
      </main>
      <footer>
            <p><a href="autor.html">Autor: Lovro Posarić &copy; 2021</a></p>
            <figure>
                <a target="_blank" href="http://validator.w3.org/check?uri={$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}">
                    <img class="footer__img" alt="HTML Valid" src="multimedija/HTML5.png">
                </a>
                <a target="_blank" href="https://jigsaw.w3.org/css-validator/validator?uri={$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}">
                    <img class="footer__img" alt="CSS Valid" src="multimedija/CSS3.png">
                </a>
            </figure>
        </footer>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        {block name=javascript}
        {/block}
    </body>
</html>