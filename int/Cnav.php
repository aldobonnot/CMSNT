<?php
require_once('objet/nav.class.php');?>
<nav id="navigation">	
<div id="menuh">
<?php 
$lesrub=new Navigation;
$resultat=$lesrub->cmRub($de);
foreach ($resultat as $key => $value) {
	//1er niveau
	echo'<ul><li>';
	echo m1($de,$value['ordre_M1'],$value['var_M1'],utf8_decode($value['nom_M1']));
			//2eme niveau
			$lid=$value['id_M1'];
			
			$resultatL=$lesrub->cmLien(intval($lid));
			if($resultatL!=''){
			echo'<ul>';
			if($lid == 4){$ms="contact";if($ms==$de && $rub===""){$style="color: #ff0000;";}else{$style="";} echo'<li><a class="parent" style="'.$style.'" href="contact.php">Laissez moi un message</a></li>'; }else{echo"";}
				foreach($resultatL as $key => $valueS) {
				echo '<li>'. m2($rub,$value['var_M1'],$valueS['var_M2'],utf8_decode($valueS['nom_M2']));
				//3eme niveau
				echo '</li>';}
				
	if($lid == 4){echo'<li><a class="parent" href="https://www.facebook.com/soma.kusaka" target="_blank">Facebook</a></li>
	 <li><div class="fb-like tksom" data-href="'. URL .''. $lienfacebook .'" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div></li>';}else{echo"";}
			echo'</ul>';
	}else{echo"";}
	
		if($lid == 3){ echo'<ul><li><a class="parent" href="expositions.php">A venir, pr&eacute;sentes, pass&eacute;es</a></li></ul>';}else{echo"";}
	echo'</li></ul>';
}?>
</div></nav>
<script >var maxBreakpoint = 768; 
    var targetID = 'navigation';     
    var n = document.getElementById(targetID);
        n.classList.add('is-closed');
       function navi() {
            if (window.matchMedia("(max-width:" + maxBreakpoint + "px)").matches && document.getElementById("toggle-button") == undefined) {
        n.insertAdjacentHTML('afterBegin', '<button id="toggle-button" aria-label="open/close navigation"></button>');
        t = document.getElementById("toggle-button");
        t.onclick = function () {
          n.classList.toggle('is-closed');  } }
            var minBreakpoint = maxBreakpoint + 1;
      if (window.matchMedia("(min-width: " + minBreakpoint + "px)").matches && document.getElementById("toggle-button")) {
        document.getElementById("toggle-button").outerHTML = ""; }}
    navi();
    window.addEventListener('resize', navi);</script> 
<?php
//$lidA=$valueS['id_M2'];
//$resultatB = $lesrub->cmSlien(intval($lidA));
//if($resultatB!=''){
//echo'<ul>';
//foreach($resultatB as $key => $valueB) {
//echo '<li>'. m3($value['var_M1'],$valueS['var_M2'],$valueB['var_M3'],$valueB['nom_M3']);
//echo '</li>';}
//echo'</ul>';
//}else{echo"";}?>