<?php session_start();
if(!isset($_GET['idM1'])) {$idM1="0";} else {$idM1=$_GET['idM1'];}
if(!isset($_GET['idM2'])) {$idM2="0";} else {$idM2=$_GET['idM2'];}
if(!isset($_GET['idM3'])) {$idM3="0";} else {$idM3=$_GET['idM3'];}
if(!isset($_GET['AffForm'])) {$AffForm="";} else {$AffForm=$_GET['AffForm'];}

include('int/cxCMS.php');
require_once('objet/modifZones.php');
if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }
Global $pdo;

//select2
if($idM1!="0" && $idM2!="0" && $idM3=="0")
{
$query2Q = $pdo->query("SELECT * FROM cms_m1,cms_m2,cms_m3 WHERE cms_m3.id_M2='$idM2' AND cms_m2.id_M2=cms_m3.id_M2 AND cms_m1.id_M1=cms_m2.id_M1");

$val2R = $query2Q->fetchall(PDO::FETCH_ASSOC);
foreach ($val2R as $key => $nomrub){$nompage=$nomrub['nom_M2'];
$varM1=$nomrub['var_M1'];
$varM2=$nomrub['var_M2'];
}

$catrub=2;
$nbPDES=$query2Q->rowCount();

}
//select1
if($idM1!="0" && $idM2=="0" && $idM3=="0")
{
$query2Q = $pdo->query("SELECT * FROM cms_m1,cms_m2 WHERE cms_m2.id_M1='$idM1' AND cms_m1.id_M1=cms_m2.id_M1");

$val2R = $query2Q->fetchall(PDO::FETCH_ASSOC);
foreach ($val2R as $key => $nomrub){
$nompage = $nomrub['nom_M1'];
$varM1=$nomrub['var_M1'];
$varM2="";
}

$catrub=1;
$nbPDES=$query2Q->rowCount();
}

//ordre formulaire
if(!isset($_POST['modifRub'])) $modifRub=""; else $modifRub=$_POST['modifRub'];
if(!isset($_POST['ajtRub'])) $ajtRub=""; else $ajtRub=$_POST['ajtRub'];
//formulaire Ajout rub
if(!isset($_POST['idM1B2'])) $idM1B2=""; else $idM1B2=$_POST['idM1B2'];
if(!isset($_POST['idM2B2'])) $idM2B2=""; else $idM2B2=$_POST['idM2B2'];
if(!isset($_POST['idM3B2'])) $idM3B2=""; else $idM3B2=$_POST['idM3B2'];
if(!isset($_POST['varM1b'])) $varM1b=""; else $varM1b=$_POST['varM1b'];
if(!isset($_POST['varM2b'])) $varM2b=""; else $varM2b=$_POST['varM2b'];

