<?php
/* Smarty version 3.1.39, created on 2021-04-24 13:49:35
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\postavke.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608405cf8a8fc2_96351201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a973e47039ac26858eadbd23dffe9e5e7dd84a7a' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\postavke.tpl',
      1 => 1619264973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608405cf8a8fc2_96351201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1021691265608405cf8a1961_71831311', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1449100829608405cf8a38c4_19353849', 'sadrzaj');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_1021691265608405cf8a1961_71831311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_1021691265608405cf8a1961_71831311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Postavke<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_1449100829608405cf8a38c4_19353849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_1449100829608405cf8a38c4_19353849',
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
                    <input type="submit" value="Spremi" name="spremi" />
        </form>
<?php
}
}
/* {/block 'sadrzaj'} */
}
