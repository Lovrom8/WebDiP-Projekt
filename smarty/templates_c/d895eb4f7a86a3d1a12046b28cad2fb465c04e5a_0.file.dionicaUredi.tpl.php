<?php
/* Smarty version 3.1.39, created on 2021-05-10 11:21:00
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dionicaUredi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6098fafc4f5d95_15502866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd895eb4f7a86a3d1a12046b28cad2fb465c04e5a' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dionicaUredi.tpl',
      1 => 1620638455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6098fafc4f5d95_15502866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5306621606098fafc4e5b69_34317122', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16790992996098fafc4e7cf5_80265042', 'css');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5596819976098fafc4e96d7_38084696', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6913193816098fafc4f49b6_54287587', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_5306621606098fafc4e5b69_34317122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_5306621606098fafc4e5b69_34317122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nova dionica<?php
}
}
/* {/block 'naslov'} */
/* {block 'css'} */
class Block_16790992996098fafc4e7cf5_80265042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_16790992996098fafc4e7cf5_80265042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php
}
}
/* {/block 'css'} */
/* {block 'sadrzaj'} */
class Block_5596819976098fafc4e96d7_38084696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_5596819976098fafc4e96d7_38084696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form class="form__obrazac" id="nova_dionica" method="POST">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

                    <label for="kategorija">Kategorija:</label>
                    <select id="kategorija" name="kategorija"></select><br>
                    <label for="oznaka">Oznaka:</label><br>
                    <input type="text" id="oznaka" name="oznaka" value="<?php echo $_smarty_tpl->tpl_vars['oznaka']->value;?>
" required><br>
                    <label for="odrediste">Odredište:</label><br>
                    <input type="text" id="odrediste" name="odrediste" value="<?php echo $_smarty_tpl->tpl_vars['odrediste']->value;?>
" required> <br>
                    <label for="polaziste">Polazište:</label><br>
                    <input type="text" id="polaziste" name="polaziste" value="<?php echo $_smarty_tpl->tpl_vars['polaziste']->value;?>
" required> <br>
                    <label for="broj_km">Broj kilometara:</label><br>
                    <input type="number" id="broj_km" name="broj_km" value="<?php echo $_smarty_tpl->tpl_vars['brojKm']->value;?>
"  required> <br>
                    <label for="otvorena">Otvorena:</label>
                    <input type="checkbox" id="otvorena" name="otvorena" <?php if ($_smarty_tpl->tpl_vars['otvorena']->value == 1) {?> checked <?php }?>> <br>
                    <input type="submit" value="Dodaj dionicu" name="Submit" />
        </form>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_6913193816098fafc4f49b6_54287587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_6913193816098fafc4f49b6_54287587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="../../js/ajax/kategorije.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/ajax/gradovi.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
