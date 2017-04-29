<footer>
<div class="globFoot">
<div class="MLPL"><table class="tabF"><tr>
        <td><a class="linksF2" href="contact_mentions-legales.php">Mentions L&eacute;gales</a> 
          | <a class="linksF2" href="contact_plan-du-site.php">Plan du site</a> 
		  | <a class="linksF2" href="contact_desinscription-newsletter.php">Désinscription NewsLetter</a></td>
      </tr></table></div>

</div>

</footer>
<?php if($fancy=="Y"){echo '
<script src="js/fancybox/jquery.fancybox.js"></script>
<script src="js/fancybox/jquery.fancybox-buttons.js"></script>
<script src="js/fancybox/jquery.fancybox-thumbs.js"></script>
<script src="js/fancybox/jquery.easing-1.3.pack.js"></script>
<script src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script >$(document).ready(function() {$(".fancybox").fancybox();';
 if($objetdelazone==15){echo '
$(".various").fancybox({
        maxWidth	: 800,
		maxHeight	: 620,
		fitToView	: false,
		width		: "93%",
		height		: "95%",
		autoSize	: false,
		closeClick	: false,
		openEffect	: "none",
		closeEffect	: "none"
		
});';}else{echo"";}
echo'});</script>';}else{echo'';}
?>
	<script src="js/cokiejs.js" charset="utf-8"></script>
</body>
</html>