<?php
ob_start();

session_start();

define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'pravesh783');
define('DB_PASSWORD', 'Pravesh@123');
define('DB_NAME', 'cricket');

spl_autoload_register(function($class_name) {
	require $_SERVER['DOCUMENT_ROOT'] . '/Cricket-Score-Manageen-tSystem-master/admin/libs/' . $class_name . '.php';
});
?>