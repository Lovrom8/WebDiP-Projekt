<?php
/* Smarty version 3.1.39, created on 2021-05-04 23:37:21
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\backup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6091be919e3545_35844683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5abeddb6883c8c849ebdb98124292f475fb8217' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\backup.tpl',
      1 => 1620164083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6091be919e3545_35844683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18243294726091be919dac18_57163285', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14689501176091be919e0803_60894722', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_18243294726091be919dac18_57163285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_18243294726091be919dac18_57163285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_14689501176091be919e0803_60894722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_14689501176091be919e0803_60894722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo '<script'; ?>
 src="../../js/dokumentForma.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
