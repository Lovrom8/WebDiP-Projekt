{extends file="base.tpl"}
{block name=sadrzaj}
    <form class="form__obrazac" id="novi_problem" method="POST">
        <div class="form_naslov">
            <h2>
                {if isset($smarty.get.id)}Uredi prijavu{else}Nova prijava{/if}
            </h2>
        </div>
        <div class="form_greske">{$greske}</div>
        <div class="form_tijelo">
            <input type="hidden" name="id" value="{$id}">

            <label for="dionica">Dionica:</label>
            {html_options name=dionica options=$dionice selected=$idDionica}<br>

            <label for="dionica">Opis:</label>
            <textarea name="opis" rows="5" cols="30" minlength="10" maxlength="1000">{$opis}</textarea><br>

            <label for="datum">Datum:</label>
            <input type="date" id="datum" name="datum" value="{$datum}"><br>

            <label for="vrijeme">Vrijeme:</label>
            <input type="time" id="vrijeme" name="vrijeme" value="{$vrijeme}"><br>

            <label for="aktivan">Aktivan:</label>
            <input type="checkbox" id="aktivan" name="aktivan" {if $aktivan} checked {/if}><br>

            <input type="submit" value="Dodaj dionicu" name="Submit" />
        </div>
    </form>
{/block}

{block name=javascript}
    <script src="../../js/ajax/problemi.js"></script>
{/block}