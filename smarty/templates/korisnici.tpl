{extends file="base.tpl"}
{block name=sadrzaj}
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