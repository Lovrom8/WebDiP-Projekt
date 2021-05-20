<?php
/* Smarty version 3.1.39, created on 2021-05-16 13:13:52
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\moderatoriKategorije.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a0fe70cd2af6_83201873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e696ce03a90c8cabe01cd90c6417b84e42b617' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\moderatoriKategorije.tpl',
      1 => 1621163631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a0fe70cd2af6_83201873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73398140160a0fe70ccea45_90954502', "sadrzaj");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106714926460a0fe70ccf774_21348712', "javascript");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "sadrzaj"} */
class Block_73398140160a0fe70ccea45_90954502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_73398140160a0fe70ccea45_90954502',
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

<?php
}
}
/* {/block "sadrzaj"} */
/* {block "javascript"} */
class Block_106714926460a0fe70ccf774_21348712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_106714926460a0fe70ccf774_21348712',
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
