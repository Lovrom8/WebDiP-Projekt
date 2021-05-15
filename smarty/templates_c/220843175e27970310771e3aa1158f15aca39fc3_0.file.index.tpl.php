<?php
/* Smarty version 3.1.39, created on 2021-05-15 01:28:02
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609f078243e3f3_67339198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220843175e27970310771e3aa1158f15aca39fc3' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\index.tpl',
      1 => 1621034879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609f078243e3f3_67339198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1974296624609f0782437b16_79692136', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2061743142609f0782438ed9_99775737', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_1974296624609f0782437b16_79692136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_1974296624609f0782437b16_79692136',
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
                <th>Kategorija</th>
                <th id="dok" style="display:none;">Dokument</th>
                <th id="obil">Obilazak</th>
            </tr>
        </thead>
    </table>

    <table id="dionice2">
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

    <table id="dionice_test">
            <thead>
                <tr>
                    <th>Oznaka</th>
                    <th>Početna dionica</th>
                    <th>Broj kilometara</th>
                </tr>
            </thead>
    </table>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_2061743142609f0782438ed9_99775737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_2061743142609f0782438ed9_99775737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.datatables.net/rowgroup/1.1.2/js/dataTables.rowGroup.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 id="ajaxDionice" 
                <?php if ($_smarty_tpl->tpl_vars['svi']->value == 1) {?>
                    sve="1"
                <?php } else { ?>
                    sve="0"
                <?php }?>
                 src="../../js/ajax/dionice.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/ajax/statistika_problema.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
