<?php
/* Smarty version 3.1.39, created on 2021-05-27 11:18:06
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\postavke.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af63ce036e00_82062057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a973e47039ac26858eadbd23dffe9e5e7dd84a7a' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\postavke.tpl',
      1 => 1622107084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60af63ce036e00_82062057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190801633360af63ce030f16_82784632', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53291944260af63ce032074_04521404', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106175696560af63ce0365d7_59336803', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_190801633360af63ce030f16_82784632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_190801633360af63ce030f16_82784632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Postavke<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_53291944260af63ce032074_04521404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_53291944260af63ce032074_04521404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form__obrazac" id="prijava" method="POST">
        <div class="form_naslov">
            <h2>Postavke sustava</h2>
        </div>
        <div class="form_tijelo">
            <label for="trajanjeKolacica">Trajanje kolačića (u danima):</label><br>
            <input type="number" id="trajanjeKolacica" name="trajanjeKolacica" value="<?php echo $_smarty_tpl->tpl_vars['trajanjeKolacica']->value;?>
" required><br>
            <label for="brEl">Broj elemenata po stranici:</label><br>
            <input type="number" id="brEl" name="brEl" value="<?php echo $_smarty_tpl->tpl_vars['brojElPoStranici']->value;?>
" required> <br>
            <label for="pomakVremena">Pomak vremena (u satima):</label><br>
            <input type="number" id="pomakVremena" name="pomakVremena" value="<?php echo $_smarty_tpl->tpl_vars['pomakVremena']->value;?>
"> <br>
            <label for="maxNeuspjesnihPrijava">Broj neuspješnih prijava prije zaključavanja:</label><br>
            <input type="number" id="maxNeuspjesnihPrijava" name="maxNeuspjesnihPrijava" value="<?php echo $_smarty_tpl->tpl_vars['maxNeuspjesnihPrijava']->value;?>
"><br>
            <label for="maxVelicinaDokumenta">Maksimalna veličina dokumenta (u MB):</label><br>
            <input type="number" id="maxVelicinaDokumenta" name="maxVelicinaDokumenta" value="<?php echo $_smarty_tpl->tpl_vars['maxVelicinaDokumenta']->value;?>
"> <br>
            <label for="istekSesije">Istek sesije nakon neaktivnosti (u min):</label><br>
            <input type="number" id="istekSesije" name="istekSesije" value="<?php echo $_smarty_tpl->tpl_vars['istekSesije']->value;?>
"> <br>

            <input type="text" id="datumUvjeta" name="datumUvjeta" value="<?php echo $_smarty_tpl->tpl_vars['datumUvjeta']->value;?>
" hidden> <br>
            <input type="submit" value="Spremi" name="spremi" />
        </div>
    </form>

    <button id="dohvatiPomak">Dohvati pomak vremena</button>
    <button id="resetirajUvjete">Resetiraj uvjete</button>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_106175696560af63ce0365d7_59336803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_106175696560af63ce0365d7_59336803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="../../js/ajax/postavke.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
