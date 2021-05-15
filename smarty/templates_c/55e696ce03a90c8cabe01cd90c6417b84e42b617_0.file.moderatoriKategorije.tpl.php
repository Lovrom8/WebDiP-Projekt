<?php
/* Smarty version 3.1.39, created on 2021-05-12 23:04:37
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\moderatoriKategorije.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609c42e57929a7_27773594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e696ce03a90c8cabe01cd90c6417b84e42b617' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\moderatoriKategorije.tpl',
      1 => 1620853048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c42e57929a7_27773594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_399336991609c42e5788420_50983762', "sadrzaj");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1282788841609c42e578b139_78961865', "javascript");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "sadrzaj"} */
class Block_399336991609c42e5788420_50983762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_399336991609c42e5788420_50983762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table id="moderatori">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Korisnicko ime</th>
            <th>Uredi</th>
        </tr>
    </thead>
    </table>
    
    <table id="moderatori2">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Korisnicko ime</th>
            <th>Uredi</th>
        </tr>
    </thead>
    </table>

<?php
}
}
/* {/block "sadrzaj"} */
/* {block "javascript"} */
class Block_1282788841609c42e578b139_78961865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_1282788841609c42e578b139_78961865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var id=<?php echo $_smarty_tpl->tpl_vars['idKat']->value;?>
;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/ajax/moderatori_kategorije.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "javascript"} */
}
