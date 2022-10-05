<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];

    function add($num1, $num2) {
        return $num1 + $num2;
    }

    function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    function divide($num1, $num2) {
        return $num1 / $num2;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
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
    <h2>Num1:</h2>
    <input type="number" name="num1">
    <h2>Operator:</h2>
    <input type="text" name="operator">
    <h2>Num2:</h2>
    <input type="number" name="num2">
    <input type="submit">
</form>

<div>

    <h1>
        <?php
            if ($operator == "+") {
                echo add($num1, $num2);
            }
            elseif ($operator == "-") {
                echo subtract($num1, $num2);
            }
            elseif ($operator == "*") {
                echo multiply($num1, $num2);
            }
            elseif ($operator == "/") {
                echo divide($num1, $num2);
            }
            else {
                echo "Invalid Operator";
            }
        ?>
    </h1>

</div>

</body>
</html>
