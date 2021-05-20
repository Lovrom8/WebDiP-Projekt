<?php
/* Smarty version 3.1.39, created on 2021-05-18 23:11:34
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\kategorije.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a42d865dc577_68479074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f08f5b73cd7ae9210dd0cb29fed7d78991098797' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\kategorije.tpl',
      1 => 1621372288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a42d865dc577_68479074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34170727260a42d865d6c35_99283613', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182684359960a42d865d9579_30809417', 'sadrzaj');
?>
      
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5439560760a42d865db368_42346460', 'javascript');
?>

     <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_34170727260a42d865d6c35_99283613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_34170727260a42d865d6c35_99283613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Uredi kategoriju<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_182684359960a42d865d9579_30809417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_182684359960a42d865d9579_30809417',
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
class Block_5439560760a42d865db368_42346460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_5439560760a42d865db368_42346460',
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
