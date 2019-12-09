<?php

/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Justice
 *
 */

session_start();

// Database information

// Database prefix
define("WOCMAN_PREFIX", "wokman_xcvfg67uuygh_");
define("WOCMAN_PREFIX_FILE", "xc4f_");
define("WOCMAN_SPLIT", "xxwocmanxx");
define('website_link', 'http://localhost/wocman/');
define('wocman_route', 'xma3874dsdsdAhsahsZXdfhjsd7ds7Aw2SAmnsdfjdskfj94853hhdke4es6gfsjdbkjS');

if(!defined('WOCMAN_DIR'))
{
 define('WOCMAN_DIR', dirname(dirname(__FILE__))."/");
}

$dbE = WOCMAN_PREFIX."work";
$user = "root";
$host = "localhost";
$pass = "";


$tbl_temp = WOCMAN_PREFIX."temp";
$tbl_customer = WOCMAN_PREFIX."customer";
$tbl_workmen = WOCMAN_PREFIX."workmen";
$tbl_qualification = WOCMAN_PREFIX."qualification";
$tbl_location = WOCMAN_PREFIX."location";
$tbl_category = WOCMAN_PREFIX."category";
$tbl_work = WOCMAN_PREFIX."work";

$tbl_customer_workman = WOCMAN_PREFIX."customer_workman";
$tbl_category_workman = WOCMAN_PREFIX."category_workman";


$link = new mysqli($host,$user,$pass);
if (!$link) {
	die('Could not connect: ' . mysqli_error($link));
}
$db_selected = mysqli_select_db($link, $dbE);
if (!$db_selected) {
	$sql= "CREATE DATABASE $dbE";
	if (mysqli_query($link, $sql)) {
		$db=$dbE;
		$charset = 'utf8mb4';
		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
		$options = [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::ATTR_EMULATE_PREPARES => false, 
			];
				try {
					$pdo = new PDO($dsn, $user, $pass, $options);
				} catch (\PDOException $e) {
					throw new \PDOException($e->getMessage(), (int)$e->getCode());
					
				}
				

		$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
		$_SESSION['mysqli']=$mysqli;
		include WOCMAN_DIR.'database/'.WOCMAN_PREFIX_FILE.'structure.php';
	}else{
		die('Database not Found and could not Create new databse: ' . mysqli_error($link));
	}
}else{
	$db=$dbE;
	$charset = 'utf8mb4';
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	$options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false, 
		];
			try {
				$pdo = new PDO($dsn, $user, $pass, $options);
			} catch (\PDOException $e) {
				throw new \PDOException($e->getMessage(), (int)$e->getCode());
				
			}

	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
	$_SESSION['mysqli']=$mysqli;

}

?>
