<?php
    $num1 = $_GET["n1"];
    $num2 = $_GET["n2"];
?>

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

<form action="01-simple-calculator.php" method="GET">
    <h2>Number 1:</h2>
    <input type="number" name="n1">
    <p>+</p>
    <h2>Number 2:</h2>
    <input type="number" name="n2">
    <input type="submit">
</form>

<div>
    <h1>
        <?php
            echo $num1 + $num2;
        ?>
    </h1>
</div>

</body>
</html>
