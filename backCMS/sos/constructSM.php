<?php session_start();
include('../int/cxCMS.php');

if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }
$fichier="../../sitemap.xml";
$num = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
$num .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">.'."\n";
$num .= '<url>'."\n";
$num .= '<loc>'.URL.'</loc>'."\n";
$num .= '</url>'."\n";
$oui="Y";
$QpmA=$mysqli->query("SELECT * FROM cms_m1 WHERE aff_M1='$oui'");
$rowQpmA= $QpmA->fetch_assoc();
$nbt=mysqli_num_rows($QpmA);

if($nbt>0){
do{ $num .='<url>'."\n";
    $num .='<loc>'.URL.$rowQpmA['var_M1'].'.php</loc>'."\n";
	$num .='</url>'."\n";
	
$idmb=$rowQpmA['id_M1'];
$oui="N"; 
$QpmB=$mysqli->query("SELECT * FROM cms_m2 WHERE id_M1='$idmb' AND aff_M2!='$oui'");
$rowQpmB= $QpmB->fetch_assoc();
$nbst=mysqli_num_rows($QpmB);
if($nbst>0){
do{
/*--------------------------------------------------------------------------------------*/
$num .='<url>'."\n";
$num .='<loc>'.URL.$rowQpmA['var_M1'].'_'.$rowQpmB['var_M2'].'.php</loc>'."\n";
$num .='</url>'."\n";
/*--------------------------------------------------------------------------------------*/

$idmc=$rowQpmB['id_M2'];
$oui="N"; 
$QpmC=$mysqli->query("SELECT * FROM cms_m3 WHERE id_M2='$idmc' AND aff_M3!='$oui'");
$rowQpmC=$QpmC->fetch_assoc();
$nbsst=mysqli_num_rows($QpmC);
if($nbsst>0){
do{
/*--------------------------------------------------------------------------------------*/
$num .='<url>'."\n";
$num .='<loc>'.URL.$rowQpmA['var_M1'].'_'.$rowQpmB['var_M2'].'_'.$rowQpmC['var_M3'].'.php</loc>'."\n";
$num .='</url>'."\n";

/*--------------------------------------------------------------------------------------*/

	  
}while ($rowQpmC = mysqli_fetch_assoc($QpmC));}else{echo"";}
	  
}while ($rowQpmB = mysqli_fetch_assoc($QpmB));}else{echo"";}	
	
}while ($rowQpmA = mysqli_fetch_assoc($QpmA));}else{echo"";}
$num .='</urlset>'."\n";
$fp2 = fopen ("$fichier", "w");
fputs ($fp2, $num);
fclose ($fp2);

echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"../../contact_plan-du-site.php\";";
echo"</script>";
?><!DOCTYPE html>
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
<title>Modification referencement page : </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body{font-family: 'Exo 2', sans-serif;font-size:14px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:20px;}
h3{font-family: 'Exo 2', sans-serif;font-size:22px; font-weight:600; color:#999900;margin-top:0px;margin-bottom:10px;}
.tttab{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}
.tttab2{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:5px;padding-bottom:5px;}
a.arch{font-size:1.5em;font-weight:600; color:#000000;text-decoration:none;}a.arch:hover{color:#ff0000;text-decoration:none;}</style>

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
      <h2>Reconfiguration du sitemap</h2>
	Si cette page est affiché c'est qu'il y a un soucis et que votre sitemap n'est pas construit
	    regardez ce qui se passe dans backCMS/sos/constructSM.php
    </td>
  </tr>
</table>

</body>
</html>
