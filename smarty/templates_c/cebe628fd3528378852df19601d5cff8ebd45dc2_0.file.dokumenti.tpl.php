<?php
/* Smarty version 3.1.39, created on 2021-05-01 13:05:56
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dokumenti.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608d3614abf3e1_29658243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cebe628fd3528378852df19601d5cff8ebd45dc2' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dokumenti.tpl',
      1 => 1619867151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608d3614abf3e1_29658243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1214487817608d3614ab2aa1_87957121', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1408196691608d3614abd854_99449049', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_1214487817608d3614ab2aa1_87957121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_1214487817608d3614ab2aa1_87957121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table id="dokumenti">
        <thead>
            <tr>
                <th>Naslov</th>
                <th>Status</th>
                <th>Poveznica</th>
                <?php if ($_smarty_tpl->tpl_vars['svi']->value) {?>
                    <th>Potvrdi</th>
                    <th>Odbij</th>
                <?php }?>
            </tr>
        </thead>
    </table>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_1408196691608d3614abd854_99449049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_1408196691608d3614abd854_99449049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo '<script'; ?>
 src="../../js/ajax/dokumenti.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
