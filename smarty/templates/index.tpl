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
    <button id="generirajPDF">Generiraj PDF</button>

    <table id="dionice2">
    <thead>
        <tr>
            <th>Oznaka</th>
            <th>Početna dionica</th>
            <th>Završna dionica</th>
            <th>Kategorija</th>
            <th id="dok">Dokument</th>
            <th id="obil">Obilazak</th>
        </tr>
    </thead>
</table>
{/block}

{block name=javascript}
        <script src="../../js/uvjeti.js"></script>
        <script src="../../js/tablica.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
        <script src="https://unpkg.com/jspdf-autotable@3.5.14/dist/jspdf.plugin.autotable.js"></script>
        <script src="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js"></script>
        <script id="ajaxDionice" 
               
                 src="../../js/ajax/dionice.js"></script>
        <script src="../../js/ajax/statistika_problema.js"></script>
{/block}