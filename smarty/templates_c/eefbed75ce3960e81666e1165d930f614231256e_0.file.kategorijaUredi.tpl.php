<?php
/* Smarty version 3.1.39, created on 2021-05-19 11:58:14
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\kategorijaUredi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a4e1362c4503_09533907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eefbed75ce3960e81666e1165d930f614231256e' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\kategorijaUredi.tpl',
      1 => 1621418290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a4e1362c4503_09533907 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33650154960a4e1362668d1_98770678', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199732947360a4e136267d72_64526586', 'sadrzaj');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_33650154960a4e1362668d1_98770678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_33650154960a4e1362668d1_98770678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nova kategorija<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_199732947360a4e136267d72_64526586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_199732947360a4e136267d72_64526586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <div><?php echo $_smarty_tpl->tpl_vars['greske']->value;?>
</div>
         <div><?php echo $_smarty_tpl->tpl_vars['poruke']->value;?>
</div>
         <form class="form__obrazac" id="nova_kategorija" method="POST">
                    <label for="kategorija">Naziv kategorije:</label>
                    <input type="text" id="kategorija" name="kategorija" value="<?php echo $_smarty_tpl->tpl_vars['nazivKategorije']->value;?>
" required><br>
                    <input type="submit" value="Spremi kategoriju" name="Submit" />
         </form>
<?php
}
}
/* {/block 'sadrzaj'} */
}
