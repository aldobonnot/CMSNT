<main>
	<!--Appel des différentes templates->
<section>
	
<?php if($back=="okback"){?><a class="back" href="javascript:history.back();"> &lsaquo; </a><?php }else{echo"";}?>
<?php include("$zone");?>
<?php if($affLiens=="ok"){ ?>
<div class="globliens">
 <?php
$Lesliens=new Liens();
$Lesliens->de2=$idlien;
$Lesliens->rub2=$idlien2;
$Lesliens->art2=$idlien3;
$affLesliens=$Lesliens->affliens();
echo $affLesliens;
?></div><?php }else{echo"";} ?>

<?php if($back=="okback"){?><a class="back" href="javascript:history.back();"> &lsaquo; </a><?php }else{echo"";}?>
</section>
</main>
