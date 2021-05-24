{extends file="base.tpl"}
{block name=sadrzaj}
    <label for="polaziste">Polazište: </label>
    <input type="text" id="polaziste" name="polaziste">
    <label for="odrediste">Odredište: </label>
    <input type="text" id="odrediste" name="odrediste">

    <table id="dionice">
    <thead>
        <tr>
            <th>Oznaka</th>
            <th>Početna dionica</th>
            <th>Završna dionica</th>
            <th>Kategorija</th>
            <th id="dok">Dokument</th>
            <th id="obil">Obilazak</th>
        </tr>
    </thead>
</table>

{if isset($smarty.session.tip) and ( $smarty.session.tip > 2)}
    <a href="dionicaUredi.php">
        <button>
            Nova dionica
        </button>
    </a>
{/if}
{/block}

{block name=javascript}
        <script src="../../js/tablica.js"></script>
        <script id="ajaxDionice" 
                {if isset($smarty.session.tip) && ($smarty.session.tip >= 2)}
                    sve="1"
                {else}
                    sve="0"
                {/if}
                 src="../../js/ajax/dionice.js"></script>
{/block}