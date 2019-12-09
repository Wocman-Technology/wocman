<?php

require 'route.php';

//basics
define("WOCMAN_PREFIX", "wokman_xcvfg67uuygh_");
define("WOCMAN_PREFIX_FILE", "xc4f_");
define("WOCMAN_SPLIT", "xxwocmanxx");
define('website_link', 'http://localhost/wocman/');

define('routes_Auth_wocman_admin', 'gfksfshjdnvxisdsdgrevv343432QWSDSsdfgsdfjkdfjd');
define('routes_Auth_wocman_cutomer', 'gfksfshjdnvxisdfhsdhfjkdmbsdFDGDFHGssd42312dfsddfsdZ');
define('routes_Auth_wocman_workman', 'gfksfshjdnv123AsdSwAQxisdfhsdhfjkdmbsdfgsdfjkdfjd');

if(!defined('WOCMAN_DIR'))
{
 define('WOCMAN_DIR', dirname(dirname(__FILE__))."/");
}


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
		session_start();

		//test reasons, please uncomment and unset those variables after testing the auth
		// $_SESSION['routes_Auth_wocman_cutomer'] = "gfksfshjdnvxisdfhsdhfjkdmbsdFDGDFHGssd42312dfsddfsdZ";
		// $_SESSION['routes_Auth_wocman_admin'] = "gfksfshjdnvxisdsdgrevv343432QWSDSsdfgsdfjkdfjd";
		// $_SESSION['routes_Auth_wocman_workman'] = "gfksfshjdnv123AsdSwAQxisdfhsdhfjkdmbsdfgsdfjkdfjd";
		// unset($_SESSION['routes_Auth_wocman_workman']);
		// unset($_SESSION['routes_Auth_wocman_admin']);
		// unset($_SESSION['routes_Auth_wocman_cutomer']);
		//end test parameters

		if (isset($_SESSION['routes_Auth_wocman_'.$x[3]])?$_SESSION['routes_Auth_wocman_'.$x[3]]:'' ==  constant('routes_Auth_wocman_'.$x[3])) {
			
		}else{
			echo json_encode(['wocman_status' => "Auth failure",]);
			return false;
		}
	}
	
	$field_string = '';
	$push = [];
	foreach ($_POST as $key => $value) {
		$field_string .= $key.'='.urlencode($value).'&';
		$field_strings = $key.'='.$value;
		array_push($push, $field_strings);
	}
	rtrim($field_string, '&');
	define("route", website_link."controller/?".$x[1]);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, route);
	if ($_SERVER['REQUEST_METHOD'] === 'POST' &&  trim($x[0]) === $_SERVER['REQUEST_METHOD']) {
		curl_setopt($ch, CURLOPT_POST, count($push));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $field_string);
		$result = curl_exec($ch);
		curl_close($ch);
	}elseif($_SERVER['REQUEST_METHOD'] === 'GET' &&  trim($x[0]) === $_SERVER['REQUEST_METHOD']){
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 3);
		$result = curl_exec($ch);
		curl_close($ch);
		echo $result;
	}else{
		echo json_encode(['wocman_status' => "Invalid route",]);
	}
}else{
	echo json_encode(['wocman_status' => "Route Does Not Exist",]);
}
?>