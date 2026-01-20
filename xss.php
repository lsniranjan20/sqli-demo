<!DOCTYPE html>
<html>
<body>

<h3>XSS Demo</h3>

<form method="GET">
    Enter your name:
    <input type="text" name="name">
    <input type="submit">
</form>

<?php
if (isset($_GET['name'])) {
    echo "Hello " . $_GET['name'];
}
?>

</body>
</html>
