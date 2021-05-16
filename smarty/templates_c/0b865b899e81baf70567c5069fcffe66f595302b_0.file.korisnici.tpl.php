<?php
/* Smarty version 3.1.39, created on 2021-05-16 11:43:12
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\korisnici.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a0e930528085_85119472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b865b899e81baf70567c5069fcffe66f595302b' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\korisnici.tpl',
      1 => 1621158176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a0e930528085_85119472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200440708360a0e930523157_75396843', 'sadrzaj');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208308269160a0e930527887_22453191', 'javascript');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "base.tpl");
}
/* {block 'sadrzaj'} */
class Block_200440708360a0e930523157_75396843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_200440708360a0e930523157_75396843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div><?php echo $_smarty_tpl->tpl_vars['poruke']->value;?>
</div>
    <div><?php echo $_smarty_tpl->tpl_vars['greske']->value;?>
</div>
    <table id="korisnici">
            <thead>
                <tr>
                    <th>Korisničko ime</th>
                    <th>Blokiraj</th>
                    <th>Odblokiraj</th>
                </tr>
            </thead>
    </table>
<?php
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_208308269160a0e930527887_22453191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_208308269160a0e930527887_22453191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="../../js/tablica.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/ajax/korisnici.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'javascript'} */
}
