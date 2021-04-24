{extends file="base.tpl"}
{block name=sadrzaj}
    <table id="problemi">
            <thead>
                <tr>
                    <th>Kategorija</th>
                    <th>Broj problema</th>
                </tr>
            </thead>
    </table>

    <table id="dionice">
        <thead>
            <tr>
                <th>Oznaka</th>
                <th>Početna dionica</th>
                <th>Završna dionica</th>
            </tr>
        </thead>
    </table>
{/block}

{block name=javascript}
        <script src="../../js/ajax/dionice.js" defer></script>
        <script src="../../js/ajax/statistika_problema.js" defer></script>
{/block}