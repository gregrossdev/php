<?php
    $people = $_POST["people"];
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

<form action="03-add-selections.php" method="POST">
    <h2>
        <input type="checkbox" name="people[]" value="Greg">
        <label>Person 1: Greg</label>
    </h2>
    <h2>
        <input type="checkbox" name="people[]" value="Tom">
        <label>Person 2: Tom</label>
    </h2>
    <h2>
        <input type="checkbox" name="people[]" value="Vern">
        <label>Person 3: Vern</label>
    </h2>
    <input type="submit">
</form>

<div>

        <?php
            echo "<h2>"."Selected people "."</h2>";
            foreach ($people as $i => $person) {
                echo "<h3>".$person."</h3>";
            }
        ?>
</div>

</body>
</html>
