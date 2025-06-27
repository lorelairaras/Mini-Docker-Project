<?php
$host = "sql";
$user = "root";
$password = "password";
$database = "team5docker";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Database connected successfully";