if(!isset($_POST['nomMenu'])) $nomMenu=""; else $nomMenu=$_POST['nomMenu'];
if(!isset($_POST['ttgoogle'])) $ttgoogle=""; else $ttgoogle=$_POST['ttgoogle'];
if(!isset($_POST['keyword'])) $keyword=""; else $keyword=$_POST['keyword'];
if(!isset($_POST['comment'])) $comment=""; else $comment=$_POST['comment'];
if(!isset($_POST['ttpagesite'])) $ttpagesite=""; else $ttpagesite=$_POST['ttpagesite'];
if(!isset($_POST['editor1'])) $editor1=""; else $editor1=$_POST['editor1'];
if(!isset($_POST['zone'])) $zone=""; else $zone=$_POST['zone'];
if(!isset($_POST['aff_rub'])) $aff_rub=""; else $aff_rub=$_POST['aff_rub'];
if(!isset($_POST['date_eve'])) $date_eve=""; else $date_eve=$_POST['date_eve'];
if(!isset($_POST['id_EEE'])) $id_EEE=""; else $id_EEE=$_POST['id_EEE'];
if(!isset($_POST['j_debut'])) $j_debut=""; else $j_debut=$_POST['j_debut'];
if(!isset($_POST['m_debut'])) $m_debut=""; else $m_debut=$_POST['m_debut'];
if(!isset($_POST['a_debut'])) $a_debut=""; else $a_debut=$_POST['a_debut'];
if(!isset($_POST['j_fin'])) $j_fin=""; else $j_fin=$_POST['j_fin'];
if(!isset($_POST['m_fin'])) $m_fin=""; else $m_fin=$_POST['m_fin'];
if(!isset($_POST['a_fin'])) $a_fin=""; else $a_fin=$_POST['a_fin'];
if(!isset($_POST['expo'])) $expo=""; else $expo=$_POST['expo'];
$nomMenu= trim($nomMenu);
$nomMenu2= addslashes($nomMenu);
$varutf8 = netTmcc($nomMenu);
$minuscule = strtolower($varutf8);
$var_page = netUrl($minuscule);
$ttgoogle2= addslashes($ttgoogle);
$comment2= addslashes($comment);
$ttpagesite2= addslashes($ttpagesite);
$date_eve=addslashes($date_eve);
$date_debut_expo=$a_debut."-".$m_debut."-".$j_debut;
$date_fin_expo=$a_fin."-".$m_fin."-".$j_fin;
//formulaire Modif rub
if(!isset($_POST['idM1B'])) $idM1B=""; else $idM1B=$_POST['idM1B'];
if(!isset($_POST['idM2B'])) $idM2B=""; else $idM2B=$_POST['idM2B'];
if(!isset($_POST['idM3B'])) $idM3B=""; else $idM3B=$_POST['idM3B'];




//Update rub
if($modifRub=="okmodifRub"){
//cas d'une sous rubrique de M2 à modifier dans M3
switch($catrub){
case 1:
echo $charge;
foreach($_POST["id_rub"] as $k => $v){
$NewO = $_POST["zone"][$k];
$New1 = $_POST["marg_rub"][$k];
$New2 = $_POST["aff_rub"][$k];
$queryN = "UPDATE cms_m2 SET id_zone2='$NewO', marg_top2='$New1', aff_M2='$New2' WHERE id_M2='$v'";
if ($pdo->query($queryN) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B&idM2=$idM2B&idM3=$idM3B\";";
echo"</script>";}
}
break;
case 2:
echo $charge;
foreach($_POST["id_rub"] as $k => $v){
$NewO = $_POST["zone"][$k];
$New1 = $_POST["marg_rub"][$k];
$New2 = $_POST["aff_rub"][$k];
$queryN = "UPDATE cms_m3 SET id_zone3='$NewO', marg_top3='$New1', aff_M3='$New2' WHERE id_M3='$v'";
if ($pdo->query($queryN) ===FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"?idM1=$idM1B&idM2=$idM2B&idM3=$idM3B\";";
echo"</script>";} 
}
break;}

}

