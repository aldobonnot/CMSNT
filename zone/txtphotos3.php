<div class="global">
<h1 class="h1"><?php echo $titrecontenu;?> </h1>
<div class="txt"><?php echo $contenu;?> </div>
 <div class="container-fluid">
            <div class="row">
			<?php   
$Lesphotos=new Photos();
$Lesphotos->idphoto=$idlien;
$Lesphotos->idphoto2=$idlien2;
$Lesphotos->idphoto3=$idlien3;
$resultPhoto=$Lesphotos->recupSql();

if(!$resultPhoto){echo"<center><font color=\"#CC0000\"  size=\"3\"><b>Il n'y a pas de photo enregistré</b></font></center>";}else {
	foreach($resultPhoto as $key => $valeurP){
		?>
<div class="col-md-4-hh plus">
<table class="tabD">
<tr><td>
<a class="fancybox" rel="example_group" href="<?php echo $valeurP['big'];?>" title="<?php echo utf8_decode($valeurP['titre_img']);?>"><img src="<?php echo $valeurP['small']; ?>" class="imgDiapo" alt="<?php echo utf8_decode($valeurP['titre_img']);?>"></a>
</td></tr>
<tr><td class="cart"><?php $timg=$valeurP['titre_img']; if($timg!=""){echo utf8_decode($timg);}else{?>&nbsp;<?php }?></td></tr>
<tr><td class="cart"><?php $dm=$valeurP['dimensions']; if($dm!=""){
	switch($dm){
	case "A1":
	echo "Format ".$dm;
	break;
	case "A2":
	echo "Format ".$dm;
	break;
	case "A3":
	echo "Format ".$dm;
	break;
	case "A4":
	echo "Format ".$dm;
	break;
	case "2xA3":
	echo "Format Double page A3";
	break;
	case "2xA4":
	echo "Format Double page A4";
	break;
	default:
	echo "Dim:".$dm."cm";
	break;
	}}else{?>&nbsp;<?php }?></td></tr>

<tr><td class="cart"><?php $leprix=$valeurP['prix']; if($leprix!=""){
	switch($leprix){
	case "D":
	echo "Prix à discuter";
	break;
	default:
	echo "Prix: ".$leprix."€";
break;}}else{?>&nbsp;<?php }?></td></tr>
<tr><td class="cart"><?php $idphoto=$valeurP['id_photo']; if($leprix!=""){?><a class="carta various" data-fancybox-type="iframe" href="achat.php?oeuvre=<?php echo $idphoto;?>" >Acheter cette oeuvre</a><?php }else{?>&nbsp;<?php }?></td></tr>
<tr><td class="cartB" id="ntd<?php echo $idphoto;?>"><?php $lanote=$valeurP['note_p'];if($lanote>0){echo $lanote;}else{echo"";}?><img src="img/love.png" id="<?php echo $idphoto;?>" onclick="showNote(this.id);" title="J'aime" alt="j'aime" style="cursor:pointer;"></td></tr>
</table>
</div>
	
	<?php }}?>
</div>
</div>
</div>
<div id="coeur" style="display:none;"></div>
<script>function showNote(str){	if(str === ""){}else{$(document).ready(function() {$('#coeur').css('display', 'block');$('#coeur').animate({height: 200}, 0);$('#coeur').animate({width: 200}, 0);$('#coeur').animate({height: 200}, 1500);$('#coeur').animate({width: 200}, 1500);$('#coeur').animate({height: 0}, 1000);$('#coeur').animate({width: 0}, 1000);$.post( 'result.php', { name: str },function(data){$('#ntd'+str).html(data);});});}}</script>