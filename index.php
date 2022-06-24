<?php

echo "I have no idea what I'm doing in this course";

$servername = "sql11.freemysqlhosting.net";
$username = "sql11501824";
$password = "9elyEVMhZQ";
$schema = "sql11501824";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;









?>
