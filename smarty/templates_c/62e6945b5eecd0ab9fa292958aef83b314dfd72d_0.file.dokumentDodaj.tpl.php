<?php
/* Smarty version 3.1.39, created on 2021-05-03 20:43:24
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\dokumentDodaj.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6090444c127c00_98101351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e6945b5eecd0ab9fa292958aef83b314dfd72d' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\dokumentDodaj.tpl',
      1 => 1619426009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6090444c127c00_98101351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19012211366090444c1207b4_28733770', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19782304846090444c1267a9_77214391', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_19012211366090444c1207b4_28733770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_19012211366090444c1207b4_28733770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form__obrazac" id="prijava" method="POST">
        <label for="dionica">Dionica:</label><br>
        <input type="text" id="dionica" name="dionica" value="<?php echo $_smarty_tpl->tpl_vars['oznaka']->value;?>
" disabled><br>
        <label for="naslov">Naslov:</label><br>
        <input type="text" id="naslov" name="naslov"><br>
        <label for="opis">Opis:</label><br>
        <textarea id="opis" name="opis" rows="4" cols="30"></textarea><br>
        <label for="vrsta">Vrsta dokumenta:</label>
        <select id="vrsta" name="vrsta">
            <option value="1">Slika</option>
            <option value="2">Video</option>
            <option value="3">Audio</option>
            <option value="4">Tekst</option>
        </select><br>
        <label for="poveznica">Poveznica:</label>
        <input type="url" id="poveznica" name="poveznica"><br>
        <input type="submit" value="Prijavi se" name="Dodaj dokument" />
    </form>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_19782304846090444c1267a9_77214391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_19782304846090444c1267a9_77214391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo '<script'; ?>
 src="../../js/dokumentForma.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
