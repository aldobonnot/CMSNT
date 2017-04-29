<?php session_start();
if(!isset($_POST['ajoutP'])) {$ajoutP="";} else {$ajoutP=$_POST['ajoutP'];}
if(!isset($_POST['titreLien2'])) {$titreLien2="";} else {$titreLien2=$_POST['titreLien2'];}
if(!isset($_POST['urlien2'])) {$urlien2="";} else {$urlien2=$_POST['urlien2'];}
if(!isset($_POST['target2'])){ $target2="";} else {$target2=$_POST['target2'];}
if(!isset($_POST['ajoutL'])) {$ajoutL="";} else {$ajoutL=$_POST['ajoutL'];}
$titreLien2b=addslashes($titreLien2);

if(!isset($_POST['idM1B2'])) {$idM1B2="0";} else {$idM1B2=$_POST['idM1B2'];}
if(!isset($_POST['idM2B2'])) {$idM2B2="0";} else {$idM2B2=$_POST['idM2B2'];}
if(!isset($_POST['idM3B2'])) {$idM3B2="0";} else {$idM3B2=$_POST['idM3B2'];}

if(!isset($_POST['idM1B'])) {$idM1B="0";} else {$idM1B=$_POST['idM1B'];}
if(!isset($_POST['idM2B'])) {$idM2B="0";} else {$idM2B=$_POST['idM2B'];}
if(!isset($_POST['idM3B'])) {$idM3B="0";} else {$idM3B=$_POST['idM3B'];}

if(!isset($_GET['idM1'])){ $idM1="0";} else {$idM1=$_GET['idM1'];}
if(!isset($_GET['idM2'])){ $idM2="0";} else {$idM2=$_GET['idM2'];}
if(!isset($_GET['idM3'])) {$idM3="0";} else {$idM3=$_GET['idM3'];}
if(!isset($_GET['AffForm'])) {$AffForm="";} else {$AffForm=$_GET['AffForm'];}

include('int/cxCMS.php');
if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }
$charge="<div style=\"margin-top:20%;margin-left:40%; position:absolute;z-index:5;\"><img src=\"fancybox_loading.gif\" width=\"48\" height=\"48\"></div>";

//Ajout des liens
if($ajoutL=="okajoutL"){
//3
if($idM1B2!="0" && $idM2B2!="0" && $idM3B2!="0")
{
Global $pdo;
echo $charge;
$query = "INSERT INTO cms_list_liens (id_M1,id_M2,id_M3,nom_lien,url_lien,target_lien) VALUES ('$idM1B2', '$idM2B2','$idM3B2', '$titreLien2b', '$urlien2', '$target2')";
if ($pdo->exec($query) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B2&idM2=$idM2B2&idM3=$idM3B2\";";
echo"</script>";}

}
//2
if($idM1B2!="0" && $idM2B2!="0" && $idM3B2=="0")
{
Global $pdo;
echo $charge;
$query = "INSERT INTO cms_list_liens (id_M1, id_M2, nom_lien, url_lien, target_lien) VALUES ('$idM1B2', '$idM2B2', '$titreLien2b', '$urlien2', '$target2')";
if ($pdo->exec($query) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B2&idM2=$idM2B2\";";
echo"</script>";
}
}
//1
if($idM1B2!="0" && $idM2B2=="0" && $idM3B2=="0")
{
Global $pdo;
echo $charge;
$query = "INSERT INTO cms_list_liens (id_M1,nom_lien,url_lien,target_lien) VALUES ('$idM1B2', '$titreLien2b', '$urlien2', '$target2')";
if ($pdo->exec($query) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B2\";";
echo"</script>";}

}
//finajout
}
//Modif des liens
if($ajoutP=="okajoutP"){
//3
if($idM1B!="0" && $idM2B!="0" && $idM3B!="0")
{
Global $pdo;
echo $charge;
foreach($_POST["id_lien"] as $k => $v){
$NewO = addslashes($_POST["nom_lien"][$k]);
$New1 = $_POST["url_lien"][$k];
$New2 = $_POST["target_lien"][$k];
$New3 = $_POST["aff_lien"][$k];

$query = "UPDATE cms_list_liens SET nom_lien='$NewO', url_lien='$New1', target_lien='$New2', aff_lien='$New3' WHERE id_lien='$v'";
if ($pdo->exec($query) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B&idM2=$idM2B&idM3=$idM3B\";";
echo"</script>";
} 
}
}
//2
if($idM1B!="0" && $idM2B!="0" && $idM3B=="0")
{
	Global $pdo;
echo $charge;
foreach($_POST["id_lien"] as $k => $v){
$NewO = addslashes($_POST["nom_lien"][$k]);
$New1 = $_POST["url_lien"][$k];
$New2 = $_POST["target_lien"][$k];
$New3 = $_POST["aff_lien"][$k];

$query = "UPDATE cms_list_liens SET nom_lien='$NewO', url_lien='$New1', target_lien='$New2', aff_lien='$New3' WHERE id_lien='$v'";
if ($pdo->exec($query) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B&idM2=$idM2B\";";
echo"</script>";
}
}
}
//3
if($idM1B!="0" && $idM2B=="0" && $idM3B=="0")
{
	Global $pdo;
echo $charge;
foreach($_POST["id_lien"] as $k => $v){
$NewO = addslashes($_POST["nom_lien"][$k]);
$New1 = $_POST["url_lien"][$k];
$New2 = $_POST["target_lien"][$k];
$New3 = $_POST["aff_lien"][$k];

$query = "UPDATE cms_list_liens SET nom_lien='$NewO', url_lien='$New1', target_lien='$New2', aff_lien='$New3' WHERE id_lien='$v'";
if ($pdo->exec($query) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B\";";
echo"</script>";
} 
}
}
//fin modif
}

