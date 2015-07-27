<?php
/****************************************************
date:		29.1.2013  20:53:23
autor:		Jakub Adler
file: 		sluzby_menu.php
encoding:	UTF-8 		
file description:

******************************************************/
$serverPath = SERVER_PATH;
$sluzbyMenu = <<<HTML
<h2>Kácení stromů</h2>
<ul class="list-frame list">
	<li><a href="$serverPath/sluzby/rizikove_kaceni.php">Rizikové kácení</a></li>
	<li><a href="$serverPath/sluzby/prorezy.php">Prořezy stromů pomocí lezecké techniky</a></li>
	<li><a href="$serverPath/sluzby/smerove_kaceni.php">Směrové kácení</a></li>
	<li><a href="$serverPath/sluzby/plosina.php">Kácení a ořez z vysokozdvižné plošiny</a></li>
	
</ul>
<h2>Údržba zeleně</h2>
<ul class="list-frame list">
	<li>sečení travních ploch</li>
	<li>likvidace náletových dřevin a keřů</li>
    <li>vertikutace a hnojení trávníků</li>
    <li>řez a tvarování živých plotů</li>
    <li>pletí záhonů</li>
    <li>doplňování mulčovací kůry v záhonech</li>
    <li>hnojení a obrývání záhonů</li>
    <li>menší realizační práce:
    	<ul class="submenu">
    		<li>rovnání terénů</li>
    		<li>zakládání trávníků</li>
    		<li>výsadby stromů a keřů</li>
    	</ul>
    </li>	
    <li>jednorázové, nebo pravidelné údržby<br/> zeleně a zahrad</li>
    <li>pomocné práce kolem domu
    	<ul class="submenu">
    		<li>úklid zahradních domků</li>
    		<li>úklid dílen a garáží</li>
    		
    	</ul>
    </li>
</ul>
<h2>Služby pro města a firmy</h2>
<ul class="list-frame list">
    <li>péče o zeleň a sadové úpravy</li>
    <li>ošetřování dřevin
    	<ul class="submenu">
    		<li>stromolezeckou technikou</li>
    		<li>z vysokozdvižné plošiny</li>
    	</ul>
    </li>	
    <li>kácení náletových dřevin</li>
    <li>sekání trávy</li>
</ul>


HTML;

?>
