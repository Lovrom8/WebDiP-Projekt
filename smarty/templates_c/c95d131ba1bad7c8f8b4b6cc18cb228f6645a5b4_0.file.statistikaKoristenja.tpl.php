<?php
/* Smarty version 3.1.39, created on 2021-05-15 10:16:32
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\statistikaKoristenja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609f8360094a04_42594638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c95d131ba1bad7c8f8b4b6cc18cb228f6645a5b4' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\statistikaKoristenja.tpl',
      1 => 1621066572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609f8360094a04_42594638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2031286573609f83600927a9_98647777', 'naslov');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_658205026609f8360093344_86307704', 'css');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1271076301609f8360093b81_17805762', 'sadrzaj');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1931317274609f8360094388_04125057', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'naslov'} */
class Block_2031286573609f83600927a9_98647777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'naslov' => 
  array (
    0 => 'Block_2031286573609f83600927a9_98647777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Statistika korištenja<?php
}
}
/* {/block 'naslov'} */
/* {block 'css'} */
class Block_658205026609f8360093344_86307704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_658205026609f8360093344_86307704',
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
class Block_1271076301609f8360093b81_17805762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_1271076301609f8360093b81_17805762',
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
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_1931317274609f8360094388_04125057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_1931317274609f8360094388_04125057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="../js/tablica.js"><?php echo '</script'; ?>
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
