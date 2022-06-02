<?php

session_start();

include 'helpers/functions.php';

if (isset($_POST['submit'])) {
    // $email = trim(htmlspecialchars($_POST['email'])); //before refactoring
    $email = prepare($_POST['email']); //after refactoring
    // $password = trim(htmlspecialchars($_POST['password'])); //before refactoring
    $password = prepare($_POST['password']); //after refactoring

    /////////////////////////////////////////

    //validation:
    //email:
    $email_valid = validateEmail($email);

    echo '<br/>';

    //password: 
    $password_valid = validatePassword($password);

    echo '<br/>';
    
    /////////////////////////////////////////

    if ($email_valid == true and $password_valid == true) {

        $password = sha1($password);
        // $password = md5($password); //another way

        //check user credentials in database:
        //for later....

        $_SESSION['email'] = $email;

        header('Location: dynamic.php');
    } else {
        if ($email_valid !== true)
            $_SESSION['email_error'] = $email_valid;
        if ($password_valid !== true)
            $_SESSION['password_error'] = $password_valid;
        header('Location: login.php');
    }
}
