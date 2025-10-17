<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['remember'])) {
        setcookie('username', $_POST['username'], time() + 86400);
    }
}
?>
<form method="post">
    Username: <input type="text" name="username" value="<?= $_COOKIE['username'] ?? '' ?>"><br>
    Remember Me: <input type="checkbox" name="remember"><br>
    <input type="submit" value="Login">
</form>

<?php
echo "Welcome " . ($_COOKIE['username'] ?? 'Guest');
?>
