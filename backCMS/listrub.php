 <!-- Liste des sous rubrique d'une rubrique --><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="1%" align="center" bgcolor="#333333" class="tttab">&nbsp;</td>
    <td width="54%" align="center" bgcolor="#666666" class="tttab">Nom de la sous 
      rubrique</td>
    <td width="22%" align="center" bgcolor="#333333" class="tttab">Masque d'affichage</td>
    <td width="10%" align="center" bgcolor="#666666" class="tttab">Marge</td>
    <td width="13%" align="center" bgcolor="#333333" class="tttab">Affichage </td>
  </tr>
  <?php foreach ($val2R as $key => $val2Q) {?>
  <tr> 
    <td> 
      <?php  switch($catrub){case 1: echo $val2Q['id_M2']; break; case 2: echo $val2Q['id_M3']; break;} ?>
      <input type="hidden" name="id_rub[]" value="<?php  switch($catrub){case 1: echo $val2Q['id_M2']; break; case 2: echo $val2Q['id_M3']; break;} ?>">
    </td>
    <td align="center" style="border-left: 1px solid black;"> 
      <?php  switch($catrub){case 1: echo utf8_decode($val2Q['nom_M2']); break; case 2: echo utf8_decode($val2Q['nom_M3']); break;} ?>
    </td>
    <td align="center" style="border-left: 1px solid black;"><select  name="zone[]" >
                <?php switch($catrub){
				case 1:
					$rub="rub";
					$modiflazone=new Modifzone();
					$modiflazone->mzone=addslashes($rub);
					$modiflazone->idezone=intval($val2Q['id_zone2']);
					$affmodiflazone=$modiflazone->selectmodif();
					echo $affmodiflazone;
				break;
				case 2:	
				$rub="rub";				
				$modiflazone=new Modifzone();
				$modiflazone->mzone=addslashes($rub);
				$modiflazone->idezone=intval($val2Q['id_zone3']);
				$affmodiflazone=$modiflazone->selectmodif();
				echo $affmodiflazone;
				break;
				}
				?>
              </select></td>
    <td align="center" style="border-left: 1px solid black;"> 
      <input name="marg_rub[]" type="text" value="<?php  switch($catrub){case 1: echo $val2Q['marg_top2']; break; case 2: echo $val2Q['marg_top3']; break;} ?>" size="6">
    </td>
    <td align="center" style="border-left: 1px solid black;"> 
      <select name="aff_rub[]">
        <?php switch($catrub){case 1:?>
        <option value="Y" <?php if (!(strcmp("Y", $val2Q['aff_M2']))) {echo "SELECTED";} ?>>Menu 
        et Plan</option>
        <option value="N" <?php if (!(strcmp("N", $val2Q['aff_M2']))) {echo "SELECTED";} ?>>Nul 
        part</option>
        <option value="U" <?php if (!(strcmp("U", $val2Q['aff_M2']))) {echo "SELECTED";} ?>>Que 
        dans le plan</option>
        <?php break;
	  case 2:?>
        <option value="Y" <?php if (!(strcmp("Y", $val2Q['aff_M3']))) {echo "SELECTED";} ?>>Menu 
        et Plan</option>
        <option value="N" <?php if (!(strcmp("N", $val2Q['aff_M3']))) {echo "SELECTED";} ?>>Nul 
        part</option>
        <option value="U" <?php if (!(strcmp("U", $val2Q['aff_M3']))) {echo "SELECTED";} ?>>Que 
        dans le plan</option>
        <?php break;}?>
      </select>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
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
    <td colspan="2"> 
      <input type="submit" name="Submit" value="Enregister les modifications">
      <input name="modifRub" type="hidden"  value="okmodifRub">
      <input name="idM1B" type="hidden"  value="<?php echo $idM1;?>">
      <input name="idM2B" type="hidden"  value="<?php echo $idM2;?>">
      <input name="idM3B" type="hidden"  value="<?php echo $idM3;?>">
    </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center"> 
    <td colspan="5"><a class="aflien" href="?idM1=<?php echo $idM1;?>&idM2=<?php echo $idM2;?>&idM3=<?php echo $idM3;?>&AffForm=oui">Ajouter 
      une <?php if($idM1==3 && $idM2!=""){?>exposition<?php }else{?>sous rubrique<?php }?></a> </td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
