<?php
/* Smarty version 3.1.39, created on 2021-04-26 20:37:41
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\kategorije.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608708751365c1_13850349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f08f5b73cd7ae9210dd0cb29fed7d78991098797' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\kategorije.tpl',
      1 => 1619462191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608708751365c1_13850349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140070410260870875130a99_24947216', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101271463360870875132f78_53768479', 'sadrzaj');
?>
      
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137817624660870875134b98_61660748', 'javascript');
?>

     <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_140070410260870875130a99_24947216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_140070410260870875130a99_24947216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Uredi kategoriju<?php
}
}
/* {/block 'naslov'} */
/* {block 'sadrzaj'} */
class Block_101271463360870875132f78_53768479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_101271463360870875132f78_53768479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <table id="kategorije">
                <thead>
                    <tr>
                        <th>Naziv kategorije</th>
                        <th>Moderatori</th>
                    </tr>
                </thead>
        </table>

        <form action="kategorijaDodaj.php">
            <input type="submit" value="Nova kategorija" />
        </form>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_137817624660870875134b98_61660748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_137817624660870875134b98_61660748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <?php echo '<script'; ?>
 src="../../js/ajax/kategorije.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
