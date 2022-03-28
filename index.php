<?php

echo "I have no idea what I'm doing in this course./n";

$servername = "127.0.0.1";
$username = "damirzrnic";
$password = "root";



try {
  $conn = new PDO("mysql:host=$servername;dbname=$fooddeliveryapp", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";



} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}





?>
