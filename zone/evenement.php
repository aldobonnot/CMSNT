<?php
if(isset($_SESSION['droit']) && $_SESSION['droit'] === "admiNTKS"){ $accordADMIN = "okadmin"; }else{$accordADMIN = "nogood";}
?> 
<div class="global" itemscope itemtype = "http://schema.org/Event">
<h1 class="h1"><span class="exposition">Expositions <br></span><span itemprop="name"><?php echo $titrecontenu;?></span> </h1>
<div class="img">
<?php
//sql list event
$Lesevents=new Events();
$Lesevents->idlien=$idlien2;
$resultQvenements=$Lesevents->unEvent();
//----------------

foreach($resultQvenements as $key => $rowQvenements){ $cdiv=$rowQvenements['date_fin_expo'];
$cdiv2=$rowQvenements['date_debut_expo'];
$date=date("Y-m-d");?>
<div class="leven">

<div class="txt">
<meta itemprop="startDate" content="<?php echo $cdiv2;?>">
<meta itemprop="endDate" content="<?php echo $cdiv;?>">

<meta itemprop="url" content="<?php echo URL;?><?php echo $de;?>_<?php echo $rowQvenements['var_M2'];?>.php">
<div itemprop="performer" itemscope itemtype ="http://schema.org/Person" >
<meta itemprop="name"  content="Shota Abe : TKsom"></div>

<b class="<?php if($cdiv>=$date && $cdiv2<=$date){echo"datered";}else{echo"dateblack";}?>"><?php if($cdiv==$cdiv2){ echo"Le $rowQvenements[j_debut] / $rowQvenements[m_debut] / $rowQvenements[a_debut]";  }else{ echo"Du $rowQvenements[j_debut] / $rowQvenements[m_debut] / $rowQvenements[a_debut] au $rowQvenements[j_fin] / $rowQvenements[m_fin] / $rowQvenements[a_fin]"; } ?></b><br>
<?php $verni=utf8_decode($rowQvenements['date_eve']); if($verni!=""){?><span class="verni">Vernissage: <?php echo $verni;?></span> <?php }else{echo"";}?>
<div class="letxt" itemprop="description"><div class="first"><a class="fancybox" rel="group" href="<?php echo $rowQvenements['big']; ?>" title="<?php echo utf8_decode($rowQvenements['titre_C2']); ?>" itemprop="image">
<img src="<?php echo $rowQvenements['moyen'];?>" class="round" title="<?php echo utf8_decode($rowQvenements['titre_C2']); ?>" alt="<?php echo utf8_decode($rowQvenements['titre_C2']); ?>"></a>
<br><?php if($accordADMIN=="okadmin"){?><a href="backCMS/invits.php?ideve=<?php echo $idlien2;?>" target="_blank">Envoyer invitations</a><?php }else{echo"";}?></div><?php echo $contenu;?></div> 
</div>

<div class="lesimages">
<?php 
//sql des photos
		$ideve=$rowQvenements['id_M2'];
		$Lesevents->idevent=$ideve;
		$resultQphotoseve=$Lesevents->listPhotosEvents();
		//--------------
if(!$resultQphotoseve){echo"";}else{foreach($resultQphotoseve as $key => $rowQphotoseve){?>
<a class="fancybox" rel="group" href="<?php echo $rowQphotoseve['big']; ?>" title="<?php echo $rowQphotoseve['titre_img']; ?>" >
<img alt="<?php echo utf8_decode($rowQphotoseve['titre_img']); ?>" src="<?php echo $rowQphotoseve['small'];?>" class="limage"></a>
<?php }} ?></div>
     <?php //sql du lieu
		$lieu=$rowQvenements['id_EEE'];
		$Lesevents->idlieu=$lieu;
		$rowQlieux=$Lesevents->lieuEvents();
		//--------------?>
<hr class="hr">
<div itemprop="location" itemscope itemtype="http://schema.org/Place">
<?php $lesite=$rowQlieux['siteEEE']; if($lesite==""){?><meta itemprop="url" content="http://www.shota-tksom.com/expositions.php"><?php }else{?><meta itemprop="url" content="<?php echo $lesite;?>"><?php }?>
<a href="<?php if($lesite==""){?><?php echo $de;?>_<?php echo $rowQvenements['var_M2'];?>.php"<?php }else{ echo $lesite."\" target=\"_blank";}?>" class="lieu"><b>
		<span itemprop="name"><?php echo utf8_decode($rowQlieux['nomEEE']);?></span></b><br>
		<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <span itemprop="streetAddress"><?php echo utf8_decode($rowQlieux['adresseEEE']);?></span>
	  <span itemprop="postalCode"> <?php echo $rowQlieux['cdpEEE'];?></span> 
	  <span itemprop="addressLocality"><?php echo utf8_decode($rowQlieux['villeEEE']);?></span>
	  <span><?php echo $rowQlieux['paysEEE'];?></span></div></a></div>
		<div class="pacces"><a href="https://www.google.fr/maps/place/<?php $ladress= utf8_decode($rowQlieux['adresseEEE']);echo str_replace(' ', '+', $ladress);?>+<?php echo $rowQlieux['cdpEEE'];?>+<?php echo utf8_decode($rowQlieux['villeEEE']);?>+<?php echo utf8_decode($rowQlieux['paysEEE']);?>" target="_blank" class="acces">Plan d'accés</a></div>
<hr class="hr">
    </div>
	<div itemprop="offers" itemscope itemtype ="http://schema.org/Offer" >
<meta itemprop="name" content="Exposition">
<meta itemprop="url" content="<?php echo URL; ?><?php echo $de;?>_<?php echo $rowQvenements['var_M2'];?>.php"></div>
<?php }?>

</div>
<br><br>

</div>