<?php

// Session start
session_start();

// Page title
$title = "Le Agent";

//root

switch ($_SERVER["HTTP_HOST"]) {
	case 'localhost':
		$host = "localhost";
		$username = "marko";
		$password = "marko";
		$database = "bookme";
		$root = "/agent/";
		break;
	case 'markogracin.byethost8.com/Zadatak5':
		$host = "sql307.byethost8.com";
		$username = "b8_20140851";
		$password = "marko1234";
		$database = "b8_20140851_bookme";
		$root = "/ZadatakFinal/";
		break;
}

$db = new PDO("mysql:host=" . $host . ";dbname=" . $database,$username,$password);

?>

