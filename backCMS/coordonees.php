<?php session_start();
if(!isset($_POST['ajoutP'])) $ajoutP=""; else $ajoutP=$_POST['ajoutP'];

if(!isset($_POST['nom_e'])) $nom_eZ=""; else $nom_eZ=$_POST['nom_e'];
if(!isset($_POST['adresse_e'])) $adresse_eZ=""; else $adresse_eZ=$_POST['adresse_e'];
if(!isset($_POST['cdp_e'])) $cdp_eZ=""; else $cdp_eZ=$_POST['cdp_e'];
if(!isset($_POST['ville_e'])) $ville_eZ=""; else $ville_eZ=$_POST['ville_e'];
if(!isset($_POST['nom_d'])) $nom_dZ=""; else $nom_dZ=$_POST['nom_d'];
if(!isset($_POST['prenom_d'])) $prenom_dZ=""; else $prenom_dZ=$_POST['prenom_d'];
if(!isset($_POST['tel_e'])) $tel_eZ=""; else $tel_eZ=$_POST['tel_e'];
if(!isset($_POST['fax_e'])) $fax_eZ=""; else $fax_eZ=$_POST['fax_e'];
if(!isset($_POST['siren_e'])) $siren_eZ=""; else $siren_eZ=$_POST['siren_e'];
if(!isset($_POST['horaires_e'])) $horaires_eZ=""; else $horaires_eZ=$_POST['horaires_e'];
if(!isset($_POST['mail_e'])) $mail_eZ=""; else $mail_eZ=$_POST['mail_e'];
if(!isset($_POST['mail_d'])) $mail_dZ=""; else $mail_dZ=$_POST['mail_d'];
if(!isset($_POST['mail_r'])) $mail_rZ=""; else $mail_rZ=$_POST['mail_r'];
if(!isset($_POST['url_site'])) $url_siteZ=""; else $url_siteZ=$_POST['url_site'];
if(!isset($_POST['hebergeur_site'])) $hebergeur_siteZ=""; else $hebergeur_siteZ=$_POST['hebergeur_site'];
if(!isset($_POST['flickr_Log'])) $flickr_LogZ=""; else $flickr_LogZ=$_POST['flickr_Log'];
if(!isset($_POST['flickr_Mdp'])) $flickr_MdpZ=""; else $flickr_MdpZ=$_POST['flickr_Mdp'];
$nom_eZ= trim($nom_eZ);
$nom_eZB= addslashes($nom_eZ);
$ville_eZ= trim($ville_eZ);
$ville_eZB= addslashes($ville_eZ);
$adresse_eZ= trim($adresse_eZ);
$adresse_eZB= addslashes($adresse_eZ);
$nom_dZ= trim($nom_dZ);
$nom_dZB= addslashes($nom_dZ);

$prenom_dZ= trim($prenom_dZ);
$prenom_dZB= addslashes($prenom_dZ);

$horaires_eZ= trim($horaires_eZ);
$horaires_eZB= addslashes($horaires_eZ);

$hebergeur_siteZ= trim($hebergeur_siteZ);

$hebergeur_siteZB= addslashes($hebergeur_siteZ);

$flickr_LogZ= trim($flickr_LogZ);
$flickr_MdpZ= trim($flickr_MdpZ);


