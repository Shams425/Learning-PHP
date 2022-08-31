<?php
  $data_base = "users";
  $user = "root";
  $password = "";

  
  $userName = "Ahmed";
  try {
    $connect = mysqli_connect("localhost", $user, $password, $data_base);
    $sql = "SELECT * FROM users WHERE username LIKE '%$userName'";

    $connect -> execute($sql);
  } catch (PDOException $e) {
    echo "Error connecting to database: ". $e->getMessage();
  }


?>
