 {extends file="base.tpl"}
{block name=sadrzaj}
    <div>{$greske}</div>
    <form class="form__obrazac" id="obrazac_reg" novalidate method="POST" action="registracija.php">
                    <label for="ime">Ime:</label><br>
                    <input type="text" id="ime " name="ime  "><br>
                    <label for="prezime">Prezime:</label><br>
                    <input type="text" id="prezime" name="prezime"><br>
                    <label for="korIme">Korsničko ime:</label><br>
                    <input type="text" id="korIme" name="korIme" required><br>
                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="lozinka">Lozinka:</label><br>
                    <input type="password" id="lozinka" name="lozinka" required><br>
                    <label for="potvrdaLozinke">Potvrda lozinke:</label><br>
                    <input type="password" id="potvrdaLozinke" name="potvrdaLozinke" required><br>
                    <input type="submit" value="Dovrši">
    </form>
{/block}
{block name=javascript}
    <script src="./js/valid/registracija.js"></script>
{/block}

