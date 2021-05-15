{extends file="base.tpl"}
{block name=naslov}Obilasci{/block}
{block name=sadrzaj}
   
    <table id="obilasci">
        <thead>
            <tr>
                <th>Dionica</th>
                <th>Datum</th>
                <th>Broj km</th>
            </tr>
        </thead>
    </table>

    <div id="prijedenoKm">
        <span>Ukupno prijeđeno kilometara:</span>
        <span id="ukupnoKm"></span>
    </div>
{/block}
{block name=javascript}
    <script src='../../js/tablica.js'></script>
    <script src="../../js/ajax/obilasci.js"></script>
{/block}