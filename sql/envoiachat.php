<?php 
if(!isset($_GET['oeuvre'])) $oeuvre=""; else $oeuvre= $_GET['oeuvre'];
if(!isset($_POST['envoi'])) $envoi=""; else $envoi= $_POST['envoi'];
if(!isset($_POST['verif'])) $verif=""; else $verif=$_POST['verif'];
if(!isset($_POST['spam'])) $spam=""; else $spam=$_POST['spam'];
if(!isset($_POST['nom_cv'])) $nom_cv=""; else $nom_cv= $_POST['nom_cv'];
if(!isset($_POST['prenom_cv'])) $prenom_cv=""; else $prenom_cv= $_POST['prenom_cv'];
if(!isset($_POST['email_cv'])) $email_cv=""; else $email_cv= $_POST['email_cv'];
if(!isset($_POST['tel_cv'])) $tel_cv=""; else $tel_cv= $_POST['tel_cv'];
if(!isset($_POST['motivations'])) $motivations=""; else $motivations= $_POST['motivations'];

$query2 = $mysqli->query("SELECT * FROM cms_photos WHERE cms_photos.id_photo='$oeuvre'");
$val2 = $query2->fetch_array();

$sPromo = $mysqli->query("SELECT * FROM cms_spam");
$nbrsPromo= mysqli_num_rows($sPromo);
if($nbrsPromo>0) {$numimageP=1;
    while($rowP = mysqli_fetch_assoc($sPromo)) 
   { $nomimagesP[$numimageP]=$rowP['f_img'];
	 $titre_p[$numimageP]=$rowP['code'];
     $numimageP++;}
   mt_srand((float)microtime()*1000000);
   $affimageP=mt_rand(1,$nbrsPromo);  
$imgP=$nomimagesP[$affimageP];
$message=$titre_p[$affimageP];}	


if($envoi=="ok"){
$ok=true;

attac($nom_cv);
attac($prenom_cv);
attac($email_cv);
attac($FORMemail);
attac($tel_cv);
attac($motivations);

$gif=".gif";
$code="$spam$gif";
if($code!=$verif)
		{$ok=false;$msg11="Le code anti-spam!<br>";}

if (str_replace(' ','',$_POST['nom_cv'])=='') 
		{$ok=false;$msg2="Votre nom !<br>";}
if (str_replace(' ','',$_POST['prenom_cv'])=='') 
		{$ok=false;$msg3="Votre prenom !<br>";}
$From=$_POST['email_cv'];$FORMemail=trim($From);
if ($FORMemail=="")    
		{$ok=false;$msg4="Saisir une adresse mail !<br>";}else{if(!filter_var($FORMemail, FILTER_VALIDATE_EMAIL))
  {$ok=false;$msg4="Saisir une adresse mail valide !<br>";}}
if (str_replace(' ','',$_POST['tel_cv'])=='') 
		{$ok=false;$msg5="Votre telephone !<br>";}
if (str_replace(' ','',$_POST['motivations'])=='') 
		{$ok=false;$msg6="Votre message !<br>";}

if($ok)
	{
$nom_cv = addslashes($nom_cv);
$nom_cv = htmlentities ($nom_cv, ENT_QUOTES);
$prenom_cv = addslashes($prenom_cv);
$prenom_cv = htmlentities ($prenom_cv, ENT_QUOTES);
$motivations = addslashes($motivations);
$motivations = htmlentities($motivations, ENT_QUOTES);
$nom_fileb = $oeuvre;
$offre=$val2['titre_img'];
$updateSQL2 = "INSERT INTO cms_CV (date_cv,offre,nom_cv,prenom_cv,email_cv,tel_cv,motivations,fichierb)
 VALUES (NOW(),'$offre','$nom_cv','$prenom_cv','$FORMemail','$tel_cv','$motivations','$nom_fileb')";                     
if ($mysqli->query($updateSQL2) === TRUE) {
$nom_cv2 = stripslashes($nom_cv);
$prenom_cv2 = stripslashes($prenom_cv);
$motivations2 = stripslashes($motivations);
$limage=$val2['small'];
$offre=$val2['titre_img'];
$ladate=date("d-m-Y");
$titremessage="Achat: ".$offre." | TKSom";
$entete= "MIME-Version: 1.0\r\n".
 "Content-type: text/html; charset=utf-8\r\n";
$entete .='From:<'.MAILE_ENTREPRISE.'>'."\r\n";
$entete .='Reply-To: <'.$FORMemail.'>'."\n";
$message3="<table width=\"100%\" border=\"0\" cellspacing=\"5\" cellpadding=\"0\">
  <tr><td width=\"22%\" align=\"right\"><font size=\"5\" face=\"Arial, Helvetica, sans-serif\"><b>".NOM_ENTREPRISE." Achat</b></font></td><td width=\"78%\">&nbsp;</td></tr>
  <tr><td align=\"right\">&nbsp;</td><td>&nbsp;</td></tr>
  <tr><td align=\"right\"><img src=\"$limage\" border=\"0\"></td><td><font face=\"Arial, Helvetica, sans-serif\">&nbsp; $offre</font></td></tr>
  <tr><td align=\"right\">&nbsp;</td><td>&nbsp;</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">Message du:</font></td><td>$ladate</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">&nbsp;</font></td><td>&nbsp;</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">Nom:</font></td><td>$nom_cv2</td></tr></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">Pr&eacute;nom:</font></td><td>$prenom_cv2</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">Email:</font></td><td>$FORMemail</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">T&eacute;l&eacute;phone:</font></td><td>$tel_cv</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">Message:</font></td><td>$motivations2</td></tr>
  
  <tr> <td align=\"right\"><font color=\"#990000\" face=\"Arial, Helvetica, sans-serif\"><i>Gestion des Contacts et achats</i></font></td><td><a href=\"".URL."/backCMS/gestionContactCV.php\"><i>Page de gestion achat, contact</i></a></td></tr>
  <tr><td align=\"right\">&nbsp;</td><td>&nbsp;</td> </tr></table>";
mail(MAILD_ENTREPRISE,$titremessage,$message3,$entete);

echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"achat.html\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}}?>