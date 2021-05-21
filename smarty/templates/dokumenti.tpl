{extends file="base.tpl"}
{block name=sadrzaj}
    <label for="vrsta_dokumenta">Vrsta dokumenta:</label>
    <select id="vrsta_dokumenta">
      <option value="0">Odaberi...</option>
    </select><br>
    <label for="po_stranici">Dokumenata po stranici: </label>
    <input type="number" value=5 name="po_stranici" id="po_stranici"/><br>
    
    <table id="dokumenti">
        <thead>
            <tr>
                <th>Naslov</th>
                <th>Status</th>
                <th>Poveznica</th>
                {if $svi}
                    <th>Potvrdi</th>
                    <th>Odbij</th>
                {/if}
            </tr>
        </thead>
    </table>
{/block}

{block name=javascript}
      <script src="../../js/general.js"></script>
      <script src="../../js/tablica.js"></script>
      <script src="../../js/ajax/dokumenti.js"></script>
{/block}