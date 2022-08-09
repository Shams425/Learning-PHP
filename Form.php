<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" Method="post">
    <label for="text">First Name</label>
    <input type="text" name="firstName">
    <label for="text">last Name</label>
    <input type="text" name="lastName">

  </form>
  <?php
    if(isset($_POST['firstName']) && $_POST['lastName']) {
      echo "<h2>" . $_POST['firstName'] . "</h2>";
      echo "<h2>" . $_POST['lastName'] . "</h2>";
    }
  ?>

  <form action="#" Method="GET">
    <label for="text">Email</label>
    <input type="mail" name="e-mail">
    <label for="text">Phone Number</label>
    <input type="number" name="phoneNum">
  </form>

  <?php
    if(isset($_GET['firstName']) && $_GET['lastName']) {
      echo "<h2>" . $_GET['e-mail'] . "</h2>";
      echo "<h2>" . $_GET['phoneNum'] . "</h2>";
    }
  ?>
  <form action="#">
    <label for="text">Email</label>
    <input type="password" name="password">
  </form>

  <?php
    if(isset($_POST['password'])) {
      echo "<h2>" . $_SESSION['password'] . "</h2>";
      echo "<h2>" . $_GET['firstName'] . "</h2>";
    }
  ?>
</body>
</html>