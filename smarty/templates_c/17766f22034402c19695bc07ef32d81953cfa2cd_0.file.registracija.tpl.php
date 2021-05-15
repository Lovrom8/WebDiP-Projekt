<?php
/* Smarty version 3.1.39, created on 2021-04-25 17:21:36
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\registracija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60858900d599b1_04879661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17766f22034402c19695bc07ef32d81953cfa2cd' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\registracija.tpl',
      1 => 1619363962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60858900d599b1_04879661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40974521160858900d53f37_87739322', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22384772860858900d582b4_89846414', 'javascript');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_40974521160858900d53f37_87739322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_40974521160858900d53f37_87739322',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form__obrazac" id="obrazac_reg" novalidate method="POST" action="registracija.php">
                    <label for="fname">Ime:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Prezime:</label><br>
                    <input type="text" id="lname" name="lname"><br>
                    <label for="username">Korsničko ime:</label><br>
                    <input type="text" id="username" name="username" required><br>
                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="pwd">Lozinka:</label><br>
                    <input type="password" id="pwd" name="pwd" required><br>
                    <label for="pwdConfirm">Potvrda lozinke:</label><br>
                    <input type="password" id="pwdConfirm" name="pwdConfirm" required><br>
                    <input type="submit" value="Dovrši">
    </form>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_22384772860858900d582b4_89846414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_22384772860858900d582b4_89846414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="./js/valid/registracija.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
