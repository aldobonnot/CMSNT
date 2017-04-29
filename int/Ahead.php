<!DOCTYPE html><html lang="fr">
    <head>
       <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=5.0 user-scalable=yes">
        <title><?= $titrepage ?></title>
        <meta name="keywords" content="<?= $motsclefs ?>">
        <meta name="description" content="<?= $commentaires ?>">
        <meta name="robots" content="index, follow">
        <meta name="robots" content="all">
        <meta property="og:url" content="<?= URL ?><?= $lienfacebook ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?= $titrepage ?>" />
        <meta property="og:description" content="<?= $commentaires ?>" />
        <meta property="og:image" content="<?php
        switch ($lienfacebook) {
            case 'oeuvres.php':
                echo "https://c2.staticflickr.com/8/7512/27531636571_5bddc75831_b.jpg";
                break;
            case 'oeuvres_dessins.php':
                echo URL . "data1/images/slide4AC2.jpg";
                break;
            case 'oeuvres_serigraphies.php':
                echo URL . "data1/images/slide2AC2.jpg";
                break;
            case 'oeuvres_peintures.php':
                echo URL . "data1/images/slide1AC2.jpg";
                break;
            case 'oeuvres_calligraphies.php':
                echo URL . "data1/images/slide3AC2.jpg";
                break;
            case 'oeuvres_supports-speciaux.php':
                echo URL . "data1/images/slide5AC2.jpg";
                break;
            case 'oeuvres_supports-speciaux_meubles.php':
                echo "https://c2.staticflickr.com/8/7324/27571142776_cb88b15523_b.jpg";
                break;
            case 'oeuvres_supports-speciaux_fresques.php':
                echo "https://c2.staticflickr.com/8/7362/26994981394_c6abbe7ef8_b.jpg";
                break;
            case 'oeuvres_supports-speciaux_autres.php':
                echo "https://c2.staticflickr.com/8/7538/27328224500_8267ee317d_b.jpg";
                break;
            case 'expositions.php':
                echo "https://c2.staticflickr.com/8/7224/27319951004_59c9f55a74_b.jpg";
                break;
            case 'contact.php':
                echo URL . "img/fd_contact.jpg";
                break;
            case 'contact_biographie.php':
                echo URL . "img/shota-bio.png";
                break;
            default:
                echo URL . "data1/images/slide1AC2.jpg";
                break;
        }
        ?>" />	
        <link rel="shortcut icon" href="<?= URL ?>img/faviconTKS.ico">
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-86735937-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- les css-->
        <style type="text/css">
<?php
/* debut du cache */
$cache = 'cache/index.txt';
$expire = time() - 3600; // valable une heure

if (file_exists($cache) && filemtime($cache) > $expire) {
    readfile($cache);
} else {
    ob_start(); // ouverture du tampon

    $prcel = 100 / NBRCM;
    $breakM = 768;
    $breakM2 = $breakM + 1;
    ?>
                @media (min-width: <?php echo $breakM2; ?>px) {#menuh ul {list-style: none;margin: 0;padding: 0;float: left;width: 320px;display:block;}}
                @media (max-width: <?php echo $breakM; ?>px) {#menuh ul {background:#fff;width: 100%;}}
    <?php
    $page = ob_get_contents(); // copie du contenu du tampon dans une chaîne
    ob_end_clean(); // effacement du contenu du tampon et arrêt de son fonctionnement  
    file_put_contents($cache, $page); // on écrit la chaîne précédemment récupérée ($page) dans un fichier ($cache) 
    echo $page; // on affiche notre page :D 
}
?>@media (min-width: 641px) {.img{margin-top:<?php echo $mgtdivb; ?>px;}}@media (max-width: 640px) {.img{margin-top:-30px;}}</style>
        <link type="text/css" rel="stylesheet" href="stylesheets/<?= $css ?>">
        <?php if ($objetdelazone == 13) {
            $back = "okback";
        } else {
            echo"";
        } ?>
        <!-- les js-->
<?php if ($objetdelazone == 1) { ?>
            <script  src="engine1/jquery.js" defer></script><?php } else {
    echo"";
} ?>
        <script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script >
        <!--
            function MM_swapImgRestore() {
                var i, x, a = document.MM_sr; for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++)
                    x.src = x.oSrc;}
            function MM_preloadImages() {
                var d = document;
                if (d.images) {
                    if (!d.MM_p)
                        d.MM_p = new Array();
                    var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                    for (i = 0; i < a.length; i++)
                        if (a[i].indexOf("#") != 0) {
                            d.MM_p[j] = new Image;
                            d.MM_p[j++].src = a[i];
                        }
                }
            }
            function MM_findObj(n, d) {
                var p, i, x;
                if (!d)
                    d = document;
                if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                    d = parent.frames[n.substring(p + 1)].document;
                    n = n.substring(0, p);
                }
                if (!(x = d[n]) && d.all)
                    x = d.all[n];
                for (i = 0; !x && i < d.forms.length; i++)
                    x = d.forms[i][n];
                for (i = 0; !x && d.layers && i < d.layers.length; i++)
                    x = MM_findObj(n, d.layers[i].document);
                if (!x && d.getElementById)
                    x = d.getElementById(n);
                return x;
            }
            function MM_swapImage() {
                var i, j = 0, x, a = MM_swapImage.arguments;
                document.MM_sr = new Array;
                for (i = 0; i < (a.length - 2); i += 3)
                    if ((x = MM_findObj(a[i])) != null) {
                        document.MM_sr[j++] = x;
                        if (!x.oSrc)
                            x.oSrc = x.src;
                        x.src = a[i + 2];
                    }
            }
        //-->

            function detectversion() {
                var OuAller = "";
                var NomNav = navigator.appName;
                var VersNav = navigator.appVersion;
                var NumVers = parseFloat(VersNav);
                if (NumVers < 8 && NomNav == "Microsoft Internet Explorer") {
                    OuAller = ("newsbrower.htm");
                    document.location = OuAller;
                }
            }
            detectversion();
        </script>
        <style type="text/css">._49vh {background:#000;}
            ._2pi7{background:#000;}</style>
    <head>