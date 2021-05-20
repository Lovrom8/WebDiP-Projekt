{extends file="base.tpl"}
{block name=naslov}Nova kategorija{/block}
{block name=sadrzaj}
         <div>{$greske}</div>
         <div>{$poruke}</div>
         <form class="form__obrazac" id="nova_kategorija" method="POST">
                    <label for="kategorija">Naziv kategorije:</label>
                    <input type="text" id="kategorija" name="kategorija" value="{$nazivKategorije}" required><br>
                    <input type="submit" value="Spremi kategoriju" name="Submit" />
         </form>
{/block}