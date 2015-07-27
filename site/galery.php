<?php
/****************************************************
date:		27.2.2013  17:54:30
autor:		Jakub Adler
file: 		galerie.php
encoding:	UTF-8 		
file description:

******************************************************/

error_reporting(E_ALL);
ini_set('display_errors', '1');
require 'libs.php';
$galery = renderMainGalery('galerie', 'thumbs');

$content = <<<HTML
<div id="home" class="section visible corner-bottom galery"><h1>Galerie</h1>
	$galery
</div>
HTML;

$breadCrumbs = breadCrumbs(__FILE__);
renderContent($content, $breadCrumbs);
?>