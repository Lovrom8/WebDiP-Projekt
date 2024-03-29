<?php
/* Smarty version 3.1.39, created on 2021-05-27 20:25:56
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dionice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60afe434cc9fe3_24028675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f270745a9bb00c2793395d6d81b06768331aa9be' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dionice.tpl',
      1 => 1622139952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60afe434cc9fe3_24028675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91612569960afe434ca6868_25443539', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33245612960afe434cc75e5_05699610', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_91612569960afe434ca6868_25443539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_91612569960afe434ca6868_25443539',
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
        <a href="dioniceMod.php">
            <button>
                Uredi dionice
            </button>
        </a>
    <?php }
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_33245612960afe434cc75e5_05699610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_33245612960afe434cc75e5_05699610',
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
