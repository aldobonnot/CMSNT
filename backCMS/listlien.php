 <!-- List des liens d'une rubrique modif et ajout--><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="5%" align="center" bgcolor="#333333" class="tttab">&nbsp;</td>
    <td width="30%" align="center" bgcolor="#333333" class="tttab">Titre du lien 
    </td>
    <td width="37%" align="center" bgcolor="#666666" class="tttab">Url du liens 
      (http://...)</td>
    <td width="11%" align="center" bgcolor="#333333" class="tttab">Target</td>
    <td width="17%" align="center" bgcolor="#999999" class="tttab">Affichage du 
      lien</td>
  </tr>
  <?php foreach ($val2R as $key => $val2)  {?>
  <tr> 
    <td> 
      <input type="hidden" name="id_lien[]" value="<?php echo $val2['id_lien'];?>">
    </td>
    <td align="center"> 
      <input name="nom_lien[]" type="text" value="<?php echo stripslashes ($val2['nom_lien']); ?>" size="37">
    </td>
    <td align="center" style="border-left: 1px solid black;"> 
      <input name="url_lien[]" type="text" value="<?php echo $val2['url_lien']; ?>" size="30">
    </td>
    <td align="center" style="border-left: 1px solid black;"> 
      <select name="target_lien[]">
        <option value="interne" <?php if (!(strcmp("interne", $val2['target_lien']))) {echo "SELECTED";} ?>>interne</option>
        <option value="externe" <?php if (!(strcmp("externe", $val2['target_lien']))) {echo "SELECTED";} ?>>externe</option>
      </select>
    </td>
    <td align="center" style="border-left: 1px solid black;"> 
      <select name="aff_lien[]">
        <option value="Y" <?php if (!(strcmp("Y", $val2['aff_lien']))) {echo "SELECTED";} ?>>Oui</option>
        <option value="N" <?php if (!(strcmp("N", $val2['aff_lien']))) {echo "SELECTED";} ?>>Non</option>
      </select>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#CCCCCC" >&nbsp;</td>
    <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
    <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
    <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
  </tr>
  <?php } ?>
  <tr> 
    <td style="border-top: 1px solid black;">&nbsp;</td>
    <td style="border-top: 1px solid black;">&nbsp;</td>
    <td style="border-top: 1px solid black;">&nbsp;</td>
    <td style="border-top: 1px solid black;">&nbsp;</td>
    <td style="border-top: 1px solid black;">&nbsp;</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> 
      <input type="submit" name="Submit" value="Enregister les modifications">
      <input name="ajoutP" type="hidden"  value="okajoutP">
      <input name="idM1B" type="hidden"  value="<?php echo $idM1;?>">
      <input name="idM2B" type="hidden"  value="<?php echo $idM2;?>">
      <input name="idM3B" type="hidden"  value="<?php echo $idM3;?>">
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><a class="aflien" href="?idM1=<?php echo $idM1;?>&idM2=<?php echo $idM2;?>&idM3=<?php echo $idM3;?>&AffForm=oui">Ajouter 
      un lien</a> </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
