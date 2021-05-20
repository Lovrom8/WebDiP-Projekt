<?php
/* Smarty version 3.1.39, created on 2021-05-16 15:48:13
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\backup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a1229d7afa16_80609465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5abeddb6883c8c849ebdb98124292f475fb8217' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\backup.tpl',
      1 => 1621172892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a1229d7afa16_80609465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92372934760a1229d7a7d46_14981763', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169094079660a1229d7af2a3_32354828', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_92372934760a1229d7a7d46_14981763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_92372934760a1229d7a7d46_14981763',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

      <form action="backup.php?op" method="GET">
       <button id="stvoriBackup">Stvori backup</button>
      </form> <br>

      <form action="backup.php" method=POST>
            <label for="skripta">SQL skripta:</label>
            <?php echo smarty_function_html_options(array('name'=>'skripta','options'=>$_smarty_tpl->tpl_vars['skripte']->value),$_smarty_tpl);?>
 <br>

            <button id="povratiBackup">Povrati backup</button>
      </form>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_169094079660a1229d7af2a3_32354828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_169094079660a1229d7af2a3_32354828',
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
