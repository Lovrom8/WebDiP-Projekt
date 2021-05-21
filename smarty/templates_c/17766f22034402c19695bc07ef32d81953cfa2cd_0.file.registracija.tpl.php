<?php
/* Smarty version 3.1.39, created on 2021-05-21 19:51:29
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\registracija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7f321b79036_40473437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17766f22034402c19695bc07ef32d81953cfa2cd' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\registracija.tpl',
      1 => 1621619483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7f321b79036_40473437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102054501560a7f321b74582_57910569', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175477745660a7f321b78857_69732880', 'javascript');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_102054501560a7f321b74582_57910569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_102054501560a7f321b74582_57910569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form__obrazac" id="obrazac_reg" novalidate method="POST" action="registracija.php">
        <div class="form_naslov">
            <h2>Registracija</h2>
        </div>
        <div class="form_greske" id="greske"><?php echo $_smarty_tpl->tpl_vars['greske']->value;?>
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
class Block_175477745660a7f321b78857_69732880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_175477745660a7f321b78857_69732880',
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
