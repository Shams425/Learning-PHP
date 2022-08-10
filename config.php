<?php
  $dsn = "mysql:host=localhost;dbname=users";
  $user = "root";
  $password = "";

  
  $userName = "Ahmed";
  try {
    $connect = new PDO($dsn, $password,$user);
    $sql = "SELECT * FROM users WHERE username LIKE '%$userName'";

    $connect -> execute($sql);
  } catch (PDOException $e) {
    echo "Error connecting to database: ". $e->getMessage();
  }


?>