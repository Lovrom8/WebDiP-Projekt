<?php
/* Smarty version 3.1.39, created on 2021-05-22 20:57:42
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a95426d2cb35_88333922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220843175e27970310771e3aa1158f15aca39fc3' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\index.tpl',
      1 => 1621709861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a95426d2cb35_88333922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6733575660a95426d2a034_24502591', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72136944960a95426d2bda2_15723594', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_6733575660a95426d2a034_24502591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_6733575660a95426d2a034_24502591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Statistika problema</h2>
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
class Block_72136944960a95426d2bda2_15723594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_72136944960a95426d2bda2_15723594',
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
