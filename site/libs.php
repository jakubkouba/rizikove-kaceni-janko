<?php
/****************************************************
date:		23.1.2013  20:21:41
autor:		Jakub Adler
file: 		libs.php
encoding:	UTF-8 		
file description:
file contains helping functions for generatincontent
******************************************************/


if ($_SERVER['HTTP_HOST'] == 'localhost')
	define('WORK_DIR', 'site');
else 
	define('WORK_DIR', 'v2');

define('SERVER_PATH', 'http://'.$_SERVER['SERVER_NAME']);
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
define('TEMPLATES', ROOT_PATH.'/templates');

define('HOME', SERVER_PATH.'/index.php');

define('CSS_DIR', SERVER_PATH.'/css');
define('JS_DIR', SERVER_PATH.'/js');
define('IMAGES', SERVER_PATH.'/images');
define('IMAGES_ROOT', ROOT_PATH.'/images');
define('GALERY_ROOT', IMAGES_ROOT.'/galerie');
define('GALERY', IMAGES.'/galerie');

function getCurrentPage($__FILE__){
	return basename($__FILE__, '.php');
}

function renderContent($content, $breadCrumbs){
	include TEMPLATES.'/head.php';
	include TEMPLATES.'/header.php';
	include TEMPLATES.'/navigation.php';
	include TEMPLATES.'/body.php';
}

function renderServiceContent($servicesMenu, $selfContent){
$serviceContent = <<< HTML
<div id="services" class="section visible corner-bottom">
	<h1>Nabídka služeb</h1>
	<div id="sluzby-menu">	
		$servicesMenu
	</div>
	$selfContent
</div>
	
HTML;
return $serviceContent;
}

function getBasePathCut($__FILE__){
	$rootPath = ROOT_PATH;
	$basePath = preg_replace("@$rootPath/@", '', $__FILE__);
	//echo $basePath;
	return explode('/', $basePath);
}

function breadCrumbs($__FILE__){
	$basePathCut = getBasePathCut($__FILE__);
	//die(var_dump($basePathCut));
	$level = count($basePathCut) - 1;
	$breadCrumbs = '';
	$sluzby = array(
		'rizikove_kaceni',
		'smerove_kaceni',
		'plosina',
		'prorezy');

	$translate = array(
		'index' => 'Úvod',
		'sluzby' => 'Služby',
		'rizikove_kaceni' => 'Rizikové kácení',
		'prorezy' => 'Prořezy pomocí lezecké techniky',
		'smerove_kaceni' => 'Směrové kácení',
		'plosina' => 'Kácení a ořez z vysokozdvižné plošiny',
		'contact' => 'Kontakt',
		'galery' => 'Galerie');
	
	if ($level == 0){
		if(basename($basePathCut[0],'.php') == 'index') return $translate[basename($basePathCut[0],'.php')];
		else return '<a href="'.HOME.'">Úvod</a> > '.$translate[basename($basePathCut[0],'.php')];
	}
	if ($level == 1){
		if ($basePathCut[0] == basename($basePathCut[1], '.php')){
			$breadCrumbs = '<a href="'.HOME.'">Úvod</a> > '.$translate[$basePathCut[0]];
			
		}
		elseif(in_array(basename($basePathCut[1], '.php'), $sluzby))
		      $breadCrumbs = '<a href="'.HOME.'">Úvod</a> > <a href="'.SERVER_PATH.'/'.$basePathCut[0].'/rizikove_kaceni.php">'.$translate[$basePathCut[0]].'</a> > '.$translate[basename($basePathCut[1], '.php')];
 		else
		      $breadCrumbs = '<a href="'.HOME.'">Úvod</a> > <a href="'.SERVER_PATH.'/'.$basePathCut[0].'/'.$basePathCut[0].'.php">'.$translate[$basePathCut[0]].'</a> > '.$translate[basename($basePathCut[1], '.php')];
		return $breadCrumbs;
	}
	
}

