<?php
/* Smarty version 3.1.39, created on 2021-05-26 11:09:01
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dionicaUredi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ae102d6efc68_37796730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd895eb4f7a86a3d1a12046b28cad2fb465c04e5a' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dionicaUredi.tpl',
      1 => 1621977511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ae102d6efc68_37796730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201992050760ae102d5ad1b6_69413685', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32980618460ae102d5ae967_71236482', 'css');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145073056860ae102d5af239_01132535', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115922653660ae102d6ef387_28199608', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_201992050760ae102d5ad1b6_69413685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_201992050760ae102d5ad1b6_69413685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nova dionica<?php
}
}
/* {/block 'naslov'} */
/* {block 'css'} */
class Block_32980618460ae102d5ae967_71236482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_32980618460ae102d5ae967_71236482',
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
class Block_145073056860ae102d5af239_01132535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_145073056860ae102d5af239_01132535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form class="form__obrazac" id="nova_dionica" method="POST">
                <div class="form_naslov">
                        <h2>
                            <?php if ((isset($_GET['id']))) {?>Uredi dionicu<?php } else { ?>Nova dionica<?php }?>
                        </h2>
                </div>
                <div class="form_greske"><?php echo $_smarty_tpl->tpl_vars['greske']->value;?>
</div>
                <div class="form_tijelo">
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
        </div>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_115922653660ae102d6ef387_28199608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_115922653660ae102d6ef387_28199608',
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
        <?php echo '<script'; ?>
 src="../../js/ajax/popis_kategorija.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
