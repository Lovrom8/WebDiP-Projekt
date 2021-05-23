<?php
/* Smarty version 3.1.39, created on 2021-05-23 11:55:46
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dionice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aa26a2408424_41875406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f270745a9bb00c2793395d6d81b06768331aa9be' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dionice.tpl',
      1 => 1621763679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa26a2408424_41875406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52148791860aa26a2318920_60624996', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8994166860aa26a23be6f1_89467594', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_52148791860aa26a2318920_60624996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_52148791860aa26a2318920_60624996',
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
class Block_8994166860aa26a23be6f1_89467594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_8994166860aa26a23be6f1_89467594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 id="ajaxDionice" 
                <?php ob_start();
echo $_SESSION['tip'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
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
