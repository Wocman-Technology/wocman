<?php
/**
 * wocman
 *
 * Details: This file is part of the wocman technology file
 * Author: Ugbogu Justice, 08138184872
 *
*/
// $lifetime = "60000";
// session_set_cookie_params($lifetime);
session_start();

// Database information

// Database prefix
define("WOCMAN_PREFIX", "wokman_xcvfg67uuygh_");
define("WOCMAN_PREFIX_FILE", "xc4f_");
define("WOCMAN_SPLIT", "xxwocmanxx");
define('website_link', 'http://localhost/wocman/');
define('wocman_route', 'xma3874dsdsdAhsahsZXdfhjsd7ds7Aw2SAmnsdfjdskfj94853hhdke4es6gfsjdbkjS');
define('wocman_public', 'pub_tQWSy5678fdcvdsf434dfbvnv_woman');
define('wocman_secret', 'sec_ty5678fdcvdsdSFGfdfbvnv_wocman');
define('routes_Auth_wocman_admin', 'gfksfshjdnvxisdsdgrevv343432QWSDSsdfgsdfjkdfjd');
define('routes_Auth_wocman_cutomer', 'gfksfshjdnvxisdfhsdhfjkdmbsdFDGDFHGssd42312dfsddfsdZ');
define('routes_Auth_wocman_workman', 'gfksfshjdnv123AsdSwAQxisdfhsdhfjkdmbsdfgsdfjkdfjd');

define('wocman_token_column', 'wocmanVat2ooff_tokenXDF');

//db parameters
define('server', 'localhost');
define('serverDatabase', WOCMAN_PREFIX.'work');
define('serverUser', 'root');
define('serverPassword', '');

if(!defined('WOCMAN_DIR'))
{
 define('WOCMAN_DIR', dirname(dirname(__FILE__))."/");
}

$const = "constant";

$host = server;
$dbE = serverDatabase;
$user = serverUser;
$pass = serverPassword;


$tbl_temp = WOCMAN_PREFIX."temp";
$tbl_workmen = WOCMAN_PREFIX."workmen";
$tbl_services = WOCMAN_PREFIX."services";
$tbl_services_type = WOCMAN_PREFIX."service_type";
$tbl_workman_services_type = WOCMAN_PREFIX."workman_service_type";

$tbl_customer = WOCMAN_PREFIX."customer";
$tbl_wocman = WOCMAN_PREFIX."wocman";
$tbl_updater = WOCMAN_PREFIX."wocman_queries";

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
	include WOCMAN_DIR.'database/'.WOCMAN_PREFIX_FILE.'structure.php';

}

$exec_updater = "CREATE TABLE IF NOT EXISTS `$tbl_updater` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(225) NOT NULL,
    `query` text NOT NULL,
    `date` timestamp,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";
$mysqli->query($exec_updater);

$queries = array(
	'query_oo1' => 'CREATE TABLE IF NOT EXISTS '.$tbl_wocman.' (`id` int(11) UNSIGNED AUTO_INCREMENT,`email` varchar(225) NOT NULL,`name` varchar(225) NOT NULL,`phone` varchar(225) NOT NULL,`password` varchar(225) NOT NULL,`image` varchar(225)  NULL,`location` varchar(225) NOT NULL,`secret_key` varchar(225) NOT NULL,`date` timestamp,PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1'
);

foreach ($queries as $key => $value) {
	
	$search_query = $mysqli->query("SELECT * FROM `$tbl_updater` WHERE `title` = '$key' ");
	if ($search_query->num_rows < 1) {
		$mysqli->query($value);
		$mysqli->query("INSERT INTO `$tbl_updater`(`title`, `query`) VALUES('$key', '$value') ");
	}
}

function checkPastExistence($mysqli,$tbl,$columnName,$tblOld){
	$r = $mysqli->query("SHOW COLUMNS FROM `$tbl` LIKE '$columnName' ");
	if (!$r OR !$r->num_rows) {
		//do something here
		$mysqli->query("DROP TABLE `".$tblOld."` ");
		$mysqli->query("RENAME TABLE `".$tbl."` TO `".$tblOld."` ");
		$mysqli->query("CREATE TABLE IF NOT EXISTS `".$tbl."` (`id` int(11) NOT NULL AUTO_INCREMENT, `email` varchar(225) NOT NULL, `password` varchar(225) NOT NULL, `active` boolean, `fname` varchar(225) NULL, `lname` varchar(225) NULL, `uname` varchar(225) NULL, `phone` varchar(225) NULL, `country` varchar(225) NULL, `city` varchar(225) NULL, `image` varchar(225)  NULL, `qualification` varchar(225) NULL, `qualification_link` varchar(225) NULL,`secret_key` varchar(225)  NULL,`date` timestamp,`".wocman_token_column."` varchar(225) NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1");
	}
}

checkPastExistence($mysqli,$tbl_workmen,wocman_token_column,$tbl_workmen."_oldxs");
checkPastExistence($mysqli,$tbl_wocman,wocman_token_column,$tbl_wocman."_oldxs");
checkPastExistence($mysqli,$tbl_customer,wocman_token_column,$tbl_customer."_oldxs");

?>
