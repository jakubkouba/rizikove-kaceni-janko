<?php
/****************************************************
date:		29.1.2013  22:02:42
autor:		Jakub Adler
file: 		smerove_kaceni.php
encoding:	UTF-8 		
file description:

******************************************************/
require '../libs.php';
include 'sluzby_menu.php';
$galery = renderGalery('sluzby/smerove_kaceni', 2);
$smeroveKaceni = <<<HTML
<div class="sluzby-content">
<h2>Směrové kácení stromů</h2>
<p>
    Přesné směrové kácení můžeme označit jako tzv. "klasický způsob" používaný při těžbě dřeva, kdy strom padá na přesně určené místo v daném prostoru. 
    Tento způsob je možné použít v případě, kde to podmínky s ohledem na bezpečnost dovolují. 
    Samozřejmostí je další zpracování dřeva dle přání zákazníka.
</p>
$galery
<div>

HTML;

$content = renderServiceContent($sluzbyMenu, $smeroveKaceni);
$breadCrumbs = breadCrumbs(__FILE__);
renderContent($content, $breadCrumbs);
?>