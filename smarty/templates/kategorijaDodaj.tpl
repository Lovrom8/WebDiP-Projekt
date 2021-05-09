{extends file="base.tpl"}
{block name=naslov}Nova kategorija{/block}
{block name=sadrzaj}
         <form class="form__obrazac" id="nova_kategorija" method="POST">
                    <label for="kategorija">Naziv kategorije:</label>
                    <input type="text" id="kategorija" name="kategorija" required><br>
                    <input type="submit" value="Dodaj kategoriju" name="Submit" />
         </form>
{/block}