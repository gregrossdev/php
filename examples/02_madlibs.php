<?php
    $color1 = $_GET["color1"];
    $color2 = $_GET["color2"];

    $colors = [
        1 => $color1,
        2 => $color2,
    ];
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
    <h2>Color 1:</h2>
    <input type="text" name="color1">
    <h2>Color 2:</h2>
    <input type="text" name="color2">
    <input type="submit">
</form>

<div>
    <h1>
        <?php
            echo "Roses are " . $colors['1'] . "</br>";
            echo "Violets are " .$colors['2'] ;
        ?>
    </h1>
</div>

</body>
</html>
