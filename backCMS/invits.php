<?php session_start();
if(!isset($_POST['ajoutP'])) $ajoutP=""; else $ajoutP=$_POST['ajoutP'];
if(!isset($_POST['titreLien2'])) $titreLien2=""; else $titreLien2=$_POST['titreLien2'];
if(!isset($_POST['urlien2'])) $urlien2=""; else $urlien2=$_POST['urlien2'];
if(!isset($_POST['target2'])) $target2=""; else $target2=$_POST['target2'];
if(!isset($_POST['ajoutL'])) $ajoutL=""; else $ajoutL=$_POST['ajoutL'];
$titreLien2b=addslashes($titreLien2);

if(!isset($_POST['idM1B2'])) $idM1B2=""; else $idM1B2=$_POST['idM1B2'];
if(!isset($_POST['idM2B2'])) $idM2B2=""; else $idM2B2=$_POST['idM2B2'];
if(!isset($_POST['idM3B2'])) $idM3B2=""; else $idM3B2=$_POST['idM3B2'];

if(!isset($_POST['idM1B'])) $idM1B=""; else $idM1B=$_POST['idM1B'];
if(!isset($_POST['idM2B'])) $idM2B=""; else $idM2B=$_POST['idM2B'];
if(!isset($_POST['idM3B'])) $idM3B=""; else $idM3B=$_POST['idM3B'];

if(!isset($_GET['ideve'])) $ideve="0"; else $ideve=$_GET['ideve'];
if(!isset($_GET['mail'])) $mail=""; else $mail=$_GET['mail'];
if(!isset($_GET['idM2'])) $idM2="0"; else $idM2=$_GET['idM2'];
if(!isset($_GET['idM3'])) $idM3="0"; else $idM3=$_GET['idM3'];
if(!isset($_GET['AffForm'])) $AffForm=""; else $AffForm=$_GET['AffForm'];
if(!isset($_GET['GO'])) $GO=""; else $GO=$_GET['GO'];

include('int/cxCMS.php');
Global $pdo;
if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }
$charge="<div style=\"margin-top:0px;margin-left:40%; position:absolute;z-index:5;\"><img src=\"fancybox_loading.gif\" width=\"48\" height=\"48\"></div>";

//Ajout des liens

//Modif des liens
if($ajoutP=="okajoutP"){

echo $charge;
foreach($_POST["id_lien"] as $k => $v){
$New0 = $_POST["aff_lien"][$k];
$query = "UPDATE cms_cv SET envoi_nw='$New0' WHERE id_cv='$v'";

    if ($pdo->query($query) === FALSE) {
        echo "Error: " .$pdo->errorInfo(). "<br>";
    } else {
        echo"<script language=\"JavaScript\" type=\"text/javascript\">";
        echo"document.location=\"?ideve=$idM1B\";";
        echo"</script>";}
}
}

//fin modif

$query2 = $mysqli->query("SELECT * FROM cms_cv ");
$val2 = $query2->fetch_array();
$nbPDES=mysqli_num_rows($query2);

//select3

$ordreP=1; 
$ok="N";
$query2Q = $mysqli->query("SELECT * FROM cms_m2,cms_photos,cms_lieux  WHERE cms_m2.id_M2='$ideve' AND cms_m2.id_M2=cms_photos.id_M2 AND cms_m2.id_EEE=cms_lieux.id_EEE AND cms_photos.order_P='$ordreP' AND cms_m2.aff_M2!='$ok'");
$val2Q = $query2Q->fetch_array();
$idpage= stripslashes ($val2Q['nom_M2']);
$cdiv=$val2Q['date_fin_expo'];
$cdiv2=$val2Q['date_debut_expo'];
$date=date("Y-m-d");
$jd=$val2Q['j_debut'];
$md=$val2Q['m_debut'];
$ad=$val2Q['a_debut'];
$jf=$val2Q['j_fin'];
$mf=$val2Q['m_fin'];
$af=$val2Q['a_fin'];
if($cdiv==$cdiv2){ $datexpo="Le ".$jd." / ".$md." / ".$ad;}else{ $datexpo="Du ".$jd." / ".$md." / ".$ad." au ".$jf." / ".$mf." / ".$af; }
$verni=$val2Q['date_eve'];
if($verni!=""){$leverni="<span class=\"verni\">Vernissage: ".$verni."</span>";}else{$leverni="";}
$laffiche=$val2Q['moyen'];
$letitre=$val2Q['titre_C2'];
$lecontenu=$val2Q['contenu2'];
$nomlieu=$val2Q['nomEEE'];
$adresslieu=$val2Q['adresseEEE'];
$cdplieu=$val2Q['cdpEEE'];
$villelieu=$val2Q['villeEEE'];
$payslieu=$val2Q['paysEEE'];
$varexpo=$val2Q['var_M2'];

