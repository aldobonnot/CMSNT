<?php 
class Modifzone {
	
	public $mzone;
	public $idezone;

public function selectmodif(){
Global $pdo;
$queryZ = $pdo->query("SELECT * FROM cms_zones WHERE mode_zone != '$this->mzone'  ORDER BY nom_Z ASC");
$row1 = $queryZ->fetchall(PDO::FETCH_ASSOC);
foreach ($row1 as $key => $row2){
	$lidz=$row2['id_zone'];
		if($lidz==$this->idezone){$select="SELECTED";} else {$select="";}
			echo '<option value="'.$row2['id_zone'].'" '.$select.' >'.$row2['nom_Z'].'</option>';
								}		
}

}
