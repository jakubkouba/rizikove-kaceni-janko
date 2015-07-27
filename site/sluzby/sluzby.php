<?php
/****************************************************
date:		29.1.2013  20:35:38
autor:		Jakub Adler
file: 		sluzby.php
encoding:	UTF-8 		
file description:

******************************************************/

require '../libs.php';
include 'sluzby_menu.php';

$content = <<< HTML

<div id="services" class="section visible corner-bottom">
	<h1>Nabídka služeb</h1>
	<div id="sluzby-menu">	
		$sluzbyMenu
	</div>
</div>

HTML;

$breadCrumbs = breadCrumbs(__FILE__);
renderContent($content, $breadCrumbs);

?>