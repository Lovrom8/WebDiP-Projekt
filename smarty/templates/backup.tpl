{extends file="base.tpl"}
{block name=sadrzaj}
      <form action="backup.php?op" method="GET">
       <button id="stvoriBackup">Stvori backup</button>
      </form> <br>

      <form action="backup.php" method=POST>
            <label for="skripta">SQL skripta:</label>
            {html_options name=skripta options=$skripte} <br>

            <button id="povratiBackup">Povrati backup</button>
      </form>
{/block}

{block name=javascript}
      <script src="../../js/dokumentForma.js"></script>
{/block}