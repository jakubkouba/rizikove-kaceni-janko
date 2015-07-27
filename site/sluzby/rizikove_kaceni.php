<?php
/****************************************************
date:		29.1.2013  21:25:49
autor:		Jakub Adler
file: 		rizikove_kaceni.php
encoding:	UTF-8 		
file description:

******************************************************/
require '../libs.php';
include 'sluzby_menu.php';

$galery = renderGalery('sluzby/rizikove_kaceni', 2);

$rizikoveKaceni = <<<HTML
<div class="sluzby-content">
<h2>Rizikové kácení stromů pomocí lezecké techniky</h2>
<p>
    Jedná se o kácení stromů v prostředí, kde vznikají určitá rizika (nedostatečný prostor pro směrové kácení, 
    v bezprostřední blízkosti stromu se nácházejí domy nebo jiné stavby, 
    špatný zdravotní stav stromu, strom ohrožuje Váš nebo cizí majetek, apod.). 
    Při kácení stromů touto technikou je strom postupně po částech zkracován od koruny směrem dolů. 
    Tato technika kácení je velmi náročná a&nbsp; nebezpečná, tudíž je nutné použití patřičného vybavení, 
    jako jsou různá lana, kladky, kotvící a jistící prvky, spouštěcí systémy apod.
</p>
$galery
<div>
HTML;

$content = renderServiceContent($sluzbyMenu, $rizikoveKaceni);
$breadCrumbs = breadCrumbs(__FILE__);
renderContent($content, $breadCrumbs);

?>