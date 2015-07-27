<?php
/****************************************************
date:		23.1.2013  20:06:13
autor:		Jakub Adler
file: 		header.php
encoding:	UTF-8 		
file description:

******************************************************/
 //include_once '../libs.php';

$date = czechDate();
$images = IMAGES;
$header = <<<HTML
<div id="header" class="corner-all-big">
	<div id="logo" ><img src="$images/logo/logo2.png" alt="logo"/></div>
</div>
<div id=info-bar class="corner-all-small">
	<span style="float:left">$breadCrumbs</span>
	<span style="float:right; text-align: right;">$date</span>
</div>


HTML;

?>
