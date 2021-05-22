<?php
/* Smarty version 3.1.39, created on 2021-05-22 22:28:59
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\kategorije.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a9698b5d6094_56785692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f08f5b73cd7ae9210dd0cb29fed7d78991098797' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\kategorije.tpl',
      1 => 1621715132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a9698b5d6094_56785692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114645667060a9698b5d3891_33097600', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118493506160a9698b5d4e18_32222767', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_326283160a9698b5d5720_59424466', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_114645667060a9698b5d3891_33097600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_114645667060a9698b5d3891_33097600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Uredi kategoriju<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_118493506160a9698b5d4e18_32222767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_118493506160a9698b5d4e18_32222767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <label for="kategorija">Kategorija: </label>
    <input type="text" id="kategorija" name="kategorija">

    <table id="kategorije">
        <thead>
            <tr>
                <th>Naziv kategorije</th>
                <th>Uredi</th>
                <th>Moderatori</th>
            </tr>
        </thead>
    </table>

    <a href="kategorijaUredi.php">
        <button>
            Nova kategorija
        </button>
    </a>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_326283160a9698b5d5720_59424466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_326283160a9698b5d5720_59424466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/ajax/kategorije.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
