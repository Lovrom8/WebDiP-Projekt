<?php
/* Smarty version 3.1.39, created on 2021-05-21 11:29:14
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dokumenti.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a77d6a53ffd3_79188183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cebe628fd3528378852df19601d5cff8ebd45dc2' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dokumenti.tpl',
      1 => 1621588909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a77d6a53ffd3_79188183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2444552260a77d6a51b5e7_52651209', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93096704460a77d6a53f899_56109808', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_2444552260a77d6a51b5e7_52651209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_2444552260a77d6a51b5e7_52651209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <label for="vrsta_dokumenta">Vrsta dokumenta:</label>
    <select id="vrsta_dokumenta">
      <option value="0">Odaberi...</option>
    </select><br>
    <label for="po_stranici">Dokumenata po stranici: </label>
    <input type="number" value=5 name="po_stranici" id="po_stranici"/><br>
    
    <table id="dokumenti">
        <thead>
            <tr>
                <th>Naslov</th>
                <th>Status</th>
                <th>Poveznica</th>
                <?php if ($_smarty_tpl->tpl_vars['svi']->value) {?>
                    <th>Potvrdi</th>
                    <th>Odbij</th>
                <?php }?>
            </tr>
        </thead>
    </table>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_93096704460a77d6a53f899_56109808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_93096704460a77d6a53f899_56109808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo '<script'; ?>
 src="../../js/general.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="../../js/ajax/dokumenti.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
