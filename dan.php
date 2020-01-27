<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('DB_SERV','localhost');
define('DB_USER','ojaymorg_zebra');
define('DB_PASS','zebrazebra321');
define('DB_BASE','ojaymorg_zebra2020');
define('DB_PORT','3306');

$db = new PDO('mysql:host='.DB_SERV.';dbname='.DB_BASE.';sslmode=require;port='.DB_PORT.';charset=utf8', DB_USER, DB_PASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
