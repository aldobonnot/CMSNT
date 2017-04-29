<?php 
class Events {
	
public $idlieu;
public $idlien;
public $idevent;

public function listEvents(){
Global $pdo;
$ordreP=1; 
$ok="N";
$expo="ok";
$Qvenements = $pdo->query("SELECT * FROM cms_m2,cms_photos WHERE cms_m2.expo='$expo' AND cms_m2.id_M2=cms_photos.id_M2 AND cms_photos.order_P='$ordreP' AND cms_m2.aff_M2!='$ok' ORDER BY cms_m2.date_debut_expo DESC");
$nbrE=$Qvenements->rowCount();
		if($nbrE>0){
			$resultQvenements=$Qvenements->fetchall(PDO::FETCH_ASSOC);
			}
			else
			{
			$resultQvenements ="";	
			}
		
		return $resultQvenements;

}
public function unEvent(){
Global $pdo;
$ordreP=1; 
$ok="N";
$Qvenements=$pdo->query("SELECT * FROM cms_m2,cms_photos WHERE cms_m2.id_M2='$this->idlien' AND cms_m2.id_M2=cms_photos.id_M2 AND cms_photos.order_P='$ordreP' AND cms_m2.aff_M2!='$ok'");
$resultQvenements=$Qvenements->fetchall(PDO::FETCH_ASSOC);
return $resultQvenements;
}

public function lieuEvents(){
Global $pdo;
$Qlieux=$pdo->query("SELECT * FROM cms_lieux WHERE id_EEE='$this->idlieu'");
$rowQlieux=$Qlieux->fetch(PDO::FETCH_ASSOC);
return $rowQlieux;

}
public function listPhotosEvents(){
Global $pdo;
$ok="Y";
$Qphotoseve=$pdo->query("SELECT * FROM cms_photos WHERE cms_photos.id_M2='$this->idevent' AND cms_photos.aff_P='$ok'");
$nbrPh=$Qphotoseve->rowCount();
		if($nbrPh>0){
			$resultQphotoseve=$Qphotoseve->fetchall(PDO::FETCH_ASSOC);
			}
			else
			{
			$resultQphotoseve ="";	
			}
		
		return $resultQphotoseve;


}
}
