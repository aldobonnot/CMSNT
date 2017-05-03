<!-- Formulaire pour ajouter une rubrique quelque soit son niveau--><table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center"><b>Ajouter une  <?php if($idM1==3 && $idM2!=""){?>Exposition<?php }else{?>sous rubrique<?php }?></b></td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
   <?php if($idM1==3 && $idM2!=""){?><tr>
      <td align="center">Lieu de l'expo </td>
    </tr>
    <tr>
      <td align="center">
       <select class="liste" name="id_EEE" id="id_EEE">
                <?php
				print("<option>Faites votre choix</option>");	
				$non="non";														
				$query2 = $pdo->query("SELECT * FROM cms_lieux WHERE archivageEEE!='$non' ORDER BY id_EEE DESC");
				foreach ($query2 as $key => $row2)
					{
					echo "<option value=\"$row2[id_EEE]\"";					
					echo(">".utf8_decode($row2['nomEEE'])." $row2[cdpEEE] ".utf8_decode($row2['villeEEE'])."</option>");
				}
				?>
              </select> 
      </td>
    </tr><tr>
      <td align="center"><input name="expo" type="hidden"  value="ok"></td>
	  </tr><tr>
      <td align="center"><a class="various" data-fancybox-type="iframe" href="Listlieux.php?&AffForm=oui" >Ajouter un lieux</a></td>
   </tr><tr> 
    <td align="center">&nbsp;</td>
  </tr><?php }else{echo"";}?>
  <tr> 
    <td align="center"><?php if($idM1==3 && $idM2!=""){?>Titre de l'Exposition <?php }else{?>Nom dans le menu<?php }?></td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="nomMenu" type="text" size="41">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
 <?php if($idM1!=3 ){?> <tr> 
    <td align="center">Titre pour Google</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="ttgoogle" type="text" size="41">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Mots-clefs</td>
  </tr>
  <tr> 
    <td align="center"> 
      <textarea name="keyword" cols="35"></textarea>
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">Commentaire Google</td>
  </tr>
  <tr> 
    <td align="center"> 
      <textarea name="comment" cols="35"></textarea>
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center"> Titre de la page dans la page sur le site</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input name="ttpagesite" type="text" size="41">
    </td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr><?php }else{ echo"";}?>
  <?php if($idM1==3 && $idM2!=""){?>
 <tr>
      <td align="center">Date et heure du vernissage (non obligatoire) </td>
    </tr>
    <tr>
      <td align="center">
        <input name="date_eve" type="text" size="41" >
      </td>
    </tr>
	<tr>
      <td align="center">&nbsp;</td>
	</tr>
	<tr>
      <td align="center">Date de début exposition </td>
    </tr>
    <tr>
      <td align="center">
        <table width="10%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="12%"><select name="j_debut">
                      <option value=""></option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select></td>
                  <td width="56%"> <select name="m_debut">
                      <option value=""></option>
                      <option value="01">Janvier</option>
                      <option value="02">Février</option>
                      <option value="03">Mars</option>
                      <option value="04">Avril</option>
                      <option value="05">Mai</option>
                      <option value="06">Juin</option>
                      <option value="07">Juillet</option>
                      <option value="08">Aout</option>
                      <option value="09">Septembre</option>
                      <option value="10">Octobre</option>
                      <option value="11">Novembre</option>
                      <option value="12">Décembre</option>
                    </select> </td>
                  <td width="32%" > <select name="a_debut">
                      <option value=""></option> 
					  <option value="2022">2022</option>
					  <option value="2021">2021</option>
					  <option value="2020">2020</option>
					  <option value="2015">2019</option>
					  <option value="2018">2018</option>
					  <option value="2017">2017</option>
					  <option value="2016">2016</option>
					  <option value="2015">2015</option>
					  <option value="2014">2014</option>
					  <option value="2013">2013</option>
					  </select> </td>
                </tr>
              </table>
      </td>
    </tr><tr>
      <td align="center">&nbsp;</td>
    </tr><tr>
      <td align="center">Date fin exposition </td>
    </tr>
    <tr>
      <td align="center">
        <table width="10%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="12%"><select name="j_fin">
                      <option value=""></option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select></td>
                  <td width="56%"> <select name="m_fin">
                      <option value=""></option>
                      <option value="01">Janvier</option>
                      <option value="02">Février</option>
                      <option value="03">Mars</option>
                      <option value="04">Avril</option>
                      <option value="05">Mai</option>
                      <option value="06">Juin</option>
                      <option value="07">Juillet</option>
                      <option value="08">Aout</option>
                      <option value="09">Septembre</option>
                      <option value="10">Octobre</option>
                      <option value="11">Novembre</option>
                      <option value="12">Décembre</option>
                    </select> </td>
                  <td width="32%" > <select name="a_fin">
                      <option>---</option>
					  <option value="2022">2022</option>
					  <option value="2021">2021</option>
					  <option value="2020">2020</option>
					  <option value="2015">2019</option>
					  <option value="2018">2018</option>
					  <option value="2017">2017</option>
					  <option value="2016">2016</option>
					  <option value="2015">2015</option>
					  <option value="2014">2014</option>
					  <option value="2013">2013</option>
					  
					  </select></td>
                </tr>
              </table>
      </td>
    </tr><tr>
      <td align="center">&nbsp;</td></tr><?php }else{echo"";}?>
  <tr> 
    <td align="center">Texte de la page</td>
  </tr>
  <tr> 
    <td align="center"> 
      <textarea name="editor1" id="editor1" rows="10" cols="80">
               Votre texte ici
            </textarea>
      <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
    </td>
  </tr>
  <tr> 
    <td align="center">Choisir le mod&egrave;le d'affichage</td>
  </tr>
  <tr>
    <td align="center"><select name="zone">
	<?php if($idM1==3 && $idM2!=""){?> <option value="13" >Exposition</option><?php }else{
		switch($catrub){
				case 1:
					$rub="rub";
					$modiflazone=new Modifzone();
					$modiflazone->mzone=addslashes($rub);
					
					$affmodiflazone=$modiflazone->selectmodif();
					echo $affmodiflazone;
				break;
				case 2:	
				$rub="rub";				
				$modiflazone=new Modifzone();
				$modiflazone->mzone=addslashes($rub);
				
				$affmodiflazone=$modiflazone->selectmodif();
				echo $affmodiflazone;
				break;
				}
	}
				?>
	</select></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">Affichage</td>
  </tr>
  <tr>
    <td align="center"><select name="aff_rub">
	<?php if($idM1==3 && $idM2!=""){?><option value="U">Que dans le plan</option><?php }else{?><option value="Y">Menu et Plan</option>
						<option value="U">Que dans le plan</option><?php }?>
						
						</select></td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center"> 
      <input type="submit" name="Submit2" value="Ajouter">
      <input name="ajtRub" type="hidden"  value="okajtRub">
      <input name="idM1B2" type="hidden"  value="<?php echo $idM1;?>">
      <input name="idM2B2" type="hidden"  value="<?php echo $idM2;?>">
      <input name="idM3B2" type="hidden"  value="<?php echo $idM3;?>">
	  <input name="varM1b" type="hidden"  value="<?php echo $varM1;?>">
	  <input name="varM2b" type="hidden"  value="<?php echo $varM2;?>">
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
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center">&nbsp;</td>
  </tr>
</table>
<script>
	initSample();
</script>
