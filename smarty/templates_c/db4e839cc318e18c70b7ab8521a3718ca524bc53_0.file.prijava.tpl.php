<?php
/* Smarty version 3.1.39, created on 2021-05-15 01:35:19
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\prijava.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609f09378bc2c9_64167880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db4e839cc318e18c70b7ab8521a3718ca524bc53' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\prijava.tpl',
      1 => 1620852594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609f09378bc2c9_64167880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1389457100609f09378bb036_90485136', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1658224602609f09378bbc28_70746832', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_1389457100609f09378bb036_90485136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_1389457100609f09378bb036_90485136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <form class="form__obrazac" id="prijava" method="POST">
                    <label for="korIme">Korisničko ime:</label><br>
                    <input type="text" id="korIme" name="korIme"><br>
                    <label for="lozinka">Lozinka:</label><br>
                    <input type="password" id="lozinka" name="lozinka" required> <br>
                    <label for="zapamti">Zapamti</label><br>
                    <input type="checkbox" id="zapamti" name="zapamti"></br>
                    <button class="g-recaptcha" 
                        data-sitekey="6LehFtIaAAAAAK73hYHeQZekfIH5qgokGqwyeWcj" 
                        data-callback='onSubmit' 
                        data-action='submit'>Submit</button>
    </form>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_1658224602609f09378bbc28_70746832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_1658224602609f09378bbc28_70746832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="../../js/valid/prijava.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
