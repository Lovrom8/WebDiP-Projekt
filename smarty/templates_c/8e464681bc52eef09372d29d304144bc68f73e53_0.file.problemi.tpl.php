<?php
/* Smarty version 3.1.39, created on 2021-05-25 23:23:36
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\problemi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ad6ad85c6ae8_63215867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e464681bc52eef09372d29d304144bc68f73e53' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\problemi.tpl',
      1 => 1621977814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ad6ad85c6ae8_63215867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10753377460ad6ad85bc4f6_72304250', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182235954960ad6ad85be312_66617309', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189478972160ad6ad85c6053_76685010', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_10753377460ad6ad85bc4f6_72304250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_10753377460ad6ad85bc4f6_72304250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Problemi<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_182235954960ad6ad85be312_66617309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_182235954960ad6ad85be312_66617309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div><?php echo $_smarty_tpl->tpl_vars['greske']->value;?>
</div>
    <div><?php echo $_smarty_tpl->tpl_vars['poruke']->value;?>
</div>

    <label for="dionica">Dionica: </label>
    <input type="text" id="dionica" name="dionica">

    <label for="opis">Opis: </label>
    <input type="text" id="opis" name="opis">

    <table id="problemi">
        <thead>
            <tr>
                <th>Dionica</th>
                <th>Datum</th>
                <th>Opis</th>
                <th>Otvori</th>
                <th>Zatvori</th>
            </tr>
        </thead>
    </table>

    <a href="problemiUredi.php">
        <button>
            Novi problem
        </button>
    </a>
</a>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_189478972160ad6ad85c6053_76685010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_189478972160ad6ad85c6053_76685010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/ajax/problemi.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
