<div class="global">
<h1 class="h1"><?php echo $titrecontenu;?> </h1>
<div class="txt"><?php echo $contenu;?></div> 
<div class="txt imgfd margC">
    <form  enctype="multipart/form-data" method="post">
      <table class="tabform">
        <tr> 
          <td > 
            <h2 class="h2">Laissez moi un message</h2>
          </td>
        </tr>
        <tr> 
          <td class="txt3"> 
            <input name="offre" type="hidden"  id="offre" value="<?php echo NOM_ENTREPRISE;?>: Contact">
            <?php  if($envoi!="" && $ok == false){?>
			<div class="erreur txt3">
				<b>Message d'erreur</b><br><br>
		 <?php echo "$msg1 $msg2 $msg3 $msg4 $msg5 $msg6";?></div><?php }else{echo"";}?>
		 <?php if($env == "ok"){?> <div class="succes"> 
<h2 class="h2M">Votre message est enregistr&eacute;</h2></div>
<?php }else{echo "";}?>
          </td>
        </tr>
		 <tr> 
          <td class="txt2">Entreprise</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input name="entreprise_cv" type="text" id="entreprise_cv" size="35">
          </td>
        </tr>
        <tr> 
          <td class="txt2">Nom</td>
        </tr>
        <tr> 
          <td class="txt2 red txtdouze"> 
            <input name="nom_cv" type="text" id="nom_cv" size="35">*
          </td>
        </tr>
        <tr> 
          <td class="txt2">Pr&eacute;nom</td>
        </tr>
        <tr> 
          <td class="txt2 red txtdouze"> 
            <input name="prenom_cv" type="text" id="prenom_cv" size="35">*
          </td>
        </tr>
        <tr> 
          <td class="txt2">Fonction</td>
        </tr>
        <tr> 
          <td class="txt2"> 
            <input name="fonction_cv" type="text" id="fonction_cv" size="35">
          </td>
        </tr>
        <tr> 
          <td class="txt2">Email</td>
        </tr>
        <tr> 
          <td class="txt2 red txtdouze"> 
            <input name="email_cv" type="text" id="email_cv" size="35">*
          </td>
        </tr>
        <tr> 
          <td class="txt2">T&eacute;l&eacute;phone</td>
        </tr>
        <tr> 
          <td class="txt2 red txtdouze"> 
            <input name="tel_cv" type="text" id="tel_cv" size="35">*
          </td>
        </tr>
        <tr> 
          <td class="txt2">Votre message</td>
        </tr>
        <tr> 
          <td class="txt2 red txtdouze"> 
            <textarea name="motivations" cols="30" rows="5"  id="motivations"></textarea>*
          </td>
        </tr>
        <tr> 
          <td class="txt2">&nbsp;</td>
        </tr>
        <tr> 
          <td> 
            <table class="tabform">
              <tr> 
                <td colspan="2" class="red txtten">Controle 
                  anti-spam :<br>
                  ( Respecter les majuscules )</td>
              </tr>
              <tr> 
                <td class="une"></td>
                <td class="une"></td>
              </tr>
              <tr> 
                <td class="tdcentetcinquant" style="background: url(<?php echo"img/secureform/$imgP"; ?>);">&nbsp;</td>
                <td class="tddeuxcent red txtdouze"> 
                  <input  type="hidden" name="verif" value="<?php echo "$imgP"; ?>">
                  <input type="text" name="spam" id="spam">*</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td class="txt2">&nbsp;</td>
        </tr>
        <tr> 
          <td class="center txt2"> 
            <input type="reset" name="reset" value="R&eacute;tablir">
            <input type="submit" name="Submit" value="Envoyer">
            <input type="hidden" name="envoi" value="ok">
          </td>
        </tr>
        <tr> 
          <td class="txt2">&nbsp;</td>
        </tr>
      </table>
    </form> </div>

</div>
