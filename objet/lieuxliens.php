<?php 
class Lieuxliens {
	

public function listLieulien(){
Global $pdo;

$ok="non";
$Qlieu=$pdo->query("SELECT * FROM cms_lieux WHERE archivageEEE !='$ok' ORDER BY id_EEE DESC");
$nbrLx=$Qlieu->rowCount();
		if($nbrLx>0){
			$resultQlieu=$Qlieu->fetchall(PDO::FETCH_ASSOC);
			}
			else
			{
			$resultQlieu ="";	
			}
		
		return $resultQlieu;

}

}

