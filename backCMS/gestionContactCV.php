<?php session_start();
//Gestion des contacts sur le site demande d'achat ou contact
if(!isset($_POST['ajoutP'])) $ajoutP=""; else $ajoutP=$_POST['ajoutP'];
if(!isset($_GET['archive'])) $archive=""; else $archive=$_GET['archive'];
if(!isset($_GET['modif'])) $modif=""; else $modif=$_GET['modif'];
if(!isset($_GET['idmod'])) $idmod=""; else $idmod=$_GET['idmod'];

include('int/cxCMS.php');

if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }
$contact = "".NOM_ENTREPRISE.": Contact";
if($modif!=""){
echo $charge;
$queryU = "UPDATE  cms_cv SET etat_cv='$modif', date_dermod=NOW() WHERE id_cv='$idmod'";

    if ($pdo->exec($queryU) === FALSE) {
        echo "Error: " .$pdo->errorInfo(). "<br>";
    } else {
        echo"<script language=\"JavaScript\" type=\"text/javascript\">";
        echo"document.location=\"?archive=$archive\";";
        echo"</script>";
    }
}
if($ajoutP=="okajoutP"){
echo $charge;
foreach($_POST["id_cv"] as $k => $v){
$NewO = $_POST["aff_cv"][$k];
$queryU = "UPDATE  cms_cv SET aff_cv='$NewO'  WHERE id_cv='$v'";

    if ($pdo->exec($queryU) === FALSE) {
        echo "Error: " .$pdo->errorInfo(). "<br>";
    } else {
        echo"<script language=\"JavaScript\" type=\"text/javascript\">";
        echo"document.location=\"?archive=$archive\";";
        echo"</script>";
    }
}
}
if($archive!=""){
    Global $pdo;
    $afcv="N";$mod="nw";
$queryS = $pdo->query("SELECT * FROM cms_cv WHERE aff_cv='$afcv' AND mod_cv!='$mod' ORDER BY id_cv DESC");
$valA = $queryS->fetchall(PDO::FETCH_ASSOC);
$nbPDES=$queryS->rowCount();
}else{
    Global $pdo;
$afcv="Y";$mod="nw";
$queryS = $pdo->query("SELECT * FROM cms_cv WHERE aff_cv='$afcv' AND mod_cv!='$mod' ORDER BY id_cv DESC");
    $valA = $queryS->fetchall(PDO::FETCH_ASSOC);
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
<title>Gestion CV Contact</title>
<style type="text/css"> @charset "utf-8";
body{font-family: 'Exo 2', sans-serif;font-size:12px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:24px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:20px;}
.tttab{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}
.tttab2{font-size:1.3em;font-weight:600; color:#ffffff;padding-left:35px;padding-top:5px;padding-bottom:5px;}
a.arch{font-size:1.5em;font-weight:600; color:#000000;text-decoration:none;}a.arch:hover{color:#ff0000;text-decoration:none;}
@media(max-width:770px){.mob{margin-left:1px;margin-right:1px;width:100%;}}
@media(min-width:770px){.mob{margin-left:20%;margin-right:20%;width:60%;border-left: 1px solid #9BB5FF;border-right: 1px solid #9BB5FF;}}</style>
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
      <h1>
        <?php  echo NOM_ENTREPRISE;?>
      </h1>
    </td>
  </tr>
  <tr> 
    <td align="center"> 
      <h2>
        <?php if($archive=="voir"){?>
        Archives<br>
        <?php }else{echo "";}?>
        Gestion Achat et Contact</h2><?php echo $contact;?>
    </td>
  </tr>
  <tr>
    <td align="center">
      <table width="300" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#0033CC" width="20%">&nbsp;</td>
          <td style="text-align:center;width:30%;font-size:1em;">Achat Oeuvres</td>
          <td bgcolor="#CC0099" width="20%">&nbsp;</td>
          <td style="text-align:center;width:30%;font-size:1em;">Contact</td>
        </tr>
      </table>
    </td>
  </tr>
</table>


<?php if($nbPDES>0){?> 
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <?php foreach($valA as $key => $val)   { $offre=$val['offre'];?>
    <tr> 
      <td > 
        <table class="mob"  border="0" cellspacing="0" cellpadding="0">
          <tr > 
            <td bgcolor="<?php if($offre==$contact){echo "#CC0099";}else{echo "#0033CC";}?>" width="80" align="center" style="border-top: 1px solid white;">&nbsp;</td>
            <td bgcolor="<?php if($offre==$contact){echo "#CC0099";}else{echo "#0033CC";}?>"style="border-top: 1px solid white;">&nbsp;</td>
          </tr>
          <tr > 
            <td bgcolor="<?php if($offre==$contact){echo "#CC0099";}else{echo "#0033CC";}?>" width="80" align="right" style="font-size:16px;font-weight:bold;color:#ffffff;">Message</td>
            <td bgcolor="<?php if($offre==$contact){echo "#CC0099";}else{echo "#0033CC";}?>"  style="padding-left:10px;color:#ffffff;"> 
              <?php echo $val['id_cv'];?>
              <input type="hidden" name="id_cv[]" value="<?php echo $val['id_cv'];?>">
            </td>
          </tr>
          <tr> 
            <td  bgcolor="<?php if($offre==$contact){echo "#CC0099";}else{echo "#0033CC";}?>" align="right" style="font-size:16px;font-weight:bold;color:#ffffff;">Date: 
            </td>
            <td  bgcolor="<?php if($offre==$contact){echo "#CC0099";}else{echo "#0033CC";}?>" style="padding-left:10px;color:#ffffff;"> 
              <?php echo $val['date_cv'];?>
            </td>
          </tr>
          <tr > 
            <td bgcolor="<?php if($offre==$contact){echo "#CC0099";}else{echo "#0033CC";}?>" align="right" width="80" style="font-size:15px;font-weight:bold;color:#ffffff;">Objet: 
            </td>
            <td bgcolor="<?php if($offre==$contact){echo "#CC0099";}else{echo "#0033CC";}?>" style="padding-left:10px;color:#ffffff;"> 
              <?php $offre=$val['offre']; echo $offre;?>
            </td>
          </tr>
          <tr > 
            <td bgcolor="<?php if($offre==$contact){echo "#CC0099";}else{echo "#0033CC";}?>" align="right" style="font-size:15px;font-weight:bold;color:#ffffff;">&nbsp;</td>
            <td bgcolor="<?php if($offre==$contact){echo "#CC0099";}else{echo "#0033CC";}?>" style="padding-left:10px;color:#ffffff;">&nbsp;</td>
          </tr>
          <tr > 
            <td bgcolor="<?php if($offre==$contact){echo "#FF42D0";}else{echo "#517CFF";}?>" colspan="2" class="tttab2">Coordonnées</td>
          </tr>
          <tr> 
            <td width="80" align="center"> 
              <div align="right">Nom:</div>
            </td>
            <td>&nbsp; 
              <?php echo $val['nom_cv'];?>
            </td>
          </tr>
          <tr> 
            <td align="center" style="border-top: 1px solid black;"> 
              <div align="right">Prénom:</div>
            </td>
            <td style="border-top: 1px solid black;">&nbsp; 
              <?php echo $val['prenom_cv'];?>
            </td>
          </tr>
          <tr> 
            <td align="center" style="border-top: 1px solid black;"> 
              <div align="right">Email:</div>
            </td>
            <td style="border-top: 1px solid black;">&nbsp; 
              <?php echo $val['email_cv'];?>
            </td>
          </tr>
          <tr> 
            <td align="center" style="border-top: 1px solid black;"> 
              <div align="right">Tel:</div>
            </td>
            <td style="border-top: 1px solid black;">&nbsp; 
              <?php echo $val['tel_cv'];?>
            </td>
          </tr>
          <tr style="display:<?php if($offre==$contact){echo"table-row";}else{echo "none";}?>;"> 
            <td align="center" style="border-top: 1px solid black;"> 
              <div align="right">Entreprise:</div>
            </td>
            <td style="border-top: 1px solid black;">&nbsp; 
              <?php echo $val['entreprise_cv'];?>
            </td>
          </tr>
          <tr style="display:<?php if($offre==$contact){echo"table-row";}else{echo "none";}?>;"> 
            <td align="center" style="border-top: 1px solid black;"> 
              <div align="right">Fonction:</div>
            </td>
            <td style="border-top: 1px solid black;">&nbsp; 
              <?php echo $val['fonction_cv'];?>
            </td>
          </tr>
          <tr> 
            <td colspan="2" bgcolor="<?php if($offre==$contact){echo "#FF77DD";}else{echo "#84A3FF";}?>" style="border-top: 1px solid black;padding: 5px 5px 5px 35px;color:#000066;font-size:14px;font-weight:bold;"> 
              <?php if($offre==$contact){echo "Message: ";}else{echo "Message: ";}?>
            </td>
            
          </tr>
          <tr> 
            <td colspan="2" style="border-top: 1px solid black;padding: 10px 10px 10px 35px;font-size:14px;"> 
              <?php echo $val['motivations'];?>
            </td>
          </tr>
          <tr style="display:<?php if($offre==$contact){echo"none";}else{echo "table-row";}?>;"> 
            <td align="right" bgcolor="<?php if($offre==$contact){echo"#FFA4E9";}else{echo "#9BB5FF";}?>" style="border-top: 1px solid black;padding:5px 0px;"> 
               <?php $fichcv=$val['fichierb']; if($fichcv!=""){
Global $pdo;

				  $query2 = $pdo->query("SELECT * FROM cms_photos WHERE cms_photos.id_photo='$fichcv'");
$val2 = $query2->fetch(PDO::FETCH_ASSOC);?>
             <img src="<?php echo $val2['small'];?>" border="0" width="50" height="50">
              <?php }else{echo"";}?>
            </td>
            <td bgcolor="<?php if($offre==$contact){echo"#FFA4E9";}else{echo "#9BB5FF";}?>" style="border-top: 1px solid black;padding:5px 0px;"> 
             
            </td>
          </tr>
          <tr > 
            <td bgcolor="<?php if($offre==$contact){echo"#770059";}else{echo "#000066";}?>" colspan="2" style="border-top: 1px solid black;color: white;font-weight:bold;padding-left:35px;">Gestion 
              du message</td>
          </tr>
          <tr > 
            <td align="right" bgcolor="<?php if($offre==$contact){echo"#FFD7F5";}else{echo "#BFEBFF";}?>" style="border-top: 1px solid black;">Etat: 
            </td>
            <td bgcolor="<?php if($offre==$contact){echo"#FFD7F5";}else{echo "#BFEBFF";}?>" style="border-top: 1px solid black;"> 
              <select name="menu<?php echo $val['id_cv'];?>" onChange="MM_jumpMenu('parent',this,0)" size="1">
                <option value="?modif=non%20lu&amp;idmod=<?php echo $val['id_cv']; if($archive!=""){?>&amp;archive=<?php echo $archive;}else{ echo"";} ?>" <?php if (!(strcmp("non lu", $val['etat_cv']))) {echo "SELECTED";} ?>>non 
                lu</option>
                <option value="?modif=lu&amp;idmod=<?php echo $val['id_cv'];if($archive!=""){?>&amp;archive=<?php echo $archive;}else{echo"";}?>" <?php if (!(strcmp("lu", $val['etat_cv']))) {echo "SELECTED";} ?>>lu</option>
                <option value="?modif=interessant&amp;idmod=<?php echo $val['id_cv'];if($archive!=""){?>&amp;archive=<?php echo $archive;}else{echo"";}?>" <?php if (!(strcmp("interessant", $val['etat_cv']))) {echo "SELECTED";} ?>>interessant</option>
                <option value="?modif=contacte%20tel&amp;idmod=<?php echo $val['id_cv'];if($archive!=""){?>&amp;archive=<?php echo $archive;}else{echo"";}?>" <?php if (!(strcmp("contacte tel", $val['etat_cv']))) {echo "SELECTED";} ?>>contacte 
                tel</option>
                <option value="?modif=envoi%20de%20mail&amp;idmod=<?php echo $val['id_cv'];if($archive!=""){?>&amp;archive=<?php echo $archive;}else{echo"";}?>" <?php if (!(strcmp("envoi de mail", $val['etat_cv']))) {echo "SELECTED";} ?>>envoi 
                de mail</option>
                <option value="?modif=relance&amp;idmod=<?php echo $val['id_cv'];if($archive!=""){?>&amp;archive=<?php echo $archive;}else{echo"";}?>?>" <?php if (!(strcmp("relance", $val['etat_cv']))) {echo "SELECTED";} ?>>relance</option>
                <option value="?modif=rejete&amp;idmod=<?php echo $val['id_cv'];if($archive!=""){?>&amp;archive=<?php echo $archive;}else{echo"";}?>" <?php if (!(strcmp("rejete", $val['etat_cv']))) {echo "SELECTED";} ?>>rejete</option>
              </select>
            </td>
          </tr>
          <tr > 
            <td align="right" bgcolor="<?php if($offre==$contact){echo"#FFD7F5";}else{echo "#BFEBFF";}?>" style="border-top: 1px solid black;">Date 
              modif: </td>
            <td bgcolor="<?php if($offre==$contact){echo"#FFD7F5";}else{echo "#BFEBFF";}?>" style="border-top: 1px solid black;"> 
              <?php echo $val['date_dermod'];?>
            </td>
          </tr>
          <tr > 
            <td height="26" align="right" bgcolor="<?php if($offre==$contact){echo "#FFD7F5";}else{echo "#BFEBFF";}?>" style="border-top: 1px solid black;border-bottom: 25px solid #86B404;">Affichage:</td>
            <td bgcolor="<?php if($offre==$contact){echo"#FFD7F5";}else{echo "#BFEBFF";}?>" style="border-top: 1px solid black;border-bottom: 25px solid #86B404;"> 
              <select name="aff_cv[]">
                <option value="Y" <?php if (!(strcmp("Y", $val['aff_cv']))) {echo "SELECTED";} ?>>Oui</option>
                <option value="N" <?php if (!(strcmp("N", $val['aff_cv']))) {echo "SELECTED";} ?>>Non</option>
              </select>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <?php } ?>
    <tr> 
      <td>&nbsp; </td>
    </tr>
    <tr> 
      <td>
        <center>
          <input type="submit" name="Submit" value="Enregistrer les modifications">
          <input type="hidden" name="ajoutP" value="okajoutP">
		  
        </center>
      </td>
    </tr>
  </table>
</form><?php } else { if($archive=="voir"){?>
  <span style=" color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size: 12px;font-weight:bold">Il n'y
  a pas d'archives</span><?php }else{?>
<span style=" color:#FF0000; font-family:Arial, Helvetica, sans-serif; font-size: 12px;font-weight:bold">Il n'y
    a pas de contact ou de demande d'achat</span><?php }?>

<?php }?>
<p align="center"><?php if($archive=="voir"){?><a class="arch" href="?archive=">Voir Contact et Demande d'achat</a><?php }else{?><a class="arch" href="?archive=voir">Voir les archives</a><?php }?></p>
<p>&nbsp;</p>
</body>
</html>
