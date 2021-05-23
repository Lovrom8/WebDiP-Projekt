{extends file="base.tpl"}
{block name="sadrzaj"}
    <label for="ime">Ime: </label>
    <input type="text" id="ime" name="ime">
    <label for="prezime">Prezime: </label>
    <input type="text" id="prezime" name="prezime">

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

    <form class="form__obrazac" id="dodajModeratora" method="POST" action="modDodaj.php">
        <div class="form_naslov">
            <h2>
                Novi moderator
            </h2>
        </div>
        <div class="form_tijelo">
            <input type="text" name="idKat" id="idKat" value="{$idKat}" hidden /><br>
            <label for="idMod">Novi moderator:</label><br>
            <select id="idMod" name="idMod"></select>
            <input type="submit" value="Dodaj moderatora" name="dodajMod" />
        </div>
    </form>
{/block}
{block name="javascript"}
    <script>
        var id={$idKat};
    </script>
    <script src="../../js/tablica.js"></script>
    <script src="../../js/ajax/moderatori.js"></script> 
    <script src="../../js/ajax/moderatori_kategorije.js"></script>
{/block}