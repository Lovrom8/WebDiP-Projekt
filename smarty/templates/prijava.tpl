{extends file="base.tpl"}
{block name=sadrzaj}
   <form class="form__obrazac" id="prijava" method="POST">
                    <label for="korIme">Korisničko ime:</label><br>
                    <input type="text" id="korIme" name="korIme"><br>
                    <label for="lozinka">Lozinka:</label><br>
                    <input type="password" id="lozinka" name="lozinka" required> <br>
                    <label for="zapamti">Zapamti</label><br>
                    <input type="checkbox" id="zapamti" name="zapamti"></br>
                    <button class="g-recaptcha" 
                        data-sitekey="6LehFtIaAAAAAK73hYHeQZekfIH5qgokGqwyeWcj" 
                        data-callback='onSubmit' 
                        data-action='submit'>Submit</button>
    </form>
{/block}
{block name=javascript}
    <script src="../../js/valid/prijava.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
{/block}