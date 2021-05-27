{extends file="base.tpl"}
{block name=sadrzaj}
    <div class="filter">
        <label for="polaziste">Polazište: </label>
        <input type="text" id="polaziste" name="polaziste">
        <label for="odrediste">Odredište: </label>
        <input type="text" id="odrediste" name="odrediste">
    </div>

    <table id="dionice">
        <thead>
            <tr>
                <th>Oznaka</th>
                <th>Početna dionica</th>
                <th>Završna dionica</th>
                <th>Kategorija</th>
                <th>Uredi</th>
            </tr>
        </thead>
    </table>

    {if isset($smarty.session.tip) and ( $smarty.session.tip > 2)}
        <a href="dionicaUredi.php">
            <button>
                Nova dionica
            </button>
        </a>
    {/if}
{/block}

{block name=javascript}
    <script src="../../js/tablica.js"></script>
    <script src="../../js/ajax/dioniceMod.js"></script>
    {/block}