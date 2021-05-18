<?php
/* Smarty version 3.1.39, created on 2021-05-18 11:11:48
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\resetirajLozinku.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a384d49361a8_31038178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1321b02fdceea523cf6b4438f0013ea8c2cc45c5' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\resetirajLozinku.tpl',
      1 => 1621326385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a384d49361a8_31038178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126630004160a384d4931a29_02622749', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77083445760a384d4932bd5_13985784', 'sadrzaj');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_126630004160a384d4931a29_02622749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_126630004160a384d4931a29_02622749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Resetiranje lozinke<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_77083445760a384d4932bd5_13985784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_77083445760a384d4932bd5_13985784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div>
            <?php echo $_smarty_tpl->tpl_vars['poruka']->value;?>

        </div>
<?php
}
}
/* {/block 'sadrzaj'} */
}
