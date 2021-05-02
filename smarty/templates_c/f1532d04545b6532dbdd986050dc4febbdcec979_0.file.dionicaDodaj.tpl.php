<?php
/* Smarty version 3.1.39, created on 2021-05-03 00:30:19
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dionicaDodaj.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608f27fbf35089_24996052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1532d04545b6532dbdd986050dc4febbdcec979' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dionicaDodaj.tpl',
      1 => 1619993601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608f27fbf35089_24996052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1086651221608f27fbf26402_62260637', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1369815595608f27fbf2a7b0_72196213', 'css');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1765215728608f27fbf2eed7_51590339', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_871186751608f27fbf327a3_60738887', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_1086651221608f27fbf26402_62260637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_1086651221608f27fbf26402_62260637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nova dionica<?php
}
}
/* {/block 'naslov'} */
/* {block 'css'} */
class Block_1369815595608f27fbf2a7b0_72196213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_1369815595608f27fbf2a7b0_72196213',
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
class Block_1765215728608f27fbf2eed7_51590339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_1765215728608f27fbf2eed7_51590339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form class="form__obrazac" id="nova_dionica" method="POST">
                    <label for="kategorija">Kategorija:</label>
                    <select id="kategorija" name="kategorija"></select><br>
                    <label for="oznaka">Oznaka:</label><br>
                    <input type="text" id="oznaka" name="oznaka" required><br>
                    <label for="odrediste">Odredište:</label><br>
                    <input type="text" id="odrediste" name="odrediste" required> <br>
                    <label for="polaziste">Polazište:</label><br>
                    <input type="text" id="polaziste" name="polaziste" required> <br>
                    <label for="broj_km">Broj kilometara:</label><br>
                    <input type="number" id="broj_km" name="broj_km" required> <br>
                    <input type="submit" value="Dodaj dionicu" name="Submit" />
        </form>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_871186751608f27fbf327a3_60738887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_871186751608f27fbf327a3_60738887',
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
