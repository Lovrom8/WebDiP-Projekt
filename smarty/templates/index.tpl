{extends file="base.tpl"}
{block name=sadrzaj}
    <h2>Statistika problema</h2>

    <label for="kategorija">Kategorija: </label>
    <input type="text" id="kategorija" name="kategorija">
    <label for="minProblema">Problema više od: </label>
    <input type="number" id="minProblema" name="minProblema">

    <table id="problemi">
            <thead>
                <tr>
                    <th>Kategorija</th>
                    <th>Broj problema</th>
                </tr>
            </thead>
    </table>
    <button id="generirajPDF">Generiraj PDF</button>
    <button id="isprintaj">Isprintaj</button>
    <div class="grafContainer">
        <canvas id="grafStatistike"></canvas>
    </div>
</table>
<div class="pomoc" id="pomoc">
    <div id="pomocSadrzaj">Ovo je sadrzaj pomoći...</div>
    <button id="prethodnaStranicaPomoc">Prethodna stranica</button>
    <button id="sljedecaStranicaPomoc">Sljedeća stranica</button>
    <button id="ugasiPomoc">Ugasi pomoć</button>
</div>
{/block}

{block name=javascript}
        <script src="../../js/uvjeti.js"></script>
        <script src="../../js/tablica.js"></script>
        <script src="../../js/grafovi.js"></script>
        <script src="../../js/pomoc.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
        <script src="https://unpkg.com/jspdf-autotable@3.5.14/dist/jspdf.plugin.autotable.js"></script>
        <script src="../../js/ajax/statistika_problema.js"></script>
{/block}