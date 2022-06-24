<?php

echo "I have no idea what I'm doing in this course";

<<<<<<< HEAD
$servername = "localhost";
$username = "damirzrnic";
$password = "localhost";
$schema = "damirzrnic";
=======
$servername = "sql11.freemysqlhosting.net";
$username = "sql11481792";
$password = "B14PRvaN5L";
$schema = "sql11481792";
>>>>>>> e74f9bc81261023678353d3028414a430d576f30

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
