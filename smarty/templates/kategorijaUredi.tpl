{extends file="base.tpl"}
{block name=naslov}Nova kategorija{/block}
{block name=sadrzaj}
    <form class="form__obrazac" id="nova_kategorija" method="POST">
        <div class="form_naslov">
            <h2>
                {if isset($smarty.get.id)}Uredi kategoriju{else}Nova kategorija{/if}
            </h2>
        </div>
        <div class="form_greske">{$poruke}{$greske}</div>
        <div class="form_tijelo">
            <input type="text" id="id" name="id" value="{$idKat}" hidden><br>
            <label for="kategorija">Naziv kategorije:</label>
            <input type="text" id="kategorija" name="kategorija" value="{$nazivKategorije}" required><br>
            <input type="submit" value="Spremi kategoriju" name="Submit" />
        </div>
    </form>
{/block}