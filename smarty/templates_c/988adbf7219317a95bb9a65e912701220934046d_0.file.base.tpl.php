<?php
/* Smarty version 3.1.39, created on 2021-05-15 09:46:16
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609f7c48b351f7_27932823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988adbf7219317a95bb9a65e912701220934046d' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\base.tpl',
      1 => 1621064774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609f7c48b351f7_27932823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Lovro Posarić">
        <link rel="stylesheet" href="../../css/lposaric.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1988067135609f7c48b27cd3_76476111', 'title');
?>
Promet</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132956178609f7c48b29650_35906707', 'css');
?>

    </head>
    <body>
     <header class="header">
            <h1><a href="#sadrzaj">Promet</a></h1>
            <nav>
            <a href="index.php">Početna</a>

            <?php if ((isset($_SESSION['ID']))) {?>
                <?php if (($_SESSION['tip'] > 1)) {?>
                    <a href="dokumenti.php">Dokumenti</a>
                    <a href="problemi.php">Problemi</a>            
                <?php }?>

                <?php if (($_SESSION['tip'] > 2)) {?>
                    <a href="dionicaDodaj.php">Nova dionica</a>
                <?php }?>

                <?php if (($_SESSION['tip'] == 4)) {?>
                    <a href="kategorije.php">Kategorije</a>
                    <a href="postavke.php">Postavke</a>
                <?php }?>
                
                <strong><a href="odjava.php">Odjava</a></strong>
            <?php } else { ?>
                <a href="prijava.php">Prijava</a>
                <a href="registracija.php">Registracija</a>
            <?php }?>   
            <a href="dokumentacija.html">Dokumentacija</a>
            <a href="autor.html">O autoru</a>
            </nav>
      </header>
      <main id="sadrzaj">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_677698363609f7c48b308b4_47646811', 'sadrzaj');
?>

      </main>
      <footer>
            <p><a href="autor.html">Autor: Lovro Posarić &copy; 2021</a></p>
            <figure>
                <a target="_blank" href="http://validator.w3.org/check?uri=<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
">
                    <img class="footer__img" alt="HTML Valid" src="multimedija/HTML5.png">
                </a>
                <a target="_blank" href="https://jigsaw.w3.org/css-validator/validator?uri=<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['REQUEST_URI'];?>
">
                    <img class="footer__img" alt="CSS Valid" src="multimedija/CSS3.png">
                </a>
            </figure>
        </footer>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.4.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_918020769609f7c48b346f2_04252257', 'javascript');
?>

    </body>
</html><?php }
/* {block 'title'} */
class Block_1988067135609f7c48b27cd3_76476111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1988067135609f7c48b27cd3_76476111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'css'} */
class Block_132956178609f7c48b29650_35906707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_132956178609f7c48b29650_35906707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'css'} */
/* {block 'sadrzaj'} */
class Block_677698363609f7c48b308b4_47646811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_677698363609f7c48b308b4_47646811',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_918020769609f7c48b346f2_04252257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_918020769609f7c48b346f2_04252257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'javascript'} */
}
