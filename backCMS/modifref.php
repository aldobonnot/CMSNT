<?php session_start();
//Modifier les éléments de referencement d'une page
if(!isset($_POST['ajoutP'])) $ajoutP=""; else $ajoutP=$_POST['ajoutP'];
if(!isset($_POST['ttGoogle'])) $ttGoogle=""; else $ttGoogle=$_POST['ttGoogle'];
if(!isset($_POST['coment'])) $coment=""; else $coment=$_POST['coment'];
if(!isset($_POST['keywords'])) $keywords=""; else $keywords=$_POST['keywords'];
if(!isset($_POST['ttpage'])) $ttpage=""; else $ttpage=$_POST['ttpage'];
if(!isset($_POST['nommenu'])) $nommenu=""; else $nommenu=$_POST['nommenu'];
$ttGoogle=addslashes($ttGoogle);
$coment=addslashes($coment);
$ttpage=addslashes($ttpage);
$nommenu=trim($nommenu);
$nommenu2=addslashes($nommenu);

 if(!isset($_POST['idM1B'])) $idM1B=""; else $idM1B=$_POST['idM1B'];
if(!isset($_POST['idM2B'])) $idM2B=""; else $idM2B=$_POST['idM2B'];
if(!isset($_POST['idM3B'])) $idM3B=""; else $idM3B=$_POST['idM3B'];
if(!isset($_POST['varM1B'])) $varM1B=""; else $varM1B=$_POST['varM1B'];
if(!isset($_POST['varM2B'])) $varM2B=""; else $varM2B=$_POST['varM2B'];
if(!isset($_POST['lazoneB'])) $lazoneB=""; else $lazoneB=$_POST['lazoneB'];


if(!isset($_GET['idM1'])) $idM1=""; else $idM1=$_GET['idM1'];
if(!isset($_GET['idM2'])) $idM2=""; else $idM2=$_GET['idM2'];
if(!isset($_GET['idM3'])) $idM3=""; else $idM3=$_GET['idM3'];

include('int/cxCMS.php');

if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }

