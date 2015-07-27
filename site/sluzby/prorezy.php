<?php
/****************************************************
date:		29.1.2013  21:59:47
autor:		Jakub Adler
file: 		prorezy_stromu.php
encoding:	UTF-8 		
file description:

******************************************************/
require '../libs.php';
include 'sluzby_menu.php';

$galery = renderGalery('sluzby/prorezy', 2);

$prorezy = <<<HTML
<div class="sluzby-content">
<h2>Prořezy stromů pomocí lezecké techniky</h2>
<p>
    Prořezy stromů se provádějí pro celkové zlepšení zdraví, kondice a vzhledu daného stromu. 
    Dále je to z důvodu zajištění provozní bezpečnosti ve všech věkových stádiích stromů, biologickými potřebami stromů apod. 
    Cílem řezu je volba způsobu řezu ve správný čas a na správném místě. 
    K provedení řezu se použije u vzrostlých stromů horolezecká technika a u nižších stromů je řez možné provést ze žebříku za pomocí vhodných nástrojů.
</p>
$galery
<div>
HTML;

$content = renderServiceContent($sluzbyMenu, $prorezy);
$breadCrumbs = breadCrumbs(__FILE__);
renderContent($content, $breadCrumbs);

?>