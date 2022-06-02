<?php

function prepare($input)
{
    return trim(htmlspecialchars($input));
}

/**********************************************************/

function validateEmail($email)
{
    if (empty($email)) {
        return 'email is required';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return 'email is not valid';
    }

    return true;
}

/**********************************************************/

function validatePassword($password)
{
    if (empty($password)) {
        return 'password is required';
    } else if (!gettype($password) == 'string') {
        return 'password must be string';
    } else if (strlen($password) < 6) {
        return 'minimum length is 6 characters';
    }

    return true;
}

/**********************************************************/
