{extends file="base.tpl"}
{block name=naslov}Zaboravljena lozinka{/block}
{block name=sadrzaj}
        <form class="form__obrazac" id="zaboravljena_lozinka" method="POST">
                    {* <input type="hidden" name="id" value="{$id}"> *}

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"></select><br>
                    <input type="submit" value="Pošalji mail" name="Submit" />
        </form>
{/block}