include('int/cxCMS.php');
if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }
if($ajoutP=="okajoutP"){
echo $charge;
$id_coordZ="1";
$queryC = "UPDATE cms_coord SET nom_e='$nom_eZB', adresse_e='$adresse_eZB', cdp_e='$cdp_eZ', ville_e='$ville_eZB', nom_d='$nom_dZB', prenom_d='$prenom_dZB', tel_e='$tel_eZ', fax_e='$fax_eZ', siren_e='$siren_eZ', horaires_e='$horaires_eZB', mail_e='$mail_eZ', mail_d='$mail_dZ', mail_r='$mail_rZ', url_site='$url_siteZ', hebergeur_site='$hebergeur_siteZB', flickr_log='$flickr_LogZ', flickr_mdp='$flickr_MdpZ'  WHERE id_coord='$id_coordZ'";

    if ($pdo->exec($queryC) === FALSE) {
        echo "Error: " .$pdo->errorInfo(). "<br>";
    } else {
        echo"<script language=\"JavaScript\" type=\"text/javascript\">";
        echo"document.location=\"coordonees.php\";";
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
<title>coordonnées entreprise</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css"> @charset "utf-8";
body{font-family: 'Exo 2', sans-serif;font-size:12px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:20px;}
a.arch{font-size:1em;font-weight:400; color:#000000;text-decoration:none;}a.arch:hover{color:#ff0000;text-decoration:none;}
.tttab{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}</style>
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
      <h2>Coordonnées entreprise</h2>
    </td>
  </tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td>Nom entreprise</td>
    </tr>
    <tr> 
      <td>
        <input name="nom_e" type="text" size="38" value="<?php echo NOM_ENTREPRISE;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Adresse entreprise</td>
    </tr>
    <tr> 
      <td>
        <input name="adresse_e" type="text" size="38" value="<?php echo ADRESSE_ENTREPRISE;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Code postal</td>
    </tr>
    <tr> 
      <td>
        <input name="cdp_e" type="text" size="5" value="<?php echo CDP_ENTREPRISE;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Ville</td>
    </tr>
    <tr> 
      <td>
        <input name="ville_e" type="text" size="38" value="<?php echo VILLE_ENTREPRISE;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Tel</td>
    </tr>
    <tr> 
      <td>
        <input name="tel_e" type="text" size="38" value="<?php echo TEL_ENTREPRISE;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Fax</td>
    </tr>
    <tr> 
      <td>
        <input name="fax_e" type="text" size="38" value="<?php echo FAX_ENTREPRISE;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Siren</td>
    </tr>
    <tr> 
      <td>
        <input name="siren_e" type="text" size="38" value="<?php echo SIREN_ENTREPRISE;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Email du site (contact@nomdusite.qqc) Sinon tous vos mails seront spamés</td>
    </tr>
    <tr> 
      <td>
        <input name="mail_e" type="text" size="38" value="<?php echo MAILE_ENTREPRISE;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Horaires</td>
    </tr>
    <tr> 
      <td>
        <textarea name="horaires_e" cols="40" rows="5"><?php echo HORAIRES_ENTREPRISE;?></textarea>
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Nom dirigeant</td>
    </tr>
    <tr> 
      <td>
        <input name="nom_d" type="text" size="38" value="<?php echo NOM_DIR;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Prénom</td>
    </tr>
    <tr> 
      <td>
        <input name="prenom_d" type="text" size="38" value="<?php echo PRENOM_DIR;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Email dirigeant</td>
    </tr>
    <tr> 
      <td>
        <input name="mail_d" type="text" size="38" value="<?php echo MAILD_ENTREPRISE;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Email recrutement</td>
    </tr>
    <tr> 
      <td>
        <input name="mail_r" type="text" size="38" value="<?php echo MAILR_ENTREPRISE;?>">
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Hébergeur du site</td>
    </tr>
    <tr> 
      <td>
        <textarea name="hebergeur_site" cols="40" rows="5"><?php echo HEBERGEUR;?></textarea>
      </td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td>Nom de domaine (ex: nondusite.com)</td>
    </tr>
    <tr>
      <td>
        <input name="url_site" type="text" size="38" value="<?php echo NDD;?>">
      </td>
    </tr>
      <tr>
          <td>Racine du site: (ex:http://www.nomdusite.com/le-dossier-si-il-y-a/</td>
      </tr>
      <tr>
          <td>
              <input name="url_site" type="text" size="38" value="<?php echo URL;?>">
          </td>
      </tr>
	<tr> 
      <td>&nbsp;</td>
    </tr>
	<tr>
      <td>Login FlickR</td>
    </tr>
    <tr>
      <td>
        <input name="flickr_Log" type="text" size="38" value="<?php echo FLICKR_LOG;?>">
      </td>
    </tr>
	<tr> 
      <td>&nbsp;</td>
    </tr>
	<tr>
      <td>Mot de passe FlickR</td>
    </tr>
    <tr>
      <td>
        <input name="flickr_Mdp" type="text" size="38" value="<?php echo FLICKR_MDP;?>">
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="Submit" value="Enregister les modifications">
        <input name="ajoutP" type="hidden"  value="okajoutP"></td>
    </tr>
  </table>
 </form>
</body>
</html>