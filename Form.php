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
      echo $_POST['firstName'];
      echo $_POST['lastName'];
    }
  ?>
</body>
</html>