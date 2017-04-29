<div class="global">
<h1 class="h1"><?php echo $titrecontenu;?> </h1>
<div class="txt"><?php echo $contenu;?> </div>
<div class="img">
<?php
//sql list event
$Lesevents=new Events();
$resultQvenements=$Lesevents->listEvents();
//----------------
if(!$resultQvenements){echo"<center><font color=\"#CC0000\"  size=\"3\"><b>Il n'y a pas de d'exposition enregistré</b></font></center>";} else {
foreach($resultQvenements as $key => $rowQvenements){?>
<div class="
<?php 
$cdiv=$rowQvenements['date_fin_expo'];
$cdiv2=$rowQvenements['date_debut_expo'];
$date=date("Y-m-d");
if($cdiv>$date){?>leven-green<?php }
elseif($cdiv<=$date){?>leven-red<?php }
else{?>leven<?php }?>">

<div class="laphoto" style="background-image: url('<?php echo $rowQvenements['big'];?>');"></div>

      <div class="lecommentaire">
	  <h2 class="h2"><a href="<?php echo $de;?>_<?php echo $rowQvenements['var_M2'];?>.php" class="ah2"><?php echo utf8_decode($rowQvenements['titre_C2']);?></a></h2> 
	  <a href="<?php echo $de;?>_<?php echo $rowQvenements['var_M2'];?>.php" class="<?php if($cdiv>=$date && $cdiv2<=$date){echo"datered";}else{echo"dateblack";}?>"><?php if($cdiv==$cdiv2){ echo"Le $rowQvenements[j_debut] / $rowQvenements[m_debut] / $rowQvenements[a_debut]";  }else{ echo"Du $rowQvenements[j_debut] / $rowQvenements[m_debut] / $rowQvenements[a_debut] au $rowQvenements[j_fin] / $rowQvenements[m_fin] / $rowQvenements[a_fin]"; } ?></a>
       <?php $verni=utf8_decode($rowQvenements['date_eve']); if($verni!=""){?><br><a href="<?php echo $de;?>_<?php echo $rowQvenements['var_M2'];?>.php" class="verni">Vernissage: <?php echo $verni;?></a><?php }else{echo"";}?>
	   <br><a href="<?php echo $de;?>_<?php echo $rowQvenements['var_M2'];?>.php" class="txtexp"> <?php $lesscom = $rowQvenements['contenu2']; echo truncate($lesscom, 150, '...</p>', true);?></a><br>
		<?php 
		//sql du lieu
		$lieu=$rowQvenements['id_EEE'];
		$Lesevents->idlieu=$lieu;
		$rowQlieux=$Lesevents->lieuEvents();
		//--------------
		?>
<span class="lieu2"><a href="<?php echo $de;?>_<?php echo $rowQvenements['var_M2'];?>.php" class="lieu"><b>
		<?php echo utf8_decode(stripslashes($rowQlieux['nomEEE']));?></b><br><?php echo utf8_decode(stripslashes($rowQlieux['adresseEEE']));?> <?php echo $rowQlieux['cdpEEE'];?> <?php echo utf8_decode(stripslashes($rowQlieux['villeEEE']));?> <?php echo utf8_decode(stripslashes($rowQlieux['paysEEE']));?></a></span>
		</div>
    </div>
<?php }}?>
</div>
</div>
