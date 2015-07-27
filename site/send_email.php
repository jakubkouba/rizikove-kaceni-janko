<?php
/****************************************************
date:		24.2.2013  15:43:38
autor:		Jakub Adler
file: 		send_email.php
encoding:	UTF-8 		
file description:
// email sendind script
******************************************************/
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

$result = array('result' => true);

if (isset($_POST)){
	
	$senerEmailAddr = isset($_POST['email_addr'])? (preg_match('/.+@.+\..{1,4}$/', $_POST['email_addr'])? $_POST['email_addr']: ''): '';
	
	if (empty($senerEmailAddr)){
		$result['result'] = false;
		$result['err_msg'] = 'Formát Váší adresy je nesprávný. Opravte adresu a odešlete e-mail znovu';
		echo json_encode($result);
		die; 
	}
	$subject = isset($_POST['subject'])? filter_var($_POST['subject'], FILTER_SANITIZE_STRING): '';
	if (empty($subject)){
		$result['result'] = false;
		$result['err_msg'] = 'Nevyplnili jste pole předmět.';
		echo json_encode($result);
		die;
	}
	$_POST['mail_text'] = trim($_POST['mail_text']);
	$message = isset($_POST['mail_text'])? filter_var($_POST['mail_text'], FILTER_SANITIZE_STRING): '';
	if (empty($message)){
		$result['result'] = false;
		$result['err_msg'] = 'Nevyplnili jste pole zpráva.';
		echo json_encode($result);
		die;
	}
	
	$email = 'janko.pavlik@seznam.cz';
	//$email = 'adler.jakub@gmail.com';
	$header = "From: $senerEmailAddr \r\n";
	$header .= "MIME-Version: 1.0 \r\n";
	$header .= 'Content-Type: text/plain';
	if(mail($email, $subject, $message, $header)){
		echo json_encode($result);
		die;
	}
	
}


?>