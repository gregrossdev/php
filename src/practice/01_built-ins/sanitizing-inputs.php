<?php

if (isset($_POST['submit'])) {

    // filter_input() - Sanitize inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // FILTER_SANITIZE_STRING - Convert string to string with only alphanumeric, whitespace, and the following characters - _.:/
    // FILTER_SANITIZE_EMAIL - Convert string to a valid email address
    // FILTER_SANITIZE_URL - Convert string to a valid URL
    // FILTER_SANITIZE_NUMBER_INT - Convert string to an integer
    // FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
    // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters
} ?>

<!-- php_self can be used for xss -->
<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
); ?>" method="POST">
    <div>
        <label>Name: </label>
        <input type="text" name="name">
    </div>
    <br>
    <?php echo $email; ?>
    <div>
        <label>Email: </label>
        <input type="email" name="email">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>