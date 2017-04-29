<div class="global"><h1 class="h1"><?php echo $titrecontenu;?> </h1>
<div class="txt"><?php echo $contenu;?> <br>
<table class="tabLR" >
<?php 
$clistrub=new Listsrub();
$clistrub->de2=$idlien;
$afflistrub=$clistrub->afflisterub();
echo $afflistrub;
?>    
</table>
</div>
</div>
