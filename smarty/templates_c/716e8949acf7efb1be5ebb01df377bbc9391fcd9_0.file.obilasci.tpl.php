<?php
/* Smarty version 3.1.39, created on 2021-05-23 01:01:58
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\obilasci.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a98d66a16339_91584322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716e8949acf7efb1be5ebb01df377bbc9391fcd9' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\obilasci.tpl',
      1 => 1621724517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a98d66a16339_91584322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96282596260a98d66a13e78_13867634', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209520155460a98d66a151a8_66828484', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173419309860a98d66a15b56_34913840', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_96282596260a98d66a13e78_13867634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_96282596260a98d66a13e78_13867634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Obilasci<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_209520155460a98d66a151a8_66828484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_209520155460a98d66a151a8_66828484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
    <label for="oznaka">Oznaka: </label>
    <input type="text" id="oznaka" name="oznaka">

    <label for="brojKilometara">Više od kilometara: </label>
    <input type="number" id="brojKilometara" name="brojKilometara">

    <table id="obilasci">
        <thead>
            <tr>
                <th>Dionica</th>
                <th>Datum</th>
                <th>Broj km</th>
            </tr>
        </thead>
    </table>

    <div id="prijedenoKm">
        <span>Ukupno prijeđeno kilometara:</span>
        <span id="ukupnoKm"></span>
    </div>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_173419309860a98d66a15b56_34913840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_173419309860a98d66a15b56_34913840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src='../../js/tablica.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/ajax/obilasci.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
