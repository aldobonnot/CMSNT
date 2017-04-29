<div class="global">
<h1 class="h1"><?php echo $titrecontenu;?> </h1>


<div class="txt"><?php echo $contenu;?></div> 
			
<div class="txt imgfd">
    <form  enctype="multipart/form-data" method="post">

      <table class="tabform">
        
        <tr> 
          <td class="txt3"> 
            
            <?php  if($envoi!="" && $ok == false){?>
			<div class="erreur txt3">
				<b>Message d'erreur</b><br><br>
		 <?php echo "$msg1 $msg4 ";?></div><?php }else{echo"";}?>
		 <?php if($env == "ok"){?> <div class="succes"> 
<h2 class="h2M">Votre E-mail est enregistr&eacute;</h2></div>
<?php }else{echo "";}?>
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
          <td class="txt2">&nbsp;</td>
        </tr>
        <tr> 
          <td> 
            <table class="tabform">
              <tr> 
                <td colspan="2" class="txt2 red txtten">Controle 
                  anti-spam :<br>
                  ( Respecter les majuscules ) </td>
              </tr>
              <tr> 
                <td class="une"></td>
                <td class="une"></td>
              </tr>
              <tr> 
                <td class="tdcentetcinquant" style="background: url(<?php echo"img/secureform/$imgP";?>);">&nbsp;</td>
                <td class="tddeuxcent red txtdouze"> 
                  <input  type="hidden" name="verif" value="<?php echo "$imgP"; ?>">
                  <input type="text" name="spam" id="spam">* </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td class="txt2">&nbsp;</td>
        </tr>
        <tr> 
          <td  class="txt2 center"> 
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