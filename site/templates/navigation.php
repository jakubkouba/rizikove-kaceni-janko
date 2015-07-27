<?php
/****************************************************
date:		23.1.2013  20:16:28
autor:		Jakub Adler
file: 		navigation.php
encoding:	UTF-8 		
file description:

******************************************************/


$rootPath = SERVER_PATH;
$navigation = <<<HTML
<div id="top-nav" class="corner-top">
	<ul id="nav">
	  	<li id="uvod" class="corner-top active"><a href="$rootPath/index.php">Profil</a></li>
		<li id="sluzby" class="corner-top"><a href="$rootPath/sluzby/rizikove_kaceni.php">Služby</a></li>	
		<li id="contact" class="corner-top"><a href="$rootPath/contact.php">Kontakt</a></li>
		<li id="contact" class="corner-top"><a href="$rootPath/reference.php">Reference</a></li>
		<li id="galery" class="last corner-top"><a href="$rootPath/galery.php">Galerie</a></li>
	</ul>
</div>

HTML;

?>