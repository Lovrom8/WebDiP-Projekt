<?php
/* Smarty version 3.1.39, created on 2021-05-20 20:09:50
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\kategorijaUredi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a6a5ee4839e9_51698260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eefbed75ce3960e81666e1165d930f614231256e' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\kategorijaUredi.tpl',
      1 => 1621532390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a6a5ee4839e9_51698260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113333828060a6a5ee4787e6_36381061', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98666980760a6a5ee479357_86004500', 'sadrzaj');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_113333828060a6a5ee4787e6_36381061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_113333828060a6a5ee4787e6_36381061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nova kategorija<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_98666980760a6a5ee479357_86004500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_98666980760a6a5ee479357_86004500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form__obrazac" id="nova_kategorija" method="POST">
        <div class="form_naslov">
            <h2>
                <?php if ((isset($_GET['id']))) {?>Uredi kategoriju<?php } else { ?>Nova kategorija<?php }?>
            </h2>
        </div>
        <div class="form_greske"><?php echo $_smarty_tpl->tpl_vars['greske']->value;?>
</div>
        <div class="form_tijelo">
            <input type="text" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['idKat']->value;?>
" hidden><br>
            <label for="kategorija">Naziv kategorije:</label>
            <input type="text" id="kategorija" name="kategorija" value="<?php echo $_smarty_tpl->tpl_vars['nazivKategorije']->value;?>
" required><br>
            <input type="submit" value="Spremi kategoriju" name="Submit" />
        </div>
    </form>
<?php
}
}
/* {/block 'sadrzaj'} */
}
