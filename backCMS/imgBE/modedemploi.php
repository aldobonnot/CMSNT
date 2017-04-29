<?php session_start();
include('../int/cxCMS.php');
if (!isset($_SESSION['droit'])||($_SESSION['droit'] != "admiNTKS"))
{ echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"".URL."\";";
echo"</script>"; }
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Mode d'emploi</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body{font-family:arial;padding:0px;margin:0px}
.glob{margin:0px 30px 40px 30px;border-bottom:1px solid #9933CC; }
.one{background-color:#000;padding:10px 10px 10px 10px;color:#fff}
.gestM{padding:10px 10px 10px 10px;margin-bottom:3px;background-color:#C59696;color:#000}
.item1{padding:10px 10px 10px 10px;margin-bottom:3px;background-color:#C6E3E3;color:#000}
.item2{padding:10px 10px 10px 10px;margin-bottom:3px;background-color:#D1E29C;color:#000}
.item3{padding:10px 10px 10px 10px;background-color:#DECD92;color:#000}
.cmt{font-size:14px;font-weight:400;}></style>
</head>

<body>
<div class="one"><h1>Gestion du site TKSOM </h1></div>
<div class="glob"><h2> Pour se connecter au back office </h2>
<h2>1.Aller sur la page Mentions l&eacute;gales </h2>
<h2>2.Cliquer sur le nom du responsable de publication </h2>
<h2>3.Rentrez votre log , votre mot de passe et le code anti-spam <br>
  (Le but: Eviter les programmes qui forcent les mots de passe)</h2> 
  
<h2>4.On arrive sur le plan du site </h2>Le plan du site &agrave; maintenant des couleurs
<div class="gestM"><h2>5.En bordeaux : Gestion des items principaux du menu, les contacts sur le site et les demandes d'achats</h2></div>
<div class="item1"><h2>6.En bleu : Les rubriques principales
</h2></div>
<div class="item2"><h2>7.En vert : Les sous rubriques</h2></div>
<div class="item3"><h2>8.En marron : Les sous sous rubriques</h2></div>
<h2>En fonction des pages il y a plus ou moins de fonctions qui s'affichent.<br><span class="cmt">C'est 
  normal le programme fait bien son boulot. </span></h2>
<h2>&nbsp;</h2>
<h4>1. Modif r&eacute;f&eacute;rencement :<span class="cmt"> permet de modifier les principaux &eacute;l&eacute;ments 
  n&eacute;cessaires pour am&eacute;liorer le r&eacute;f&eacute;rencement des pages 
  sur les moteurs de recherches </span></h4>
<h4>2. Modif contenu page :<span class="cmt"> permet de modifier le texte du contenu de la page 
  et le titre de ce texte sur la page</span></h4>
<h4> 3. Ajout/modif liens page : <span class="cmt">permet d'ajouter des liens vers d'autres sites 
  dans la page ou vers d'autres pages du site qui ne sont pas dans le menu principale</span></h4>
<h4>4. Ajout/modif sous rubrique:5:<span class="cmt"> permet d'ajouter une sous rubrique dans la 
  rubrique, le chiffre indique le nombre de sous rubriques existantes (v&eacute;rification 
  que tout est ok ) </span></h4>
<h4>5. Ajout/modif photos :<span class="cmt"> Dans la rubrique &#339;uvres cela permet d'ajouter 
  ou de modifier une &#339;uvre, dans les autres cela permet d'ajouter ou de modifier tout simplement 
  une photo </span></h4>
<h4>6. Ajout/modif Lieux :<span class="cmt"> permet d'ajouter ou de modifier un lieu d'exposition 
  ou autre liens vers un autre site</span></h4>
<h4> 7. Ajout/modif Exposition:<span class="cmt"> permet d'ajouter une exposition ou de modifier 
  les crit&egrave;res d'affichage des expositions</span></h4> </div>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td colspan="2"><font size="5">Revu en d&eacute;tail de chaque fonction <br>
      et descriptif de chaque liste de donn&eacute;es &agrave; modifier <br>
      et formulaire d'insertion de nouvelles donn&eacute;es.</font></td>
  </tr>
  <tr> 
    <td width="57%" bgcolor="#9933CC">&nbsp;</td>
    <td width="43%" bgcolor="#9933CC">&nbsp;</td>
  </tr>
  <tr> 
    <td><b><font color="#CC0000" size="4">1.Modif r&eacute;f&eacute;rencement 
      </font></b></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td height="19"><img src="modifref.png" width="458" height="645"></td>
    <td><b>Titre de la page pour Google</b> <br>
      ce champ est le titre de la page qui s'afichera sur les moteurs de recherche 
      <p><b>Commentaire de la page pour Google </b><br>
        Ce champ est le champ du commentaire de la page sur les moteurs de recherche, 
        sous les titres des rubriques du plan du site et des commentaires <br>
        sur les pages de listes de sous rubriques dans le site.<br>
        <span style="color:#ff0000;">Maximum 250 caract&egrave;res:</span> un espace est consid&eacute;r&eacute; comme 
        un caract&egrave;re</p>
      <p><b>Les mots clefs</b> <br>
        Champ pour les mots clefs de la page pour faciliter le r&eacute;f&eacute;rencement.<br>
        Chaque mot doit &ecirc;tre s&eacute;par&eacute; par une virgule, on peut 
        faire des groupes de mots, exemple : bateau bleu,supports sp&eacute;ciaux,etc..</p>
      <p><b>Nom dans le menu</b> <br>
        Champ indiquant le nom de la rubrique dans le menu</p>
      <p><b>Titre de la page sur le site</b> <br>
        Champ pour le titre qui appara&icirc;t sur la page du site<br>
        Exemple : sur la page d'accueil le titre est :<br>
        Dessiner la vie sur les feuillets des jours qui passent.</p>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#9933CC">&nbsp;</td>
    <td bgcolor="#9933CC">&nbsp;</td>
  </tr>
  <tr> 
    <td><font color="#CC0000" size="4"><b>2.Modif contenu page </b></font></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td><img src="modifpage.png" width="456" height="786"></td>
    <td><b>Nom dans le menu</b> <br>
      Champ du nom de la page dans le menu 
      <p><b>Titre de la page dans la page sur le site</b> <br>
        Champ du titre de la page sur le site</p>
      <p><b>Texte de la page</b> <br>
        Champ pour afficher du texte sur la page du site<br>
      </p>
    </td>
  </tr>
  <tr bgcolor="#9933CC"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> <font color="#CC0000" size="4"><b>3.Ajout/modif liens page</b></font></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <p>Liste des liens sur la page <br>
        Permet de modifier les liens existant. </p>
      <p><b>Titre du lien :</b> mot ou phrase s'affichant sur la page et o&ugrave; 
        on clic</p>
      <p><b>Url du lien: </b>http://www&#8230;<br>
        <br>
        <b>Target :</b> <br>
        <i>Externe</i> : la page s'affichera dans une nouvelle fen&ecirc;tre et 
        laissera ton site ouvert, &agrave; utiliser pour des liens vers d'autres 
        sites.<br>
        <i>Interne </i>: la page s'affichera dans la m&ecirc;me fen&ecirc;tre. 
        A utiliser vers des pages de ton site</p>
      <p><b>Affichage du lien</b> : Oui ou Non</p>
      <p><img src="modifliens.png" width="810" height="525"><br>
        <b><font color="#999966" size="5">Ajouter un lien</font></b><br>
        Ouvre un formulaire pour enregistrer un nouveau lien sur la page choisie 
      </p>
      <p><img src="ajoutlien.png" width="546" height="483"></p>
    </td>
  </tr>
  <tr bgcolor="#9933CC"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> <font color="#CC0000" size="4"><b>4.Ajout/modif sous rubrique</b></font></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td><img src="listesousrubrique.png" width="646" height="580"> </td>
    <td><b>Liste des sous rubriques choisies. </b> 
      <p><b>Nom de la sous rubrique</b> : n'est pas modifiable, pour le faire 
        il faut aller sur modifier le r&eacute;f&eacute;rencement de la page en 
        question et modifier dans la case nom dans le menu</p>
      <p><b>Masque d'affichage</b> : menu d&eacute;roulant te permettant de choisir 
        la fa&ccedil;on dont tu veux afficher le contenu.<br>
        Dans le cas pr&eacute;sent pour toutes les cat&eacute;gories c'est un 
        diaporama pour afficher les photos de tes &#339;uvres. Sauf pour supports 
        sp&eacute;ciaux ou il y a trois cat&eacute;gories donc l&agrave; on a 
        choisi Texte+liste de sous sous rubrique puisque nous sommes d&eacute;j&agrave; 
        dans un sous rubrique.</p>
      <p><b>Marge :</b> pour ton site tu peux laisser &agrave; z&eacute;ro cela 
        ne sert &agrave; rien.</p>
      <p><b>Affichage</b> :<br>
        <i>Menu et plan</i> : Le nom de cette sous rubrique s'affichera dans le 
        Menu et dans le plan du site plan </p>
      <p><i>Nul part</i> : le nom de la rubrique ne s'affichera pas sur le site, 
        soit parce que tu ne veux pas encore l'afficher, soit parce que tu veux 
        en faire une page cach&eacute;e ou une landing page.</p>
      <p><i>Que dans le plan</i> : le nom de la page ne s'affichera que dans le 
        plan et pas dans le menu du site .<br>
        Sur ton site par exemple les pages: Mentions l&eacute;gales, Plan du site, 
        D&eacute;sinscription NewsLetter, ne s'affichent pas dans le menu du site 
        mais s'affichent bien dans la rubrique Contact dans le plan du site<br>
        Ce n'est qu'une question de pr&eacute;sentation, en langage professionnel 
        du web on appelle cela de l'ergonomie.</p>
    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td><b><font color="#999933" size="5">Ajouter une sous rubrique</font></b> 
      <br>
      Si tu clic dessus cela ouvre un formulaire, pour le moment tu n'en as pas 
      besoin.<br>
      Il vaux mieux que l'on voit cela ensemble.</td>
  </tr>
  <tr bgcolor="#9933CC"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> <font color="#CC0000" size="4"><b>5.Ajout/modif oeuvres/photos</b></font> 
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2"> 
      <p>Liste des oeuvres/photos sur la page en question l&agrave; par exemple 
        c'est la page peintures<br>
      </p>
      <p> Si tu veux modifier une photo, le titre de l'oeuvre, le prix, la dimension, 
        tu peux le faire sur toutes les photos pr&eacute;sentent sur la liste,<br>
        une fois finit tes modifications, n'oublies pas de cliquer sur le bouton 
        <font color="#FF0066"> <b>Enregistrer les modifications</b></font>, sinon 
        rien ne sera modifi&eacute;.</p>
      <p><b>Explicatif des cases</b></p>
      <p><b>Small </b>: Liens sur flickR de la petite image, taille : <font color="#0099FF">Carr&eacute; 
        150</font></p>
      <p><b>Moyen</b> : Liens sur flickR de la moyenne image, taille : <font color="#0099FF">Petite 
        320</font>, <br>
        c'est surtout utile dans la rubrique Exposition pour l'affiche de l'exposition.</p>
      <p><b>Big</b> : Liens sur flickR de la grande image, taille :<font color="#0099FF"> 
        Moyen 800 </font>ou plus c'est &agrave; toi de voir.</p>
      <p><b>Prix </b>: Si tu mets la lettre D le programme mettra, &laquo; Prix 
        &agrave; discuter &raquo;, <br>
        si tu rentres un chiffre il &eacute;crira ce chiffre et le programme rajoutera 
        &euro;, donc tu n'&eacute;cris pas le &laquo; &euro; &raquo;<br>
        si tu laisses le champ vide, si tu ne mets rien, rien ne s'affichera sur 
        le site</p>
      <p> <b>Dimensions </b> <br>
       le menu d&eacute;roulant donne toutes les dimensions normalis&eacute;es pour des tableaux<br>
	   + les formats A1, A2, A3, A4, Double page A3, Double page A4<br>
	   Toute fois si la dimensions du tableau n'existe pas dans la liste,<br>
        en cliquant sur ''<b>Ajouter une dimension</b>'', <br>
        un formulaire s'ouvrira pour enregistrer une nouvelle dimensions dans la liste.<br>
        Une fois enregistr&eacute;e et la fen&ecirc;tre ferm&eacute;e, <br>
        elle devrait aparaitre dans la liste, permettant de l'enregistrer pour cette oeuvre</p>
      <p><br>
        <b>Le champ Ordre</b> :<br>
        Te permet de classer l'ordre d'affichage de tes &#339;uvres sur la page. 
        Si tu regardes bien la liste tu peux regrouper des photos en leur donnant 
        le m&ecirc;me chiffre d'ordre.<br>
        L'ordre d'affichage sur le site et le m&ecirc;me que dans la liste, la 
        premi&egrave;re photo dans la liste s'affiche en premier sur la page etc.</p>
      <p><b>Affichage de la photo </b>:<br>
        Oui ou non, te permet de ne pas afficher une photo sur le site</p>
      <p>Bien entendu si tu fais des modifications dans cette liste, il ne faut 
        surtout pas oublier d'aller en bas de la page et de cliquer sur le bouton 
        <br>
        <font color="#FF0066"><b>Enregistrer les modifications</b></font>, sinon 
        rien ne sera modifi&eacute;.</p>
      <p><img src="modifphoto3.png" width="926" height="675"></p>
      <p><img src="ajoutdim.png"></p>
    </td>
  </tr>
  <tr> 
    <td><img src="formphoto2.png" width="684" height="730"></td>
    <td><b><font color="#999900" size="4">Ajouter une photo</font></b> <br>
      Cela affichera un formulaire pour ajouter une nouvelle photo<br>
      Il faudra que tu ouvres ton espace FlickR<br>
      En cliquant sur &laquo; <font color="#CC9900">Acc&egrave;s espace FlickR</font> 
      &raquo;<br>
      Tu as sur le formulaire le login et le mot de passe.<br>
      Le formulaire est simple c'est exactement la m&ecirc;me chose que ce que 
      l'on vient de voir.<br>
      L&agrave; o&ugrave; cela se complique c'est avec flickR.<br>
      Une fois connect&eacute; <br>
      Il faut t&eacute;l&eacute;charger les photos 
      <p>Pour cela il faut cliquer sur le <b>petit nuage avec une fl&egrave;che.</b><br>
        <br>
        Soit tu fais glisser les images de ton ordinateur vers cette page soit 
        tu passes par l'interface <b><font color="#3366CC">Choisir des photos 
        et des vid&eacute;os</font></b>.<br>
        <br>
        Soit tu l'ajoutes &agrave; un album d&eacute;j&agrave; existant soit tu 
        en cr&eacute;es un.<br>
        Une fois ton album s&eacute;lectionn&eacute; ou non il faut cliquer sur 
        le <font color="#0066FF"><b>bouton bleu en haut &agrave; droite, importer 
        photo</b></font> <br>
        <br>
        <br>
        Tu arrives sur une page o&ugrave; s'affichent toutes tes photos.</p>
      <p>Tu s&eacute;lectionnes la photo que tu veux enregistrer sur le site<br>
        en bas &agrave; droite tu as une<b> fl&egrave;che vers le bas avec un 
        trait,</b> <br>
        tu cliques dessus, un menu d&eacute;roulant s'affiche tu cliques sur<br>
        <b>Afficher toutes les tailles</b><br>
        Tu arrives sur une nouvelle page avec une grande photo.<br>
        Pour afficher la petite image il faut cliquer sur le lien<font color="#0099CC"> 
        Carr&eacute; 150</font><br>
        La petite image s'&eacute;tant affich&eacute; il faut faire un clique 
        droit sur l'image.<br>
        Un menu d&eacute;roulant s'affiche et tu s&eacute;lectionnes <br>
        &laquo; <b>copier l'adresse de l'image </b>&raquo; <br>
        sur Mac c'est peut-&ecirc;tre &eacute;crit <b><br>
        copier l'url de l'image</b>.<br>
        Tu retournes sur le formulaire et dans le champ <b>Lien petite photo</b>, 
        tu colles le lien que tu viens de copier.<br>
        Tu fais la m&ecirc;me chose pour &laquo; <b>Lien moyenne photo et lien 
        grande photo</b> &raquo;<br>
        Bien entendu il ne faut pas oublier de cliquer sur FlickR</p>
      <p>Sur <b><font color="#0099FF">Petite 320</font></b> pour afficher la photo 
        de moyenne dimension et d'en copier l'url<br>
        Sur <font color="#0099FF"><b>Moyen 800</b></font> ou plus pour afficher 
        la photo de grande dimension et d'en copier l'url</p>
    </td>
  </tr>
  <tr bgcolor="#9933CC"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> <font color="#CC0000" size="4"><b>6.Ajout/modif Lieux</b></font> </td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2">
      <div align="left">Liste de tous les lieux d'expositions ou autres c'est 
        toi qui choisis ce que tu veux en faire<br>
        .<br>
        Comme dans toutes les listes que l'on a vu jusqu'&agrave; pr&eacute;sent, 
        tu peux modifier toutes les liens mais il ne faut pas oublier un fois 
        que tu as fait tes modifications<br>
        d'aller en bas de la page pour cliquer sur le bouton &laquo; <font color="#FF0066"><b>Enregistrer 
        les modifications</b></font> &raquo; sinon rien ne sera modifi&eacute;.<br>
        Le formulaire est simple. pas de photos<br>
        <img src="Ajoutlieux.png" width="878" height="666"></div>
    </td>
  </tr>
  <tr bgcolor="#9933CC"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td> <font color="#CC0000" size="4"><b>7. Ajout/modif Exposition</b></font> 
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td><img src="ajoutexpo.png" width="600" height="889"></td>
    <td> 
      <p>Normalement en cliquant sur ce lien tu arrives sur la liste<br>
        des expositions que tu as d&eacute;j&agrave; enregistr&eacute;es.<br>
      </p>
      <p> Tu n'as normalement rien &agrave; modifier dans cette liste &agrave; 
        moins que tu veuilles <b>effacer une exposition </b>du site. <br>
        Dans ce cas sur la ligne de l'exposition en question tu vas dans la colonne 
        affichage et tu s&eacute;lectionnes &laquo; <b>Nul part</b> &raquo;</p>
      <p>&nbsp;</p>
      <p><font color="#999900" size="4"><b>Ajouter une exposition</b></font></p>
      <b>Lieu de l'expo :</b> menu d&eacute;roulant avec tous les lieux enregistr&eacute;s, 
      si le lieux n'existe pas dans cette liste,<br>
      Cliques sur le lien <b>Ajouter un lieux,</b> un formulaire s'affichera rentres 
      les coordonn&eacute;es demand&eacute;es dans le formulaire, cliques sur 
      <b> <font color="#FF0066">Ajouter</font></b> .<br>
      La liste des lieux devrait s'afficher avec le nouveau lieu en premier. <br>
      Fermes le popup, la liste du menu d&eacute;roulant devrait se mettre &agrave; 
      jour et le nouveau lieu devrait &ecirc;tre en premi&egrave;re position.<br>
      S&eacute;lectionnes le lieux.<br>
      <br>
      <b>Rentres le titre de l'expo.</b><br>
      Si il y a un vernissage rentre seulement la date et l'heure du vernissage, 
      le programme affichera automatiquement &laquo; Vernissage : et la date que 
      tu viens de rentrer &raquo;<br>
      <br>
      <b> Date de debut d'exposition </b>: facile<br>
      <br>
      <b>Date de fin d'exposition</b> : facile aussi<br>
      <font color="#FF0000">Par contre si l'exposition ne dure qu'un jour ce qui 
      peut arriver, il faut rentrer les m&ecirc;mes dates de d&eacute;but et de 
      fin d'exposition pour que le programme puisse bien comprendre qu'il faut 
      qu'il affiche<br>
      &laquo; Le 3 janvier 2016 &raquo;<br>
      si les dates sont diff&eacute;rentes il affichera &laquo; Du xxxxxx au xxxxx 
      &raquo;</font><br>
      <br>
      <b>Le texte de la page </b>: Le texte que tu veux mettre pour l'exposition.<br>
      <br>
      <font color="#CC6666" size="5"><b>Attention</b></font><br>
      <font color="#990000">L'exposition ne s'affichera sur le site que lorsque 
      tu auras ajout&eacute; une premi&egrave;re photo en l&#8217;occurrence l'affiche 
      de l'exposition.<br>
      Ajouter une photo ce fait comme dans toutes les autres rubriques.<br>
      Tu vas sur le plan du site, tu choisis l'exposition en question dans la 
      rubrique Expositions<br>
      et tu cliques sur le lien <b>Ajout/modif photos<br>
      </b>Pour les expositions il ne faut surtout pas oublier que la premi&egrave;re photo sera celle de l'affiche.<br>
	  La dimension la plus ad&eacute;quate (la meilleur dimension) pour bien s'afficher sur le site est: <span style="color:#0099FF;">Petite 320</span> de FlickR<br>
	  Bien entendu tu n'as pas besoin de rentrer ni de prix, ni de dimensions 
      puisque ce n'est pas une &#339;uvre.<br>
      Bien entendu avec et toujours FlickR </font> </td>
  </tr>
  <tr bgcolor="#9933CC"> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
//mode d'emploi
