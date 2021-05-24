<?php
/* Smarty version 3.1.39, created on 2021-05-24 01:59:54
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dokumenti.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aaec7a3873a9_79733417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cebe628fd3528378852df19601d5cff8ebd45dc2' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dokumenti.tpl',
      1 => 1621814364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aaec7a3873a9_79733417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176422073260aaec7a371690_33128744', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135576975160aaec7a37c4e8_18306786', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_176422073260aaec7a371690_33128744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_176422073260aaec7a371690_33128744',
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
class Block_135576975160aaec7a37c4e8_18306786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_135576975160aaec7a37c4e8_18306786',
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
 id="ajaxDokumenti" 
            <?php if ((isset($_SESSION['tip'])) && ($_SESSION['tip'] >= 3)) {?>
                sve="1"
            <?php } else { ?>
                sve="0"
            <?php }?>
            src="../../js/ajax/dokumenti.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
