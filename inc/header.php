<?php
session_start();
<<<<<<< HEAD
//invoegen include database
require_once "inc/database.php";

=======
//controle of er is ingelogd
$file = str_replace(dirname($_SERVER['PHP_SELF']).'/', '', $_SERVER['PHP_SELF']);
$ingelogd = isset($_SESSION['ingelogd']) ? $_SESSION['ingelogd'] : false;

if (($file!='login.php') AND ($file!='authorisatie.php')) {
    if (!$ingelogd) {
        header('refresh:0;url=login.php');
        exit;
    }
} 
//invoegen include database
require_once "inc/database.php";
>>>>>>> 998c1e63b703550aa20fc3f73f5b85ab70008adc
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
=======
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Klantgegevens</title>
>>>>>>> 998c1e63b703550aa20fc3f73f5b85ab70008adc
</head>
<body>
    <div class="container">
        <?php
            //menu
            include 'inc/menu.php';
?>