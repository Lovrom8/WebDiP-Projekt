 {extends file="base.tpl"}
{block name=sadrzaj}
    <form class="form__obrazac" id="obrazac_reg" novalidate method="POST" action="registracija.php">
        <div class="form_naslov">
            <h2>Registracija</h2>
        </div>
        <div class="form_greske">{$greske}</div>
        <div class="form_tijelo">
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
        </div>
    </form>
{/block}
{block name=javascript}
    <script src="./js/valid/registracija.js"></script>
{/block}

