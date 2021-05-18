{extends file="base.tpl"}
{block name=naslov}Postavke{/block}
{block name=sadrzaj}
      <form class="form__obrazac" id="prijava" method="POST">
                    <label for="trajanjeKolacica">Trajanje kolačića (u danima):</label><br>
                    <input type="number" id="trajanjeKolacica" name="trajanjeKolacica" value="{$trajanjeKolacica}" required><br>
                    <label for="brEl">Broj elemenata po stranici:</label><br>
                    <input type="number" id="brEl" name="brEl"  value="{$brojElPoStranici}" required> <br>
                    <label for="pomakVremena">Pomak vremena (u satima):</label><br>
                    <input type="number" id="pomakVremena" name="pomakVremena"  value="{$pomakVremena}" > <br>
                    <label for="maxNeuspjesnihPrijava">Broj neuspješnih prijava prije zaključavanja:</label><br>
                    <input type="number" id="maxNeuspjesnihPrijava" name="maxNeuspjesnihPrijava"  value="{$maxNeuspjesnihPrijava}" > <br>
                    <label for="maxVelicinaDokumenta">Maksimalna veličina dokumenta (u MB):</label><br>
                    <input type="number" id="maxVelicinaDokumenta" name="maxVelicinaDokumenta"  value="{$maxVelicinaDokumenta}" > <br>

                    <input type="text" id="datumUvjeta" name="datumUvjeta" value="{$datumUvjeta}" hidden> <br>
                    <input type="submit" value="Spremi" name="spremi" />
        </form>

        <button id="dohvatiPomak">Dohvati pomak vremena</button>
        <button id="resetirajUvjete">Resetiraj uvjete</button>
{/block}
{block name=javascript}
      <script src="../../js/ajax/postavke.js"></script>
{/block}