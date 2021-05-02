{extends file="base.tpl"}
{block name=naslov}Nova dionica{/block}
{block name=css}
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{/block}
{block name=sadrzaj}
        <form class="form__obrazac" id="nova_dionica" method="POST">
                    <label for="kategorija">Kategorija:</label>
                    <select id="kategorija" name="kategorija"></select><br>
                    <label for="oznaka">Oznaka:</label><br>
                    <input type="text" id="oznaka" name="oznaka" required><br>
                    <label for="odrediste">Odredište:</label><br>
                    <input type="text" id="odrediste" name="odrediste" required> <br>
                    <label for="polaziste">Polazište:</label><br>
                    <input type="text" id="polaziste" name="polaziste" required> <br>
                    <input type="submit" value="Dodaj dionicu" name="Submit" />
        </form>
{/block}

{block name=javascript}
        <script src="../../js/ajax/kategorije.js"></script>
        <script src="../../js/ajax/gradovi.js"></script>
{/block}