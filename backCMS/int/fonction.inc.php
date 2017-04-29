<?php 
$charge="<div style=\"margin-top:20%;margin-left:48%; position:absolute;z-index:5;\"><img src=\"fancybox_loading.gif\" width=\"48\" height=\"48\"></div>";
function translate($chaine) {
	$in = array("ç", "…", "œ", "€", "°", "’", "À", "Á", "Â", "Ã", "Ä", "Å", "à", "á", "â", "ã", "ä", "å", "Ò", "Ó", "Ô", "Õ", "Ö", "Ø", "ò", "ó", "ô", "õ", "ö", "ø", "È", "É", "Ê", "Ë", "è", "é", "ê", "ë", "Ç", "ç", "Ì", "Í", "Î", "Ï", "ì", "í", "î", "ï", "Ù", "Ú", "Û", "Ü", "ù", "ú", "û", "ü", "ÿ", "Ñ", "ñ", "ß", "&#260;", "&#261;", "&#280;", "&#281;", "&#321;", "&#322;", "&#379;", "&#380;");
 
	$out = array("&ccedil;", "&hellip;", "&oelig; ","&euro;", "&deg;", "'", "&Agrave;", "&Aacute;", "&Acirc;", "&Atilde;", "&Auml;", "&Aring;", "&agrave;", "&aacute;", "&acirc;", "&atilde;", "&auml;", "&aring;", "&Ograve;", "&Oacute;", "&Ocirc;", "&Otilde;", "&Ouml;", "&Oslash;", "&ograve;", "&oacute;", "&ocirc;", "&otilde;", "&ouml;", "&oslash;", "&Egrave;", "&Eacute;", "&Ecirc;", "&Euml;", "&egrave;", "&eacute;", "&ecirc;", "&euml;", "&Ccedil;", "&ccedil;", "&Igrave;", "&Iacute;", "&Icirc;", "&Iuml;", "&igrave;", "&iacute;", "&icirc;", "&iuml;", "&Ugrave;", "&Uacute;", "&Ucirc;", "&Uuml;", "&ugrave;", "&uacute;", "&ucirc;", "&uuml;", "&yuml;", "&Ntilde;", "&ntilde;", "&szlig;", "&#260;", "&#261;", "&#280;", "&#281;", "&#321;", "&#322;", "&#379;", "&#380;");
 
	foreach($in as $key => $value) {
		$chaine = str_replace($in[$key], $out[$key], $chaine);
	}
	return $chaine;
	}

function netUrl($chaine2)
{
	$caracteres = array(
		'À' => 'a', 'Á' => 'a', 'Â' => 'a', 'Ä' => 'a', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ä' => 'a', '@' => 'a',
		'È' => 'e', 'É' => 'e', 'Ê' => 'e', 'Ë' => 'e', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', '€' => 'e',
		'Ì' => 'i', 'Í' => 'i', 'Î' => 'i', 'Ï' => 'i', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
		'Ò' => 'o', 'Ó' => 'o', 'Ô' => 'o', 'Ö' => 'o', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'ö' => 'o',
		'Ù' => 'u', 'Ú' => 'u', 'Û' => 'u', 'Ü' => 'u', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'µ' => 'u',
		'Œ' => 'oe', 'œ' => 'oe', '&OElig;' => 'oe', '&oelig;' => 'oe',
		'$' => 's');
 
	$chaine2 = strtr($chaine2, $caracteres);
	$chaine2 = preg_replace('#[^A-Za-z0-9]+#', '-', $chaine2);
	$chaine2 = trim($chaine2, '-');
	$chaine2 = strtolower($chaine2);
 
	return $chaine2;
}
function netTmcc($chaine3)
{
	$caracteres2 = array(
		'À' => 'a', 'Á' => 'a', 'Â' => 'a', 'Ä' => 'a', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ä' => 'a', '@' => 'a',
		'È' => 'e', 'É' => 'e', 'Ê' => 'e', 'Ë' => 'e', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', '€' => 'e',
		'Ì' => 'i', 'Í' => 'i', 'Î' => 'i', 'Ï' => 'i', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
		'Ò' => 'o', 'Ó' => 'o', 'Ô' => 'o', 'Ö' => 'o', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'ö' => 'o',
		'Ù' => 'u', 'Ú' => 'u', 'Û' => 'u', 'Ü' => 'u', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'µ' => 'u',
		'Œ' => 'oe', 'œ' => 'oe', '&OElig;' => 'oe', '&oelig;' => 'oe',
		'$' => 's');
 
	$chaine3 = strtr($chaine3, $caracteres2);
	return $chaine3;
}
function truncate($string, $max_length = 30, $replacement = '...', $trunc_at_space = false)
{    $max_length -= strlen($replacement);
    $string_length = strlen($string);   
    if($string_length <= $max_length)
        return $string;
    if( $trunc_at_space && ($space_position = strrpos($string, ' ', $max_length-$string_length)) )
        $max_length = $space_position;
    return substr_replace($string, $replacement, $max_length);
}
function attac($contenu){
	if (preg_match("/<script/i", "$contenu")) {
echo"<script language=\"JavaScript\" type=\"text/javascript\">";
echo"document.location=\"http://www.police-nationale.interieur.gouv.fr/Organisation/Direction-Centrale-de-la-Police-Judiciaire/Lutte-contre-la-criminalite-organisee/Sous-direction-de-lutte-contre-la-cybercriminalite\";";
echo"</script>";
exit;
} else {echo"";
}
}
?>