if($ajoutP=="okajoutP"){
if($idM1B!="" && $idM2B!="" && $idM3B!="")
{
$varutf8 = netTmcc($nommenu);
$minuscule = strtolower($varutf8);
$var_page = netUrl($minuscule);
echo $charge;
$query = "UPDATE  cms_m3 SET titre_P3='$ttGoogle', comment3='$coment', motsclefs3='$keywords', titre_C3='$ttpage', nom_M3='$nommenu2', var_M3='$var_page' WHERE id_M3='$idM3B'";
if ($mysqli->query($query) === TRUE) {echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"sos/index.php\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}
if($idM1B!="" && $idM2B!="" && $idM3B=="")
{
$varutf8 = netTmcc($nommenu);
$minuscule = strtolower($varutf8);
$var_page = netUrl($minuscule);
echo $charge;
$query = "UPDATE  cms_m2 SET titre_P2='$ttGoogle', comment2='$coment', motsclefs2='$keywords', titre_C2='$ttpage', nom_M2='$nommenu2', var_M2='$var_page' WHERE id_M2='$idM2B'";
if ($mysqli->query($query) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"sos/index.php\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}

if($idM1B!="" && $idM2B=="" && $idM3B=="")
{
$varutf8 = netTmcc($nommenu);
$minuscule = strtolower($varutf8);
$var_page = netUrl($minuscule);
echo $charge;
$query = "UPDATE  cms_m1 SET titre_P1='$ttGoogle', comment1='$coment', motsclefs1='$keywords', titre_C1='$ttpage', nom_M1='$nommenu2', var_M1='$var_page' WHERE id_M1='$idM1B'";
if ($mysqli->query($query) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"sos/index.php\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}


}


if($idM1!="" && $idM2!="" && $idM3!="")
{
$query2 = $mysqli->query("SELECT * FROM cms_m1, cms_m2, cms_m3  WHERE cms_m3.id_M3='$idM3' AND cms_m1.id_M1= cms_m2.id_M1 AND cms_m2.id_M2= cms_m3.id_M2 ");
$val2 = $query2->fetch_array();
$titrepage=stripslashes ($val2['titre_P3']);
$motsclefs=$val2['motsclefs3'];
$commentaires=stripslashes ($val2['comment3']);
$titrecontenu=stripslashes ($val2['titre_C3']);
$titremenu=stripslashes ($val2['nom_M3']);
$idpage=$val2['id_M3'];
$varM1=$val2['var_M1'];
$varM2=$val2['var_M2'];
$lazone=$val2['id_zone3'];

}
if($idM1!="" && $idM2!="" && $idM3=="")
{
$query2 = $mysqli->query("SELECT * FROM cms_m1, cms_m2 WHERE cms_m2.id_M2='$idM2' AND cms_m1.id_M1= cms_m2.id_M1 ");
$val2 = $query2->fetch_array();
$titrepage=stripslashes ($val2['titre_P2']);
$motsclefs=$val2['motsclefs2'];
$commentaires=stripslashes ($val2['comment2']);
$titrecontenu=stripslashes ($val2['titre_C2']);
$titremenu=stripslashes ($val2['nom_M2']);
$idpage=$val2['id_M2'];
$varM1=$val2['var_M1'];
$varM2="";
$lazone=$val2['id_zone2'];
}

if($idM1!="" && $idM2=="" && $idM3=="")
{
$query2 = $mysqli->query("SELECT * FROM cms_m1 WHERE cms_m1.id_M1='$idM1'");
$val2 = $query2->fetch_array();
$titrepage=stripslashes ($val2['titre_P1']);
$motsclefs=$val2['motsclefs1'];
$commentaires=stripslashes ($val2['comment1']);
$titrecontenu=stripslashes ($val2['titre_C1']);
$titremenu=stripslashes ($val2['nom_M1']);
$idpage=stripslashes ($val2['id_M1']);
    $varM1="";
    $varM2="";
$lazone=$val2['id_zone1'];
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
<title>Modification referencement page : <?php echo $titrepage;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css"> @charset "utf-8";
body{font-family: 'Exo 2', sans-serif;font-size:14px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:20px;}
h3{font-family: 'Exo 2', sans-serif;font-size:22px; font-weight:600; color:#999900;margin-top:0px;margin-bottom:10px;}
.tttab{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}
.tttab2{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:5px;padding-bottom:5px;}
a.arch{font-size:1.5em;font-weight:600; color:#000000;text-decoration:none;}a.arch:hover{color:#ff0000;text-decoration:none;}</style>
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
  }
  //-->
</script>
</head>

<body onLoad="MM_preloadImages('fancybox_loading.gif')" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#333333"> 
      <h1><?php  echo NOM_ENTREPRISE;?></h1>
    </td>
  </tr>
  <tr>
    <td align="center"> 
      <h2>Modification du referencement <br>
        pour la page:</h2>
		<h3><?php echo $titremenu;?></h3>
    </td>
  </tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1">
   
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td align="center">&nbsp;</td>
    </tr>
    <tr> 
      <td align="center">Titre de la page pour Google</td>
    </tr>
    <tr> 
      <td align="center"> 
        <input name="ttGoogle" type="text" size="41" value="<?php echo $titrepage;?>">
      </td>
    </tr>
    <tr> 
      <td align="center">&nbsp;</td>
    </tr>
    <tr> 
      <td align="center">Commentaire de la page pour Google</td>
    </tr>
    <tr> 
      <td align="center"> 
        <textarea name="coment" cols="35"><?php echo $commentaires;?></textarea>
      </td>
    </tr>
    <tr> 
      <td align="center">&nbsp;</td>
    </tr>
    <tr> 
      <td align="center">Les mots clefs</td>
    </tr>
    <tr> 
      <td align="center"> 
        <textarea name="keywords" cols="35"><?php echo $motsclefs;?></textarea>
      </td>
    </tr>
    <tr> 
      <td align="center">&nbsp;</td>
    </tr>
    <tr> 
      <td align="center">Nom dans le menu</td>
    </tr>
    <tr> 
      <td align="center"> 
        <input name="nommenu" type="text" size="41" value="<?php echo $titremenu;?>">
      </td>
    </tr>
    <tr> 
      <td align="center">&nbsp;</td>
    </tr>
    <tr> 
      <td align="center">Titre de la page sur le site</td>
    </tr>
    <tr> 
      <td align="center"> 
        <input name="ttpage" type="text" size="41" value="<?php echo $titrecontenu;?>">
      </td>
    </tr>
    <tr> 
      <td align="center">&nbsp;</td>
    </tr>
    <tr> 
      <td align="center"> 
        <input type="submit" name="Submit" value="Enregistrer">
        <input name="ajoutP" type="hidden"  value="okajoutP">
        <input name="idM1B" type="hidden"  value="<?php echo $idM1;?>">
        <input name="idM2B" type="hidden"  value="<?php echo $idM2;?>">
        <input name="idM3B" type="hidden"  value="<?php echo $idM3;?>">
	<input name="varM1B" type="hidden"  value="<?php echo $varM1;?>">
        <input name="varM2B" type="hidden"  value="<?php echo $varM2;?>">
	<input name="lazoneB" type="hidden"  value="<?php echo $lazone;?>">
      </td>
    </tr>
  </table>
</form>


<p>&nbsp;</p>
</body>
</html>
