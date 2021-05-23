{extends file="base.tpl"}
{block name=naslov}Problemi{/block}
{block name=sadrzaj}
    <div>{$greske}</div>
    <div>{$poruke}</div>

    <label for="dionica">Dionica: </label>
    <input type="text" id="dionica" name="dionica">

    <label for="opis">Opis: </label>
    <input type="text" id="opis" name="opis">

    <table id="problemi">
        <thead>
            <tr>
                <th>Dionica</th>
                <th>Datum</th>
                <th>Opis</th>
                <th>Otvori</th>
                <th>Zatvori</th>
            </tr>
        </thead>
    </table>
{/block}
{block name=javascript}
    <script src="../../js/tablica.js"></script>
    <script src="../../js/ajax/problemi.js"></script>
{/block}