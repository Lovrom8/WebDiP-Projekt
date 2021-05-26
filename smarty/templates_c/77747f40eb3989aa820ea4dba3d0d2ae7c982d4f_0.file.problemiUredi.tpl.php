<?php
/* Smarty version 3.1.39, created on 2021-05-25 23:32:59
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\problemiUredi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ad6d0bdf2c95_30655421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77747f40eb3989aa820ea4dba3d0d2ae7c982d4f' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\problemiUredi.tpl',
      1 => 1621977860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ad6d0bdf2c95_30655421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92029876160ad6d0bdd1d95_24767815', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25807132160ad6d0bdf2263_60774333', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_92029876160ad6d0bdd1d95_24767815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_92029876160ad6d0bdd1d95_24767815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

    <form class="form__obrazac" id="novi_problem" method="POST">
        <div class="form_naslov">
            <h2>
                <?php if ((isset($_GET['id']))) {?>Uredi prijavu<?php } else { ?>Nova prijava<?php }?>
            </h2>
        </div>
        <div class="form_greske"><?php echo $_smarty_tpl->tpl_vars['greske']->value;?>
</div>
        <div class="form_tijelo">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

            <label for="dionica">Dionica:</label>
            <?php echo smarty_function_html_options(array('name'=>'dionica','options'=>$_smarty_tpl->tpl_vars['dionice']->value,'selected'=>$_smarty_tpl->tpl_vars['idDionica']->value),$_smarty_tpl);?>
<br>

            <label for="dionica">Opis:</label>
            <textarea name="opis" rows="5" cols="30" minlength="10" maxlength="1000"><?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</textarea><br>

            <label for="datum">Datum:</label>
            <input type="date" id="datum" name="datum" value="<?php echo $_smarty_tpl->tpl_vars['datum']->value;?>
"><br>

            <label for="vrijeme">Vrijeme:</label>
            <input type="time" id="vrijeme" name="vrijeme" value="<?php echo $_smarty_tpl->tpl_vars['vrijeme']->value;?>
"><br>

            <label for="aktivan">Aktivna:</label>
            <input type="checkbox" id="aktivan" name="aktivan" <?php if ($_smarty_tpl->tpl_vars['aktivan']->value) {?> checked <?php }?>><br>

            <input type="submit" value="Dodaj prijavu" name="Submit" />
        </div>
    </form>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_25807132160ad6d0bdf2263_60774333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_25807132160ad6d0bdf2263_60774333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="../../js/ajax/problemi.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
