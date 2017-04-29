<?php 
include('int/cxCMS.php');
$objet="News Letter Invitation TKsom";
$entete= "MIME-Version: 1.0\r\n".
   "Content-type: text/html; charset=utf-8\r\n";

$entete .='From: contact@shota-tksom.com'. "\r\n";
$message="
envoie de mail";

$mysqli = new mysqli();
$mysqli->connect("127.0.0.1", "root", "", "tksom_bd");
if ($mysqli->connect_error) {die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);}



$oui="Y";
$req=$mysqli->query("SELECT email_cv FROM cms_CV  WHERE envoi_nw='$oui' GROUP BY email_cv ");

$res=mysqli_num_rows($req);
$i=0;
while($i!=$res) { 
mysqli_data_seek($req, $i);
$email= mysqli_fetch_row($req);
$objet2=$objet;
$message2=$message;
$entete2=$entete;
mail($email[0],$objet2,$message2,$entete2);
$ni=$i+1;
echo 'Mail '.$ni.' bien envoyé à '.$email[0].'-<br>';
$i++;}
?>
<!--$host = '127.0.0.1';
$user = 'root';
$pass ='';
$db = 'tksom';
$Conx = mysql_pconnect($host, $user, $pass) or die(mysql_error());

mysql_select_db($db) or die ('Erreur :'.mysql_error());
$oui="Y";
$req=mysql_query("SELECT email_cv FROM cms_CV  WHERE envoi_nw='$oui' GROUP BY email_cv "); 
$res=mysql_num_rows($req);
$i=0;
while($i!=$res) { 
$email=mysql_result($req,$i,"email_cv");
$objet2=$objet;
$message2=$message;
$entete2=$entete;
mail($email,$objet2,$message2,$entete2);
$ni=$i+1;
echo 'Mail '.$ni.' bien envoyé à '.$email.'-<br>';
$i++;}
!-->