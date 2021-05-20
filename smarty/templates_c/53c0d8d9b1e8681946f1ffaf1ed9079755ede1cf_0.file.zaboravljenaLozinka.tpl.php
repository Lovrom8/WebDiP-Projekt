<?php
/* Smarty version 3.1.39, created on 2021-05-18 10:49:05
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\zaboravljenaLozinka.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a37f81d6a265_81864178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53c0d8d9b1e8681946f1ffaf1ed9079755ede1cf' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\zaboravljenaLozinka.tpl',
      1 => 1621327666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a37f81d6a265_81864178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177433177360a37f81d65570_91689264', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69322547260a37f81d661d9_39668410', 'sadrzaj');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_177433177360a37f81d65570_91689264 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_177433177360a37f81d65570_91689264',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Zaboravljena lozinka<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_69322547260a37f81d661d9_39668410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_69322547260a37f81d661d9_39668410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div><?php echo $_smarty_tpl->tpl_vars['poruke']->value;?>
</div>
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
