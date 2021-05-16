 {extends file="base.tpl"}
{block name=sadrzaj}
    <form class="form__obrazac" id="obrazac_reg" novalidate method="POST" action="registracija.php">
                    <label for="fname">Ime:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Prezime:</label><br>
                    <input type="text" id="lname" name="lname"><br>
                    <label for="username">Korsničko ime:</label><br>
                    <input type="text" id="username" name="username" required><br>
                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="pwd">Lozinka:</label><br>
                    <input type="password" id="pwd" name="pwd" required><br>
                    <label for="pwdConfirm">Potvrda lozinke:</label><br>
                    <input type="password" id="pwdConfirm" name="pwdConfirm" required><br>
                    <input type="submit" value="Dovrši">
    </form>
{/block}
{block name=javascript}
    <script src="./js/valid/registracija.js"></script>
{/block}

