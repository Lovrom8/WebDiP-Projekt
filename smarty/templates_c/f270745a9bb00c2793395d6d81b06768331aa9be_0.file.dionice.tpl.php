<?php
/* Smarty version 3.1.39, created on 2021-05-24 01:47:14
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dionice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aae982670bf4_95181378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f270745a9bb00c2793395d6d81b06768331aa9be' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dionice.tpl',
      1 => 1621813631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aae982670bf4_95181378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40199392160aae98265b1a8_87804372', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133893686760aae98266a8f8_24518649', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_40199392160aae98265b1a8_87804372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_40199392160aae98265b1a8_87804372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <label for="polaziste">Polazište: </label>
    <input type="text" id="polaziste" name="polaziste">
    <label for="odrediste">Odredište: </label>
    <input type="text" id="odrediste" name="odrediste">

    <table id="dionice">
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
class Block_133893686760aae98266a8f8_24518649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_133893686760aae98266a8f8_24518649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 id="ajaxDionice" 
                <?php if ((isset($_SESSION['tip'])) && ($_SESSION['tip'] >= 1)) {?>
                    sve="1"
                <?php } else { ?>
                    sve="0"
                <?php }?>
                 src="../../js/ajax/dionice.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
