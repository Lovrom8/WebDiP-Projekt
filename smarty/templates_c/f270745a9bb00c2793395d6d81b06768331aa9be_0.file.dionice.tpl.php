<?php
/* Smarty version 3.1.39, created on 2021-05-27 00:03:55
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dionice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aec5cbcfefe5_60633551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f270745a9bb00c2793395d6d81b06768331aa9be' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dionice.tpl',
      1 => 1622066630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aec5cbcfefe5_60633551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56058431560aec5cbcf7253_05738110', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140456566360aec5cbcfcce7_17688935', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_56058431560aec5cbcf7253_05738110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_56058431560aec5cbcf7253_05738110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="filter">
        <label for="polaziste">Polazište: </label>
        <input type="text" id="polaziste" name="polaziste">
        <label for="odrediste">Odredište: </label>
        <input type="text" id="odrediste" name="odrediste">
    </div>

    <table id="dionice">
        <thead>
            <tr>
                <th>Oznaka</th>
                <th>Početna dionica</th>
                <th>Završna dionica</th>
                <th>Kategorija</th>
                <th id="dok">Dokument</th>
                <th id="obil">Obilazak</th>
            </tr>
        </thead>
    </table>

    <?php if ((isset($_SESSION['tip'])) && ($_SESSION['tip'] > 2)) {?>
        <a href="dionicaUredi.php">
            <button>
                Nova dionica
            </button>
        </a>
    <?php }
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_140456566360aec5cbcfcce7_17688935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_140456566360aec5cbcfcce7_17688935',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 id="ajaxDionice" <?php if ((isset($_SESSION['tip'])) && ($_SESSION['tip'] >= 2)) {?> sve="1" <?php } else { ?> sve="0" <?php }?>
            src="../../js/ajax/dionice.js"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block 'javascript'} */
}
