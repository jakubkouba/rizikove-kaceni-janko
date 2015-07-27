<?php
/****************************************************
date:		21.1.2013  20:30:23
autor:		Jakub Adler
file: 		head.php
encoding:	UTF-8 		
file description:

******************************************************/
$css = CSS_DIR;
$js = JS_DIR;
$head = <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="cz" />
	<meta name="author" content="Adler Jakub" />
	<meta name="description" content="Nabízím služby v oblasi kácení stromů pomocí horolezecké techniky, údržby a péče o zeleň, výškových prací, likvidace padlých stromů po pohromách"/>
	<meta name="keywords" content="výškové kácení, rizikové kácení, arboristika, údržba zeleně, péče o zeleň, výškové práce, stromy, větve, kácení," />
	<link rel="stylesheet" type="text/css" href="$css/base.css" />
	<link rel="stylesheet" type="text/css" href="$css/jquery.fancybox-1.3.4.css" />
	<link rel="stylesheet" type="text/css" href="$js/jQ_plugins/fotorama/fotorama.css"/>
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="$css/ie.css" />
	<![endif]-->
	<script type="text/javascript" src="$js/jQuery/jQuery1.7.js"></script>
	<script type="text/javascript" src="$js/jQuery_ui/jquery-ui-1.8.21.custom.min.js"></script>
	<script type="text/javascript" src="$js/jQ_plugins/cycle.js"></script>
	<script type="text/javascript" src="$js/jQ_plugins/bpopup/bpopup.js"></script>
	<script type="text/javascript" src="$js/jQ_plugins/bx_slider/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="$js/jQ_plugins/bx_slider/jquery.bxslider.js"></script>
	<script type="text/javascript" src="$js/jQ_plugins/fotorama/fotorama.js"></script>
	<script type="text/javascript" src="$js/jQ_plugins/fancybox/jquery.easing-1.3.pack.js"></script>
	<!--<script type="text/javascript" src="$js/jQ_plugins/fancybox/jquery.fancybox-1.3.4.js"></script>-->
	<script type="text/javascript" src="$js/main.js" ></script>
	<title>Rizikové kácení stromů - Teplice</title>
</head>




HTML;

?>
