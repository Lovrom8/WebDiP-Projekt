{extends file="base.tpl"}
{block name=naslov}Problemi{/block}
{block name=sadrzaj}
    <table id="problemi">
        <thead>
            <tr>
                <th>Dionica</th>
                <th>Datum</th>
                <th>Opis</th>
            </tr>
        </thead>
    </table>
{/block}
{block name=javascript}
    <script src="js/ajax/problemi.js"></script>
{/block}