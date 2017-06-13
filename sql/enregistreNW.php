<?php 
if (!isset($_POST['envoi'])) $envoi=""; else $envoi= $_POST['envoi'];
if (!isset($_POST['verif'])) $verif=""; else $verif=$_POST['verif'];
if (!isset($_POST['spam'])) $spam=""; else $spam=$_POST['spam'];
if (!isset($_POST['email_cv'])) $email_cv=""; else $email_cv= $_POST['email_cv'];
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
if($envoi=="ok"){
$ok=true;
attac($email_cv);
$gif=".gif";
$code="$spam$gif";
if($code!=$verif)
		{$ok=false;
$msg1="Le code anti-spam!<br>";}

$From=$_POST['email_cv'];
$email=trim($From);
$FORMemail = htmlspecialchars($email, ENT_QUOTES);
if ($FORMemail=="")    
		{$ok=false;$msg4="Saisir une adresse mail !<br>";}else{if(!filter_var($FORMemail, FILTER_VALIDATE_EMAIL))
  		{$ok=false;$msg4="Saisir une adresse mail valide !<br>";}}
//======================================================================================================  
if($ok){
$mod_cv = "nw";
if ($pdo->exec("INSERT INTO cms_cv (date_cv,email_cv,mod_cv)
 VALUES (NOW(),'$FORMemail','$mod_cv')") === FALSE ) {
 echo "Erreur: " . $pdo . "<br>" . $pdo->errorInfo();
} else {echo"<script language=\"JavaScript\" type=\"text/javascript\">";echo"document.location=\"$lienform\";";echo"</script>";}}}?>
