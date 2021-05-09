<?php
/* Smarty version 3.1.39, created on 2021-04-24 21:18:57
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\kategorijaDodaj.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60846f21f01481_51402323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e9c6d6bf9caf85a55f5b76c3431ed46223c1884' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\kategorijaDodaj.tpl',
      1 => 1619291933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60846f21f01481_51402323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142894300660846f21efdea2_09844131', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211950951560846f21f000e2_60801409', 'sadrzaj');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_142894300660846f21efdea2_09844131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_142894300660846f21efdea2_09844131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nova kategorija<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_211950951560846f21f000e2_60801409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_211950951560846f21f000e2_60801409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <form class="form__obrazac" id="nova_kategorija" method="POST">
                    <label for="kategorija">Naziv kategorije:</label>
                    <input type="text" id="kategorija" name="kategorija" required><br>
                    <input type="submit" value="Dodaj kategoriju" name="Submit" />
         </form>
<?php
}
}
/* {/block 'sadrzaj'} */
}
