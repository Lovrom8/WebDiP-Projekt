<?php
/* Smarty version 3.1.39, created on 2021-05-21 18:46:19
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\kategorije.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a7e3dbbda475_72046017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f08f5b73cd7ae9210dd0cb29fed7d78991098797' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\kategorije.tpl',
      1 => 1621611328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a7e3dbbda475_72046017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58151230560a7e3dbbd7f65_27638002', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107936770960a7e3dbbd9309_17706855', 'sadrzaj');
?>
      
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199159893660a7e3dbbd9c55_41521137', 'javascript');
?>

     <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_58151230560a7e3dbbd7f65_27638002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_58151230560a7e3dbbd7f65_27638002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Uredi kategoriju<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_107936770960a7e3dbbd9309_17706855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_107936770960a7e3dbbd9309_17706855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <table id="kategorije">
                <thead>
                    <tr>
                        <th>Naziv kategorije</th>
                        <th>Uredi</th>
                        <th>Moderatori</th>
                    </tr>
                </thead>
        </table>

        <a href="kategorijaUredi.php">
            <button>
                Nova kategorija
            </button>
        </a>

        
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_199159893660a7e3dbbd9c55_41521137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_199159893660a7e3dbbd9c55_41521137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/ajax/kategorije.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
