<div class="global">
<h1 class="h1"><?php echo $titrecontenu;?> </h1>
<div class="txt"><?php echo $contenu;?> </div>
<div class="list">
<table class="tl">
<?php
//sql des lieux et des liens
$listLL=new Lieuxliens();
$resultQlieu=$listLL->listLieulien();
//--------
foreach($resultQlieu as $key => $rowQlieu ){?>
<tr><td class="td">
<a href="<?php $url=$rowQlieu['siteEEE'];if($url!=""){echo $url."\" target=\"_blank\"";}else{echo"#\"";}?>" class="nl"> <?php echo utf8_decode(stripslashes($rowQlieu['nomEEE']));?></a>
</td></tr>
<tr><td class="td al">
<?php echo utf8_decode(stripslashes($rowQlieu['adresseEEE']));?> <?php echo $rowQlieu['cdpEEE'];?> <?php echo utf8_decode(stripslashes($rowQlieu['villeEEE']));?> <?php echo utf8_decode(stripslashes($rowQlieu['paysEEE']));?>
</td></tr>
<tr><td>&nbsp;
</td></tr>	<?php } ?>
</table></div>
</div>