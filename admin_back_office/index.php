<?php 
	header('Access-Control-Allow-Origin: *');  
	header('Content-Type: text/html; charset=utf-8');
	date_default_timezone_set('Asia/Bangkok');
	ob_start();
	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', 'ON');
	if($_SERVER['SERVER_NAME'] == 'localhost'){
		require_once($_SERVER['DOCUMENT_ROOT'].'/smoking/config/domains/smoking/config.php'); 
		require_once($_SERVER['DOCUMENT_ROOT'].'/smoking/lib/function/main_function.php');
		require_once('catalog/setup.php'); 
		require_once($_SERVER['DOCUMENT_ROOT'].'/smoking/lib/system/loader/autoload.php'); 
	}else{
		require_once('/home/hostphp7/domains/hostphp7.com/config/domains/smoking/config.php'); 
		require_once('/home/hostphp7/domains/hostphp7.com/lib/function/main_function.php');
		require_once('catalog/setup.php'); 
		require_once('/home/hostphp7/domains/hostphp7.com/lib/system/loader/autoload.php'); 
	}
?>