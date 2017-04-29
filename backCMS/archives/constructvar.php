<?php
include('cxCMS2.php');
if(!isset($_POST['ajtRub'])) $ajtRub=""; else $ajtRub=$_POST['ajtRub'];
if(!isset($_POST['nomMenu'])) $nomMenu=""; else $nomMenu=$_POST['nomMenu'];
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
<title>liste des sous rubrique de la page :</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/sample/js/sample.js"></script>
	<link rel="stylesheet" href="ckeditor/sample/css/samples.css">
	<link rel="stylesheet" href="ckeditor/sample/toolbarconfigurator/lib/codemirror/neo.css">
<style type="text/css"> @charset "utf-8";
body{font-family: 'Exo 2', sans-serif;font-size:14px; font-weight:400; color:#000000; margin:0;padding:0;}
h1{font-family: 'Exo 2', sans-serif;font-size:30px; font-weight:600; color:#ffffff;margin-left:20px;}
h2{font-family: 'Exo 2', sans-serif;font-size:26px; font-weight:600; color:#000000;margin-top:20px;margin-bottom:20px;}
.tttab{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:10px;padding-bottom:10px;}
.tttab2{font-size:1.3em;font-weight:600; color:#ffffff;padding-top:5px;padding-bottom:5px;}
h3{font-family: 'Exo 2', sans-serif;font-size:22px; font-weight:600; color:#999900;margin-top:0px;margin-bottom:10px;}
a.arch{font-size:1.5em;font-weight:600; color:#000000;text-decoration:none;}a.arch:hover{color:#ff0000;text-decoration:none;}
a.aflien{font-family: 'Exo 2', sans-serif;font-size:18px; font-weight:600; color:#999900;text-decoration:none;}
a.aflien:hover{ color:#000000;text-decoration:none;}</style>

</head>

<body onLoad="MM_preloadImages('fancybox_loading.gif')" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#333333"> 
      <h1></h1>
    </td>
  </tr>
  <tr>
    <td align="center">
      <h2>Construction variable</h2>
	  <h3>></h3>
    </td>
  </tr>
</table>
<form action="" method="post" enctype="multipart/form-data" name="form1">
<input name="nomMenu" type="text" size="41">
<input type="submit" name="Submit2" value="Ajouter">
      <input name="ajtRub" type="hidden"  value="okajtRub">
</form>
<?php if($ajtRub == "okajtRub"){
$nomMenu = trim($nomMenu);
$varutf8 = netTmcc($nomMenu);
$minuscule = strtolower($varutf8);
$var_page = netUrl($minuscule);


	
}else{echo"";}?>
</body>
</html>