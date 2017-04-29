<?php
//affichage menu principal
function m1($de,$ordre,$var,$nom){
	switch($ordre){
		case 1: 
		$ncss="menuA"; 
		break; 
		case 2: 
		$ncss="menu1"; 
		break; 
		case 3: 
		$ncss="menu2"; 
		break; 
		case 4: 
		$ncss="menu3"; 
		break; }
		if($var==$de){$style="color: #ff0000;"; }else{$style="";}
	echo'<a class="'.$ncss.' top_parent" style="'.$style.'" href="'.$var.'.php">'.stripslashes($nom).'</a>';
}
//affichage sous menu 
function m2($rub,$var,$var2,$nom2){
	if($var2==$rub){$style2="color: #ff0000;"; }else{$style2="";}
	echo'<a class="parent" style="'.$style2.'" href="'.$var.'_'.$var2.'.php">'.$nom2.'</a>';
}

function m3($var,$var2,$var3,$nom3){
	echo'<a href="'.$var.'_'.$var2.'_'.$var3.'.php">'.$nom3.'</a>';
}
?>