<?php session_start();
//page de connexion au BO
require_once('int/cxCMS.php');
if (!isset($_POST['valider'])) $_POST['valider']="";
if (!isset($_POST['log'])) $_POST['log']="";
if (!isset($_POST['mdp']))$_POST['mdp']="";
if (!isset($erreurlog)) $erreurlog=0;
if (!isset($_POST['verif'])) $verif=""; else $verif=$_POST['verif'];
if (!isset($_POST['spam'])) $spam=""; else $spam=$_POST['spam'];

Global $pdo;
$sPromo = $pdo->query("SELECT * FROM cms_spam");
$nbrsPromo=$sPromo->rowCount();

if($nbrsPromo>0) {$numimageP=1;
    while($rowP = $sPromo->fetch(PDO::FETCH_ASSOC)) 
   { $nomimagesP[$numimageP]=$rowP['f_img'];
	 $titre_p[$numimageP]=$rowP['code'];
     $numimageP++;}
   mt_srand((float)microtime()*1000000);
   $affimageP=mt_rand(1,$nbrsPromo);  
$imgP=$nomimagesP[$affimageP];
$message=$titre_p[$affimageP];}

$colpass_rsLogin = "0";
if (isset($_POST['mdp'])) {

 $colpass_rsLogin = (get_magic_quotes_gpc()) ? $_POST['mdp'] : addslashes($_POST['mdp']);
 	if (preg_match("/<script/i", "$colpass_rsLogin")) {$ok=false;
    echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"http://www.police-nationale.interieur.gouv.fr/Organisation/Direction-Centrale-de-la-Police-Judiciaire/Lutte-contre-la-criminalite-organisee/Sous-direction-de-lutte-contre-la-cybercriminalite\";";
echo"</script>";
exit;
} else {echo"";
}
}
$colname_rsLogin = "0";
if (isset($_POST['log'])) {
 $colname_rsLogin = (get_magic_quotes_gpc()) ? $_POST['log'] : addslashes($_POST['log']);
  	if (preg_match("/<script/i", "$colname_rsLogin")) {
    echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"http://www.police-nationale.interieur.gouv.fr/Organisation/Direction-Centrale-de-la-Police-Judiciaire/Lutte-contre-la-criminalite-organisee/Sous-direction-de-lutte-contre-la-cybercriminalite\";";
echo"</script>";
exit;
} else {echo"";
}
}

$query_rsLogin = sprintf("SELECT nom_adm, pass, droit, id_adm FROM cms_admin WHERE nom_adm = '%s' AND pass= '%s' ", $colname_rsLogin,$colpass_rsLogin);
$result = $pdo->query($query_rsLogin);
$row_rsLogin = $result->fetch(PDO::FETCH_ASSOC);
$totalRows_rsLogin=$result->rowCount();


 if ($_POST['valider']=="ok")
{$ok=true;
$gif=".gif";
$code="$spam$gif";
	if($code!=$verif)
		{$ok=false;
$msg1="Le code anti-spam!<br>";}
if($ok)
	{
$statut=$row_rsLogin['nom_adm'];
$clientID=$row_rsLogin['id_adm'];
	if ($row_rsLogin['droit']=="admiNTKS")
		{
	    $_SESSION['log']=$row_rsLogin['nom_adm'];
		$_SESSION['droit']=$row_rsLogin['droit'];
		echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"contact_plan-du-site.php\";";
echo"</script>";
		
		}
else
		{
		$erreurlog=1;
		}
	}
}
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
<link href='https://fonts.googleapis.com/css?family=Exo+2:800,600,400' rel='stylesheet' type='text/css'>
<title><?php echo $nom_entreprise;?> log </title>
<link rel="shortcut icon" href="<?php echo URL;?>img/favicon2.ico">
<link type="text/css" rel="stylesheet" href="stylesheets/header.css">
</head>
<body>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"> 
      <form name="form1" method="post" action="">
        <table width="320" border="0" align="center" cellpadding="0" cellspacing="0" class="tblog">
          <tr> 
            <td align="center" class="txt" style="color:#000;font-size:2em;"><b>Connection</b><br>
			<?php  if($_POST['valider']!="" && $ok == false){?>
			<div class="erreur txt3">
				<b>Message d'erreur</b><br><br>
		 <?php echo "$msg1";?></div><?php }else{echo"";}?>
          </td>
          </tr>
          <tr> 
            <td align="center" class="txt">&nbsp;</td>
          </tr>
          <tr> 
            <td align="center" class="txtL">Log</td>
          </tr>
          <tr> 
            <td align="center">
              <input type="text" name="log">
            </td>
          </tr>
          <tr> 
            <td align="center" class="txtL">Mot de passe</td>
          </tr>
          <tr> 
            <td align="center">
              <input type="password" name="mdp">
            </td>
          </tr>
		  <tr> 
          <td> 
            <table width="300" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td colspan="2" class="txt3">Controle 
                  anti-spam :<br>
                  ( Respecter les majuscules ) </td>
              </tr>
              <tr> 
                <td height="1"></td>
                <td height="1"></td>
              </tr>
              <tr> 
                <td width="100" height="50" background="<?php echo"img/secureform/$imgP"; ?>">&nbsp;</td>
                <td width="200"> 
                  <input  type="hidden" name="verif" value="<?php echo "$imgP"; ?>">
                  <input type="text" name="spam" id="spam" size="16">
                  <font color="#FF0000" size="2" > 
                  *</font> </td>
              </tr>
            </table>
          </td>
        </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center">
              <input type="submit" name="Submit" value="Envoyer">
			   <input name="valider" type="hidden" id="valider" value="ok">
            </td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
        </table>
      </form><?php 
		  if ($erreurlog==1)
		  {		 echo"<div align=\"center\"><font color=\"#FF0000\" size=\"1\" face=\"Arial, Helvetica, sans-serif\">
         login ou mot de passe &eacute;rron&eacute;s,<br>           
           07.81.55.84.61 ou 09.84.25.75.72</font></div><br>";          
		  }
		  ?>
      
    </td>
  </tr>
</table>
</body>
</html>
