<?php
/* Smarty version 3.1.39, created on 2021-05-09 19:51:58
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\obilasci.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6098213e585f91_20494139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716e8949acf7efb1be5ebb01df377bbc9391fcd9' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\obilasci.tpl',
      1 => 1620136680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6098213e585f91_20494139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182404866098213e57e851_99438165', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9262886156098213e582ba5_36214092', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1143664266098213e584876_18907260', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_182404866098213e57e851_99438165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_182404866098213e57e851_99438165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Obilasci<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_9262886156098213e582ba5_36214092 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_9262886156098213e582ba5_36214092',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
    <table id="obilasci">
        <thead>
            <tr>
                <th>Dionica</th>
                <th>Datum</th>
            </tr>
        </thead>
    </table>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_1143664266098213e584876_18907260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_1143664266098213e584876_18907260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="js/ajax/obilasci.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
