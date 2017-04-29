<div class="global">
<h1 class="h1"><?php echo $titrecontenu;?></h1>
<div class="txt"><?php echo $contenu;?> 
<?php $listbio=new Bio();
$listbio->annee="2015";
$listbio->de2=$idlien;
$afflistbio=$listbio->datesBio();
echo $afflistbio;?></div>
</div>
