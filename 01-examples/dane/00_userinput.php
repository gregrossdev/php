<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="00_userinput.php" method="GET">
  Username: <input type="text" name="username">
  <br />
  Age: <input type="text" name="age">
  <input type="submit">
</form>

<?php
  echo $_GET["username"]."<br />";
  echo $_GET["age"];
?>


</body>
</html>