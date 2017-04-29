<!DOCTYPE html>
<?php if(!isset($_GET['oeuvre'])) $oeuvre=""; else $oeuvre= $_GET['oeuvre'];
require_once('int/cxCMS.php');
include('sql/envoiachat.php');
$query3 = $mysqli->query("SELECT * FROM cms_photos WHERE cms_photos.id_photo='$oeuvre'");
$val3 = $query3->fetch_array();
$imgoeuvre=$val3['small'];
$titreoeuvre=$val3['titre_img'];
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Exo+2:800,600,400' rel='stylesheet' type='text/css'>
<title><?php echo NOM_ENTREPRISE;?> log </title>
<link rel="shortcut icon" href="<?php echo URL;?>img/favicon2.ico">
<link type="text/css" rel="stylesheet" href="stylesheets/header.css">
</head>
<body style="margin-top:-15px">
<table  border="0" cellpadding="0" cellspacing="0" align="center" class="bordertab">
<tr><td class="txtN"><img src="<?php echo $imgoeuvre;?>" class="imgO" width="50" height="50"></td><td class="txtN gauche"><?php echo $titreoeuvre;?></td>
</tr>
<tr><td colspan="2" class="txtB"><b>Vous d&eacute;sirez acheter cette oeuvre</b><br>Laissez moi vos coordonnées, un message et je vous recontacte dés que possible.</td>
</tr>
<tr>
<td colspan="2">
 <?php if($env == "ok"){?> <div class="succes"> 
<h2 class="h2M">Votre message est enregistr&eacute;</h2></div>
<?php }else{echo "";}?>
    <form action="" enctype="multipart/form-data" method="post">
      <table width="280" border="0" align="center" cellpadding="0" cellspacing="0">
       <tr> 
          <td class="txt3"> 
                <?php  if($envoi!="" && $ok == false){?>
			<div class="erreur txt3">
				<b>Message d'erreur</b><br><br>
		 <?php echo"$msg11 $msg1 $msg2 $msg3 $msg4 $msg5 $msg6 $msg7 $msg8 $msg9 $msg10";?></div><?php }else{echo"";}?>
          </td>
        </tr>
        <tr> 
          <td class="txt2"> Nom</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input name="nom_cv" type="text" id="nom_cv" size="33">
          </td>
        </tr>
        <tr> 
          <td class="txt2">Pr&eacute;nom</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input name="prenom_cv" type="text" id="prenom_cv" size="33">
          </td>
        </tr>
        <tr> 
          <td class="txt2">Email</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input name="email_cv" type="text" id="email_cv" size="33">
          </td>
        </tr>
        <tr> 
          <td class="txt2">T&eacute;l&eacute;phone</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input name="tel_cv" type="text" id="tel_cv" size="33">
          </td>
        </tr>
        <tr> 
          <td class="txt2">Votre message
                      </td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <textarea name="motivations" cols="31" rows="5" wrap="hard" id="motivations"></textarea>
          </td>
        </tr>
        
        <tr>
          <td class="txt2">&nbsp;</td>
        </tr>
        <tr> 
          <td>
		  <table width="300" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td colspan="2" ><font color="#ff0000" size="1" face="Arial, Helvetica, sans-serif">Controle 
                  anti-spam :<br>
                  ( Respecter les majuscules )</font>
				  </td>
              </tr>
              <tr> 
                <td height="1"></td>
                <td height="1"></td>
              </tr>
              <tr> 
                <td width="100" height="50" background="<?php
			echo "img/secureform/$imgP"; ?>">&nbsp;</td>
                <td width="200"> 
                  <input  type="hidden" name="verif" value="<?php echo "$imgP"; ?>">
                  <input type="text" name="spam" id="spam">
                  <font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif"> 
                  *</font> </td>
              </tr>
            </table>
			</td>
        </tr>
        <tr> 
          <td class="txt2">&nbsp;</td>
        </tr>
        <tr> 
          <td align="center" class="txt2"> 
           <div style="margin-right:15px;"> <input type="reset" name="reset" value="R&eacute;tablir">
            <input type="submit" name="Submit" value="Envoyer">
            <input type="hidden" name="envoi" value="ok"></div>
          </td>
        </tr>
        <tr> 
          <td class="txt2">&nbsp;</td>
        </tr>
      </table>
    </form> 
</td>
</tr>
</table>
</body>
</html>
