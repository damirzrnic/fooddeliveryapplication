<?php

echo "I have no idea what I'm doing in this course";

$servername = "localhost";
<<<<<<< HEAD
$username = "todo";
$password = "todo";
$schema = "todo";
=======
$username = "root";
$password = "Hehexd123";
>>>>>>> 3d6b8a664cd5d8b77c6ca72eda5316746e8a6abf


try {
  $conn = new PDO("mysql:host=$servername;dbname=todo", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;









?>
