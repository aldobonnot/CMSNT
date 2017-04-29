<?php session_start();
if(!isset($_POST['ajoutP'])) $ajoutP=""; else $ajoutP=$_POST['ajoutP'];
if(!isset($_POST['small'])) $small=""; else $small=$_POST['small'];
if(!isset($_POST['moyen'])) $moyen=""; else $moyen=$_POST['moyen'];
if(!isset($_POST['big'])) $big=""; else $big=$_POST['big'];
if(!isset($_POST['titros'])) $titros=""; else $titros=$_POST['titros'];
if(!isset($_POST['prixos'])) $prixos=""; else $prixos=$_POST['prixos'];
if(!isset($_POST['dimos'])) $dimos=""; else $dimos=$_POST['dimos'];
if(!isset($_POST['ajoutL'])) $ajoutL=""; else $ajoutL=$_POST['ajoutL'];

if(!isset($_POST['idM1B2'])) $idM1B2=""; else $idM1B2=$_POST['idM1B2'];
if(!isset($_POST['idM2B2'])) $idM2B2=""; else $idM2B2=$_POST['idM2B2'];
if(!isset($_POST['idM3B2'])) $idM3B2=""; else $idM3B2=$_POST['idM3B2'];

if(!isset($_POST['idM1B'])) $idM1B=""; else $idM1B=$_POST['idM1B'];
if(!isset($_POST['idM2B'])) $idM2B=""; else $idM2B=$_POST['idM2B'];
if(!isset($_POST['idM3B'])) $idM3B=""; else $idM3B=$_POST['idM3B'];

if(!isset($_GET['idM1'])) $idM1="0"; else $idM1=$_GET['idM1'];
if(!isset($_GET['idM2'])) $idM2="0"; else $idM2=$_GET['idM2'];
if(!isset($_GET['idM3'])) $idM3="0"; else $idM3=$_GET['idM3'];
if(!isset($_GET['AffForm'])) $AffForm=""; else $AffForm=$_GET['AffForm'];


include('int/cxCMS.php');

if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }


