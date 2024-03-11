<?php

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

function getRandomPasswordWithoutRep($length)
{
    $allCharacters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%/()=?^*-_[]<>';
    $remainingCharacters = $allCharacters;
    $randomPassword = '';

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($remainingCharacters) - 1);
        $randCharacter = $remainingCharacters[$index];
        $randomPassword .= $randCharacter;

        $remainingCharacters = str_replace($randCharacter, '', $remainingCharacters);
    }

    return $randomPassword;
}
