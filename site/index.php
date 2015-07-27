
<?php
/****************************************************
date:		23.1.2013  20:21:25
autor:		Jakub Adler
file: 		uvod.php
encoding:	UTF-8 		
file description:

******************************************************/
error_reporting(E_ALL);
ini_set('display_errors', '1');

require 'libs.php';
$galery = renderGalery('uvod', 5);
$sluzbyLink = SERVER_PATH.'/sluzby/rizikove_kaceni.php';
$content = <<<HTML
<div id="home" class="section visible corner-bottom"><h1>Profil</h1>
	<img class="left img-shadow" src="images/foto/myself/profil.JPG" alt="ja"/>
	<p>
	   Vítejte na mých stránkách nabízející nabídku služeb v oblasti rizikového kácení, péče o stromy a údržby zeleně.<br />
	   Již několik let se zabývám údržbou zeleně, zakládáním zahrad, ošetrování rostlin a péčí o trávníky. V několika posledních letech
	   jsem oblast mého působení rozšířil o <a href="$sluzbyLink">služby</a> zabývající se péči o stromy a rizikového kácení.
	   Detailní seznam a popis jednotlivých služeb naleznete <a href="$sluzbyLink">zde</a>.<br />
	   Za dobu co se věnuji této práci jsem měl možnost setkat se spoustou různorodých situací, které vedly k nabytí odpovídajících
	   zkušeností a praxe v tomto oboru, ať už se jedná o jakékoli formy péče o stromy pomocí prořezávání či přímo jejich kácení.
	</p>
	<p>Nabízím:</p>
	<ul class="list-frame list">
	  	<li>profesionální přístup jak k zákazníkům tak k provedené práci</li>
	   	<li>konzultace a stanovení ceny zakázky před jejím provedením</li>
	   	<li>odpovědnost za škodu (pojištění až do výše 1 000 000 kč)</li>
	   	<li>kvalitně odvedenou práci</li>
	   	<li>splnění všech domluvených úkonů</li>      		      	          
	</ul>
	<p>
	    Působím převážně v oblasti severních Čech zejména Teplice, Ústí nad Labem, Chomutov, Most a okolí.
	    Není ovšem problém provést jednorázové zakázky v rámci celé ČR. Disponuji dvoj až trojčleným týmem podle objemu zakázky.
	    Při objemově větších a náročnějších zakázkách jsem schopen zajistit odpovídající počet členů týmu.
	</p>
$galery		    
			   
</div>

HTML;
$breadCrumbs = breadCrumbs(__FILE__);
renderContent($content, $breadCrumbs);

?>
