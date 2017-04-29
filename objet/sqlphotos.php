<?php 

class Photos {

public $idphoto;
public $idphoto2;
public $idphoto3;


public function recupSql(){
Global $pdo;
if($this->idphoto != 0 && $this->idphoto2 != 0 && $this->idphoto3 != 0)
{
$oui="Y";
$Q_photo=$pdo->query("SELECT * FROM cms_photos WHERE cms_photos.id_M3='$this->idphoto3' AND aff_P='$oui' ORDER BY order_P ASC");
$nbrP=$Q_photo->rowCount();
		if($nbrP>0){
			$resultPhotos = $Q_photo->fetchAll(PDO::FETCH_ASSOC);}
			else
			{
			$resultPhotos ="";	
			}
		
		return $resultPhotos;
}
if($this->idphoto != 0 && $this->idphoto2 != 0 && $this->idphoto3 == 0)
{
$oui="Y";
$Q_photo=$pdo->query("SELECT * FROM cms_photos WHERE cms_photos.id_M2='$this->idphoto2' AND aff_P='$oui' ORDER BY order_P ASC");
$nbrP=$Q_photo->rowCount();
		if($nbrP>0){
			$resultPhotos = $Q_photo->fetchAll(PDO::FETCH_ASSOC);}
			else
			{
			$resultPhotos ="";	
			}
		
		return $resultPhotos;
}
if($this->idphoto != 0 && $this->idphoto2 == 0 && $this->idphoto3 == 0)
{
$oui="Y";
$Q_photo=$pdo->query("SELECT * FROM cms_photos WHERE cms_photos.id_M1='$this->idphoto' AND aff_P='$oui' ORDER BY order_P ASC");
$nbrP=$Q_photo->rowCount();
		if($nbrP>0){
			$resultPhotos = $Q_photo->fetchAll(PDO::FETCH_ASSOC);
			}
			else
			{
			$resultPhotos ="";	
			}
		
		return $resultPhotos;
}
}
}

//$Afficheliens=new liens();
//$Afficheliens->archivageEEE;
//$Afficheliens->affliens();
