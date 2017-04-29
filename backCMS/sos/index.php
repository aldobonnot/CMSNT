<?php session_start();
include('../int/cxCMS.php');

if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }
$fichier="../../.htaccess";
$num = 'ErrorDocument 404 /404.htm'."\n";
$num .= 'Options +FollowSymlinks'."\n";
$num .= 'RewriteEngine on'."\n";

$QpmA=$mysqli->query("SELECT * FROM cms_m1,cms_zones WHERE  cms_m1.id_zone1=cms_zones.id_zone");
$rowQpmA= $QpmA->fetch_assoc();
$nbt=mysqli_num_rows($QpmA);

if($nbt>0){
do{
	$num .='RewriteRule ^'.$rowQpmA['var_M1'].'.php$ index.php?de='.$rowQpmA['var_M1'].' [L]'."\n";
	
/*--------------------------------------------------------------------------------------*/
$lazoneB=$rowQpmA['id_zone1'];
$query3 = $mysqli->query("SELECT zone_sql FROM cms_zones WHERE id_zone='$lazoneB'");
$val3 = $query3->fetch_array();
$lazone=$val3['zone_sql'];
switch($lazone){
case 1:
/*--------------------------------------------------------------------------------------*/
$num .='RewriteRule ^'.$rowQpmA['var_M1'].'_ok.php$ index.php?de='.$rowQpmA['var_M1'].'&env=ok'.' [L]'."\n";
/*--------------------------------------------------------------------------------------*/
break;

}   
$idmb=$rowQpmA['id_M1'];
$QpmB=$mysqli->query("SELECT * FROM cms_m2,cms_zones WHERE id_M1='$idmb' AND cms_m2.id_zone2=cms_zones.id_zone");
$rowQpmB= $QpmB->fetch_assoc();
$nbst=mysqli_num_rows($QpmB);
if($nbst>0){
do{
/*--------------------------------------------------------------------------------------*/
$num .='RewriteRule ^'.$rowQpmA['var_M1'].'_'.$rowQpmB['var_M2'].'.php$ index.php?de='.$rowQpmA['var_M1'].'&rub='.$rowQpmB['var_M2'].' [L]'."\n";
/*--------------------------------------------------------------------------------------*/
$lazoneC=$rowQpmB['id_zone2'];
$query4 = $mysqli->query("SELECT zone_sql FROM cms_zones WHERE id_zone='$lazoneC'");
$val4 = $query4->fetch_array();
$lazone2=$val4['zone_sql'];
switch($lazone2){
case 2:
/*--------------------------------------------------------------------------------------*/
$num .='RewriteRule ^'.$rowQpmA['var_M1'].'_'.$rowQpmB['var_M2'].'_okZ.php$ index.php?de='.$rowQpmA['var_M1'].'&rub='.$rowQpmB['var_M2'].'&dcnt=okZ'.' [L]'."\n";
/*--------------------------------------------------------------------------------------*/
break;
case 3:
/*--------------------------------------------------------------------------------------*/
$num .='RewriteRule ^'.$rowQpmA['var_M1'].'_'.$rowQpmB['var_M2'].'_ok.php$ index.php?de='.$rowQpmA['var_M1'].'&rub='.$rowQpmB['var_M2'].'&env=ok'.' [L]'."\n";
/*--------------------------------------------------------------------------------------*/

break;
case 5:
/*--------------------------------------------------------------------------------------*/
$num .='RewriteRule ^'.$rowQpmA['var_M1'].'_'.$rowQpmB['var_M2'].'_ok.php$ index.php?de='.$rowQpmA['var_M1'].'&rub='.$rowQpmB['var_M2'].'&env=ok'.' [L]'."\n";
/*--------------------------------------------------------------------------------------*/

break;
case 6:
/*--------------------------------------------------------------------------------------*/
$num .='RewriteRule ^'.$rowQpmA['var_M1'].'_'.$rowQpmB['var_M2'].'_ok.php$ index.php?de='.$rowQpmA['var_M1'].'&rub='.$rowQpmB['var_M2'].'&env=ok'.' [L]'."\n";
/*--------------------------------------------------------------------------------------*/

break;
} 
$idmc=$rowQpmB['id_M2'];
$QpmC=$mysqli->query("SELECT * FROM cms_m3,cms_zones WHERE id_M2='$idmc' AND cms_m3.id_zone3=cms_zones.id_zone");
$rowQpmC=$QpmC->fetch_assoc();
$nbsst=mysqli_num_rows($QpmC);
if($nbsst>0){
do{
/*--------------------------------------------------------------------------------------*/
$num .='RewriteRule ^'.$rowQpmA['var_M1'].'_'.$rowQpmB['var_M2'].'_'.$rowQpmC['var_M3'].'.php$ index.php?de='.$rowQpmA['var_M1'].'&rub='.$rowQpmB['var_M2'].'&art='.$rowQpmC['var_M3'].' [L]'."\n";
/*--------------------------------------------------------------------------------------*/
$lazoneD=$rowQpmC['id_zone3'];
$query5 = $mysqli->query("SELECT zone_sql FROM cms_zones WHERE id_zone='$lazoneD'");
$val5 = $query5->fetch_array();
$lazone3=$val5['zone_sql'];
switch($lazone3){
case 2:
/*--------------------------------------------------------------------------------------*/
$num .='RewriteRule ^'.$rowQpmA['var_M1'].'_'.$rowQpmB['var_M2'].'_'.$rowQpmC['var_M3'].'_okZ.php$ index.php?de='.$rowQpmA['var_M1'].'&rub='.$rowQpmB['var_M2'].'&art='.$rowQpmC['var_M3'].'&dcnt=okZ'.' [L]'."\n";
/*--------------------------------------------------------------------------------------*/
break;
case 3:
/*--------------------------------------------------------------------------------------*/
$num .='RewriteRule ^'.$rowQpmA['var_M1'].'_'.$rowQpmB['var_M2'].'_'.$rowQpmC['var_M3'].'_ok.php$ index.php?de='.$rowQpmA['var_M1'].'&rub='.$rowQpmB['var_M2'].'&art='.$rowQpmC['var_M3'].'&env=ok'.' [L]'."\n";
/*--------------------------------------------------------------------------------------*/
break;
}
	  
}while ($rowQpmC = mysqli_fetch_assoc($QpmC));}else{echo"";}
	  
}while ($rowQpmB = mysqli_fetch_assoc($QpmB));}else{echo"";}	
	
}while ($rowQpmA = mysqli_fetch_assoc($QpmA));}else{echo"";}

$fp2 = fopen ("$fichier", "w");
fputs ($fp2, $num);
fclose ($fp2);

echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"constructSM.php\";";
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
      <h2>Reconfiguration du site en cours</h2>
		
    </td>
  </tr>
</table>

</body>
</html>