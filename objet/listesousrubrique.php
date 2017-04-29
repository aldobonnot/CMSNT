<?php 

class Listsrub {
public $de2;

public function afflisterub(){
Global $pdo;

$ok="Y";

$Qlistsrub=$pdo->query("SELECT * FROM cms_m1, cms_m2 WHERE cms_m2.id_M1='$this->de2' AND cms_m1.id_M1=cms_m2.id_M1 AND aff_M2='$ok' ORDER BY id_M2 ASC");
$nbrL=$Qlistsrub->rowCount();
$resultListsrub = $Qlistsrub->fetchAll(PDO::FETCH_ASSOC);
 if($nbrL>0){
foreach($resultListsrub as $key => $rowlistsrub ){?> <tr>
        <td class="lct">&nbsp;</td>
        <td><a class="linkInt" href="<?php echo $rowlistsrub['var_M1'];?>_<?php echo $rowlistsrub['var_M2'];?>.php"><?php echo  utf8_decode($rowlistsrub['titre_C2']);?></a></td>
        <td>&nbsp;</td>
      </tr>
	  <tr>
        <td>&nbsp;</td>
        <td class="txt2"><table><tr><td><?php $idphoto = $rowlistsrub['id_M2'];
		$ok="Y";
$Qlaphoto=$pdo->query("SELECT small FROM cms_photos WHERE id_M2='$idphoto' LIMIT 1");
$rowlaphoto= $Qlaphoto->fetch(PDO::FETCH_ASSOC);?><a class="linkInt2" href="<?php echo $rowlistsrub['var_M1'];?>_<?php echo $rowlistsrub['var_M2'];?>.php"><img src="<?php echo $rowlaphoto['small'];?>" class="photorub" alt="<?php echo $rowlistsrub['titre_C2'];?>"></a></td><td><?php $lesscom=utf8_decode($rowlistsrub['comment2']); echo truncate($lesscom, 199, '...', true);?></td></tr></table></td>
        <td>&nbsp;</td>
      </tr><?php }  }else{echo"";}
	  }
}
?>