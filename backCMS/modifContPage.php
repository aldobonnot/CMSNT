<?php session_start();
//modifier le contenu d'une page
if(!isset($_POST['ajoutP'])) $ajoutP=""; else $ajoutP=$_POST['ajoutP'];
if(!isset($_POST['editor1'])) $editor1=""; else $editor1=$_POST['editor1'];
if(!isset($_POST['coment'])) $coment=""; else $coment=$_POST['coment'];
if(!isset($_POST['keywords'])) $keywords=""; else $keywords=$_POST['keywords'];
if(!isset($_POST['ttpage'])) $ttpage=""; else $ttpage=$_POST['ttpage'];
if(!isset($_POST['nommenu'])) $nommenu=""; else $nommenu=$_POST['nommenu'];
if(!isset($_POST['date_eve2'])) $date_eve2="nc"; else $date_eve2=$_POST['date_eve2'];
if(!isset($_POST['id_EEE2'])) $id_EEE2="nc"; else $id_EEE2=$_POST['id_EEE2'];
if(!isset($_POST['j_debut2'])) $j_debut2="nc"; else $j_debut2=$_POST['j_debut2'];
if(!isset($_POST['m_debut2'])) $m_debut2="nc"; else $m_debut2=$_POST['m_debut2'];
if(!isset($_POST['a_debut2'])) $a_debut2="nc"; else $a_debut2=$_POST['a_debut2'];
if(!isset($_POST['j_fin2'])) $j_fin2="nc"; else $j_fin2=$_POST['j_fin2'];
if(!isset($_POST['m_fin2'])) $m_fin2="nc"; else $m_fin2=$_POST['m_fin2'];
if(!isset($_POST['a_fin2'])) $a_fin2="nc"; else $a_fin2=$_POST['a_fin2'];
$coment=addslashes($coment);
$ttpage=addslashes($ttpage);
$nommenu2=trim($nommenu);
$nommenuD=addslashes($nommenu2);
$date_eve=addslashes($date_eve2);

 if(!isset($_POST['idM1B'])) $idM1B="0"; else $idM1B=$_POST['idM1B'];
if(!isset($_POST['idM2B'])) $idM2B="0"; else $idM2B=$_POST['idM2B'];
if(!isset($_POST['idM3B'])) $idM3B="0"; else $idM3B=$_POST['idM3B'];
if(!isset($_POST['varM1B'])) $varM1B=""; else $varM1B=$_POST['varM1B'];
if(!isset($_POST['varM2B'])) $varM2B=""; else $varM2B=$_POST['varM2B'];
if(!isset($_POST['lazoneB'])) $lazoneB=""; else $lazoneB=$_POST['lazoneB'];

if(!isset($_GET['idM1'])) $idM1="0"; else $idM1=$_GET['idM1'];
if(!isset($_GET['idM2'])) $idM2="0"; else $idM2=$_GET['idM2'];
if(!isset($_GET['idM3'])) $idM3="0"; else $idM3=$_GET['idM3'];

include('int/cxCMS.php');
if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }

