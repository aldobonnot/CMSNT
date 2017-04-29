<?php 
if (!isset($_POST['envoi'])) $envoi=""; else $envoi= $_POST['envoi'];
if (!isset($_POST['verif'])) $verif=""; else $verif=$_POST['verif'];
if (!isset($_POST['spam'])) $spam=""; else $spam=$_POST['spam'];
if (!isset($_POST['offre'])) $offre=""; else $offre= $_POST['offre'];
if (!isset($_POST['nom_cv'])) $nom_cv=""; else $nom_cv= $_POST['nom_cv'];
if (!isset($_POST['prenom_cv'])) $prenom_cv=""; else $prenom_cv= $_POST['prenom_cv'];
if (!isset($_POST['email_cv'])) $email_cv=""; else $email_cv= $_POST['email_cv'];
if (!isset($_POST['tel_cv'])) $tel_cv=""; else $tel_cv= $_POST['tel_cv'];
if (!isset($_POST['motivations'])) $motivations=""; else $motivations= $_POST['motivations'];
if (!isset($_POST['entreprise_cv'])) $entreprise_cv=""; else $entreprise_cv= $_POST['entreprise_cv'];
if (!isset($_POST['fonction_cv'])) $fonction_cv=""; else $fonction_cv= $_POST['fonction_cv'];
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

if($envoi=="ok"){$ok=true;
attac($offre);
attac($nom_cv);
attac($prenom_cv);
attac($email_cv);
attac($entreprise_cv);
attac($tel_cv);
attac($motivations);
attac($fonction_cv);
$gif=".gif";
$code="$spam$gif";
if($code!=$verif)
		{$ok=false;
$msg1="Le code anti-spam!<br>";}
if (str_replace(' ','',$_POST['nom_cv'])=='') 
		{$ok=false;$msg2="Votre nom !<br>";}
if (str_replace(' ','',$_POST['prenom_cv'])=='') 
		{$ok=false;$msg3="Votre prenom !<br>";}
$From=$_POST['email_cv'];
$FORMemail=trim($From);
if (!isset($FORMemail))    
		{$ok=false;$msg4="Saisir une adresse mail !<br>";}else{if(!filter_var($FORMemail, FILTER_VALIDATE_EMAIL))
  		{$ok=false;$msg4="Saisir une adresse mail valide !<br>";}}
if (str_replace(' ','',$_POST['tel_cv'])=='') 
		{$ok=false;$msg5="Votre telephone !<br>";}
if (str_replace(' ','',$_POST['motivations'])=='') 
		{$ok=false;$msg6="Votre message !<br>";}
//======================================================================================================  
if($ok)
	{
$nom_cv = addslashes($nom_cv);
$prenom_cv = addslashes($prenom_cv);
$motivations = addslashes($motivations);
$fonction_cv = addslashes($fonction_cv);
$entreprise_cv = addslashes($entreprise_cv);	
$nom_cv = htmlentities($nom_cv, ENT_QUOTES);
$prenom_cv = htmlentities($prenom_cv, ENT_QUOTES);
$motivations = htmlentities($motivations, ENT_QUOTES);
$fonction_cv = htmlentities($fonction_cv, ENT_QUOTES);
$entreprise_cv = htmlentities($entreprise_cv, ENT_QUOTES);
//$nom_fileb = $_FILES['fichierb']['name'];
                     
if ($pdo->exec("INSERT INTO cms_CV (date_cv,offre,nom_cv,prenom_cv,email_cv,tel_cv,motivations,fonction_cv,entreprise_cv)
 VALUES (NOW(),'$offre','$nom_cv','$prenom_cv','$FORMemail','$tel_cv','$motivations','$fonction_cv','$entreprise_cv')") === FALSE)  {
    echo "Erreur: " . $pdo . "<br>" . $pdo->errorInfo();
} else {
	
$nom_cv2 = stripslashes($nom_cv);
$prenom_cv2 = stripslashes($prenom_cv);
$motivations2 = stripslashes($motivations);
$fonction_cv2 = stripslashes($fonction_cv);
$entreprise_cv2 = stripslashes($entreprise_cv);
$ladate=date("d-m-Y");
$titremessage="$offre";
$entete= "MIME-Version: 1.0\r\n".
 "Content-type: text/html; charset=utf-8\r\n";
$entete .='From:<'. MAILE_ENTREPRISE .'>'."\r\n";
$entete .='Reply-To: <'.$FORMemail.'>'."\n";
$message3="<table width=\"100%\" border=\"0\" cellspacing=\"5\" cellpadding=\"0\">
  <tr><td width=\"22%\" align=\"right\"><font style=\"font-size:35px;font-family:Arial, Helvetica, sans-serif;\"><b>".NOM_ENTREPRISE."</b></font></td><td width=\"78%\">&nbsp;</td>
  </tr>
  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
  <tr><td align=\"right\"><font style=\"font-size:18px;font-family:Arial;font-weight:bold;\">Message du: </font></td><td> $ladate</td></tr>
  <tr><td align=\"right\">&nbsp;</td><td>&nbsp;</td></tr>
  <tr><td align=\"right\"><font style=\"font-size:18px;font-family:Arial;font-weight:bold;\">Entreprise:&nbsp; </font></td><td>$entreprise_cv2</td></tr>
  <tr><td align=\"right\"><font style=\"font-size:18px;font-family:Arial;font-weight:bold;\">Nom:&nbsp; </font></td><td>$nom_cv2</td></tr>
  <tr><td align=\"right\"><font style=\"font-size:18px;font-family:Arial;font-weight:bold;\">Pr&eacute;nom:&nbsp; </font></td><td>$prenom_cv2</td></tr>
  <tr><td align=\"right\"><font style=\"font-size:18px;font-family:Arial;font-weight:bold;\">Fonction:&nbsp; </font></td><td>$fonction_cv2</td></tr>
  <tr><td align=\"right\"><font style=\"font-size:18px;font-family:Arial;font-weight:bold;\">Email:&nbsp; </font></td><td>$FORMemail</td></tr>
  <tr><td align=\"right\"><font style=\"font-size:18px;font-family:Arial;font-weight:bold;\">T&eacute;l&eacute;phone:&nbsp; </font></td><td>$tel_cv</td></tr>
  <tr><td align=\"right\"><font style=\"font-size:18px;font-family:Arial;font-weight:bold;\">Message:&nbsp; </font></td><td>$motivations2</td></tr>
  <tr><td align=\"right\">&nbsp;</td><td>&nbsp;</td></tr>
  <tr><td align=\"right\">&nbsp;</td><td>&nbsp;</td></tr>
  <tr><td align=\"right\"><font color=\"#990000\" face=\"Arial, Helvetica, sans-serif\"><i>Gestion des Contacts</i></font> </td><td> : <a href=\"".URL."backCMS/gestionContactCV.php\"><i>Page de gestion Contact</i></a></td></tr>
  <tr><td align=\"right\">&nbsp;</td><td>&nbsp;</td></tr></table>";
mail( MAILD_ENTREPRISE ,$titremessage,$message3,$entete);

echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"$lienform\";";
echo"</script>";

} 

}

}?>