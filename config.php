<?php
  $dsn = "mysql:host=localhost;dbname=users";
  $user = "root";
  $password = "";

  
  try {
    $connect = new PDO($dsn, $password,$user);
    echo "Connecting to database";
  } catch (PDOException $e) {
    echo "Error connecting to database: ". $e->getMessage();
  }


?>