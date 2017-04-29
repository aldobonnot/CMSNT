<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center"><b>Ajouter un lieu</b></td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Nom du lieu</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="nomlieu" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Adresse</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="adresse" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Code postal</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="cdp" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
   <tr> 
    <td align="center">Ville</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="ville" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Pays</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="pays" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Site internet</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="site" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input type="submit" name="Submit2" value="Ajouter">
      <input name="ajoutL" type="hidden"  value="okajoutL">
      </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"> 
      <?php if($AffForm=="oui"){?>
      <a class="aflien" href="?&AffForm=non">Voir 
      la liste des lieux</a> 
      <?php }else{echo"";}?>
    </td>
  </tr>
  
  <tr> 
    <td align="center">&nbsp;</td>
  </tr><tr> 
    <td align="center">&nbsp;</td>
  </tr>
</table>