if($mail=="okmail"){

$objet="News Letter Invitation TKsom";
$entete= "MIME-Version: 1.0\r\n".
   "Content-type: text/html; charset=utf-8\r\n";

$entete .='From:<'.MAILE_ENTREPRISE.'>'."\r\n";
$message="<html><head>
<style type=\"text/css\">

.exposition{font-family: Arial;color:#000000;font-size:30px;font-weight:bold;}
.exposuite{font-family: Arial;color:#000000;font-size:20px;font-weight:bold;}
.dateblack{font-family:Arial;font-weight:800;font-size:16px;color:#848484;}
.verni{font-family:Arial, cursive;font-weight:800;font-size:16px;color:#BDBDBD;}
.ctn{font-family:Arial;font-weight:400;font-size:12px;}
a.lieu{font-family:Arial;font-weight:800;font-size:14px;color:#000000;text-decoration:none;}
a.anul{font-family:Arial;font-weight:400;font-size:10px;color:#000000;text-decoration:none;}
.round{-moz-border-radius: 10px 10px 10px 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px 10px 10px 10px;}
 @media only screen and (max-width: 480px) { 
        table[class=w580], td[class=w580], img[class=w580] { width:280px !important; }
        table[class=w640], td[class=w640], img[class=w640] { width:300px !important; }
        img{ height:auto;}
        table[class=w380], td[class=w380], td[class=w260] { 
            width:280px !important; 
            display:block;
        }    
           
    } </style>
	</head>
      <body>
<table width=\"90%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td align=\"center\"> 
      <table width=\"100%\" class=\"w640\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
	  <tr><td>&nbsp;</td></tr>
        <tr> 
          <td class=\"w640\"><span class=\"exposition\">TKsom </span><br> <span class=\"exposuite\">Vous invite &agrave; L&rsquo;exposition <br>$idpage</span></td>
        </tr>
       <tr> 
          <td class=\"w640\"><b class=\"dateblack\">$datexpo</b></td>
        </tr>
        <tr> 
          <td class=\"w640\">$leverni</td>
        </tr>
        <tr> 
          <td class=\"w640\">
            <table  class=\"w380\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
              <tr>
                <td class=\"w380\" width=\"50%\" ><div class=\"ctn\">$lecontenu</div></td>
                <td  class=\"w260\" width=\"50%\" align=\"right\" valign=\"top\"><a href=\"".URL."expositions_$varexpo.php\"><img src=\"$laffiche\" class=\"round\" title=\"$letitre\" border=\"0\"></a></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td class=\"w640\"><hr class=\"hr\">
<a href=\"".URL."expositions_$varexpo.php\" class=\"lieu\" style=\"color:#000000;\">
		<span style=\"color:#000000;font-size:16px;\"> <b>$nomlieu</b></span><br> <span style=\"color:#000000;\">$adresslieu $cdplieu $villelieu $payslieu</span></a>
		<hr class=\"hr\"></td>
        </tr>
      </table>
    </td>
  </tr><tr><td class=\"w640\" align=\"center\"> <span style=\"color:#000000;\"><a href=\"".URL."contact_desinscription-newsletter.php\" class=\"anul\" style=\"color:#000000;\"> Pour se d&eacute;sabonner de la NewsLetter cliquez ici</a></span></td></tr>
</table></body>
     </html>";

$oui="Y";
$req=$mysqli->query("SELECT email_cv FROM cms_cv  WHERE envoi_nw='$oui' GROUP BY email_cv ");

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
$messageOKE="Votre news letter a bien &eacute;t&eacute; envoy&eacute;";
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
<title>Ajout modification des liens: <?php echo $idpage;?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css"> @charset "utf-8";
@font-face {font-family: 'Gloria Hallelujah';font-style: normal;font-weight: 400;src: local('Gloria Hallelujah'), local('GloriaHallelujah'), url(https://fonts.gstatic.com/s/gloriahallelujah/v8/CA1k7SlXcY5kvI81M_R28cNDay8z-hHR7F16xrcXsJw.woff2) format('woff2');unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;}
@font-face {font-family: 'Dekko';font-style: normal;font-weight: 400;src: local('Dekko'), url(https://fonts.gstatic.com/s/dekko/v3/o2FjEXeuFobpfHXJzQjqUQ.woff2) format('woff2');unicode-range: U+02BC, U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200B-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;}
@font-face {font-family: 'Dekko';font-style: normal;font-weight: 400;src: local('Dekko'), url(https://fonts.gstatic.com/s/dekko/v3/IWu7MXC1n5wvljVoDLlFUg.woff2) format('woff2');unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;}
@font-face {font-family: 'Dekko';font-style: normal;font-weight: 400;src: local('Dekko'), url(https://fonts.gstatic.com/s/dekko/v3/65sfRS5PD_z7ZcEP48_P-g.woff2) format('woff2');unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;}

body{font-family: 'Exo 2', sans-serif;font-size:12px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:10px;}
h3{font-family: 'Exo 2', sans-serif;font-size:22px; font-weight:600; color:#999900;margin-top:0px;margin-bottom:10px;}
.tttab{font-size:1.1em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}
a.aflien{font-family: 'Exo 2', sans-serif;font-size:18px; font-weight:600; color:#999900;text-decoration:none;}
a.aflien:hover{ color:#000000;text-decoration:none;}


</style>
<link href="styles.css" rel="stylesheet" type="text/css">
<style type="text/css">
.h1{margin-left:-20px;font-family: "Gloria Hallelujah",cursive;color:#000;}
.exposition{font-size:1.5em;}
.dateblack{font-family:'Dekko', cursive;font-weight:800;font-size:1.5em;}
.verni{font-family:'Dekko', cursive;font-weight:800;font-size:1.5em;}
.ctn{font-family:'Dekko', cursive;font-weight:400;font-size:1.2em;}
a.lieu{font-family:'Dekko', cursive;font-weight:800;font-size:1.3em;color:#000;text-decoration:none;}
a.anul{font-family:'Dekko', cursive;font-weight:400;font-size:0.8em;color:#000;text-decoration:none;}
a.envNWLien{font-family:'Dekko', cursive;font-weight:800;font-size:1.8em;color:#ff0000;text-decoration:none;}
a.envNWLien:hover{font-family:'Dekko', cursive;font-weight:800;font-size:1.8em;color:#000000;text-decoration:none;}
.round{-moz-border-radius: 10px 10px 10px 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px 10px 10px 10px;}
 @media only screen and (max-width: 480px) { 

        
        table[class=w580], td[class=w580], img[class=w580] { width:280px !important; }
        table[class=w640], td[class=w640], img[class=w640] { width:300px !important; }
        img{ height:auto;}
         /*illisible, on passe donc sur 3 lignes */
        table[class=w380], td[class=w380], td[class=w260] { 
            width:280px !important; 
            display:block;
        }    
           
    } </style>
<script src="js/jquery-1.11.3.min.js"></script>
</head>

<body onLoad="MM_preloadImages('fancybox_loading.gif')" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#333333"> 
      <h1><?php  echo NOM_ENTREPRISE;?></h1>
    </td>
  </tr>
  <tr>
    <td align="center"> 
      <h2>Envoi invitations pour l'évènement</h2><h3><?php echo $idpage;?> </h3>
      
    </td>
  </tr>
</table>

<div id="flip" ><a href="#" class="aflien"><h2>Liste des abonnés</h2></a></div>
<div id="panel">
<form action="" method="post" enctype="multipart/form-data" name="form1">

<?php include('listNW.php');?>
</form>
</div>
<div id="even">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"> 
      <table width="640" class="w640" border="0" cellspacing="0" cellpadding="0">
	  <tr><td>&nbsp;</td></tr>
        <tr> 
          <td class="w640"><h1 class="h1"><span class="exposition">TKsom </span><br> Vous invite à L'exposition <br><?php echo $idpage;?> </h1></td>
        </tr>
       <tr> 
          <td class="w640"><b class="dateblack"><?php if($cdiv==$cdiv2){ echo"Le $jd / $md / $ad";  }else{ echo"Du $jd / $md / $ad au $jf / $mf / $af"; } ?></b></td>
        </tr>
        <tr> 
          <td class="w640"><?php  echo $leverni;?></td>
        </tr>
        <tr> 
          <td class="w640">
            <table  class="w380" width="580" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="w380" width="380" ><div class="ctn"><?php echo  $lecontenu;?></div></td>
                <td  class="w260" width="260" align="center" valign="top"><a href="<?php echo URL."expositions_".$varexpo;?>.php"><img src="<?php echo $laffiche;?>" class="round"
                                                                                                                                           title="<?php echo $letitre; ?>" border="0"></a></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td class="w640"><hr class="hr">
<a href="<?php echo URL."expositions_".$varexpo;?>.php" class="lieu" style="color:#000000;">
		<span style="color:#000000;font-size:1.3em;"> <b><?php echo $nomlieu;?></b></span><br> <span style="color:#000000;"><?php echo $adresslieu;?> <?php echo $cdplieu;?> <?php echo $villelieu;?> <?php echo $payslieu;?></span></a>
		<hr class="hr"></td>
        </tr>
      </table>
    </td>
  </tr><tr><td class="w640" align="center"> <span style="color:#000000;"><a href="<?php echo URL."contact_desinscription-newsletter";?>.php" class="anul" style="color:#000000;"> Pour se désabonner de la NewsLetter cliquez ici</a></span></td></tr>
</table>

  

<p align="center"><a href="invits.php?ideve=<?php echo $ideve;?>&mail=okmail&$GO=yes" class="envNWLien">Cela 
      vous convient cliquez pour envoyer &agrave; tous</a></td>
  </tr></p>
 <p align="center"> <?php if($GO=="yes"){ echo $charge; }else{echo""; }?></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<!-- <script src="js/bootstrap.js"></script> -->
  <!-- <script src="js/bootstrap.js" type="text/javascript"></script> -->
  <script src="js/bootstrap-3.3.5.js" type="text/javascript"></script>
  <script type="text/javascript">
$(document).ready(function(){
    $("#flip").click(function(){
    
	$("#panel").slideToggle("slow");
	
	});
	}); 

</script>
</body>
</html>