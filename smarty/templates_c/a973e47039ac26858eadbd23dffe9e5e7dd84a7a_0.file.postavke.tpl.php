<?php
/* Smarty version 3.1.39, created on 2021-05-18 11:31:52
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\postavke.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a38988246251_25094623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a973e47039ac26858eadbd23dffe9e5e7dd84a7a' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\postavke.tpl',
      1 => 1621330228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a38988246251_25094623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93209706460a3898820a9f4_84677774', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177561947160a3898820b621_68357152', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42284369660a38988245359_85594716', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_93209706460a3898820a9f4_84677774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_93209706460a3898820a9f4_84677774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Postavke<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_177561947160a3898820b621_68357152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_177561947160a3898820b621_68357152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <form class="form__obrazac" id="prijava" method="POST">
                    <label for="trajanjeKolacica">Trajanje kolačića (u danima):</label><br>
                    <input type="number" id="trajanjeKolacica" name="trajanjeKolacica" value="<?php echo $_smarty_tpl->tpl_vars['trajanjeKolacica']->value;?>
" required><br>
                    <label for="brEl">Broj elemenata po stranici:</label><br>
                    <input type="number" id="brEl" name="brEl"  value="<?php echo $_smarty_tpl->tpl_vars['brojElPoStranici']->value;?>
" required> <br>
                    <label for="pomakVremena">Pomak vremena (u satima):</label><br>
                    <input type="number" id="pomakVremena" name="pomakVremena"  value="<?php echo $_smarty_tpl->tpl_vars['pomakVremena']->value;?>
" > <br>
                    <label for="maxNeuspjesnihPrijava">Broj neuspješnih prijava prije zaključavanja:</label><br>
                    <input type="number" id="maxNeuspjesnihPrijava" name="maxNeuspjesnihPrijava"  value="<?php echo $_smarty_tpl->tpl_vars['maxNeuspjesnihPrijava']->value;?>
" > <br>
                    <label for="maxVelicinaDokumenta">Maksimalna veličina dokumenta (u MB):</label><br>
                    <input type="number" id="maxVelicinaDokumenta" name="maxVelicinaDokumenta"  value="<?php echo $_smarty_tpl->tpl_vars['maxVelicinaDokumenta']->value;?>
" > <br>

                    <input type="text" id="datumUvjeta" name="datumUvjeta" value="<?php echo $_smarty_tpl->tpl_vars['datumUvjeta']->value;?>
" hidden> <br>
                    <input type="submit" value="Spremi" name="spremi" />
        </form>

        <button id="dohvatiPomak">Dohvati pomak vremena</button>
        <button id="resetirajUvjete">Resetiraj uvjete</button>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_42284369660a38988245359_85594716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_42284369660a38988245359_85594716',
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
