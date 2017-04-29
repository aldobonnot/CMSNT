<?php 
if(!isset($_POST['envoi'])) $envoi=""; else $envoi= $_POST['envoi'];
if(!isset($_POST['verif'])) $verif=""; else $verif=$_POST['verif'];
if(!isset($_POST['spam'])) $spam=""; else $spam=$_POST['spam'];
if(!isset($_POST['offre'])) $offre=""; else $offre= $_POST['offre'];
if(!isset($_POST['nom_cv'])) $nom_cv=""; else $nom_cv= $_POST['nom_cv'];
if(!isset($_POST['prenom_cv'])) $prenom_cv=""; else $prenom_cv= $_POST['prenom_cv'];
if(!isset($_POST['email_cv'])) $email_cv=""; else $email_cv= $_POST['email_cv'];
if(!isset($_POST['tel_cv'])) $tel_cv=""; else $tel_cv= $_POST['tel_cv'];
if(!isset($_POST['motivations'])) $motivations=""; else $motivations= $_POST['motivations'];
if(!isset($_POST['fichierb'])) $fichierb=""; else $fichierb=$_POST['fichierb'];
if(!isset($_FILES['fichierb']['tmp_name'])) $tmpb=""; else $tmpb=$_FILES['fichierb']['tmp_name'];

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
attac($offre);
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
if (str_replace(' ','',$_POST['offre'])=='') 
		{$ok=false;$msg1="Vous devez choisir une offre<br>";}
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
		{$ok=false;$msg6="Vos motivations !<br>";}
//***********telechargement doc*******
$targetb     = "docCV/";
$max_sizeb   = 10000000000;     // Taille max en octets du fichier 
$width_maxb  = 124000000;        // Largeur max de l'image en pixels 
$height_maxb = 1080000000;        // Hauteur max de l'image en pixels 
$extensions_okb = array("pdf"); 
//------------------------------------------------------------ 
//  DEFINITION DES VARIABLES LIEES AU FICHIER 
//------------------------------------------------------------ 
$nom_fileb  = $_FILES['fichierb']['name']; 
$tailleb     = $_FILES['fichierb']['size']; 
$tmpb        = $_FILES['fichierb']['tmp_name']; 
$cheminb     = $targetb.$_FILES['fichierb']['name']; 
$extensionb  = substr($nom_fileb,-3); // Récupération de l'extension 
if($_FILES['fichierb']['name']) 
  {// On vérifie l'extension du fichier 
   if(in_array(strtolower($extensionb),$extensions_okb)) 
    { // On récupère les dimensions du fichier 
        $infos_imgb = getimagesize($_FILES['fichierb']['tmp_name']);      
        // On vérifie les dimensions et taille de l'image 
        if(($infos_imgb[0] <= $width_maxb) && ($infos_imgb[1] <= $height_maxb) && ($tailleb <= $max_sizeb)) 
        { // Si c'est OK, on teste l'upload 
            if(move_uploaded_file($tmpb,$cheminb)) 
            { // Si upload OK alors on affiche le message de réussite 
			  //echo '<div class=\"upload\" style=\"z-index:100;\">';
                //echo '<p>Fichier uploade avec succes !</p>'; 
                //echo '<ul><li>Fichier : '.$nom_fileb .'</li>'; 
                //echo '<li>Taille : '.$_FILES['fichierb']['size'].' Octets</li>'; 
                //echo '<li>Largeur : '.$infos_imgb[0].' px</li>'; 
                //echo '<li>Hauteur : '.$infos_imgb[1].' px</li></ul>'; 
                //echo '</div>';
            } 
               else 
            {// Sinon on affiche une erreur système
$ok=false;
$msg7="Problème lors de l'upload !<br>";
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"$lienform\";";
echo"</script>"; 
exit;}
} 
else 
{// Sinon erreur sur les dimensions et taille de l'image <br>
$ok=false;
$msg8="Erreur dans la taille du document !<br>";
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"$lienform\";";
echo"</script>";
exit;}
} 
else 
{// Sinon on affiche une erreur pour l'extension 
$ok=false;
$msg9="Votre document n'est pas en PDF !<br>";
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"$lienform\";";
echo"</script>";
exit;} 
} 
else 
{ 
$ok=false;
$msg10="Vous n'avez pas envoye de CV !<br>";
}
//======================================================================================================  
if($ok)
	{
$nom_cv = addslashes($nom_cv);
$nom_cv = htmlentities ($nom_cv, ENT_QUOTES);
$prenom_cv = addslashes($prenom_cv);
$prenom_cv = htmlentities ($prenom_cv, ENT_QUOTES);
$motivations = addslashes($motivations);
$motivations = htmlentities($motivations, ENT_QUOTES);
$nom_fileb = $_FILES['fichierb']['name'];
$updateSQL2 = "INSERT INTO cms_CV (date_cv,offre,nom_cv,prenom_cv,email_cv,tel_cv,motivations,fichierb)
 VALUES (NOW(),'$offre','$nom_cv','$prenom_cv','$FORMemail','$tel_cv','$motivations','$nom_fileb')";                     
if ($mysqli->query($updateSQL2) === TRUE) {
$nom_cv2 = stripslashes($nom_cv);
$prenom_cv2 = stripslashes($prenom_cv);
$motivations2 = stripslashes($motivations);
$ladate=date("d-m-Y");
$titremessage="Candidature: ".$offre." | ".NOM_ENTREPRISE."";
$entete= "MIME-Version: 1.0\r\n".
 "Content-type: text/html; charset=utf-8\r\n";
$entete .='From:<'.MAILE_ENTREPRISE.'>'."\r\n";
$entete .='Reply-To: <'.$FORMemail.'>'."\n";
$message3="<table width=\"100%\" border=\"0\" cellspacing=\"5\" cellpadding=\"0\">
  <tr><td width=\"22%\" align=\"right\"><font size=\"5\" face=\"Arial, Helvetica, sans-serif\"><b>".NOM_ENTREPRISE." Recrutement</b></font></td><td width=\"78%\">&nbsp;</td></tr>
  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">Message du:</font></td><td>$ladate</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">&nbsp;</font></td><td>&nbsp;</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">Nom:</font></td><td>$nom_cv2</td></tr></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">Pr&eacute;nom:</font></td><td>$prenom_cv2</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">Email:</font></td><td>$FORMemail</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">T&eacute;l&eacute;phone:</font></td><td>$tel_cv</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">Motivations:</font></td><td>$motivations2</td></tr>
  <tr><td align=\"right\">&nbsp;</td><td>&nbsp;</td></tr>
  <tr><td align=\"right\"><font face=\"Arial, Helvetica, sans-serif\">CV:</font></td><td><a href=\"".URL."/docCV/$nom_fileb\">$nom_fileb</a></td></tr>
  <tr><td align=\"right\">&nbsp;</td><td>&nbsp;</td></tr>
  <tr> <td align=\"right\"><font color=\"#990000\" face=\"Arial, Helvetica, sans-serif\"><i>Gestion des CV</i></font></td><td><a href=\"".URL."/back/gestioncv.php\"><i>Page de gestion CV</i></a></td></tr>
  <tr><td align=\"right\">&nbsp;</td><td>&nbsp;</td> </tr></table>";
mail(MAILR_ENTREPRISE,$titremessage,$message3,$entete);

echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"$lienform\";";
echo"</script>";} else {
    echo "Error: " . $mysqli . "<br>" . $mysqli->error;
}
}}?>