<?php
/****************************************************
date:		29.1.2013  22:04:34
autor:		Jakub Adler
file: 		plosina.php
encoding:	UTF-8 		
file description:

******************************************************/
require '../libs.php';
include 'sluzby_menu.php';

$plosina = <<<HTML
<div class="sluzby-content">
<h2>Kácení a ořez z vysokozdvižné plošiny</h2>
<p>
    Uplatní se v případech, kdy kácení, nebo ořez stromu by byl pomocí lanových technik příliš časově náročný, 
    nebo je strom staticky narušený a nelze jej upravovat bez rizika pro okolí a lezce.
</p>
<div>
HTML;
$content = renderServiceContent($sluzbyMenu, $plosina);
$breadCrumbs = breadCrumbs(__FILE__);
renderContent($content, $breadCrumbs);
?>