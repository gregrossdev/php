<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>00-Form-Input</title>
    <style>
        body {
            width: 600px;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-items: center
        }
    </style>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <h2>Username:</h2>
    <input type="text" name="username">
    <br />
    <h2>Age:</h2>
    <input type="text" name="age">
    <input type="submit">
</form>

<div>
    <?php
        echo "<h1>" . $_GET["username"] . "</h1>";
        echo "<h1>" . $_GET["age"] . "</h1>";
    ?>
</div>

</body>
</html>
