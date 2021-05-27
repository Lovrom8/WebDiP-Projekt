<?php
/* Smarty version 3.1.39, created on 2021-05-27 20:30:14
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dioniceMod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60afe536bf4816_69556850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15e7afb2b6f129136e1480ecaa53a48424101161' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dioniceMod.tpl',
      1 => 1622140145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60afe536bf4816_69556850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70162383960afe536bf0397_52823378', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15449511760afe536bf4337_27483663', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_70162383960afe536bf0397_52823378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_70162383960afe536bf0397_52823378',
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
                <th>Uredi</th>
            </tr>
        </thead>
    </table>

    <?php if ((isset($_SESSION['tip'])) && ($_SESSION['tip'] > 2)) {?>
        <a href="dionicaUredi.php">
            <button>
                Nova dionica
            </button>
        </a>
    <?php }
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_15449511760afe536bf4337_27483663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_15449511760afe536bf4337_27483663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/ajax/dioniceMod.js"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block 'javascript'} */
}