//Ajout des photos
if($ajoutL=="okajoutL"){
//3
if($idM1B2!="0" && $idM2B2!="0" && $idM3B2!="0")
{
echo $charge;
$queryA = "INSERT INTO cms_photos (id_M3, small, moyen, big, titre_img, prix, dimensions) VALUES ('$idM3B2', '$small', '$moyen', '$big', '$titros', '$prixos', '$dimos')";
if ($mysqli->query($queryA) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B2&idM2=$idM2B2&idM3=$idM3B2\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}

}
//2
if($idM1B2!="0" && $idM2B2!="0" && $idM3B2=="0")
{
$querynbP = $mysqli->query("SELECT * FROM cms_photos WHERE cms_photos.id_M2='$idM2B2'");
$nbPexpo=mysqli_num_rows($querynbP);
if($nbPexpo>=1){$order_P="2";}else{$order_P="1";}

$queryA = "INSERT INTO cms_photos (id_M2, small, moyen, big, order_P, titre_img, prix, dimensions) VALUES ('$idM2B2', '$small', '$moyen', '$big', '$order_P', '$titros', '$prixos', '$dimos')";
if ($mysqli->query($queryA) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B2&idM2=$idM2B2\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}
//1
if($idM1B2!="0" && $idM2B2=="0" && $idM3B2=="0")
{
echo $charge;

$queryA = "INSERT INTO cms_photos (id_M1, small, moyen, big, titre_img, prix, dimensions) VALUES ('$idM1B2', '$small', '$moyen', '$big', '$titros', '$prixos', '$dimos')";
if ($mysqli->query($queryA) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B2\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}
//finajout
}
//Modif des photos
if($ajoutP=="okajoutP"){
//3
if($idM1B2!="0" && $idM2B2!="0" && $idM3B2!="0")
{
echo $charge;
foreach($_POST["id_photo"] as $k => $v){
$NewO = $_POST["small"][$k];
$New1 = $_POST["moyen"][$k];
$New2 = $_POST["big"][$k];
$New3 = $_POST["titre"][$k];
$New4 = $_POST["pris_o"][$k];
$New5 = $_POST["dim"][$k];
$New6 = $_POST["order_P"][$k];
if($New6!=""){$New6=$New6;}else{$New6=0;}
$New7 = $_POST["aff_P"][$k];
$New3 = addslashes($New3);
$query = "UPDATE cms_photos SET small='$NewO', moyen='$New1', big='$New2', titre_img='$New3', prix='$New4', dimensions='$New5', order_P='$New6', aff_P='$New7' WHERE id_photo='$v'";
if ($mysqli->query($query) === TRUE) {
	
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B&idM2=$idM2B&idM3=$idM3B\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}
}
//2
if($idM1B!="0" && $idM2B!="0" && $idM3B=="0")
{
echo $charge;
foreach($_POST["id_photo"] as $k => $v){
$NewO = $_POST["small"][$k];
$New1 = $_POST["moyen"][$k];
$New2 = $_POST["big"][$k];
$New3 = $_POST["titre"][$k];
$New4 = $_POST["pris_o"][$k];
$New5 = $_POST["dim"][$k];
$New6 = $_POST["order_P"][$k];
$New7 = $_POST["aff_P"][$k];
$New3 = addslashes($New3);

$query = "UPDATE cms_photos SET small='$NewO', moyen='$New1', big='$New2', titre_img='$New3', prix='$New4', dimensions='$New5', order_P='$New6', aff_P='$New7' WHERE id_photo='$v'";
if ($mysqli->query($query) === TRUE) {
	$iddp= end($v);
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B&idM2=$idM2B\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}
}
//3
if($idM1B!="0" && $idM2B=="0" && $idM3B=="0")
{
echo $charge;
foreach($_POST["id_photo"] as $k => $v){
$NewO = $_POST["small"][$k];
$New1 = $_POST["moyen"][$k];
$New2 = $_POST["big"][$k];
$New3 = $_POST["titre"][$k];
$New4 = $_POST["pris_o"][$k];
$New5 = $_POST["dim"][$k];
$New6 = $_POST["order_P"][$k];
$New7 = $_POST["aff_P"][$k];
$New3 = addslashes($New3);

$query = "UPDATE cms_photos SET small='$NewO', moyen='$New1', big='$New2', titre_img='$New3', prix='$New4', dimensions='$New5', order_P='$New6', aff_P='$New7' WHERE id_photo='$v'";
if ($mysqli->query($query) === TRUE) {
	
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}
}
//fin modif
}

//select3
if($idM1!="0" && $idM2!="0" && $idM3!="0")
{
$query2 = $mysqli->query("SELECT * FROM cms_photos WHERE cms_photos.id_M3='$idM3' ORDER BY order_P ASC");
$val2 = $query2->fetch_array();
$nbPDES=mysqli_num_rows($query2);

$query2Q = $mysqli->query("SELECT * FROM cms_m3 WHERE cms_m3.id_M3='$idM3'");
$val2Q = $query2Q->fetch_array();
$idpage=$val2Q['nom_M3'];
}
//select2
if($idM1!="0" && $idM2!="0" && $idM3=="0")
{
$query2 = $mysqli->query("SELECT * FROM cms_photos WHERE cms_photos.id_M2='$idM2' ORDER BY order_P ASC");
$val2 = $query2->fetch_array();
$nbPDES=mysqli_num_rows($query2);

$query2Q = $mysqli->query("SELECT * FROM cms_m2 WHERE cms_m2.id_M2='$idM2'");
$val2Q = $query2Q->fetch_array();
$idpage=$val2Q['nom_M2'];
}
//select1
if($idM1!="0" && $idM2=="0" && $idM3=="0")
{
$query2 = $mysqli->query("SELECT * FROM cms_photos WHERE cms_photos.id_M1='$idM1' ORDER BY order_P ASC");
$val2 = $query2->fetch_array();
$nbPDES=mysqli_num_rows($query2);

$query2Q = $mysqli->query("SELECT * FROM cms_m1 WHERE cms_m1.id_M1='$idM1'");
$val2Q = $query2Q->fetch_array();
$idpage=$val2Q['nom_M1'];
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
<title>Ajout modification des photos: <?php echo $idpage;?></title>

<style type="text/css"> @charset "utf-8";
body{font-family: 'Exo 2', sans-serif;font-size:12px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:10px;}
h3{font-family: 'Exo 2', sans-serif;font-size:22px; font-weight:600; color:#999900;margin-top:0px;margin-bottom:10px;}
.tttab{font-size:1.1em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}
a.aflien{font-family: 'Exo 2', sans-serif;font-size:18px; font-weight:600; color:#999900;text-decoration:none;}
a.aflien:hover{ color:#000000;text-decoration:none;}
#int td{border-bottom:1px solid #cccccc}
.carta{margin-left:20px;font-size:10px;color:#ccc;text-decoration:none}
.carta:hover{margin-left:20px;font-size:10px;color:#ff0000;text-decoration:none}
.btnsub{position: fixed;
    bottom: 0;
    right: 0;
   padding:20px;
	background:#DF01A5;
    border: 1px solid #000;
	border-radius: 10px;
	text-align:center}
	.btn{border-radius: 5px;padding:2px;}</style>
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
      <h2>Ajout modification des photos sur la page</h2><h3><?php echo $idpage;?> </h3>
      
    </td>
  </tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1">
<?php 
switch($nbPDES){
case 0:
echo"<center>
  <font color=\"#CC0000\"  size=\"3\"><b>Il n'y 
  a pas de photo dans cette page</b></font> 
</center>";
include('formajouP.php');
break;
default:
if($AffForm=="oui"){include('formajouP.php');}else{include('listP.php');}
break;
}?>

  
</form>
<p>&nbsp;</p>
<script src="../js/fancybox/jquery.fancybox.js"></script>
<script src="../js/fancybox/jquery.fancybox-buttons.js"></script>
<script src="../js/fancybox/jquery.fancybox-thumbs.js"></script>
<script src="../js/fancybox/jquery.easing-1.3.pack.js"></script>
<script src="../js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript">$(document).ready(function() {$(".various").fancybox({
        maxWidth	: 800,
		maxHeight	: 620,
		fitToView	: false,
		width		: '93%',
		height		: '95%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		afterClose  : function() {window.location.reload();}
		
});
});</script>
</body>
</html>
