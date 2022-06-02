<?php

session_start();

if (isset($_SESSION['email_error'])) {
    echo $_SESSION['email_error'];
    unset($_SESSION['email_error']);
}

echo '<br/>';

if (isset($_SESSION['password_error'])) {
    echo $_SESSION['password_error'];
    unset($_SESSION['password_error']);
}
?>

<form method="post" action="loginHandler.php">
    <input type="email" name="email" placeholder="email" />
    <br />
    <input type="password" name="password" placeholder="password" />
    <br />
    <input type="submit" value="login" name="submit" />
</form>