<?php
/* Smarty version 3.1.39, created on 2021-05-21 15:50:34
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\prazno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7baaa473121_01342941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57d3183739c8726f51667ef4a2a0c0ea47d7f8c1' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\prazno.tpl',
      1 => 1621604968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7baaa473121_01342941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17526743260a7baaa3d78e8_14027112', 'sadrzaj');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_17526743260a7baaa3d78e8_14027112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_17526743260a7baaa3d78e8_14027112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div>
            <?php echo $_smarty_tpl->tpl_vars['uspjeh']->value;?>

        </div>
        <div>
            <?php echo $_smarty_tpl->tpl_vars['greske']->value;?>

        </div>
<?php
}
}
/* {/block 'sadrzaj'} */
}
