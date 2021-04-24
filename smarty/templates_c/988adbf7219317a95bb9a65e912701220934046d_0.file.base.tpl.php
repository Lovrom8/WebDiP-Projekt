<?php
/* Smarty version 3.1.39, created on 2021-04-24 13:34:56
  from 'C:\Users\38598\Documents\FOI\WebDIP\WebDiP\ProjektActual\WebDiP-Projekt\smarty\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6084026039fce1_67239121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988adbf7219317a95bb9a65e912701220934046d' => 
    array (
      0 => 'C:\\Users\\38598\\Documents\\FOI\\WebDIP\\WebDiP\\ProjektActual\\WebDiP-Projekt\\smarty\\templates\\base.tpl',
      1 => 1619263011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6084026039fce1_67239121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Lovro Posarić">
        <link rel="stylesheet" type="text/css" href="../css/lposaric.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121093187260840260393365_35364086', 'title');
?>
Promet</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75232358060840260395873_82275700', 'css');
?>

    </head>
    <body>
     <header class="header">
            <h1><a href="#sadrzaj">Promet</a></h1>
            <nav>
            <a href="dokumentacija.html">Dokumentacija</a>
            <a href="autor.html">O autoru</a>
            <!--<?php echo '<?php ';?>
if (!Sesija::provjeriSesiju()) { 
                   echo "<a href=\"prijava.php\">Prijava</a>
                         <a href=\"registracija.php\">Registracija</a> ";
                  } 
                  else {  
                    if(Sesija::tipKorisnika() >= Korisnici::Moderator) {
                        if(Sesija::tipKorisnika() == Korisnici::Administrator) {
                            echo "<a href=\"kategorije.php\">Kategorije</a>
                                  <a href=\"postavke.php\">Postavke</a> ";
                        }  

                        echo "<a href=\"dionicaDodaj.php\">Nova dionica</a> ";
                    } 
                    
                    echo "<a href=\"odjava.php\">Odjava</a> ";
                } 
            <?php echo '?>';?>
 -->
            </nav>
      </header>
      <main id="sadrzaj">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8195823806084026039c9c0_95741088', 'sadrzaj');
?>

      </main>
      <footer>
            <p><a href="autor.html">Autor: Lovro Posarić &copy; 2021</a></p>
            <figure>
                <a target="_blank" href="http://validator.w3.org/check?uri=http://barka.foi.hr/WebDiP/2020/zadaca_01/lposaric/obrasci/prijava.html">
                    <img class="footer__img" alt="HTML Valid" src="multimedija/HTML5.png">
                </a>
                <a target="_blank" href="https://jigsaw.w3.org/css-validator/validator?uri=http://barka.foi.hr/WebDiP/2020/zadaca_01/lposaric/obrasci/prijava.html">
                    <img class="footer__img" alt="CSS Valid" src="multimedija/CSS3.png">
                </a>
            </figure>
        </footer>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14537360816084026039e3e4_94419988', 'javascript');
?>

    </body>
</html><?php }
/* {block 'title'} */
class Block_121093187260840260393365_35364086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_121093187260840260393365_35364086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'css'} */
class Block_75232358060840260395873_82275700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_75232358060840260395873_82275700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'css'} */
/* {block 'sadrzaj'} */
class Block_8195823806084026039c9c0_95741088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sadrzaj' => 
  array (
    0 => 'Block_8195823806084026039c9c0_95741088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'sadrzaj'} */
/* {block 'javascript'} */
class Block_14537360816084026039e3e4_94419988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_14537360816084026039e3e4_94419988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'javascript'} */
}
