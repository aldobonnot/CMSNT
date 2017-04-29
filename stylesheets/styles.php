<?php
   header('content-type: text/css');
   ob_start('ob_gzhandler');
   header('Cache-Control: max-age=31536000, must-revalidate');
   require_once('../cxCMS.php');
$oui="Y"; 
$Q_Menu =$mysqli->query("SELECT * FROM cms_M1 WHERE aff_M1='$oui' ORDER BY ordre_M1 ASC");
$row_rsMenu = $Q_Menu->fetch_assoc();
$nbrub=mysqli_num_rows($Q_Menu);
$prcel = 100/$nbrub;
$breakM = 768;
$breakM2 = $breakM+1;
   ?>@media (min-width: <?php echo $breakM2;?>px) {#menuh ul {list-style: none;margin: 0;padding: 0;float: left;width: <?php echo $prcel;?>%;}}@media (max-width: <?php echo $breakM;?>px) {#menuh ul {background:#999;width: 100%;}}
   @font-face {font-family: 'Lora';font-style: normal;font-weight: 400;src: local('Lora'), local('Lora-Regular'), url(https://fonts.gstatic.com/s/lora/v9/nAKwuw6_dIh5kwvpj3ShNfesZW2xOQ-xsNqO47m55DA.woff) format('woff');}
@font-face {font-family: 'Exo 2';font-style: normal;font-weight: 400;src: local('Exo 2'), local('Exo2-Regular'), url(https://fonts.gstatic.com/s/exo2/v3/KzoFUeaQw_faskDsymvVJqCWcynf_cDxXwCLxiixG1c.woff) format('woff');}
@font-face {font-family: 'Exo 2';font-style: normal;font-weight: 600;src: local('Exo 2 Semi Bold'), local('Exo2-SemiBold'), url(https://fonts.gstatic.com/s/exo2/v3/L7cKReMyy06lvTzTWfUEtXYhjbSpvc47ee6xR_80Hnw.woff) format('woff');}
@font-face {font-family: 'Exo 2';font-style: normal;font-weight: 800;src: local('Exo 2 Extra Bold'), local('Exo2-ExtraBold'), url(https://fonts.gstatic.com/s/exo2/v3/WevIkQJBpGU3SVYl4lPELXYhjbSpvc47ee6xR_80Hnw.woff) format('woff');}
@font-face {font-family: 'Nothing You Could Do';font-style: normal;font-weight: 400;src: local('Nothing You Could Do'), local('NothingYouCouldDo'), url(https://fonts.gstatic.com/s/nothingyoucoulddo/v6/jpk1K3jbJoyoK0XKaSyQAXEXHkG8fPQqt_tcmM6oBg_3rGVtsTkPsbDajuO5ueQw.woff) format('woff');}