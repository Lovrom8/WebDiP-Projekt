{extends file="base.tpl"}
{block name="sadrzaj"}
    <table id="moderatori">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Korisnicko ime</th>
            <th>Uredi</th>
        </tr>
    </thead>
    </table>

{/block}
{block name="javascript"}
    <script>
        var id={$idKat};
    </script>
    <script src="../../js/tablica.js"></script>
    <script src="../../js/ajax/moderatori_kategorije.js"></script>
{/block}