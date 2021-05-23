{extends file="base.tpl"}
{block name=sadrzaj}
    <label for="korIme">Korisničko ime: </label>
    <input type="text" id="korIme" name="korIme">

    <label for="samoBlokirani">Samo blokirani: </label>
    <input type="checkbox" id="samoBlokirani" name="samoBlokirani">

    <div>{$poruke}</div>
    <div>{$greske}</div>
    <table id="korisnici">
            <thead>
                <tr>
                    <th>Korisničko ime</th>
                    <th>Blokiraj</th>
                    <th>Odblokiraj</th>
                </tr>
            </thead>
    </table>
{/block}

{block name=javascript}
        <script src="../../js/tablica.js"></script>
        <script src="../../js/ajax/korisnici.js"></script>
{/block}