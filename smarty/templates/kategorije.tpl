{extends file="base.tpl"}
{block name=naslov}Uredi kategoriju{/block}
{block name=sadrzaj}
        <table id="kategorije">
                <thead>
                    <tr>
                        <th>Naziv kategorije</th>
                        <th>Moderatori</th>
                    </tr>
                </thead>
        </table>

        <form action="kategorijaDodaj.php">
            <input type="submit" value="Nova kategorija" />
        </form>
{/block}      
{block name=javascript} 
    <script src="../../js/ajax/kategorije.js"></script>
{/block}
     