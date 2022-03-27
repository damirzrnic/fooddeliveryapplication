<?php

echo "I have no idea what I'm doing in this course.";

$servername = "localhost";
$username = "damirzrnic";
$password = "Hehexd123";
$schema = "todo";


try {
  $conn = new PDO("mysql:host=$servername;dbname=schema", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}





?>
