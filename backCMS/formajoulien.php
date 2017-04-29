<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center"><b>Ajouter un lien</b></td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Titre du lien</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="titreLien2" type="text" size="35">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Url du lien (http://...)</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="urlien2" type="text" size="35" value="http://">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Target</td>
  </tr>
  <tr> 
    <td align="center"> 
      <select name="target2">
        <option value="externe" >externe</option>
	<option value="interne" >interne</option>
      </select>
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
    <td align="center"><?php echo $idM1;?></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
</table>
