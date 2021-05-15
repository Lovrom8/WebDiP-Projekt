<?php
/* Smarty version 3.1.39, created on 2021-05-10 10:23:43
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\kategorijaUredi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6098ed8fc1aa41_53130595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eefbed75ce3960e81666e1165d930f614231256e' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\kategorijaUredi.tpl',
      1 => 1620634550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6098ed8fc1aa41_53130595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4913760476098ed8fc12fb7_92041378', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1924427166098ed8fc15712_64759457', 'sadrzaj');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_4913760476098ed8fc12fb7_92041378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_4913760476098ed8fc12fb7_92041378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Uredi kategoriju<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_1924427166098ed8fc15712_64759457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_1924427166098ed8fc15712_64759457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <form class="form__obrazac" id="nova_kategorija" method="POST">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                    <label for="kategorija">Naziv kategorije:</label>
                    <input type="text" id="kategorija" name="kategorija" value="<?php echo $_smarty_tpl->tpl_vars['nazivKategorije']->value;?>
" required><br>
                    <input type="submit" value="Dodaj kategoriju" name="Submit" />
         </form>
<?php
}
}
/* {/block 'sadrzaj'} */
}
