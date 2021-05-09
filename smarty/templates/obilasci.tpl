{extends file="base.tpl"}
{block name=naslov}Obilasci{/block}
{block name=sadrzaj}
   
    <table id="obilasci">
        <thead>
            <tr>
                <th>Dionica</th>
                <th>Datum</th>
            </tr>
        </thead>
    </table>
{/block}
{block name=javascript}
    <script src="js/ajax/obilasci.js"></script>
{/block}