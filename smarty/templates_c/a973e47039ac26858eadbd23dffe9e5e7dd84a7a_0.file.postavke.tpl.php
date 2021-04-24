<?php
/* Smarty version 3.1.39, created on 2021-04-24 13:42:55
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\postavke.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6084043fa0e4f8_33534324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a973e47039ac26858eadbd23dffe9e5e7dd84a7a' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\postavke.tpl',
      1 => 1619264538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6084043fa0e4f8_33534324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18898492196084043fa03375_63834568', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13609873756084043fa05998_79853658', 'sadrzaj');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_18898492196084043fa03375_63834568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_18898492196084043fa03375_63834568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Postavke<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_13609873756084043fa05998_79853658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_13609873756084043fa05998_79853658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <form class="form__obrazac" id="prijava" method="POST">
                    <label for="trajanjeKolacica">Trajanje kolačića (u danima):</label><br>
                    <input type="number" id="trajanjeKolacica" name="trajanjeKolacica" value="<?php echo '<?php ';?>
echo $settings-><?php echo 'trajanjeKolacica';?>
 <?php echo '?>';?>
" required><br>
                    <label for="brEl">Broj elemenata po stranici:</label><br>
                    <input type="number" id="brEl" name="brEl"  value="<?php echo '<?php ';?>
echo $settings-><?php echo 'brojElPoStranici';?>
 <?php echo '?>';?>
" required> <br>
                    <input type="submit" value="Spremi" name="spremi" />
        </form>
<?php
}
}
/* {/block 'sadrzaj'} */
}
