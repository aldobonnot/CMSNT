 <!-- Formulaire de modification et d'ajout de lieux d'expositions--><table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr><td colspan="3" align="center"><a class="aflien" href="?&AffForm=oui">Ajouter 
      un lieu</a></td></tr>
  <tr> 
    <td width="5%" align="center" bgcolor="#333333" class="tttab">&nbsp;</td>
    
    <td width="78%" align="center" bgcolor="#666666" class="tttab">Les coordonnées des lieux</td>
    
    <td width="17%" align="center" bgcolor="#999999" class="tttab">Affichage du lieu</td>
  </tr>
  <?php do {?>
  <tr> 
    <td> 
      <input type="hidden" name="id_lieu[]" value="<?php echo $val2['id_EEE'];?>">
    </td>
    
    <td align="center" style="border-left: 1px solid black;">
      <table width="80%" border="0" cellspacing="2" cellpadding="0">
        <tr>
          <td width="22%" align="center">Nom du lieu</td>
          <td width="78%">
            <input name="nom[]" type="text" value="<?php echo $val2['nomEEE']; ?>" size="50">
          </td>
        </tr>
        <tr>
          <td align="center">Adresse</td>
          <td>
            <input name="adresse[]" type="text" value="<?php echo $val2['adresseEEE']; ?>" size="50">
          </td>
        </tr>
        <tr>
          <td align="center">Code postal</td>
          <td>
            <input name="cdp[]" type="text" value="<?php echo $val2['cdpEEE']; ?>" size="50">
          </td>
        </tr>
		<tr>
          <td align="center">Ville</td>
          <td>
            <input name="ville[]" type="text" value="<?php echo $val2['villeEEE']; ?>" size="50">
          </td>
        </tr>
		<tr>
          <td align="center">Pays</td>
          <td>
            <input name="pays[]" type="text" value="<?php echo $val2['paysEEE']; ?>" size="50">
          </td>
        </tr>
		<tr>
          <td align="center">Site internet</td>
          <td>
            <input name="site[]" type="text" value="<?php echo $val2['siteEEE']; ?>" size="50">
          </td>
        </tr>
      </table>
      
    </td>
    
    <td align="center" style="border-left: 1px solid black;"> 
      <select name="aff_P[]">
        <option value="oui" <?php if (!(strcmp("oui", $val2['archivageEEE']))) {echo "SELECTED";} ?>>Oui</option>
        <option value="non" <?php if (!(strcmp("non", $val2['archivageEEE']))) {echo "SELECTED";} ?>>Non</option>
      </select>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#CCCCCC">&nbsp;</td>
    
    <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
    
    <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
  </tr>
  <?php }while ($val2 = mysqli_fetch_assoc($query2)); ?>
  <tr> 
    <td style="border-top: 1px solid black;">&nbsp;</td>
    
    <td style="border-top: 1px solid black;">&nbsp;</td>
   
    <td style="border-top: 1px solid black;">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
     <td>&nbsp;</td>
    
    <td> 
      <div class="basdepage"><input type="submit" name="Submit" value="Enregister les modifications">
      <input name="ajoutP" type="hidden"  value="okajoutP"></div>
    </td>
   
  </tr>
  <tr>
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
   
    <td align="center"><a class="aflien" href="?&AffForm=oui">Ajouter 
      un lieu</a> </td>
    
    <td>&nbsp;</td>
  </tr>
  <tr>
    
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
