
<?php 

class Bio{
public $annee;
public $de2;

public function datesBio(){
Global $pdo;

$anc=date("Y");
$query2 = $pdo->query("SELECT * FROM cms_hhh WHERE nomHHH > '$this->annee' AND nomHHH <= '$anc' ORDER BY id_HHH ASC");

$row = $query2->fetchall(PDO::FETCH_ASSOC);
foreach($row as $key => $row2){
	$lan=$row2['nomHHH'];
$ok="ok";
$query33 = $pdo->query("SELECT * FROM cms_m2,cms_lieux WHERE cms_m2.expo='$ok' AND cms_m2.a_debut='$lan' AND cms_m2.id_EEE=cms_lieux.id_EEE  ORDER BY cms_m2.date_debut_expo ASC");
$nbrL33=$query33->rowCount();
if($nbrL33>0){
echo "<p style=\"margin-left:40px\"><span style=\"font-size:16px\"><strong>$row2[nomHHH]</strong></span></p>";

echo "<ul>";
$row3 = $query33->fetchall(PDO::FETCH_ASSOC);
foreach($row3 as $key => $row33){
	echo"<li>".utf8_decode($row33['nom_M2'])." - ".utf8_decode($row33['nomEEE']).", ".utf8_decode($row33['villeEEE']).", ".utf8_decode($row33['paysEEE'])." </li>";
	
}
echo "</ul>";
}else{echo"";}	
}
			
}
}

//$Afficheliens=new liens();
//$Afficheliens->archivageEEE;
//$Afficheliens->affliens();
?>