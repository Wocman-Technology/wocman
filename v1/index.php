<?php
/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Ugbogu Justice, 08138184872
 *
*/
require '../database/xc4f_config.php';

require WOCMAN_DIR.WOCMAN_PREFIX_FILE.'function.php';
require WOCMAN_DIR.WOCMAN_PREFIX_FILE.'clean.php';

require 'route.php';

//basics
define('COOKIE_FILE', website_link.'cookie.txt');


$_r = getCurrentUri();


if (defined(trim($_r,'?'))) {
	unset($a);
	unset($x);
	$a = constant(trim($_r,'?'));
	$x  = explode(",", $a);


	if ($x[2] == 'true') {
		
		if (isset($_SESSION['routes_Auth_wocman_'.$x[3]])?$_SESSION['routes_Auth_wocman_'.$x[3]]:'' ==  constant('routes_Auth_wocman_'.$x[3])) {
			
		}else{
			echo json_encode(['wocman_status' => "Auth failure",]);
			return false;
		}
		
	}
	

	$wocman_route = "&wocman_route=".wocman_route;
	$field_string = '';
	$push = [];
	foreach ($_POST as $key => $value) {
		$field_string .= $key.'='.urlencode($value).'&';
		$field_strings = $key.'='.$value;
		array_push($push, $field_strings);
	}
	array_push($push, $wocman_route);
	rtrim($field_string, '&');
	define("route", website_link."controller/?".$x[1].$wocman_route);


	//authenticating the user type
	$getAuthKey = explode('&', route);
	//looping throught the variables
	$getAuthKey = isset($getAuthKey)?$getAuthKey:'none=none';
	foreach ($getAuthKey as $eachParam) {
		$chekAuthKey = explode('=', $eachParam);
		if ($chekAuthKey[0] == 'uuidToken') {
			$dataforCheck = $chekAuthKey[1];
		}
	}
	$data = isset($dataforCheck)?$dataforCheck:'';

	if ($x[3] == "workman") {
		if((boolean)$general->verifyWorkman($tbl_workmen,wocman_token_column,$data) === false){
			echo json_encode(['wocman_status' => "Workman Unique verification failure",]);
			return false;
		}
	}elseif($x[3] == "customer"){
		if((boolean)$general->verifyCustomer($tbl_customer,wocman_token_column,$data) === false){
			echo json_encode(['wocman_status' => "Customer Unique verification failure",]);
			return false;
		}
	}elseif($x[3] == "admin"){
		if((boolean)$general->verifyWocman($tbl_wocman,wocman_token_column,$data) === false){
			echo json_encode(['wocman_status' => "Admin Unique verification failure",]);
			return false;
		}
	}

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, route);
	if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  trim($x[0]) === $_SERVER['REQUEST_METHOD']) {
		curl_setopt($ch, CURLOPT_POST, count($push));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $field_string);
		curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE_FILE);
		curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_HEADER, true);
		$result = curl_exec($ch);
		curl_setopt($ch, CURLOPT_COOKIESESSION, true);
		curl_close($ch);
		echo $result;
		$check = (array)json_decode($result);
		if (isset($check['status'])?$check['status']:'' == "wocman_logedin") {
			$therow = (array)($check['row']);
			$_SESSION['routes_Auth_wocman_admin'] = $therow[wocman_token_column];
		}
		if (isset($check['status'])?$check['status']:'' == "customer_logedin") {
			$therow = (array)($check['row']);
			$_SESSION['routes_Auth_wocman_cutomer'] = $therow[wocman_token_column];
			// var_dump($_SESSION['routes_Auth_wocman_cutomer']);
		}
		if (isset($check['status'])?$check['status']:'' == "workman_logedin") {
			$therow = (array)($check['row']);
			$_SESSION['routes_Auth_wocman_workman'] = $therow[wocman_token_column];
		}

	}elseif($_SERVER['REQUEST_METHOD'] === 'GET' &&  trim($x[0]) === $_SERVER['REQUEST_METHOD']){
		curl_setopt($ch, CURLOPT_TIMEOUT, 3);
		curl_setopt($ch, CURLOPT_COOKIESESSION, true);
		curl_setopt($ch, CURLOPT_COOKIEJAR, COOKIE_FILE);
		curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
		// curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		echo $result;
		$check = (array)json_decode($result);
		if (isset($check['status'])?$check['status']:'' == "logout") {
			unset($_SESSION['routes_Auth_wocman_admin']);
			unset($_SESSION['routes_Auth_wocman_cutomer']);
			unset($_SESSION['routes_Auth_wocman_workman']);
		}
		
	}else{
		echo json_encode(['wocman_status' => "Invalid route",]);
	}
}else{
	echo json_encode(['wocman_status' => "Route Does Not Exist",]);
}

?>