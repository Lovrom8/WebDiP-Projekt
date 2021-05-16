<?php
/* Smarty version 3.1.39, created on 2021-05-16 10:34:41
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\problemi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a0d921340525_87410182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e464681bc52eef09372d29d304144bc68f73e53' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\problemi.tpl',
      1 => 1621154078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a0d921340525_87410182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201374994160a0d921293e22_32953663', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31733226960a0d921295293_86865372', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58772462960a0d92133f3e1_07289964', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_201374994160a0d921293e22_32953663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_201374994160a0d921293e22_32953663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Problemi<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_31733226960a0d921295293_86865372 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_31733226960a0d921295293_86865372',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div><?php echo $_smarty_tpl->tpl_vars['greske']->value;?>
</div>
    <div><?php echo $_smarty_tpl->tpl_vars['poruke']->value;?>
</div>
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
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_58772462960a0d92133f3e1_07289964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_58772462960a0d92133f3e1_07289964',
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
