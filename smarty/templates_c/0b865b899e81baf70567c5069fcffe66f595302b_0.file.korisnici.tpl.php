<?php
/* Smarty version 3.1.39, created on 2021-05-23 12:07:31
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\korisnici.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aa29631b01f0_40337151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b865b899e81baf70567c5069fcffe66f595302b' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\korisnici.tpl',
      1 => 1621764449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa29631b01f0_40337151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36150849860aa29631ab598_28931286', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57506376560aa29631afac9_62342839', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_36150849860aa29631ab598_28931286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_36150849860aa29631ab598_28931286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <label for="korIme">Korisničko ime: </label>
    <input type="text" id="korIme" name="korIme">

    <label for="samoBlokirani">Samo blokirani: </label>
    <input type="checkbox" id="samoBlokirani" name="samoBlokirani">

    <div><?php echo $_smarty_tpl->tpl_vars['poruke']->value;?>
</div>
    <div><?php echo $_smarty_tpl->tpl_vars['greske']->value;?>
</div>
    <table id="korisnici">
            <thead>
                <tr>
                    <th>Korisničko ime</th>
                    <th>Blokiraj</th>
                    <th>Odblokiraj</th>
                </tr>
            </thead>
    </table>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_57506376560aa29631afac9_62342839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_57506376560aa29631afac9_62342839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/ajax/korisnici.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
