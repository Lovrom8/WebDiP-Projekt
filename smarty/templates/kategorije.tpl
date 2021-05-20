{extends file="base.tpl"}
{block name=naslov}Uredi kategoriju{/block}
{block name=sadrzaj}
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
     