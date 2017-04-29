<?php 
class Navigation
{
	private $de;
	private $idRub;
	private $idSrub;
	
	public function setDe($de)
	{
		if(is_string($de) || $de == NULL)
		{
			$this->de = $de;
		} else {
			trigger_error('string required : ' . $de . 'de type : ' . gettype($de));
		}
	}
	
	public function getDe()
	{
		return $this->de;
	}
	
	public function setIdRub($idRub)
	{
		if(is_int($idRub) || $idRub == NULL)
		{
			$this->idRub = $idRub;
		} else {
			trigger_error('int required : ' . $idRub . 'de type : ' . gettype($idRub));
		}
	}
	
	public function getIdRub()
	{
		return $this->idRub;
	}
	
	public function setIdSrub($idSrub)
	{
		if(is_int($idSrub) || $idSrub == NULL)
		{
			$this->idSrub = $idSrub;
		} else {
			trigger_error('int required : ' . $idSrub . 'de type : ' . gettype($idSrub));
		}
	}
	
	public function getIdSrub()
	{
		return $this->idSrub;
	}
	
	public function cmRub($de)
	{
		if($de == ""){
			$oui="Y"; 			
			$un=1;
			Global $pdo;
			$sth = $pdo->query("SELECT * FROM cms_m1 WHERE aff_M1='$oui' AND id_M1 != '$un' ORDER BY ordre_M1 ASC");
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			return $result;	}
			elseif($de == "accueil")
			{
			$oui="Y"; 			
			$un=1;
			Global $pdo;
			$sth = $pdo->query("SELECT * FROM cms_m1 WHERE aff_M1='$oui' AND id_M1 != '$un' ORDER BY ordre_M1 ASC");
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			return $result;	
			}
			else{
			$aff="Y";
			Global $pdo;
			$sth = $pdo->query("SELECT * FROM cms_m1 WHERE aff_M1 ='$aff'");
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			return $result;	
			}
		
	}

	public function cmLien($idRub)
	{
		$aff="Y";
		Global $pdo;
		$resultatL = $pdo->query("SELECT * FROM cms_m2 WHERE cms_m2.id_M1 ='$idRub' AND aff_M2 = '$aff'");
		$nbrL=$resultatL->rowCount();
		if($nbrL>0){
			$resultL = $resultatL->fetchAll(PDO::FETCH_ASSOC);}
			else
			{
			$resultL ="";	
			}
		
		return $resultL;
	
	}
	
	public function cmSlien($idSrub)
	{
		$aff="Y";
		Global $pdo;
		$resultatLA = $pdo->query("SELECT * FROM cms_m3 WHERE cms_m3.id_M2 ='$idSrub' AND aff_M3 = '$aff'");
		$nbrLA=$resultatLA->rowCount();
		if($nbrLA>0){
			$resultLA = $resultatLA->fetchAll(PDO::FETCH_ASSOC);}
			else
			{
			$resultLA ="";	
			}
		
		return $resultLA;
	
	}
	
}