<?php
/* Smarty version 3.1.39, created on 2021-05-15 16:12:54
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\zaboravljenaLozinka.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609fd6e6f11873_94589781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c0d8d9b1e8681946f1ffaf1ed9079755ede1cf' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\zaboravljenaLozinka.tpl',
      1 => 1621087864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609fd6e6f11873_94589781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1271672489609fd6e6f104a9_49575012', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1717874565609fd6e6f110c2_01576539', 'sadrzaj');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_1271672489609fd6e6f104a9_49575012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_1271672489609fd6e6f104a9_49575012',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Zaboravljena lozinka<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_1717874565609fd6e6f110c2_01576539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_1717874565609fd6e6f110c2_01576539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <form class="form__obrazac" id="zaboravljena_lozinka" method="POST">
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"></select><br>
                    <input type="submit" value="Pošalji mail" name="Submit" />
        </form>
<?php
}
}
/* {/block 'sadrzaj'} */
}
