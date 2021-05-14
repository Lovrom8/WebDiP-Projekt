<?php
/* Smarty version 3.1.39, created on 2021-05-15 01:50:29
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\obilasci.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609f0cc5acf885_12905960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716e8949acf7efb1be5ebb01df377bbc9391fcd9' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\obilasci.tpl',
      1 => 1621036190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609f0cc5acf885_12905960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148955243609f0cc5acdaa0_74128331', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_595688406609f0cc5ace9b5_92641409', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_594272637609f0cc5acf210_43415581', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_148955243609f0cc5acdaa0_74128331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_148955243609f0cc5acdaa0_74128331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Obilasci<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_595688406609f0cc5ace9b5_92641409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_595688406609f0cc5ace9b5_92641409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   
    <table id="obilasci">
        <thead>
            <tr>
                <th>Dionica</th>
                <th>Datum</th>
                <th>Broj km</th>
            </tr>
        </thead>
    </table>

    <div id="prijedenoKm">
        <span>Ukupno prijeđeno kilometara:</span>
        <span id="ukupnoKm"></span>
    </div>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_594272637609f0cc5acf210_43415581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_594272637609f0cc5acf210_43415581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src='../../js/tablica.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/ajax/obilasci.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
