<?php session_start();
//ajouter une dimension et les lister pour les oeuvres
if(!isset($_POST['ajoutDim'])) $ajoutDim=""; else $ajoutDim=$_POST['ajoutDim'];
if(!isset($_POST['nomdim'])) $nomdim=""; else $nomdim=$_POST['nomdim'];
if(!isset($_POST['dim'])) $dim=""; else $dim=$_POST['dim'];


include('int/cxCMS.php');

if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }


//Ajout des photos
if($ajoutDim=="okajoutDim"){
Global $pdo;
echo $charge;
$queryA = "INSERT INTO cms_format_tab (nom_format, format) VALUES ('$nomdim', '$dim')";
if ($pdo->exec($queryA) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"ajoutDimok.php\";";
echo"</script>";
}

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
<title>Ajout de dimensions </title>

<style type="text/css"> @charset "utf-8";
body{font-family: 'Exo 2', sans-serif;font-size:12px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:10px;}
h3{font-family: 'Exo 2', sans-serif;font-size:22px; font-weight:600; color:#999900;margin-top:0px;margin-bottom:10px;}
.tttab{font-size:1.1em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}
.inform{margin:20px auto;width:80%;}
label{display:block;margin:0 auto;text-align:center;}
input{display:block;margin:0 auto;margin-bottom:10px;}</style>
<link type="text/css" rel="stylesheet" href="../stylesheets/zone2.css">
 <!-- les js-->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

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
      <h2>Ajout d'une dimension pour les oeuvres</h2>
      
    </td>
  </tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1">

  <div class="inform">
  <label id="nomdim">Nom du format</label>
  <input id="nomdim" name="nomdim" type="text" size="35" placeholder="Ex:Format special">
  <label id="dim">Dimension</label>
  <input id="dim" name="dim" type="text" size="35" placeholder="Ex:132x95">
  <input type="submit" name="Submit2" value="Ajouter">
      <input name="ajoutDim" type="hidden"  value="okajoutDim">
  </div>
</form>
<p>&nbsp;</p>

</body>
</html>
