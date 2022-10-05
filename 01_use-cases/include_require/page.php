<?php
    $companyName = 'gregrossdev';
    require_once './math.php';
    $plus  = add(4, 5);
    $minus = subtract(9, 4);
?>

<?php include "./header.php"; ?>
<h1>Page</h1>
<h2>Require Once Math Output</h2>
<h3><?php echo 'add '. $plus ?></h3>
<h3><?php echo 'subtract '. $minus ?></h3>
<?php include "./footer.php"; ?>
