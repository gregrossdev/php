<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'greg');
define('DB_PASS', '123456');
define('DB_NAME', 'php_crash');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// echo 'Connected successfully';