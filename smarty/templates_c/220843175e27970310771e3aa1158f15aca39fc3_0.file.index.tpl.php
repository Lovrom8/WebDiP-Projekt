<?php
/* Smarty version 3.1.39, created on 2021-04-24 13:34:56
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608402602e19d0_38872339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220843175e27970310771e3aa1158f15aca39fc3' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\index.tpl',
      1 => 1619263050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608402602e19d0_38872339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1722026487608402602ddef8_38595843', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1732619475608402602e05c7_48214406', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_1722026487608402602ddef8_38595843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_1722026487608402602ddef8_38595843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table id="problemi">
            <thead>
                <tr>
                    <th>Kategorija</th>
                    <th>Broj problema</th>
                </tr>
            </thead>
    </table>

    <table id="dionice">
        <thead>
            <tr>
                <th>Oznaka</th>
                <th>Početna dionica</th>
                <th>Završna dionica</th>
            </tr>
        </thead>
    </table>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_1732619475608402602e05c7_48214406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_1732619475608402602e05c7_48214406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="../../js/ajax/dionice.js" defer><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/ajax/statistika_problema.js" defer><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
