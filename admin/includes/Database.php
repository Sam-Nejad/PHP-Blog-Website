<?php

$servername = getenv("MYSQL_SERVICE_HOST");
$dBUsername = getenv("DATABASE_USER");
$dbPassword = getenv("DATABASE_PASSWORD");
$dbName = getenv("DATABASE_NAME");

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
