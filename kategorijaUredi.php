<?php

require_once 'base/smarty.base.php';
require_once 'base/util.php';
require_once 'base/sesija.php';
require_once 'base/korisnici.php';
require_once 'base/kategorija.php';
require_once 'base/dnevnik.php';

if (!Sesija::provjeriSesiju() || Sesija::tipKorisnika() != Korisnici::Administrator)
{
  header("Location: index.php");
  die();
}

$poruke = '';
$greske = '';
$id = '';
$naziv = '';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $naziv = '';

  if (empty($_POST["kategorija"]))
    $greske .= "Niste unijeli naziv kategorije.<br>";
  else
    $naziv = ocistiString($_POST["kategorija"]);

  if (empty($greske))
  {
    if (!empty($_POST["id"]))
    {
      $id = ocistiString($_POST["id"]);

      if (Kategorija::osvjezi($id, $naziv))
      {
        Dnevnik::dodajZapis(Akcije::AzuriranjeKategorije, $naziv,  Sesija::provjeriSesiju());
        $poruke = 'Uspješno promijenjen naziv kategorije';
        
        header("Refresh:3;Url=kategorije.php");
      }
      else
        $greske .= 'Neuspješna promjena naziva kategorije.';
    }
    else
    {
      if (Kategorija::dodaj($naziv))
      {
        Dnevnik::dodajZapis(Akcije::DodavanjeKategorije, $naziv, Sesija::dohvatiSesiju());
        $poruke = 'Uspješno dodana nova kategorija';
        
        header("Refresh:3;Url=kategorije.php");
      }
      else
        $greske .= 'Neuspješno dodavanje nove kategorije.';
    }
  }
}
else
{
  if (isset($_GET["id"]))
  {
    $id = $_GET["id"];
    if(($rez = Kategorija::dohvatiZaId($id)) != null)
      $naziv = $rez['Naziv_kategorije'];
  }
}

$smarty->assign('idKat', $id);
$smarty->assign('greske', $greske);
$smarty->assign('poruke', $poruke);
$smarty->assign('nazivKategorije', $naziv);
$smarty->display('kategorijaUredi.tpl');
