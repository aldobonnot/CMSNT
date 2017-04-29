<?php if(!isset($_GET['de'])) $de=""; else $de=$_GET['de'];
if(!isset($_GET['rub'])) $rub=""; else $rub=$_GET['rub'];
if(!isset($_GET['art'])) $art=""; else $art=$_GET['art'];
if (!isset($_GET['env'])) $env=""; else $env=$_GET['env'];
if (!isset($_GET['dcnt'])) $deconect=""; else $deconect=$_GET['dcnt'];
if($de==""){$de2="accueil";}else{$de2=$de;}
if($rub==""){$rub2="";}else{$rub2=$rub;}
if($art==""){$art2="";}else{$art2=$art;}

//-------------------------------------------
if($de2!="" && $rub2!="" && $art2!="")
{

Global $pdo;
$query2 = $pdo->query("SELECT * FROM cms_m1, cms_m2, cms_m3, cms_zones WHERE cms_m3.var_M3='$art2' AND cms_m1.id_M1= cms_m2.id_M1 AND cms_m2.id_M2= cms_m3.id_M2 AND cms_m3.id_zone3=cms_zones.id_zone");
$val2 = $query2->fetch(PDO::FETCH_ASSOC);
$titrepage1=utf8_decode(stripslashes($val2['var_M1']));
$titrepage2=utf8_decode(stripslashes($val2['var_M2']));
$titrepage3=utf8_decode(stripslashes($val2['titre_P3']));
$titrepage=utf8_decode(ucfirst($titrepage1))." ".$titrepage2." ".$titrepage3;
$motsclefs=utf8_decode($val2['motsclefs3']);
$commentaires=utf8_decode(stripslashes($val2['comment3']));
$zone=$val2['url_Z'];
$sql=$val2['url_sql'];
$css=$val2['css_Z'];
$titrecontenu=utf8_decode(stripslashes($val2['titre_C3']));
$contenu=$val2['contenu3'];
$objetdelazone=$val2['id_zone'];
$mgtdivb=$val2['marg_top3'];
$fancy=$val2['fancybox'];
$idlien=$val2['id_M1'];
$idlien2=$val2['id_M2'];
$idlien3=$val2['id_M3'];
$back="okback";
$lienform="$de2"."_"."$rub2"."_"."$art2"."_ok.php";
$lienfacebook="$de2"."_"."$rub2"."_"."$art2".".php";

$ok="Y";
Global $pdo;
$query3 = $pdo->query("SELECT * FROM cms_list_liens WHERE id_M3='$idlien3' AND aff_lien='$ok'");
$nbliens=$query3->rowCount();
if($nbliens > 0){$affLiens="ok";
$idlien=$val2['id_M1'];
$idlien2=$val2['id_M2'];
$idlien3=$val2['id_M3'];
}else{$affLiens="Nook";}}
//-------------------------------------------
if($de2!="" && $rub2!="" && $art2=="")
{
Global $pdo;
$query2 = $pdo->query("SELECT * FROM cms_m1, cms_m2, cms_zones WHERE cms_m2.var_M2='$rub2' AND cms_m1.id_M1= cms_m2.id_M1 AND cms_m2.id_zone2=cms_zones.id_zone");
$val2 = $query2->fetch(PDO::FETCH_ASSOC);
$titrepage1=utf8_decode(stripslashes($val2['var_M1']));
$titrepage2=utf8_decode(stripslashes($val2['titre_P2']));
$titrepage=utf8_decode(ucfirst($titrepage1))." ".$titrepage2;
$motsclefs=utf8_decode($val2['motsclefs2']);
$commentaires=utf8_decode(stripslashes($val2['comment2']));
$zone=$val2['url_Z'];
$sql=$val2['url_sql'];
$css=$val2['css_Z'];
$titrecontenu=utf8_decode(stripslashes($val2['titre_C2']));
$contenu=$val2['contenu2'];
$objetdelazone=$val2['id_zone'];
$mgtdivb=$val2['marg_top2'];
$fancy=$val2['fancybox'];
$idlien=$val2['id_M1'];
$idlien2=$val2['id_M2'];
$idlien3=0;
$back="okback";
$lienform="$de2"."_"."$rub2"."_ok.php";
$offback="$de2"."_"."$rub2"."_okZ.php";
$lienfacebook="$de2"."_"."$rub2".".php";
$ok="Y";
Global $pdo;
$query3 = $pdo->query("SELECT * FROM cms_list_liens WHERE id_M2='$idlien2' AND aff_lien='$ok'");
$nbliens=$query3->rowCount();
if($nbliens > 0){$affLiens="ok";
$idlien=$val2['id_M1'];
$idlien2=$val2['id_M2'];
$idlien3=0;
}else{$affLiens="Nook";}}
//-------------------------------------------
if($de2!="" && $rub2=="" && $art2=="")
{
Global $pdo;
$query2 = $pdo->query("SELECT * FROM cms_m1, cms_zones WHERE cms_m1.var_M1='$de2' AND cms_m1.id_zone1=cms_zones.id_zone");
$val2 = $query2->fetch(PDO::FETCH_ASSOC);
$varM1=$val2['var_M1'];
$titrepage=utf8_decode(stripslashes($val2['titre_P1']));
$motsclefs=utf8_decode($val2['motsclefs1']);
$commentaires=utf8_decode(stripslashes($val2['comment1']));
$zone=$val2['url_Z'];
$sql=$val2['url_sql'];
$css=$val2['css_Z'];
$titrecontenu=utf8_decode(stripslashes($val2['titre_C1']));
$contenu=$val2['contenu1'];
$objetdelazone=$val2['id_zone'];
$mgtdivb=$val2['marg_top1'];
$fancy=$val2['fancybox'];
$idlien=$val2['id_M1'];
$idlien2=0;
$idlien3=0;
$back="noback";
$lienform="$de2"."_ok.php";
$lienfacebook="$de2".".php";
$ok="Y";
Global $pdo;
$query3 = $pdo->query("SELECT * FROM cms_list_liens WHERE id_M1='$idlien' AND aff_lien='$ok'");
$nbliens=$query3->rowCount();
if($nbliens > 0){$affLiens="ok";
$idlien=$val2['id_M1'];
$idlien2=0;
$idlien3=0;
}else{$affLiens="Nook";}}?>