{extends file="base.tpl"}
{block name=naslov}Uredi kategoriju{/block}
{block name=sadrzaj}
    <label for="kategorija">Kategorija: </label>
    <input type="text" id="kategorija" name="kategorija">

    <table id="kategorije">
        <thead>
            <tr>
                <th>Naziv kategorije</th>
                <th>Uredi</th>
                <th>Moderatori</th>
            </tr>
        </thead>
    </table>

    <a href="kategorijaUredi.php">
        <button>
            Nova kategorija
        </button>
    </a>
{/block}
{block name=javascript}
    <script src="../../js/tablica.js"></script>
    <script src="../../js/ajax/kategorije.js"></script>
{/block}