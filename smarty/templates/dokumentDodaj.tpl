{extends file="base.tpl"}
{block name=sadrzaj}
    <form class="form__obrazac" id="prijava" method="POST">
        <label for="dionica">Dionica:</label><br>
        <input type="text" id="dionica" name="dionica" value="{$oznaka}" disabled><br>
        <label for="naslov">Naslov:</label><br>
        <input type="text" id="naslov" name="naslov"><br>
        <label for="opis">Opis:</label><br>
        <textarea id="opis" name="opis" rows="4" cols="30"></textarea><br>
        <label for="vrsta">Vrsta dokumenta:</label>
        <select id="vrsta" name="vrsta">
            <option value="1">Slika</option>
            <option value="2">Video</option>
            <option value="3">Audio</option>
            <option value="4">Tekst</option>
        </select><br>
        <label for="poveznica">Poveznica:</label>
        <input type="url" id="poveznica" name="poveznica"><br>
        <input type="submit" value="Prijavi se" name="Dodaj dokument" />
    </form>
{/block}

{block name=javascript}
      <script src="../../js/dokumentForma.js"></script>
{/block}