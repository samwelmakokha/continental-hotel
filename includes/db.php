<?php
$dbUsername = 'root';
$dbServername='localhost';
$dbPassword = '';
$dbName = 'continental';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

