<?php
/* Smarty version 3.1.39, created on 2021-05-22 21:23:47
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\moderatoriKategorije.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a95a43576510_52069675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e696ce03a90c8cabe01cd90c6417b84e42b617' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\moderatoriKategorije.tpl',
      1 => 1621711375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a95a43576510_52069675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107363219360a95a434ea1f6_92368132', "sadrzaj");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56369649460a95a43575a03_73823692', "javascript");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block "sadrzaj"} */
class Block_107363219360a95a434ea1f6_92368132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_107363219360a95a434ea1f6_92368132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table id="moderatori">
        <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Korisnicko ime</th>
                <th>Uredi</th>
            </tr>
        </thead>
    </table>

    <form class="form__obrazac" id="dodajModeratora" method="POST" action="modDodaj.php">
        <div class="form_naslov">
            <h2>
                Novi moderator
            </h2>
        </div>
        <div class="form_tijelo">
            <input type="text" name="idKat" id="idKat" value="<?php echo $_smarty_tpl->tpl_vars['idKat']->value;?>
" hidden /><br>
            <label for="idMod">Novi moderator:</label><br>
            <select id="idMod" name="idMod"></select>
            <input type="submit" value="Dodaj moderatora" name="dodajMod" />
        </div>
    </form>
<?php
}
}
/* {/block "sadrzaj"} */
/* {block "javascript"} */
class Block_56369649460a95a43575a03_73823692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_56369649460a95a43575a03_73823692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var id=<?php echo $_smarty_tpl->tpl_vars['idKat']->value;?>
;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../js/ajax/moderatori.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="../../js/ajax/moderatori_kategorije.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "javascript"} */
}
