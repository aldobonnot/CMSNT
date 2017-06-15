<?php
//===== connexion
$pdo= new PDO('mysql:dbname=tksom_bd;host=localhost', 'root', '',
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8' ));
//Mettre en constantes infos site
$coord=1;

$sth = $pdo->query("SELECT * FROM cms_coord WHERE id_coord='$coord'");
$result = $sth->fetch(PDO::FETCH_ASSOC);
define("NOM_ENTREPRISE",stripslashes($result['nom_e']));
define("ADRESSE_ENTREPRISE",stripslashes($result['adresse_e']));
define("CDP_ENTREPRISE",stripslashes($result['cdp_e']));
define("VILLE_ENTREPRISE",stripslashes($result['ville_e'])); 
define("TEL_ENTREPRISE",stripslashes($result['tel_e']));
define("FAX_ENTREPRISE",stripslashes($result['fax_e']));
define("SIREN_ENTREPRISE",stripslashes($result['siren_e']));
define("MAILR_ENTREPRISE",stripslashes($result['mail_r']));
define("MAILD_ENTREPRISE",stripslashes($result['mail_d']));
define("MAILE_ENTREPRISE",stripslashes($result['mail_e']));
define("NOM_DIR",stripslashes($result['nom_d']));
define("PRENOM_DIR",stripslashes($result['prenom_d']));
define("URL",stripslashes($result['url_site']));
define("NDD",stripslashes($result['nom_domaine']));
define("HEBERGEUR",stripslashes($result['hebergeur_site']));
define("FLICKR_LOG",stripslashes($result['flickr_log']));
define("FLICKR_MDP",stripslashes($result['flickr_mdp']));

$oui="Y"; 
$Q_Menunt=$pdo->query("SELECT * FROM cms_m1 WHERE aff_M1='$oui' ORDER BY ordre_M1 ASC");
$nbrubnt=$Q_Menunt->rowCount();
define("NBRCM",$nbrubnt);
$content="";
$contenu="";
//===== SESSION
//======Fonctions globales =====
require_once('fonction.inc.php');
require_once('fonction.nav.php');
require_once('construct.php');
//--SQLI
$mysqli = new mysqli();
$mysqli->connect("localhost", "root", "", "tksom_bd");
if ($mysqli->connect_error) {die('Erreur de connexion (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);}

if($affLiens=="ok"){ require_once('objet/lienspage.php');}else{echo"";}
Global $pdo;
$Qobjet=$pdo->query("SELECT * FROM cms_objet_list, cms_objets WHERE cms_objet_list.id_zone='$objetdelazone' AND cms_objet_list.id_objet=cms_objets.id_objet");

$nbobjet=$Qobjet->rowCount();

if($nbobjet>0){
	$vQobjet = $Qobjet->fetchAll(PDO::FETCH_ASSOC);
	foreach ($vQobjet as $key => $value) {
		$lobjet=$value['url_objet'];if($lobjet!="0"){require_once("$lobjet");}else{echo"";}
	}
}else{echo"";}
// liste objets
if($sql=="0"){echo"";}elseif($sql=="1"){echo"";}else{include("sql/$sql");}
