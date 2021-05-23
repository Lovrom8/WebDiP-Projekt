<?php
/* Smarty version 3.1.39, created on 2021-05-23 01:00:24
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a98d08726d98_59562926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988adbf7219317a95bb9a65e912701220934046d' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\base.tpl',
      1 => 1621724423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a98d08726d98_59562926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Lovro Posarić">
        <link id="css_stil" rel="stylesheet" href="../../css/lposaric.css">
        <link id="css_stil_accesibility" rel="stylesheet" href="../css/lposaric_accesibility.css" disabled>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97738006360a98d08669675_99299119', 'title');
?>
Promet</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22484421960a98d0866b425_65187865', 'css');
?>

    </head>
    <body>
     <header class="header">
            <h1><a href="index.php">Promet</a></h1>
            <nav>
            <a href="dionice.php">Dionice</a>

            <?php if ((isset($_SESSION['ID']))) {?>
                <?php if (($_SESSION['tip'] > 1)) {?>
                    <a href="dokumenti.php">Dokumenti</a>
                    <a href="obilasci.php">Obilasci</a>
                    <a href="problemi.php">Problemi</a>            
                <?php }?>

                <?php if (($_SESSION['tip'] == 4)) {?>
                    <a href="kategorije.php">Kategorije</a>
                    <a href="statistikaKoristenja.php">Dnevnik</a>
                    <a href="korisnici.php">Korisnici</a>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122986418460a98d08725804_11605630', 'sadrzaj');
?>

      </main>
      <footer>
            <p><a href="autor.html">Autor: Lovro Posarić &copy; 2021</a></p>
            <figure>
                <img class="footer__img" id="icoPrilagodljivost" src="../multimedija/accessibility.png" alt="Postavi prilagodljivost"/>
            </figure>
        </footer>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.4.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../../js/general.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76960719960a98d087262d2_83906603', 'javascript');
?>

    </body>
</html><?php }
/* {block 'title'} */
class Block_97738006360a98d08669675_99299119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_97738006360a98d08669675_99299119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'css'} */
class Block_22484421960a98d0866b425_65187865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_22484421960a98d0866b425_65187865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'css'} */
/* {block 'sadrzaj'} */
class Block_122986418460a98d08725804_11605630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_122986418460a98d08725804_11605630',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_76960719960a98d087262d2_83906603 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_76960719960a98d087262d2_83906603',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'javascript'} */
}
