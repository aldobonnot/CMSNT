<<<<<<< HEAD
<?php
require_once('int/cxCMS.php');
if( $_REQUEST["name"] ) {

   $name = $_REQUEST['name'];
   Global $pdo;
   $query3=$pdo->query("SELECT * FROM cms_photos WHERE id_photo='$name'");
$val3= $query3->fetch(PDO::FETCH_ASSOC);
  
   $lanote = $val3['note_p']+1;
   $v = $val3['id_photo'];
if($pdo->exec("UPDATE cms_photos SET note_p='$lanote' WHERE id_photo='$v'")=== FALSE){echo"Erreur";
 }	else {echo "$lanote<img src=\"img/love.png\" title=\"Thank you\">";}
}


=======
<?php
require_once('int/cxCMS.php');
if( $_REQUEST["name"] ) {

   $name = $_REQUEST['name'];
   Global $pdo;
   $query3=$pdo->query("SELECT * FROM cms_photos WHERE id_photo='$name'");
$val3= $query3->fetch(PDO::FETCH_ASSOC);
  
   $lanote = $val3['note_p']+1;
   $v = $val3['id_photo'];
if($pdo->exec("UPDATE cms_photos SET note_p='$lanote' WHERE id_photo='$v'")=== FALSE){echo"Erreur";
 }	else {echo "$lanote<img src=\"img/love.png\" title=\"Thank you\">";}
}


>>>>>>> 773fb8f3a8c9e8fc8a7c75b884fcf04acc004602
?>