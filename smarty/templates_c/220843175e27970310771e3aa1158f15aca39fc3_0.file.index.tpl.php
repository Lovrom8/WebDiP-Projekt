<?php
/* Smarty version 3.1.39, created on 2021-05-20 13:11:20
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a643d80ca6c4_59625162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220843175e27970310771e3aa1158f15aca39fc3' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\index.tpl',
      1 => 1621509077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a643d80ca6c4_59625162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92798733060a643d80c8237_89086905', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99757178360a643d80c9c95_61830912', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_92798733060a643d80c8237_89086905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_92798733060a643d80c8237_89086905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table id="problemi">
            <thead>
                <tr>
                    <th>Kategorija</th>
                    <th>Broj problema</th>
                </tr>
            </thead>
    </table>
    <button id="generirajPDF">Generiraj PDF</button>
    <canvas id="grafStatistike"></canvas>
</table>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_99757178360a643d80c9c95_61830912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_99757178360a643d80c9c95_61830912',
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
 id="ajaxDionice"                
                 src="../../js/ajax/dionice.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/ajax/statistika_problema.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
