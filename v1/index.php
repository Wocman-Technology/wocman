<?php
require '../database/xc4f_config.php';
/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Justice
 *
 */

require 'route.php';

//basics
define('COOKIE_FILE', website_link.'cookie.txt');


function getCurrentUri(){
    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -01)).'/';
    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
    // return $uri;
    $route = explode('/', $uri);
    if (!($route[0])) {
        $uri = '';
    }else{
        $routes = explode('/', $uri);
        $uri = $routes[0];
    }
    return $uri;
}
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
			$_SESSION['routes_Auth_wocman_admin'] = routes_Auth_wocman_admin;
		}
		if (isset($check['status'])?$check['status']:'' == "customer_logedin") {
			$_SESSION['routes_Auth_wocman_cutomer'] = routes_Auth_wocman_cutomer;
		}
		if (isset($check['status'])?$check['status']:'' == "workman_logedin") {
			$_SESSION['routes_Auth_wocman_workman'] = routes_Auth_wocman_workman;
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