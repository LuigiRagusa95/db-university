<?php
define('DB_NAME', 'db_university');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($connection->connect_error) die("failed to connect $connection->connect_error");
