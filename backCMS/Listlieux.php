<?php session_start();
//Liste des lieux pour les expositions
if(!isset($_POST['ajoutP'])) $ajoutP=""; else $ajoutP=$_POST['ajoutP'];
if(!isset($_POST['nomlieu'])) $nomlieu=""; else $nomlieu=$_POST['nomlieu'];
if(!isset($_POST['adresse'])) $adresse=""; else $adresse=$_POST['adresse'];
if(!isset($_POST['cdp'])) $cdp=""; else $cdp=$_POST['cdp'];
if(!isset($_POST['ville'])) $ville=""; else $ville=$_POST['ville'];
if(!isset($_POST['pays'])) $pays=""; else $pays=$_POST['pays'];
if(!isset($_POST['site'])) $site=""; else $site=$_POST['site'];

if(!isset($_POST['ajoutL'])) $ajoutL=""; else $ajoutL=$_POST['ajoutL'];

if(!isset($_GET['AffForm'])) $AffForm=""; else $AffForm=$_GET['AffForm'];

include('int/cxCMS.php');

if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }


//Ajout des lieux
if($ajoutL=="okajoutL"){
//3
$nomlieu=addslashes($nomlieu);
$adresse=addslashes($adresse);
$ville=addslashes($ville);
$pays=addslashes($pays);
echo $charge;
$queryA = "INSERT INTO cms_lieux (nomEEE, adresseEEE, cdpEEE, villeEEE, paysEEE, siteEEE) VALUES ('$nomlieu', '$adresse', '$cdp', '$ville', '$pays', '$site')";
if ($mysqli->query($queryA) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}

//Modif des liens
if($ajoutP=="okajoutP"){

//3

echo $charge;
foreach($_POST["id_lieu"] as $k => $v){
$NewO = $_POST["nom"][$k];
$New1 = $_POST["adresse"][$k];
$New2 = $_POST["cdp"][$k];
$New3 = $_POST["ville"][$k];
$New4 = $_POST["pays"][$k];
$New5 = $_POST["site"][$k];
$New6 = $_POST["aff_P"][$k];
$NewO = addslashes($NewO);
$New1 = addslashes($New1);
$New3 = addslashes($New3);
$query = "UPDATE cms_lieux SET nomEEE='$NewO', adresseEEE='$New1', cdpEEE='$New2', villeEEE='$New3', paysEEE='$New4', siteEEE='$New5', archivageEEE='$New6' WHERE id_EEE='$v'";
if ($mysqli->query($query) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;

}
}
//fin modif
}

//select3

$query2 = $mysqli->query("SELECT * FROM cms_lieux  ORDER BY id_EEE DESC");
$val2 = $query2->fetch_array();
$nbPDES=mysqli_num_rows($query2);



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
<title>Ajout modification de lieu: <?php echo $idpage;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css"> @charset "utf-8";
body{font-family: 'Exo 2', sans-serif;font-size:12px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:10px;}
h3{font-family: 'Exo 2', sans-serif;font-size:22px; font-weight:600; color:#999900;margin-top:0px;margin-bottom:10px;}
.tttab{font-size:1.1em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}
a.aflien{font-family: 'Exo 2', sans-serif;font-size:18px; font-weight:600; color:#999900;text-decoration:none;}
a.aflien:hover{ color:#000000;text-decoration:none;}
.basdepage{position:fixed;bottom:1px;right:1px;padding:5px;border-radius:5px;background:#D0F5A9;border:1px solid #ff4400;}</style>
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
      <h2>Ajout modification de lieux</h2>
      
    </td>
  </tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1">
<?php 
switch($nbPDES){
case 0:
echo"<center>
  <font color=\"#CC0000\"  size=\"3\"><b>Il n'y 
  a pas de Lieux enregistrés</b></font> 
</center>";
include('formajouLieux.php');
break;
default:
if($AffForm=="oui"){include('formajouLieux.php');}else{include('listLieux2.php');}
break;
}?>

  
</form>
<p>&nbsp;</p>
</body>
</html>
