<?php 

class Listssrub {
public $de2;
public $rub2;

public function afflistessrub(){
Global $pdo;
$ok="Y";
$Qlistssrub=$pdo->query("SELECT * FROM cms_m1, cms_m2,cms_m3 WHERE cms_m3.id_M2='$this->rub2' AND cms_m1.id_M1=cms_m2.id_M1 AND cms_m2.id_M2=cms_m3.id_M2 AND aff_M3='$ok' ORDER BY id_M3 ASC");
$nbOffres=$Qlistssrub->rowCount();
$resultListssrub = $Qlistssrub->fetchAll(PDO::FETCH_ASSOC);

 ?>
     <?php if($nbOffres>0){ 
	 foreach($resultListssrub as $key => $rowlistssrub ){?> <tr>
        <td class="lct" align="right" valign="top">&nbsp;</td>
        <td><a class="linkInt" href="<?php echo $rowlistssrub['var_M1'];?>_<?php echo $rowlistssrub['var_M2'];?>_<?php echo $rowlistssrub['var_M3'];?>.php"><?php echo utf8_decode($rowlistssrub['titre_C3']);?></a></td>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td>&nbsp;</td>
        <td class="txt2"><table><tr><td><?php $idphoto = $rowlistssrub['id_M3'];
		$ok="Y";
$Qlaphoto=$pdo->query("SELECT small FROM cms_photos WHERE id_M3='$idphoto' LIMIT 1");
$rowlaphoto= $Qlaphoto->fetch(PDO::FETCH_ASSOC);?><a class="linkInt2" href="<?php echo $rowlistssrub['var_M1'];?>_<?php echo $rowlistssrub['var_M2'];?>_<?php echo $rowlistssrub['var_M3'];?>.php"><img src="<?php echo $rowlaphoto['small'];?> width="100" height="100" class="photorub" alt="<?php echo utf8_decode($rowlistssrub['titre_C3']);?>"></a></td><td><?php $lesscom=utf8_decode($rowlistssrub['contenu3']); echo truncate($lesscom, 300, '...', true);?></td></tr></table></td>
        <td>&nbsp;</td>
      </tr>
	  <?php } }else{echo"";}?>
   
<?php }
}
//$Afficheliens=new liens();
//$Afficheliens->archivageEEE;
//$Afficheliens->affliens();
?>