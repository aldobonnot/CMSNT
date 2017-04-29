<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center"><b>Ajouter une photo</b></td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Lien petite photo <span style="color:#3366cc;font-size:10px;">(Sur FlickR: Carré 150)</span></td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="small" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Lien moyenne photo <span style="color:#3366cc;font-size:10px;">(Sur FlickR: Petite 320)</span></td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="moyen" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Lien grande photo <span style="color:#3366cc;font-size:10px;">(Sur FlickR: Moyen 800 ou plus)</span></td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="big" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Titre de l'oeuvre ou de la photo</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="titros" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Prix de l'oeuvre (si vide rien ne s'affichera)</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="prixos" type="text" size="35" placeholder="'D' affichera 'Prix à discuter'">
    </td>
  </tr>
  <tr> 
    <td align="center"> 
     D = Prix à discuter
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Dimensions </td>
  </tr>
  <tr> 
    <td align="center">
<select name="dimos">
				<option value="" >Faites votre choix</option>
				<?php 
				$queryF = $mysqli->query("SELECT * FROM cms_format_tab ");
$valF = $queryF->fetch_array();
do {
?>
        <option value="<?php echo  $valF['format']; ?>"><?php echo  $valF['nom_format']." ". $valF['format']; ?></option>
        <?php }while ($valF = mysqli_fetch_assoc($queryF));?>
      </select>cm	<a class="carta various" data-fancybox-type="iframe" href="ajoutDim.php">Ajouter une dimension</a>
      
    </td>
  </tr>
   
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input type="submit" name="Submit2" value="Ajouter">
      <input name="ajoutL" type="hidden"  value="okajoutL">
      <input name="idM1B2" type="hidden"  value="<?php echo $idM1;?>">
      <input name="idM2B2" type="hidden"  value="<?php echo $idM2;?>">
      <input name="idM3B2" type="hidden"  value="<?php echo $idM3;?>">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"> 
      <?php if($AffForm=="oui"){?>
      <a class="aflien" href="?idM1=<?php echo $idM1;?>&idM2=<?php echo $idM2;?>&idM3=<?php echo $idM3;?>&AffForm=non">Voir 
      la liste</a> 
      <?php }else{echo"";}?>
    </td>
  </tr>
  <tr>
    <td align="center"><p align="center"><a href="https://flickr.com" target="_blank" class="aflien">Acc&egrave;s espace FlickR</a></p></td>
  </tr>
  <tr>
    <td align="center"><b>Login:&nbsp;&nbsp;</b> <?php echo FLICKR_LOG;?></td>
  </tr>
  <tr>
    <td align="center"><b>Mot de passe:&nbsp;&nbsp;</b> <?php echo FLICKR_MDP;?></td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr><tr> 
    <td align="center">&nbsp;</td>
  </tr>
</table>
