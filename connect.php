<?php

//connections vars
$dsn = "mysql:host=localhost; dbname=testing";
$user = "root";
$password = "";
$options = array(
  // PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

//start connect
try {
    $database = new PDO($dsn, $user, $password, $options);

    echo "your are connected";

    $sql = "INSERT INTO names(email) VALUES('shams@gmail.com')";

    $database -> exec($sql);
    echo "Your are connected ". "<br>";
} catch (PDOException $e) {
    echo "failed to connect <br>" . $e -> getMessage() ;
}

// connect with MySQLi extension
$server_name = "localhost";
$user = "root";
$pass = "";

try {
    $connect = mysqli_connect($server_name, $user, $pass, "MySQLi_Testing");

    echo "Connected successfully.<br>";
} catch (mysqli_exception $e) {
    echo "Connect failed.<br>" . $e->message;
}
