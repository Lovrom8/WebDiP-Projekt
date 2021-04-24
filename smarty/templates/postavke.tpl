{extends file="base.tpl"}
{block name=naslov}Postavke{/block}
{block name=sadrzaj}
      <form class="form__obrazac" id="prijava" method="POST">
                    <label for="trajanjeKolacica">Trajanje kolačića (u danima):</label><br>
                    <input type="number" id="trajanjeKolacica" name="trajanjeKolacica" value="<?php echo $settings->{'trajanjeKolacica'} ?>" required><br>
                    <label for="brEl">Broj elemenata po stranici:</label><br>
                    <input type="number" id="brEl" name="brEl"  value="<?php echo $settings->{'brojElPoStranici'} ?>" required> <br>
                    <input type="submit" value="Spremi" name="spremi" />
        </form>
{/block}