<div class="global">
<h1 class="h1"><?php echo strtoupper(NDD);?> : Plan du site </h1>

<div class="txt"><?php echo $contenu;
if (isset($_SESSION['droit']) && $_SESSION['droit'] === "admiNTKS"){ $accordADMIN="okadmin"; }else{$accordADMIN = "nogood";}
if($deconect=="okZ"){session_unset ();
$accordADMIN = "nogood";
//header("Location:".URL."contact_plan-du-site.php");
}?> 
<?php if(isset($accordADMIN) && $accordADMIN === "okadmin"){?><a href="<?php echo $offback;?>" class="cnt" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image1','','img/deconectoff.png',1)" title="Se deconnecter"><img src="img/deconecton.png" name="Image1" width="35" height="35" border="0"></a><?php }else{echo"";}?>
   <?php if($accordADMIN == "okadmin"){?> <table class="tabcent">
      <tr>
        <td class="tdG">
		<a href="backCMS/gestionMenu.php" class="modif" target="_blank">Gestion menu</a> 
		| <a href="backCMS/gestionContactCV.php" class="modif" target="_blank">Gestion CV/Contact</a>
		</td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
      </tr>
	  </table><?php }else{ echo""; }?>
	  
<?php 
Global $pdo;
$okA="Y";
$QpmA=$pdo->query("SELECT * FROM cms_m1,cms_zones WHERE aff_M1='$okA' AND cms_m1.id_zone1=cms_zones.id_zone");
$resultQpmA= $QpmA->fetchall(PDO::FETCH_ASSOC);
$nbt=$QpmA->rowCount();
		
if($nbt>0){
foreach($resultQpmA as $key =>$rowQpmA ){
$idmb=$rowQpmA['id_M1'];
$non="N";
$QpmB2=$pdo->query("SELECT * FROM cms_m2 WHERE id_M1='$idmb' AND aff_M2!='$non'");
$nbst2=$QpmB2->rowCount();?>
    <table class="tabcentI">
	<tr>
	<td class="une"></td>
    <td class="une"></td>
	<td class="une"></td>
	</tr>
      <tr> 
        <td colspan="3"><a href="<?php echo $rowQpmA['var_M1'];?>.php" class="titreP"><?php echo utf8_decode($rowQpmA['nom_M1']);?></a>
		</td>
      </tr>
      <tr> 
        <td colspan="3" class="cmt"><?php echo utf8_decode($rowQpmA['comment1']);?>
		</td>
      </tr>
      <?php if(isset($accordADMIN) && $accordADMIN=="okadmin"){?><tr> 
        <td colspan="3"> 
          <table class="tabquatrevingtdixI" style="z-index:10;">
            <tr> 
              <td class="tdDroitBleu"><a href="backCMS/modifref.php?idM1=<?php echo $idmb;?>" class="modif" target="_blank">Modif r&eacute;f&eacute;rencement</a> 
                | <a href="backCMS/modifContPage.php?idM1=<?php echo $idmb;?>" class="modif" target="_blank">Modif contenu page</a> 
				| <a href="backCMS/AjtModLinksPage.php?idM1=<?php echo $idmb;?>" class="modif" target="_blank">Ajout/modif liens page</a> 
				<?php switch($idmb){case 1:echo"";break;
				default:
				if($nbst2>0){?>
				| <a href="backCMS/AjtSousRub.php?idM1=<?php echo $idmb;?>" class="modif" target="_blank">Ajout/modif <?php if($idmb==3){?>Exposition: <?php }else{?>sous 
                rubrique:<?php } echo $nbst2;?></a><?php }else{?>
				| <a href="backCMS/AjtSousRub.php?idM1=<?php echo $idmb;?>" class="modif" target="_blank">Ajout <?php if($idmb==3){?>/modif Expositon<?php }else{?>sous 
                rubrique</a><?php } }break;}?></td>
            </tr>
          </table>
        </td>
      </tr><?php }else{ echo""; }?>
      <tr> 
        <td colspan="3">&nbsp;
		</td>
      </tr>
      <?php 

$idmb=$rowQpmA['id_M1'];
$non="N";
$QpmB=$pdo->query("SELECT * FROM cms_m2,cms_zones WHERE id_M1='$idmb' AND cms_m2.id_zone2=cms_zones.id_zone AND aff_M2!='$non'");
$resultQpmB = $QpmB->fetchall(PDO::FETCH_ASSOC);
$nbst=$QpmB->rowCount();

if($nbst>0){
foreach($resultQpmB as $key => $rowQpmB){
$okC="Y"; 
$idmc=$rowQpmB['id_M2'];
$QpmC2=$pdo->query("SELECT * FROM cms_m3 WHERE id_M2='$idmc' AND aff_M3='$okC'");
$nbsst2=$QpmC2->rowCount();
?>
      <tr> 
        <td class="tcell">&nbsp;</td>
        <td colspan="2"><a href="<?php echo $rowQpmA['var_M1'];?>_<?php echo $rowQpmB['var_M2'];?>.php" class="titreP2"><?php echo utf8_decode($rowQpmB['nom_M2']);?></a></td>
      </tr>
      <tr> 
        <td class="tcell" >&nbsp;</td>
        <td colspan="2"  class="cmt"><?php echo utf8_decode($rowQpmB['comment2']);?></td>
      </tr>
      <?php if(isset($accordADMIN) && $accordADMIN=="okadmin"){?><tr> 
        <td class="tcell" >&nbsp;</td>
        <td colspan="2"> 
          <table class="tabquatrevingtdixI">
            <tr> 
              <td class="tdDroitVert">
			  <a href="backCMS/modifref.php?idM1=<?php echo $idmb;?>&idM2=<?php echo $idmc;?>" class="modif" target="_blank">Modif r&eacute;f&eacute;rencement</a> 
                | <a href="backCMS/modifContPage.php?idM1=<?php echo $idmb;?>&idM2=<?php echo $idmc;?>" class="modif" target="_blank">Modif contenu page</a> 
				| <a href="backCMS/AjtModLinksPage.php?idM1=<?php echo $idmb;?>&idM2=<?php echo $idmc;?>" class="modif" target="_blank">Ajout/modif liens page</a> 
				<?php if($idmc==23){ if($nbsst2>0 ){?>
				| <a href="backCMS/AjtSousRub.php?idM1=<?php echo $idmb;?>&idM2=<?php echo $idmc;?>" class="modif" target="_blank">Ajout/modif sous rubrique: <?php echo $nbsst2;?></a><?php }else{?>
				| <a href="backCMS/AjtSousRub.php?idM1=<?php echo $idmb;?>&idM2=<?php echo $idmc;?>" class="modif" target="_blank">Ajout sous rubrique</a><?php }}else{echo"";}?><?php $fancy=$rowQpmB['fancybox']; if($fancy=="Y"){?> 
				| <a href="backCMS/Listphotos.php?idM1=<?php echo $idmb;?>&idM2=<?php echo $idmc;?>" class="modif" target="_blank">Ajout/modif photos </a><?php }else{echo"";}?>
				<?php if($idmc==29){ ?>
				| <a href="backCMS/Listlieux.php" class="modif" target="_blank">Ajout/modif Lieux </a><?php }else{echo"";}?></td>
            </tr>
          </table>
        </td>
      </tr><?php }else{ echo""; }?>
      <tr> 
        <td class="tcell">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <?php 	 
$okC="Y"; 
$idmc=$rowQpmB['id_M2'];
$QpmC=$pdo->query("SELECT * FROM cms_m3,cms_zones WHERE id_M2='$idmc' AND cms_m3.id_zone3=cms_zones.id_zone AND aff_M3='$okC'");
$resultQpmC = $QpmC->fetchall(PDO::FETCH_ASSOC);
$nbsst=$QpmC->rowCount();

if($nbsst>0){
foreach($resultQpmC as $key => $rowQpmC){?>
      <tr> 
        <td class="tcell">&nbsp;</td>
        <td class="tcell">&nbsp;</td>
        <td><a href="<?php echo $rowQpmA['var_M1'];?>_<?php echo $rowQpmB['var_M2'];?>_<?php echo $rowQpmC['var_M3'];?>.php" class="titreP3"><?php echo utf8_decode($rowQpmC['nom_M3']);?></a></td>
      </tr>
      <tr> 
        <td class="tcell">&nbsp;</td>
        <td class="tcell">&nbsp;</td>
        <td class="cmt"><?php echo utf8_decode($rowQpmC['comment3']);?></td>
      </tr>
      <?php if(isset($accordADMIN) && $accordADMIN=="okadmin"){?><tr> 
        <td class="tcell" >&nbsp;</td>
        <td class="tcell" >&nbsp;</td>
        <td> 
          <table class="tabquatrevingtdixI">
            <tr> 
              <td class="tdDroitMarron" ><a href="backCMS/modifref.php?idM1=<?php echo $idmb;?>&idM2=<?php echo $idmc;?>&idM3=<?php echo $rowQpmC['id_M3'];?>" class="modif" target="_blank">Modif r&eacute;f&eacute;rencement</a> 
                | <a href="backCMS/modifContPage.php?idM1=<?php echo $idmb;?>&idM2=<?php echo $idmc;?>&idM3=<?php echo $rowQpmC['id_M3'];?>" class="modif" target="_blank">Modif contenu page</a> | <a href="backCMS/AjtModLinksPage.php?idM1=<?php echo $idmb;?>&idM2=<?php echo $idmc;?>&idM3=<?php echo $rowQpmC['id_M3'];?>" class="modif" target="_blank">Ajout/modif liens page</a>
				<?php $fancy=$rowQpmC['fancybox']; if($fancy=="Y"){?> | <a href="backCMS/Listphotos.php?idM1=<?php echo $idmb;?>&idM2=<?php echo $idmc;?>&idM3=<?php echo $rowQpmC['id_M3'];?>" class="modif" target="_blank">Ajout/modif photos </a><?php }else{echo"";}?></td>
            </tr>
          </table>
        </td>
      </tr> <?php }else{ echo""; }?>
      <tr> 
        <td class="tcell" >&nbsp;</td>
        <td class="tcell" >&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <?php }}else{echo"";}?>
	  
      <?php }}else{echo"";} ?>
	  
    </table>
	<?php }}else{echo"";}?>
</div>
</div>