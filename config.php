<?php

// Session start
session_start();

// Page title
$title = "Le Agent";

//root
$root = "/ZadatakFinal/";


$host = "sql307.byethost8.com";
$username = "b8_20140851";
$password = "marko1234";
$database = "b8_20140851_bookme";

$db = new PDO("mysql:host=" . $host . ";dbname=" . $database,$username,$password);

?>

