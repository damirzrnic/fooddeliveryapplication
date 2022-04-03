<?php

echo "I have no idea what I'm doing in this course";

<<<<<<< HEAD
$servername = "localhost";
$username = "todo";
$password = "todo";
$schema = "todo";
=======
$servername = "sql11.freemysqlhosting.net";
$username = "sql11481792";
$password = "B14PRvaN5L";
$schema = "sql11481792";
>>>>>>> 7200b08be6a978648b2aeba551d8e375edcc14b5

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
