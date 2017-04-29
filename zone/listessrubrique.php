<div class="global"><h1 class="h1"><?php echo $titrecontenu;?> </h1>
<div class="txt"><?php echo $contenu;?><br>
<table class="tabLR">
<?php 
$clistsrub=new Listssrub();
$clistsrub->de2=$idlien;
$clistsrub->rub2=$idlien2;
$afflistsrub=$clistsrub->afflistessrub();
echo $afflistsrub;
?>    
</table>
</div>
<div class="img" >.</div>
</div>
