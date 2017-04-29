<body onLoad="MM_preloadImages('img/fbackon.png')">
<script>
    document.addEventListener('DOMContentLoaded', function(event) {
      cookieChoices.showCookieConsentBar(
        'En naviguant sur mon site, vous acceptez l’utilisation de cookies pour vous proposer une navigation optimale, tout en permettant de réaliser des statistiques de visites',
        'OK', 'En savoir plus', '<?php echo URL."contact_cookies.php";?>'
      );
    });
   </script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
<div class="ent"><a href="<?= URL ;?>" class="tts" title="Accueil TKSom"><?= NOM_ENTREPRISE;?></a></div>
</header>