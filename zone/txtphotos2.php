<?php//laisser un cv ?>
<div class="global">
<h1 class="h1"><?php echo $titrecontenu;?> </h1>
<div class="txt"><?php echo $contenu;?><br>
<br>
      <?php if($env == "ok"){?> <div class="succes"> 
<h2 class="h2M">Votre message est enregistr&eacute;</h2></div>
<?php }else{echo "";}?>
    <form action="" enctype="multipart/form-data" method="post">

      <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
      
	    <?php if($art2!=""){?>
        <tr> 
          <td> 
            <h2 class="h2">Laissez votre CV</h2>
          </td>
        </tr>
        
       <tr> 
          <td class="txt3"> 
            <input name="offre" type="hidden"  id="offre" value="<?php echo $art2;?>">
             <?php  if($envoi!="" && $ok == false){?>
			<div class="erreur txt3">
				<b>Message d'erreur</b><br><br>
		 <?php echo"$msg11 $msg1 $msg2 $msg3 $msg4 $msg5 $msg6 $msg7 $msg8 $msg9 $msg10";?></div><?php }else{echo"";}?>
          </td>
        </tr>
        <?php } else{ echo"";} ?>
	  
	  
	   <?php if($rub2!="" && $art2==""){?>
       
        <tr> 
          <td class="txt3"> 
           		  <?php  if($envoi!="" && $ok == false){?>
			<div class="erreur txt3">
				<b>Message d'erreur</b><br><br>
		 <?php echo"$msg11 $msg1 $msg2 $msg3 $msg4 $msg5 $msg6 $msg7 $msg8 $msg9 $msg10";?></div><?php }else{echo"";}?>
          </td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <select name="offre" class="txt2">
              <?php 
$cmdoffres=new Offres();
$cmdoffres->de2=$idlien;
$affcmdoffres=$cmdoffres->affoffres();
echo $affcmdoffres;
?>
            </select>
          </td>
        </tr>
	   <?php }else{ echo"";}?>
        <tr> 
          <td class="txt2"> Nom</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input name="nom_cv" type="text" id="nom_cv" size="35">
          </td>
        </tr>
        <tr> 
          <td class="txt2">Pr&eacute;nom</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input name="prenom_cv" type="text" id="prenom_cv" size="35">
          </td>
        </tr>
        <tr> 
          <td class="txt2">Email</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input name="email_cv" type="text" id="email_cv" size="35">
          </td>
        </tr>
        <tr> 
          <td class="txt2">T&eacute;l&eacute;phone</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input name="tel_cv" type="text" id="tel_cv" size="35">
          </td>
        </tr>
        <tr> 
          <td class="txt2">Vos motivations 
            <?php if($rub2=="prise-de-rendez-vous"){?>
            et vos plages horaires. 
            <?php }else{echo"";}?>
          </td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <textarea name="motivations" cols="30" rows="5" wrap="hard" id="motivations"></textarea>
          </td>
        </tr>
        <tr> 
          <td class="txt2">Votre CV au format PDF uniquement</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input type="file" name="fichierb">
          </td>
        </tr>
        <tr>
          <td class="txt2">&nbsp;</td>
        </tr>
        <tr> 
          <td>
		  <table width="300" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td colspan="2" ><font color="#ff0000" size="1" face="Arial, Helvetica, sans-serif">Controle 
                  anti-spam :<br>
                  ( Respecter les majuscules )</font>
				  </td>
              </tr>
              <tr> 
                <td height="1"></td>
                <td height="1"></td>
              </tr>
              <tr> 
                <td width="100" height="50" background="<?php
			echo "img/secureform/$imgP"; ?>">&nbsp;</td>
                <td width="200"> 
                  <input  type="hidden" name="verif" value="<?php echo "$imgP"; ?>">
                  <input type="text" name="spam" id="spam">
                  <font color="#FF0000" size="2" face="Arial, Helvetica, sans-serif"> 
                  *</font> </td>
              </tr>
            </table>
			</td>
        </tr>
        <tr> 
          <td class="txt2">&nbsp;</td>
        </tr>
        <tr> 
          <td align="center" class="txt2"> 
           <div style="margin-right:15px;"> <input type="reset" name="reset" value="R&eacute;tablir">
            <input type="submit" name="Submit" value="Envoyer">
            <input type="hidden" name="envoi" value="ok"></div>
          </td>
        </tr>
        <tr> 
          <td class="txt2">&nbsp;</td>
        </tr>
      </table>
    </form> </div>
<div class="img">.</div>
</div>