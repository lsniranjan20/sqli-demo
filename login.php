
<?php
$conn = mysqli_connect("localhost", "testuser", "test123", "testdb");

if (!$conn) {
    die("Connection failed");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "LOGIN SUCCESS";
    } else {
        echo "LOGIN FAILED";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="text" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>