//Insert rub
if($ajtRub=="okajtRub"){
//cas d'une sous rubrique de M2 à ajouter dans M3
switch($catrub){
case 1:
echo $charge;
if($idM1B2==3){
	$queryLL =$pdo->query("SELECT * FROM cms_lieux WHERE id_EEE='$id_EEE'");
        $rowLL =$queryLL->fetch(PDO::FETCH_ASSOC);
	$nomlieux=addslashes($rowLL['nomEEE']);
	$adresslieux=addslashes($rowLL['adresseEEE']);
	$cplieux=$rowLL['cdpEEE'];
	$villelieux=addslashes($rowLL['villeEEE']);
	$payslieux=addslashes($rowLL['paysEEE']);
	$ttgoogle2=$nomMenu2.", ".$nomlieux." ".$adresslieux." ".$cplieux." ".$payslieux;
	$ttpagesite2=$nomMenu2;
	$comment2="Exposition: ".$nomMenu2.", ".$nomlieux." ".$adresslieux." ".$cplieux." ".$payslieux.", ".$date_debut_expo."/".$date_fin_expo;
	$ttk=preg_replace('/[\s,;\.\:\"\']+/', ',', $nomMenu2);;
	$nomlieux=preg_replace('/[\s,;\.\:\"\']+/', ',', $nomlieux);;
	$adresslieux=preg_replace('/[\s,;\.\:\"\']+/', ',', $adresslieux);;
	$payslieux=preg_replace('/[\s,;\.\:\"\']+/', ',', $payslieux);;
	$keyword="exposition,".$ttk.",".$date_debut_expo.",".$nomlieux.",".$adresslieux.",".$cplieux.",".$payslieux;
	$iddulieu=$rowLL['id_EEE'];
	}else{$iddulieu=0;}
$queryA = "INSERT INTO cms_m2 (id_M1, nom_M2, var_M2, id_zone2, titre_P2, motsclefs2, comment2, titre_C2, contenu2, aff_M2, date_eve, date_debut_expo, date_fin_expo, id_EEE, j_debut, m_debut, a_debut, j_fin, m_fin, a_fin, expo
) VALUES ('$idM1B2', '$nomMenu2', '$var_page', '$zone', '$ttgoogle2', '$keyword', '$comment2', '$ttpagesite2', '$editor1', '$aff_rub', '$date_eve', '$date_debut_expo', '$date_fin_expo', '$iddulieu', '$j_debut', '$m_debut', '$a_debut', '$j_fin', '$m_fin', '$a_fin', '$expo')";
if ($pdo->query($queryA) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"sos/index.php\";";
echo"</script>";} 
break;
case 2:
echo $charge;
$queryA = "INSERT INTO cms_m3 (id_M1, id_M2, nom_M3, var_M3, id_zone3, titre_P3, motsclefs3, comment3, titre_C3, contenu3, aff_M3) 
VALUES ('$idM1B2', '$idM2B2', '$nomMenu2', '$var_page', '$zone', '$ttgoogle2', '$keyword', '$comment2', '$ttpagesite2', '$editor1', '$aff_rub')";
if ($pdo->query($queryA) === FALSE) {
	echo "Error: " .$pdo->errorInfo(). "<br>";
} else {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"sos/index.php\";";
echo"</script>";} 
break;}

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
<title>liste des sous rubrique de la page : <?php echo utf8_decode($nompage);?></title>
<link rel="stylesheet" href="fancybox.css">
<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/sample/js/sample.js"></script>
	<link rel="stylesheet" href="ckeditor/sample/css/samples.css">
	<link rel="stylesheet" href="ckeditor/sample/toolbarconfigurator/lib/codemirror/neo.css">
<style type="text/css">
body{font-family: 'Exo 2', sans-serif;font-size:14px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:20px;}
.tttab{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}
.tttab2{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:5px;padding-bottom:5px;}
h3{font-family: 'Exo 2', sans-serif;font-size:22px; font-weight:600; color:#999900;margin-top:0px;margin-bottom:10px;}
a.arch{font-size:1.5em;font-weight:600; color:#000000;text-decoration:none;}a.arch:hover{color:#ff0000;text-decoration:none;}
a.aflien{font-family: 'Exo 2', sans-serif;font-size:18px; font-weight:600; color:#999900;text-decoration:none;}
a.aflien:hover{ color:#000000;text-decoration:none;}</style>
<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
  }
  //-->
</script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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
      <h2>Liste des sous rubrique de:</h2>
	  <h3><?php echo utf8_decode($nompage);?></h3>
    </td>
  </tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1">
<?php if($nbPDES==0){?><center>
  <font color="#CC0000"  size="3"><b>Il n'y 
  a pas de sous rubrique pour cette page</b></font> 
</center><?php }else{echo"";}?>
<?php 
switch($nbPDES){
case 0:
include('formajourub.php');
break;
default:
if($AffForm=="oui"){include('formajourub.php');}else{include('listrub.php');}
break;
}?>
</form>
<script src="../js/fancybox/jquery.fancybox.js"></script>
<script src="../js/fancybox/jquery.fancybox-buttons.js"></script>
<script src="../js/fancybox/jquery.fancybox-thumbs.js"></script>
<script src="../js/fancybox/jquery.easing-1.3.pack.js"></script>
<script src="../js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript">$(document).ready(function() {$(".fancybox").fancybox();
$(".various").fancybox({
        maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		afterClose  : function() {window.location.reload();}
});
});</script>
</body>
</html>
