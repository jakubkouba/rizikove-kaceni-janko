<?php
/****************************************************
date:		10.4.2013  21:25:06
autor:		Jakub Adler
file: 		getGaleryImages.php
encoding:	UTF-8 		
file description:

******************************************************/
include_once 'libs.php';

$reslut = array();
$type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
if ($type != 'images'){
	$reslut['result'] = false;
	echo json_encode($reslut);
	return;
}
else{
	$reslut['result'] = true;
	$reslut['images'] = renderMainGalery('galerie', $type);
	echo json_encode($reslut);
}

?>