//select3
if($idM1!="0" && $idM2!="0" && $idM3!="0")
{
	Global $pdo;
$query2 = $pdo->query("SELECT * FROM cms_list_liens WHERE cms_list_liens.id_M3='$idM3' ");
$val2R= $query2->fetchall(PDO::FETCH_ASSOC);
$nbPDES=$query2->rowCount();


$query2Q = $pdo->query("SELECT * FROM cms_m3 WHERE cms_m3.id_M3='$idM3' ");
$val2Q= $query2Q->fetch(PDO::FETCH_ASSOC);
$idpage= stripslashes($val2Q['nom_M3']);
}
//select2
if($idM1!="0" && $idM2!="0" && $idM3=="0")
{
Global $pdo;
$query2 = $pdo->query("SELECT * FROM cms_list_liens WHERE cms_list_liens.id_M2='$idM2'");
$val2R= $query2->fetchall(PDO::FETCH_ASSOC);
$nbPDES=$query2->rowCount();

$query2Q = $pdo->query("SELECT * FROM cms_m2 WHERE cms_m2.id_M2='$idM2'");
$val2Q= $query2Q->fetch(PDO::FETCH_ASSOC);
$idpage= stripslashes($val2Q['nom_M2']);
}
//select1
if($idM1!="0" && $idM2=="0" && $idM3=="0")
{Global $pdo;
$query2 = $pdo->query("SELECT * FROM cms_list_liens WHERE cms_list_liens.id_M1='$idM1'");
$val2R= $query2->fetchall(PDO::FETCH_ASSOC);
$nbPDES=$query2->rowCount();

$query2Q = $pdo->query("SELECT * FROM cms_m1 WHERE cms_m1.id_M1='$idM1'");
$val2Q= $query2Q->fetch(PDO::FETCH_ASSOC);
$idpage= stripslashes ($val2Q['nom_M1']);
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
<title>Ajout modification des liens: <?php echo $idpage;?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body{font-family: 'Exo 2', sans-serif;font-size:12px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:10px;}
h3{font-family: 'Exo 2', sans-serif;font-size:22px; font-weight:600; color:#999900;margin-top:0px;margin-bottom:10px;}
.tttab{font-size:1.1em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}
a.aflien{font-family: 'Exo 2', sans-serif;font-size:18px; font-weight:600; color:#999900;text-decoration:none;}
a.aflien:hover{ color:#000000;text-decoration:none;}</style>
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
      <h2>Ajout modification des liens pour la page</h2><h3><?php echo utf8_decode($idpage);?> </h3>
      
    </td>
  </tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1">
<?php if($nbPDES==0){?><center>
  <font color="#CC0000"  size="3"><b>Il n'y 
  a pas de lien dans cette page</b></font> 
</center><?php }else{echo"";}?>
<?php 
switch($nbPDES){
case 0:
include('formajoulien.php');
break;
default:
if($AffForm=="oui"){include('formajoulien.php');}else{include('listlien.php');}
break;
}
?>

  
</form>
<p>&nbsp;</p>
</body>
</html>