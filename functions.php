<?php
$passwordLength = $_GET['characters'];

function getRandomPassword($length)
{
    $allCharacters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%/()=?^*-_[]<>';
    $randomPassword = '';

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($allCharacters) - 1);
        $randomPassword .= $allCharacters[$index];
    }

    return $randomPassword;
}
