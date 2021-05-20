<?php
/* Smarty version 3.1.39, created on 2021-05-20 19:43:43
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\statistikaKoristenja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a69fcf541130_76244230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c95d131ba1bad7c8f8b4b6cc18cb228f6645a5b4' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\statistikaKoristenja.tpl',
      1 => 1621532622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a69fcf541130_76244230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88211111460a69fcf53ebf9_39689115', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211573002860a69fcf53fa26_12901806', 'css');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120800611560a69fcf540283_17639591', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117611244660a69fcf540aa2_16688496', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_88211111460a69fcf53ebf9_39689115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_88211111460a69fcf53ebf9_39689115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Statistika korištenja<?php
}
}
/* {/block 'naslov'} */
/* {block 'css'} */
class Block_211573002860a69fcf53fa26_12901806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_211573002860a69fcf53fa26_12901806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css"/>
<?php
}
}
/* {/block 'css'} */
/* {block 'sadrzaj'} */
class Block_120800611560a69fcf540283_17639591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_120800611560a69fcf540283_17639591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="rasponDatuma">
        <label>Od: </label>
        <input type="text" id="od" name="od"><br>
        <label>Do: </label>
        <input type="text" id="do" name="do">
    </div>
    <div class="korisnik">
        <label>Korisnik: </label>
        <input type="text" id="korisnik" name="korisnik">
    </div>
    <table id="statistika">
        <thead>
            <tr>
                <th>Stranica</th>
                <th>Korisnik</th>
                <th>Datum</th>
            </tr>
        </thead>
    </table>
    <button id="generirajPDF">Generiraj PDF</button>
    <button id="isprintaj">Isprintaj</button>
    <canvas id="grafStatistike"></canvas>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_117611244660a69fcf540aa2_16688496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_117611244660a69fcf540aa2_16688496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="../js/tablica.js"><?php echo '</script'; ?>
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
 src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/ajax/statistika_koristenja.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
