<?php
/* Smarty version 3.1.39, created on 2021-05-23 21:33:38
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aaae12478a84_15491176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '220843175e27970310771e3aa1158f15aca39fc3' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\index.tpl',
      1 => 1621798416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aaae12478a84_15491176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192606189860aaae12477028_98035938', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138244447460aaae12478356_16725474', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_192606189860aaae12477028_98035938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_192606189860aaae12477028_98035938',
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
<div class="pomoc" id="pomoc">
    <div id="pomocSadrzaj">Ovo je sadrzaj pomoći...</div>
    <button id="prethodnaStranicaPomoc">Prethodna stranica</button>
    <button id="sljedecaStranicaPomoc">Sljedeća stranica</button>
    <button id="ugasiPomoc">Ugasi pomoć</button>
</div>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_138244447460aaae12478356_16725474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_138244447460aaae12478356_16725474',
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
 src="../../js/pomoc.js"><?php echo '</script'; ?>
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
