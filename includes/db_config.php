<?php

$host = "localhost";
$username = "root";
$password = "root";
$database = "forum";

try{
    $conn = new PDO("mysql:host=$host;port=3306;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

    echo 'ERROR: ' . $e->getMessage();
}
