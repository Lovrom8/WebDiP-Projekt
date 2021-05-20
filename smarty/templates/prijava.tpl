{extends file="base.tpl"}
{block name=sadrzaj}
   <form class="form__obrazac" id="prijava" method="POST">
        <div class="form_naslov">
            <h2>Prijava</h2>
        </div>
        <div class="form_greske">{$greske}</div>
        <div class="form_tijelo">
            <label for="korIme">Korisničko ime:</label><br>
            <input type="text" id="korIme" name="korIme" value={$korIme}><br>
            <label for="lozinka">Lozinka:</label><br>
            <input type="password" id="lozinka" name="lozinka" required> <br>
            <label for="zapamti">Zapamti:</label>
            <input type="checkbox" id="zapamti" name="zapamti">
            <button class="g-recaptcha" 
                data-sitekey="6LehFtIaAAAAAK73hYHeQZekfIH5qgokGqwyeWcj" 
                data-callback='onSubmit' 
                data-action='submit'>Prijavi se</button>
        </div>
        <div class="form_podnozje">
            <a href="zaboravljenaLozinka.php">Zaboravljena lozinka</a>
        </div>
    </form>
{/block}
{block name=javascript}
    <script src="../../js/valid/prijava.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
{/block}