function renderGalery($imagesDir, $rows){
	$images = scandir(IMAGES_ROOT."/$imagesDir/");
	$images = preg_grep('/^\w.+/', $images);
	//var_dump($images);
	$i = 1;
	$IMAGES = IMAGES;
	$bxSliderImages = '';
	$galery = '<div class="images-cont">';
	foreach ($images as $image) {
		$bxSliderImages .= "<li><img src=\"$IMAGES/$imagesDir/$image\" /></li>";
		if ($i == $rows)
			$galery .= "<img class=\"section-img\" src=\"$IMAGES/$imagesDir/$image\" id=\"$i\"/><br/><br/>";
		else
		 	$galery .= "<img class=\"section-img\" src=\"$IMAGES/$imagesDir/$image\" id=\"$i\"/>";
		 $i++;
	}
	$galery .= '</div>';
	$galery .= <<<HTML
	<div class="section-galery hide" >
	<div class="galery-close"></div>
	<ul class="galery-examples">
		$bxSliderImages;
	</ul>
	<div class="section-galery-button-prev prev-1"></div>
	<div class="section-galery-button-next next-1"></div>
</div>
	
HTML;
	return $galery;
	
}


function renderMainGalery($galeryImagesDir, $type){
	
	//die(var_dump(GALERY_ROOT));
	$imagesDirs = scandir(GALERY_ROOT);
	$imagesDirs = preg_grep('/^\w.+/', $imagesDirs);
	$imagesDirsCount = count($imagesDirs);
	$i = 1;
	$GALERY = GALERY;
	$galeryItem = '';
	$galeryItems = array();
	$bxSliderImages = '';
	$galeryLabel = '';
	$galery = '';
	$galeryThumb = '';
	$galeryThumbs = '';
	foreach ($imagesDirs as $imagesDir) { // go thru image directory contains directories with images for galery
		$galeryImages = scandir(GALERY_ROOT."/$imagesDir");
		$images = preg_grep('/^\w.+/', $galeryImages);
		//var_dump($images); die;
		foreach ($images as $image) { // go thru each directory and get images
			$imgDim = getimagesize("$GALERY/$imagesDir/$image");
			$imgWidth = floor($imgDim[0]);
			$imgHeigth = floor($imgDim[1]);
			$noMargin = ($i%3 == 0)? 'style="margin-right:0px"': '';
			if(strstr($image, 'thumb')) $galeryLabel = "<img title=\"galery-$i\" class=\"galery-label section-img\" $noMargin src=\"$GALERY/$imagesDir/$image\"/>";
			else $bxSliderImages .= "<li><img src=\"$GALERY/$imagesDir/$image\" width=\"$imgWidth\" heigth=\"$imgHeigth\"/></li>";
		}
		
		$galeryThumb .= <<<GALERY_THUMB
		$galeryLabel
		<div id="galery-$i" class="section-galery hide" ></div>
		
GALERY_THUMB;

		// create one galery
		$galeryItem = <<<GALERY_ITEM
		<div class="galery-close"></div>
		<ul id="galery-$i-images" class="main-galery">
		$bxSliderImages;
		</ul>
		<div class="section-galery-button-prev prev-$i"></div>
		<div class="section-galery-button-next next-$i"></div>

GALERY_ITEM;

		$galeryItems["galery-$i"] = $galeryItem;
		$galeryItem = '';
		
		$bxSliderImages = '';
		if($i%3 == 0 || $i == $imagesDirsCount){ // three galeries in line
			$galeryThumbs .= "<div class=\"galery-line\">$galeryThumb</div>";
			$galeryThumb = '';
		}
		$i++;
	}
	$galery = "<div class=\"galery-main\">$galeryThumbs</div>";
	if ($type == 'thumbs') return $galery;
	if ($type == 'images') return $galeryItems;
}

function czechDate(){
	$daysOfWeek = array(
					'Neděle',
					'Pondělí',
					'Úterý',
					'Středa',
					'Čtvrtek',
					'Pátek',
					'Sobota',
					);
	
	$months = array(
				1 => 'Ledna',
				'Února',
				'Března',
				'Dubna',
				'Května',
				'Června',
				'Července',
				'Srpna',
				'Září',
				'Října',
				'Listopadu',
				'prosince');
	
	$dayInWeek = date('w');
	$month = date('n');
	$day = date('j');
	$year = date('Y');
	return "Dnes je {$daysOfWeek[$dayInWeek]} $day. {$months[$month]} $year";
	
}


?>
