<?php
/* Smarty version 3.1.39, created on 2021-05-20 18:51:17
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\registracija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a69385334dc5_25364185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17766f22034402c19695bc07ef32d81953cfa2cd' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\registracija.tpl',
      1 => 1621529468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a69385334dc5_25364185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103647564060a69385330e12_20585039', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106466655660a69385334645_66748764', 'javascript');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_103647564060a69385330e12_20585039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_103647564060a69385330e12_20585039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form__obrazac" id="obrazac_reg" novalidate method="POST" action="registracija.php">
        <div class="form_naslov">
            <h2>Registracija</h2>
        </div>
        <div class="form_greske"><?php echo $_smarty_tpl->tpl_vars['greske']->value;?>
</div>
        <div class="form_tijelo">
            <label for="ime">Ime:</label><br>
            <input type="text" id="ime " name="ime  "><br>
            <label for="prezime">Prezime:</label><br>
            <input type="text" id="prezime" name="prezime"><br>
            <label for="korIme">Korsničko ime:</label><br>
            <input type="text" id="korIme" name="korIme" required><br>
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="lozinka">Lozinka:</label><br>
            <input type="password" id="lozinka" name="lozinka" required><br>
            <label for="potvrdaLozinke">Potvrda lozinke:</label><br>
            <input type="password" id="potvrdaLozinke" name="potvrdaLozinke" required><br>
            <input type="submit" value="Dovrši">
        </div>
    </form>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_106466655660a69385334645_66748764 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_106466655660a69385334645_66748764',
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
