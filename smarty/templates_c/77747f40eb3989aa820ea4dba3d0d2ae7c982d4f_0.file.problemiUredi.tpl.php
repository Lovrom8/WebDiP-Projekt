<?php
/* Smarty version 3.1.39, created on 2021-05-20 19:42:29
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\problemiUredi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a69f858449e6_97141784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77747f40eb3989aa820ea4dba3d0d2ae7c982d4f' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\problemiUredi.tpl',
      1 => 1621532476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a69f858449e6_97141784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83619395960a69f85835990_46936672', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62867444460a69f858442d0_37229863', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_83619395960a69f85835990_46936672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_83619395960a69f85835990_46936672',
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

            <label for="aktivan">Aktivan:</label>
            <input type="checkbox" id="aktivan" name="aktivan" <?php if ($_smarty_tpl->tpl_vars['aktivan']->value) {?> checked <?php }?>><br>

            <input type="submit" value="Dodaj dionicu" name="Submit" />
        </div>
    </form>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_62867444460a69f858442d0_37229863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_62867444460a69f858442d0_37229863',
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
