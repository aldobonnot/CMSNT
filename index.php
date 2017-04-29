<?php session_start();
header( 'content-type: text/html; charset=utf-8' );
require_once('int/cxCMS.php');//connexion BDD
require_once('int/Ahead.php');//entete de la page
require_once('int/Bheader.php');//header
require_once('int/Cnav.php');//menu
require_once('int/Dtemplate.php');//template
require_once('int/Efooter.php');//footer et fin de page