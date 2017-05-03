 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
     <td colspan="5" align="center"><a class="aflien" href="?idM1=<?php echo $idM1;?>&idM2=<?php echo $idM2;?>&idM3=<?php echo $idM3;?>&AffForm=oui">Ajouter une oeuvre,
      une photo</a> </td>
      </tr>
  <tr> 
    <td width="5%" align="center" bgcolor="#333333" class="tttab">&nbsp;</td>
    <td width="13%" align="center" bgcolor="#333333" class="tttab">Photo</td>
    <td width="54%" align="center" bgcolor="#666666" class="tttab">Les adresses 
      des images</td>
    <td width="11%" align="center" bgcolor="#333333" class="tttab">Ordre</td>
    <td width="17%" align="center" bgcolor="#999999" class="tttab">Affichage de 
      la photo</td>
  </tr>
  <?php do {?>
  
  <tr> 
    <td> 
      <a name="<?php echo $val2['id_photo'];?>"><input type="hidden" name="id_photo[]" value="<?php echo $val2['id_photo'];?>">
    </td>
    <td align="center"><img src="<?php echo $val2['small'];?>"> </td>
    <td align="center" style="border-left: 1px solid black;">
      <table id="int" width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td width="22%" align="center">Small</td>
          <td width="78%">
            <input name="small[]" type="text" value="<?php echo $val2['small']; ?>" size="50">
          </td>
        </tr>
        <tr>
          <td align="center">Moyen</td>
          <td>
            <input name="moyen[]" type="text" value="<?php echo $val2['moyen']; ?>" size="50">
          </td>
        </tr>
        <tr>
          <td align="center">Big</td>
          <td>
            <input name="big[]" type="text" value="<?php echo $val2['big']; ?>" size="50">
          </td>
        </tr>
		<tr>
          <td align="center">Titre de l'oeuvre 
		 <br>ou de la photo</td>
          <td>
            <input name="titre[]" type="text" value="<?php echo $val2['titre_img']; ?>" size="50">
          </td>
        </tr>
		<tr>
          <td align="center">Prix</td>
          <td>
            <input name="pris_o[]" type="text" value="<?php echo $val2['prix']; ?>" size="50" placeholder="Si vide ne s'affichera pas, 'D' affichera 'Prix à discuter'">
          </td>
        </tr>
		<tr>
          <td align="center">Dimensions</td>
          <td>
           
                <select name="dim[]">
				<option value="" >Faites votre choix</option>
				<?php 
				$queryF = $mysqli->query("SELECT * FROM cms_format_tab ORDER BY id_format DESC ");
$valF = $queryF->fetch_array();
do {
?>
        <option value="<?php echo  $valF['format']; ?>" <?php if (!(strcmp( $valF['format'] , $val2['dimensions']))) {echo "SELECTED";} ?>><?php echo  $valF['nom_format']." ". $valF['format']; ?></option>
        <?php }while ($valF = mysqli_fetch_assoc($queryF));?>
      </select> cm   <a class="carta various" data-fancybox-type="iframe" href="ajoutDim.php">Ajouter une dimension</a>
		  </td>
        </tr>
      </table>
      
    </td>
    <td align="center" style="border-left: 1px solid black;"> 
      <input name="order_P[]" type="text" size="5" value="<?php echo $val2['order_P']; ?>">
    </td>
    <td align="center" style="border-left: 1px solid black;"> 
      <select name="aff_P[]">
        <option value="Y" <?php if (!(strcmp("Y", $val2['aff_P']))) {echo "SELECTED";} ?>>Oui</option>
        <option value="N" <?php if (!(strcmp("N", $val2['aff_P']))) {echo "SELECTED";} ?>>Non</option>
      </select>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#CCCCCC">&nbsp;</td>
    <td align="center" bgcolor="#CCCCCC" >&nbsp;</td>
    <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
    <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
    <td bgcolor="#CCCCCC" style="border-left: 1px solid black;">&nbsp;</td>
  </tr>
  <?php }while ($val2 = mysqli_fetch_assoc($query2)); ?>
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
      <div class="btnsub"><input type="submit" name="Submit" value="Enregistrer les modifications" class="btn"></div>
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
      une photo</a> </td>
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
