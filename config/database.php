<?php
$host = 'localhost';
$port = 3307;
$user = 'root';
$pass = '';
$dbname = 'paskibra_db';

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}