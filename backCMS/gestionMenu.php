<?php session_start();
//Gestion du menu de premier rang
if(!isset($_GET['modifnM1'])) $modifnM1=""; else $modifnM1=$_GET['modifnM1'];
if(!isset($_GET['ajoutM1'])) $ajoutM1=""; else $ajoutM1=$_GET['ajoutM1'];
if(!isset($_POST['ajoutP'])) $ajoutP=""; else $ajoutP=$_POST['ajoutP'];
if(!isset($_POST['modifMenu'])) $modifMenu=""; else $modifMenu=$_POST['modifMenu'];
if(!isset($_POST['ajoutMenu'])) $ajoutMenu=""; else $ajoutMenu=$_POST['ajoutMenu'];
if(!isset($_POST['id_M1'])) $id_M1=""; else $id_M1=$_POST['id_M1'];
if(!isset($_POST['nom_M1'])) $nom_M1=""; else $nom_M1=$_POST['nom_M1'];
if(!isset($_POST['zoneA'])) $zoneA=""; else $zoneA=$_POST['zoneA'];

include('int/cxCMS.php');

require_once('objet/modifZones.php');
require_once('objet/selectZones.php');
if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }else{echo"";}
if($modifMenu=="okmodifMenu"){

//debut	
$nom_M1= trim($nom_M1);
$nomMenu2= addslashes($nom_M1);
$minuscule= strtolower($nom_M1);
$varutf8=netTmcc($minuscule);
$var_page=netUrl($varutf8);
$queryA = "UPDATE cms_m1 SET nom_M1='$nomMenu2', var_M1='$var_page' WHERE id_M1='$id_M1'";
if ($pdo->query($queryA) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {

echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"sos/index.php\";";
echo"</script>";} 
//fin
}

if($ajoutP=="okajoutP"){
	
	//debut
echo $charge;
foreach($_POST["id_M1"] as $k => $v){
$NewO = $_POST["ordre_M1"][$k];
$New1 = $_POST["aff_M1"][$k];
$New2 = $_POST["zone"][$k];
$New3 = $_POST["marge"][$k];

$query = "UPDATE cms_m1 SET ordre_M1='$NewO', aff_M1='$New1', id_zone1='$New2', marg_top1='$New3' WHERE id_M1='$v'";
if ($pdo->query($query) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"gestionMenu.php\";";
echo"</script>";}

//fin
}
}
if($modifnM1!=""){

$queryS = $pdo->query("SELECT * FROM cms_m1 WHERE id_M1='$modifnM1'");
$val = $queryS->fetch(PDO::FETCH_ASSOC);
$nbPDES=$queryS->rowCount();

}else{
	
$queryS = $pdo->query("SELECT * FROM cms_m1 ");
$valR = $queryS->fetchall(PDO::FETCH_ASSOC);
$nbPDES=$queryS->rowCount();
}
?>
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!-->
<html lang="fr" >
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Exo+2:800,600,400" rel="stylesheet" type="text/css">
<title>Gestion menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css"> @charset "utf-8";
body{font-family: 'Exo 2', sans-serif;font-size:12px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:20px;}
.txt{font-family: 'Exo 2', sans-serif;font-size:1.3em; font-weight:600; color:#000000;margin-top:0px;margin-bottom:0px;}
a.arch{font-size:1em;font-weight:400; color:#000000;text-decoration:none;margin-bottom:20px;}a.arch:hover{color:#ff0000;text-decoration:none;margin-bottom:20px;}
.tttab{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}</style>
</head>

<body onLoad="MM_preloadImages('fancybox_loading.gif')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#333333"> 
      <h1><?php  echo NOM_ENTREPRISE;?></h1>
    </td>
  </tr>
  <tr>
    <td align="center">
      <h2>Gestion Menu du site</h2><?php if($ajoutM1!=""){echo"";}else{?><a href="?ajoutM1=okajout" class="arch">Ajouter une nouvelle rubrique</a><br><br> <?php }?>
    </td>
  </tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1">
<?php if($modifnM1!=""){ ?> 
  <table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td align="center" bgcolor="#666666" class="tttab">Modifier le nom de la 
        rubrique</td>
    </tr>
    <tr>
      <td align="center" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black;">
        <input type="text" name="nom_M1" value="<?php echo $val['nom_M1']; ?>">
      </td>
    </tr>
    <tr>
      <td align="center">
        <input type="submit" name="Submit2" value="modifier">
		<input name="modifMenu" type="hidden"  value="okmodifMenu">
		<input name="id_M1" type="hidden"  value="<?php echo $val['id_M1'];?>">
      </td>
    </tr>
  </table>
  <?php }elseif($ajoutM1!=""){?>
	  <table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td align="center" bgcolor="#666666" class="tttab" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black;">Ajouter une rubrique au menu principal</td>
    </tr>
    <tr>
      <td align="center" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black;">
        Nom de la rubrique<br><input type="text" name="nom_M1">
      </td>
    </tr>
    <tr><td align="center" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black;">
	Choix du template à appliquer<br>
	<select  name="zoneA" >
         <?php $rub="sousrub";
$ajtzone=new Selectzone();
$ajtzone->mzone=$rub;
$affajtzone=$ajtzone->selectmodif();
echo $affajtzone;
?>
        </select>
        
      </td></tr><tr>
      <td align="center">
        <input type="submit" name="Submit3" value="Ajouter">
		<input name="ajoutMenu" type="hidden"  value="okajoutMenu">
		
      </td>
    </tr>
  </table>
	  
  <?php }else{
 if($nbPDES>0){?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td width="2%" align="center" bgcolor="#333333" class="tttab">&nbsp;</td>
      <td width="16%" align="center" bgcolor="#333333" class="tttab">Ordre dans 
        le menu</td>
      <td width="42%" align="center" bgcolor="#666666" class="tttab">Nom de la 
        rubrique</td>
      <td width="26%" align="center" bgcolor="#333333" class="tttab">Marge bas 
        de page</td>
      <td width="26%" align="center" bgcolor="#666666" class="tttab">Masque affichage</td>
      <td width="14%" align="center" bgcolor="#333333" class="tttab">Affichage</td>
    </tr>
    <?php foreach ($valR as $key => $val){?>
    <tr> 
      <td> 
        <input type="hidden" name="id_M1[]" value="<?php echo $val['id_M1'];?>">
      </td>
      <td align="center"> 
        <input name="ordre_M1[]" type="text" value="<?php echo $val['ordre_M1']; ?>" size="10">
      </td>
      <td align="center" style="border-left: 1px solid black;"> 
        <table width="250" align="center" >
          <tr><td  class="txt" align="center"><?php echo $val['nom_M1']; ?></td>
            <td width="40"><a href="?modifnM1=<?php echo $val['id_M1'];?>" class="arch">modif</a></td>
          </tr></table>
      </td>
      <td align="center" style="border-left: 1px solid black;">
        <input name="marge[]" type="text"  value="<?php echo $val['marg_top1']; ?>" size="6">
      </td>
      <td align="center" style="border-left: 1px solid black;">
<select  name="zone[]" >
         <?php $rub="sousrub";
$modiflazone=new Modifzone();
$modiflazone->mzone=addslashes($rub);
$modiflazone->idezone=intval($val['id_zone1']);
$affmodiflazone=$modiflazone->selectmodif();
echo $affmodiflazone;
?>
        </select>
      </td>
      <td align="center" style="border-left: 1px solid black;"> 
        <select name="aff_M1[]">
          <option value="Y" <?php if (!(strcmp("Y", $val['aff_M1']))) {echo "SELECTED";} ?>>Oui</option>
          <option value="N" <?php if (!(strcmp("N", $val['aff_M1']))) {echo "SELECTED";} ?>>Non</option>
        </select>
      </td>
    </tr>
    <tr> 
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC" >&nbsp;</td>
      <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
      <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
      <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
      <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
    </tr>
    <?php } ?>
    <tr> 
      <td style="border-top: 1px solid black;">&nbsp;</td>
      <td style="border-top: 1px solid black;">&nbsp;</td>
      <td style="border-top: 1px solid black;">&nbsp;</td>
      <td style="border-top: 1px solid black;">&nbsp;</td>
      <td style="border-top: 1px solid black;">&nbsp;</td>
      <td style="border-top: 1px solid black;">&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td> 
        <input type="submit" name="Submit" value="Enregister les modifications">
        <input name="ajoutP" type="hidden"  value="okajoutP">
      </td>
    </tr>
  </table>
<?php }else{?><center>
  <font color="#FF0000" face="Arial, Helvetica, sans-serif" size="3"><b>Il n'y 
  a pas de rubrique</b></font> 
</center><?php }
}?></form>
<p align="center"><a href="coordonees.php" class="arch">Coordonnées entreprise</a>&nbsp;</p>
<p align="center"><a href="gestionBE.odt" class="arch">Mode d'emploi</a>&nbsp;</p>
<p align="center"><a href="imgBE/modedemploi.php" class="arch">Mode d'emploi en ligne</a>&nbsp;</p>
</body>
</html>
