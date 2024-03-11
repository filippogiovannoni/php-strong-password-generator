<?php
// Start the session to access $_SESSION
session_start();
var_dump($_POST);
$charactersLength = $_POST['characters'];

include __DIR__ . '/functions.php';

if (!empty($charactersLength)) {
    var_dump('OK');

    var_dump($_SESSION);

    $_SESSION['length'] = $charactersLength;

    header('Location: ./success.php');
} else {
    var_dump('ERROR');
}
