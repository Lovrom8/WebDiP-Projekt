{extends file="base.tpl"}
{block name=sadrzaj}
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
      <script src="../../js/ajax/dokumenti.js"></script>
{/block}