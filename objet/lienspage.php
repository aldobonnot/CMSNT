
<?php 

class Liens {
public $de2;
public $rub2;
public $art2;

public function affliens(){

if($this->de2!=0 && $this->rub2!=0 && $this->art2!=0)
{Global $pdo;
$ok="Y";
$Q_liens=$pdo->query("SELECT * FROM cms_list_liens WHERE id_M3='$this->art2' AND aff_lien='$ok' ORDER BY nom_lien ASC");
$Liens = $Q_liens->fetchAll(PDO::FETCH_ASSOC);
foreach($Liens as $key =>$rowLiens){?>
<a class="links" href="<?php echo $rowLiens['url_lien'];?>" <?php $targ=$rowLiens['target_lien']; if($targ=="externe"){?> target="_blank"<?php }else{echo"";}?>> <?php echo $rowLiens['nom_lien'];?></a>&nbsp;&nbsp;<?php }

}
if($this->de2!=0 && $this->rub2!=0 && $this->art2==0)
{Global $pdo;
$ok="Y";
$Q_liens=$pdo->query("SELECT * FROM cms_list_liens WHERE id_M2='$this->rub2' AND aff_lien='$ok' ORDER BY nom_lien ASC");
$Liens = $Q_liens->fetchAll(PDO::FETCH_ASSOC);
foreach($Liens as $key =>$rowLiens){?><a class="links" href="<?php echo $rowLiens['url_lien'];?>" <?php $targ=$rowLiens['target_lien']; if($targ=="externe"){?> target="_blank"<?php }else{echo"";}?>> <?php echo $rowLiens['nom_lien'];?></a>&nbsp;&nbsp;<?php }

}
if($this->de2!=0 && $this->rub2==0 && $this->art2==0)
{Global $pdo;
$ok="Y";
$Q_liens=$pdo->query("SELECT * FROM cms_list_liens WHERE id_M1='$this->de2' AND aff_lien='$ok' ORDER BY nom_lien ASC");
$Liens = $Q_liens->fetchAll(PDO::FETCH_ASSOC);
foreach($Liens as $key =>$rowLiens){?><a class="links" href="<?php echo $rowLiens['url_lien'];?>" <?php $targ=$rowLiens['target_lien']; if($targ=="externe"){?> target="_blank"<?php }else{echo"";}?>> <?php echo $rowLiens['nom_lien'];?></a>&nbsp;&nbsp;<?php }

}
}
}

//$Afficheliens=new liens();
//$Afficheliens->archivageEEE;
//$Afficheliens->affliens();
?>