<?php
/* Smarty version 3.1.39, created on 2021-05-23 11:58:23
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aa273f7245a7_94347216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220843175e27970310771e3aa1158f15aca39fc3' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\index.tpl',
      1 => 1621763653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa273f7245a7_94347216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180588181360aa273f722e70_64931135', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129916599060aa273f723ec0_54648112', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_180588181360aa273f722e70_64931135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_180588181360aa273f722e70_64931135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Statistika problema</h2>

    <label for="kategorija">Kategorija: </label>
    <input type="text" id="kategorija" name="kategorija">
    <label for="minProblema">Problema više od: </label>
    <input type="number" id="minProblema" name="minProblema">

    <table id="problemi">
            <thead>
                <tr>
                    <th>Kategorija</th>
                    <th>Broj problema</th>
                </tr>
            </thead>
    </table>
    <button id="generirajPDF">Generiraj PDF</button>
    <button id="isprintaj">Isprintaj</button>
    <div class="grafContainer">
        <canvas id="grafStatistike"></canvas>
    </div>
</table>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_129916599060aa273f723ec0_54648112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_129916599060aa273f723ec0_54648112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="../../js/uvjeti.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/grafovi.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://unpkg.com/jspdf-autotable@3.5.14/dist/jspdf.plugin.autotable.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/ajax/statistika_problema.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
