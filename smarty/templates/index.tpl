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
                <th>Kategorija</th>
                <th id="dok" style="display:none;">Dokument</th>
                <th id="obil">Obilazak</th>
            </tr>
        </thead>
    </table>
{/block}

{block name=javascript}
        <script src="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js"></script>
        <script id="ajaxDionice" 
                {if $svi == 1}
                    sve="1"
                {else}
                    sve="0"
                {/if}
                 src="../../js/ajax/dionice.js"></script>
        <script src="../../js/ajax/statistika_problema.js"></script>
{/block}