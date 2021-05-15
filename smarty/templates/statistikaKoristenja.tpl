{extends file="base.tpl"}
{block name=naslov}Statistika korištenja{/block}
{block name=css}
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css"/>
{/block}
{block name=sadrzaj}
    <div class="rasponDatuma">
        <label>Od: </label>
        <input type="text" id="od" name="od"><br>
        <label>Do: </label>
        <input type="text" id="do" name="do">
    </div>
    <div class="korisnik">
        <label>Korisnik: </label>
        <input type="text" id="korisnik" name="korisnik">
    </div>
    <table id="statistika">
        <thead>
            <tr>
                <th>Stranica</th>
                <th>Korisnik</th>
                <th>Datum</th>
            </tr>
        </thead>
    </table>
{/block}
{block name=javascript}
    <script src="../js/tablica.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.min.js"></script>
    <script src="js/ajax/statistika_koristenja.js"></script>
{/block}