if($ajoutP=="okajoutP"){
if($idM1B!="0" && $idM2B!="0" && $idM3B!="0")
{
$varutf8 = netTmcc($nommenu);
$minuscule = strtolower($varutf8);
$var_page = netUrl($minuscule);
echo $charge;
$query = "UPDATE  cms_m3 SET titre_C3='$ttpage', nom_M3='$nommenuD', var_M3='$var_page', contenu3='$editor1' WHERE id_M3='$idM3B'";
if ($mysqli->query($query) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"sos/index.php\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}

if($idM1B=="3" && $idM2B!="0" && $idM3B=="0")
{
$varutf8 = netTmcc($nommenu);
$minuscule = strtolower($varutf8);
$var_page = netUrl($minuscule);
echo $charge;
echo $nommenuD;
echo "<br>";
echo $var_page;
echo "<br>";
echo $editor1;
echo "<br>";
echo $date_eve2;
echo "<br>";
echo $id_EEE2;
echo "<br>";
echo $j_debut2;
echo "<br>";echo $m_debut2;
echo "<br>";
echo $a_debut2;
echo "<br>";


$query = "UPDATE  cms_m2 SET  titre_C2='$ttpage', nom_M2='$nommenuD', var_M2='$var_page', contenu2='$editor1', date_eve='$date_eve2', id_EEE='$id_EEE2', j_debut='$j_debut2', m_debut='$m_debut2', a_debut='$a_debut2', j_fin='$j_fin2', m_fin='$m_fin2', a_fin='$a_fin2' WHERE id_M2='$idM2B'";
if ($mysqli->query($query) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"sos/index.php\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;

    
}

}else{
    $varutf8 = netTmcc($nommenu);
$minuscule = strtolower($varutf8);
$var_page = netUrl($minuscule);
echo $charge;
$query = "UPDATE  cms_m2 SET  titre_C2='$ttpage', nom_M2='$nommenuD', var_M2='$var_page', contenu2='$editor1' WHERE id_M2='$idM2B'";
if ($mysqli->query($query) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"sos/index.php\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;

    
}

}

if($idM1B!="0" && $idM2B=="0" && $idM3B=="0")
{
$varutf8 = netTmcc($nommenu);
$minuscule = strtolower($varutf8);
$var_page = netUrl($minuscule);
echo $charge;
$query = "UPDATE  cms_m1 SET  titre_C1='$ttpage', nom_M1='$nommenuD', var_M1='$var_page', contenu1='$editor1' WHERE id_M1='$idM1B'";
if ($mysqli->query($query) === TRUE) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"sos/index.php\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}


}


if($idM1!="0" && $idM2!="0" && $idM3!="0")
{
$query2 = $mysqli->query("SELECT * FROM cms_m1, cms_m2, cms_m3  WHERE cms_m3.id_M3='$idM3' AND cms_m1.id_M1= cms_m2.id_M1 AND cms_m2.id_M2= cms_m3.id_M2");
$val2 = $query2->fetch_array();

$titrecontenu= stripslashes ($val2['titre_C3']);
$titremenu= stripslashes ($val2['nom_M3']);
$textPage=$val2['contenu3'];
$idpage=$val2['id_M3'];
$varM1=$val2['var_M1'];
$varM2=$val2['var_M2'];
$lazone=$val2['id_zone3'];
}
if($idM1!="0" && $idM2!="0" && $idM3=="0")
{
$query2 = $mysqli->query("SELECT * FROM cms_m1, cms_m2 WHERE cms_m2.id_M2='$idM2' AND cms_m1.id_M1= cms_m2.id_M1");
$val2 = $query2->fetch_array();

$titrecontenu= stripslashes ($val2['titre_C2']);
$titremenu= stripslashes ($val2['nom_M2']);
$textPage=$val2['contenu2'];
$date_eve=stripslashes ($val2['date_eve']);
$id_EEE=$val2['id_EEE'];
$j_debut=$val2['j_debut'];
$m_debut=$val2['m_debut'];
$a_debut=$val2['a_debut'];
$j_fin=$val2['j_fin'];
$m_fin=$val2['m_fin'];
$a_fin=$val2['a_fin'];
$idpage=$val2['id_M2'];
$varM1=$val2['var_M1'];
$varM2="";
$lazone=$val2['id_zone2'];
}

if($idM1!="0" && $idM2=="0" && $idM3=="0")
{
$query2 = $mysqli->query("SELECT * FROM cms_m1 WHERE cms_m1.id_M1='$idM1'");
$val2 = $query2->fetch_array();

$titrecontenu= stripslashes ($val2['titre_C1']);
$titremenu= stripslashes ($val2['nom_M1']);
$textPage=$val2['contenu1'];
$idpage=$val2['id_M1'];
$lazone=$val2['id_zone1'];
$varM1="";
$varM2="";
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
<title>Modification contenu page : <?php echo $titremenu;?></title>
<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/sample/js/sample.js"></script>
	<link rel="stylesheet" href="ckeditor/sample/css/samples.css">
	<link rel="stylesheet" href="ckeditor/sample/toolbarconfigurator/lib/codemirror/neo.css">
<style type="text/css"> @charset "utf-8";
body{font-family: 'Exo 2', sans-serif;font-size:14px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:20px;}
h3{font-family: 'Exo 2', sans-serif;font-size:22px; font-weight:600; color:#999900;margin-top:0px;margin-bottom:0px;}
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
      <h2>Modification du contenu<br>
        pour la page:</h2>
		<h3><?php echo $titremenu;?></h3>
    </td>
  </tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1">
   
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td align="center">&nbsp; </td>
    </tr>
    <tr> 
      <td align="center">&nbsp;</td>
    </tr> <?php if($idM1==3 && $idM2!=""){?><tr>
      <td align="center">Lieu de l'expo </td>
    </tr>
    <tr>
      <td align="center">
       <select class="liste" name="id_EEE2" id="id_EEE">
                <?php
																						
				$query2 =$mysqli->query("SELECT * FROM cms_lieux ORDER BY id_EEE DESC");
				
					while ($row2 =$query2->fetch_assoc()){
					echo "<option value=\"$row2[id_EEE]\"";
					$cel=$row2['id_EEE'];
					$cel2=$id_EEE;
					if (!(strcmp($cel, $cel2))){echo "SELECTED";}					
					echo(">$row2[nomEEE] $row2[cdpEEE] $row2[villeEEE]</option>");
				}
				?>
              </select> 
      </td>
    </tr><tr>
      <td align="center"><a class="various" data-fancybox-type="iframe" href="Listlieux.php?&AffForm=oui" >Ajouter un lieux</a></td>
   </tr><tr> 
    <td align="center">&nbsp;</td>
  </tr><?php }else{echo"";}?>
    <tr> 
      <td align="center"><?php if($idM1==3 && $idM2!=""){?>Titre de l'Exposition dans le plan du site<?php }else{?>Nom dans le menu<?php }?></td>
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
      <td align="center"><?php if($idM1==3 && $idM2!=""){?>Titre de l'expo dans la page sur le site<?php }else{?>Titre de la page dans la page sur le site<?php }?></td>
    </tr>
    <tr> 
      <td align="center"> 
        <input name="ttpage" type="text" size="41" value="<?php echo $titrecontenu;?>">
      </td>
    </tr>
    <tr> 
      <td align="center">&nbsp;</td>
    </tr>
   <?php if($idM1==3 && $idM2!=""){?> <tr>
      <td align="center">Date et heure du vernissage (non obligatoire) </td>
    </tr>
    <tr>
      <td align="center">
        <input name="date_eve2" type="text" size="41" value="<?php echo $date_eve;?>">
      </td>
    </tr><tr>
      <td align="center">&nbsp;</td>
    </tr><tr>
      <td align="center">Date de début exposition </td>
    </tr>
    <tr>
      <td align="center">
        <table width="10%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="12%"><select name="j_debut2">
                      <option value="01" <?php if (!(strcmp("01", $j_debut))) {echo "SELECTED";} ?>>01</option>
              <option value="02" <?php if (!(strcmp("02", $j_debut))) {echo "SELECTED";} ?>>02</option>
			  <option value="03" <?php if (!(strcmp("03", $j_debut))) {echo "SELECTED";} ?>>03</option>
			  <option value="04" <?php if (!(strcmp("04", $j_debut))) {echo "SELECTED";} ?>>04</option>
			  <option value="05" <?php if (!(strcmp("05", $j_debut))) {echo "SELECTED";} ?>>05</option>
			  <option value="06" <?php if (!(strcmp("06", $j_debut))) {echo "SELECTED";} ?>>06</option>
			  <option value="07" <?php if (!(strcmp("07", $j_debut))) {echo "SELECTED";} ?>>07</option>
			  <option value="08" <?php if (!(strcmp("08", $j_debut))) {echo "SELECTED";} ?>>08</option>
			  <option value="09" <?php if (!(strcmp("09", $j_debut))) {echo "SELECTED";} ?>>09</option>
			  <option value="10" <?php if (!(strcmp("10", $j_debut))) {echo "SELECTED";} ?>>10</option>
			  <option value="11" <?php if (!(strcmp("11", $j_debut))) {echo "SELECTED";} ?>>11</option>
			  <option value="12" <?php if (!(strcmp("12", $j_debut))) {echo "SELECTED";} ?>>12</option>
			  <option value="13" <?php if (!(strcmp("13", $j_debut))) {echo "SELECTED";} ?>>13</option>
			  <option value="14" <?php if (!(strcmp("14", $j_debut))) {echo "SELECTED";} ?>>14</option>
			  <option value="15" <?php if (!(strcmp("15", $j_debut))) {echo "SELECTED";} ?>>15</option>
			  <option value="16" <?php if (!(strcmp("16", $j_debut))) {echo "SELECTED";} ?>>16</option>
			  <option value="17" <?php if (!(strcmp("17", $j_debut))) {echo "SELECTED";} ?>>17</option>
			  <option value="18" <?php if (!(strcmp("18", $j_debut))) {echo "SELECTED";} ?>>18</option>
			  <option value="19" <?php if (!(strcmp("19", $j_debut))) {echo "SELECTED";} ?>>19</option>
			  <option value="20" <?php if (!(strcmp("20", $j_debut))) {echo "SELECTED";} ?>>20</option>
			  <option value="21" <?php if (!(strcmp("21", $j_debut))) {echo "SELECTED";} ?>>21</option>
			  <option value="22" <?php if (!(strcmp("22", $j_debut))) {echo "SELECTED";} ?>>22</option>
			  <option value="23" <?php if (!(strcmp("23", $j_debut))) {echo "SELECTED";} ?>>23</option>
			  <option value="24" <?php if (!(strcmp("24", $j_debut))) {echo "SELECTED";} ?>>24</option>
			  <option value="25" <?php if (!(strcmp("25", $j_debut))) {echo "SELECTED";} ?>>25</option>
			  <option value="26" <?php if (!(strcmp("26", $j_debut))) {echo "SELECTED";} ?>>26</option>
			  <option value="27" <?php if (!(strcmp("27", $j_debut))) {echo "SELECTED";} ?>>27</option>
			  <option value="28" <?php if (!(strcmp("28", $j_debut))) {echo "SELECTED";} ?>>28</option>
			  <option value="29" <?php if (!(strcmp("29", $j_debut))) {echo "SELECTED";} ?>>29</option>
			  <option value="30" <?php if (!(strcmp("30", $j_debut))) {echo "SELECTED";} ?>>30</option>
			  <option value="31" <?php if (!(strcmp("31", $j_debut))) {echo "SELECTED";} ?>>31</option>
                    </select></td>
                  <td width="56%"> <select name="m_debut2">
                      <option value="01" <?php if (!(strcmp("01", $m_debut))) {echo "SELECTED";} ?>>Janvier</option>
                      <option value="02" <?php if (!(strcmp("02", $m_debut))) {echo "SELECTED";} ?>>Février</option>
                      <option value="03" <?php if (!(strcmp("03", $m_debut))) {echo "SELECTED";} ?>>Mars</option>
                      <option value="04" <?php if (!(strcmp("04", $m_debut))) {echo "SELECTED";} ?>>Avril</option>
                      <option value="05" <?php if (!(strcmp("05", $m_debut))) {echo "SELECTED";} ?>>Mai</option>
                      <option value="06" <?php if (!(strcmp("06", $m_debut))) {echo "SELECTED";} ?>>Juin</option>
                      <option value="07" <?php if (!(strcmp("07", $m_debut))) {echo "SELECTED";} ?>>Juillet</option>
                      <option value="08" <?php if (!(strcmp("08", $m_debut))) {echo "SELECTED";} ?>>Aout</option>
                      <option value="09" <?php if (!(strcmp("09", $m_debut))) {echo "SELECTED";} ?>>Septembre</option>
                      <option value="10" <?php if (!(strcmp("10", $m_debut))) {echo "SELECTED";} ?>>Octobre</option>
                      <option value="11" <?php if (!(strcmp("11", $m_debut))) {echo "SELECTED";} ?>>Novembre</option>
                      <option value="12" <?php if (!(strcmp("12", $m_debut))) {echo "SELECTED";} ?>>Décembre</option>
                    </select> </td>
                  <td width="32%" > <select name="a_debut2">
                      <option value="2022" <?php if (!(strcmp("2022", $a_debut))) {echo "SELECTED";} ?>>2022</option>
					  <option value="2021" <?php if (!(strcmp("2021", $a_debut))) {echo "SELECTED";} ?>>2021</option>
					  <option value="2020" <?php if (!(strcmp("2020", $a_debut))) {echo "SELECTED";} ?>>2020</option>
					  <option value="2015" <?php if (!(strcmp("2019", $a_debut))) {echo "SELECTED";} ?>>2019</option>
					  <option value="2018" <?php if (!(strcmp("2018", $a_debut))) {echo "SELECTED";} ?>>2018</option>
					  <option value="2017" <?php if (!(strcmp("2017", $a_debut))) {echo "SELECTED";} ?>>2017</option>
					  <option value="2016" <?php if (!(strcmp("2016", $a_debut))) {echo "SELECTED";} ?>>2016</option>
					  <option value="2015" <?php if (!(strcmp("2015", $a_debut))) {echo "SELECTED";} ?>>2015</option>
					  <option value="2014" <?php if (!(strcmp("2014", $a_debut))) {echo "SELECTED";} ?>>2014</option>
					  <option value="2013" <?php if (!(strcmp("2013", $a_debut))) {echo "SELECTED";} ?>>2013</option>
					  </select> </td>
                </tr>
              </table>
      </td>
    </tr><tr>
      <td align="center">&nbsp;</td>
    </tr><tr>
      <td align="center">Date fin exposition </td>
    </tr>
    <tr>
      <td align="center">
        <table width="10%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="12%"><select name="j_fin2">
                      <option value="01" <?php if (!(strcmp("01", $j_fin))) {echo "SELECTED";} ?>>01</option>
              <option value="02" <?php if (!(strcmp("02", $j_fin))) {echo "SELECTED";} ?>>02</option>
			  <option value="03" <?php if (!(strcmp("03", $j_fin))) {echo "SELECTED";} ?>>03</option>
			  <option value="04" <?php if (!(strcmp("04", $j_fin))) {echo "SELECTED";} ?>>04</option>
			  <option value="05" <?php if (!(strcmp("05", $j_fin))) {echo "SELECTED";} ?>>05</option>
			  <option value="06" <?php if (!(strcmp("06", $j_fin))) {echo "SELECTED";} ?>>06</option>
			  <option value="07" <?php if (!(strcmp("07", $j_fin))) {echo "SELECTED";} ?>>07</option>
			  <option value="08" <?php if (!(strcmp("08", $j_fin))) {echo "SELECTED";} ?>>08</option>
			  <option value="09" <?php if (!(strcmp("09", $j_fin))) {echo "SELECTED";} ?>>09</option>
			  <option value="10" <?php if (!(strcmp("10", $j_fin))) {echo "SELECTED";} ?>>10</option>
			  <option value="11" <?php if (!(strcmp("11", $j_fin))) {echo "SELECTED";} ?>>11</option>
			  <option value="12" <?php if (!(strcmp("12", $j_fin))) {echo "SELECTED";} ?>>12</option>
			  <option value="13" <?php if (!(strcmp("13", $j_fin))) {echo "SELECTED";} ?>>13</option>
			  <option value="14" <?php if (!(strcmp("14", $j_fin))) {echo "SELECTED";} ?>>14</option>
			  <option value="15" <?php if (!(strcmp("15", $j_fin))) {echo "SELECTED";} ?>>15</option>
			  <option value="16" <?php if (!(strcmp("16", $j_fin))) {echo "SELECTED";} ?>>16</option>
			  <option value="17" <?php if (!(strcmp("17", $j_fin))) {echo "SELECTED";} ?>>17</option>
			  <option value="18" <?php if (!(strcmp("18", $j_fin))) {echo "SELECTED";} ?>>18</option>
			  <option value="19" <?php if (!(strcmp("19", $j_fin))) {echo "SELECTED";} ?>>19</option>
			  <option value="20" <?php if (!(strcmp("20", $j_fin))) {echo "SELECTED";} ?>>20</option>
			  <option value="21" <?php if (!(strcmp("21", $j_fin))) {echo "SELECTED";} ?>>21</option>
			  <option value="22" <?php if (!(strcmp("22", $j_fin))) {echo "SELECTED";} ?>>22</option>
			  <option value="23" <?php if (!(strcmp("23", $j_fin))) {echo "SELECTED";} ?>>23</option>
			  <option value="24" <?php if (!(strcmp("24", $j_fin))) {echo "SELECTED";} ?>>24</option>
			  <option value="25" <?php if (!(strcmp("25", $j_fin))) {echo "SELECTED";} ?>>25</option>
			  <option value="26" <?php if (!(strcmp("26", $j_fin))) {echo "SELECTED";} ?>>26</option>
			  <option value="27" <?php if (!(strcmp("27", $j_fin))) {echo "SELECTED";} ?>>27</option>
			  <option value="28" <?php if (!(strcmp("28", $j_fin))) {echo "SELECTED";} ?>>28</option>
			  <option value="29" <?php if (!(strcmp("29", $j_fin))) {echo "SELECTED";} ?>>29</option>
			  <option value="30" <?php if (!(strcmp("30", $j_fin))) {echo "SELECTED";} ?>>30</option>
			  <option value="31" <?php if (!(strcmp("31", $j_fin))) {echo "SELECTED";} ?>>31</option>
                    </select></td>
                  <td width="56%"> <select name="m_fin2">
                      <option value="01" <?php if (!(strcmp("01", $m_fin))) {echo "SELECTED";} ?>>Janvier</option>
                      <option value="02" <?php if (!(strcmp("02", $m_fin))) {echo "SELECTED";} ?>>Février</option>
                      <option value="03" <?php if (!(strcmp("03", $m_fin))) {echo "SELECTED";} ?>>Mars</option>
                      <option value="04" <?php if (!(strcmp("04", $m_fin))) {echo "SELECTED";} ?>>Avril</option>
                      <option value="05" <?php if (!(strcmp("05", $m_fin))) {echo "SELECTED";} ?>>Mai</option>
                      <option value="06" <?php if (!(strcmp("06", $m_fin))) {echo "SELECTED";} ?>>Juin</option>
                      <option value="07" <?php if (!(strcmp("07", $m_fin))) {echo "SELECTED";} ?>>Juillet</option>
                      <option value="08" <?php if (!(strcmp("08", $m_fin))) {echo "SELECTED";} ?>>Aout</option>
                      <option value="09" <?php if (!(strcmp("09", $m_fin))) {echo "SELECTED";} ?>>Septembre</option>
                      <option value="10" <?php if (!(strcmp("10", $m_fin))) {echo "SELECTED";} ?>>Octobre</option>
                      <option value="11" <?php if (!(strcmp("11", $m_fin))) {echo "SELECTED";} ?>>Novembre</option>
                      <option value="12" <?php if (!(strcmp("12", $m_fin))) {echo "SELECTED";} ?>>Décembre</option>
                    </select> </td>
                  <td width="32%" > <select name="a_fin2">
                      <option>---</option>
					  <option value="2022" <?php if (!(strcmp("2022", $a_fin))) {echo "SELECTED";} ?>>2022</option>
					  <option value="2021" <?php if (!(strcmp("2021", $a_fin))) {echo "SELECTED";} ?>>2021</option>
					  <option value="2020" <?php if (!(strcmp("2020", $a_fin))) {echo "SELECTED";} ?>>2020</option>
					  <option value="2015" <?php if (!(strcmp("2019", $a_fin))) {echo "SELECTED";} ?>>2019</option>
					  <option value="2018" <?php if (!(strcmp("2018", $a_fin))) {echo "SELECTED";} ?>>2018</option>
					  <option value="2017" <?php if (!(strcmp("2017", $a_fin))) {echo "SELECTED";} ?>>2017</option>
					  <option value="2016" <?php if (!(strcmp("2016", $a_fin))) {echo "SELECTED";} ?>>2016</option>
					  <option value="2015" <?php if (!(strcmp("2015", $a_fin))) {echo "SELECTED";} ?>>2015</option>
					  <option value="2014" <?php if (!(strcmp("2014", $a_fin))) {echo "SELECTED";} ?>>2014</option>
					  <option value="2013" <?php if (!(strcmp("2013", $a_fin))) {echo "SELECTED";} ?>>2013</option>
					  
					  </select></td>
                </tr>
              </table>
      </td>
    </tr><tr>
      <td align="center">&nbsp;</td></tr><?php }else{echo"";}?>
    <tr> 
      <td align="center">Texte de la page</td>
    </tr>
    <tr> 
      <td align="center"> 
        <table width="80%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td> 
              <textarea name="editor1" id="editor1" rows="10" cols="80">
                <?php echo $textPage;?>
            </textarea>
              <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
              &nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr> 
      <td align="center">&nbsp;</td>
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


<p>&nbsp;</p><script>
	initSample();
</script>
</body>
</html>
