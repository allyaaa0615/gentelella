<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start(); 
ob_start(); // Start output buffering

include "user.php";

$_SESSION['username'] = $_POST['username'];  
$_SESSION['password'] = $_POST['password'];  
$_SESSION['curTime'] = time(); // get the login time

$username = $_POST['username']; 
$password = $_POST['password']; 

$isValidUser = validatePassword($username, $password);

if ($isValidUser) {
    $userType = getUserType($username);

    if ($userType == 'ADMIN') {
        header("Location: ../main.php");
        exit();
    } else {
        header("Location: index.html");
        exit();
    }

    echo '<div class="w3-container" style="width:80%; margin:0 auto;">';
    echo "<center><br><br>Wrong Username or Password";
    echo '<br><br><span class="w3-right w3-padding w3-hide-large w3-large"><a href="../mainMenu.php">Try Again?</a></span>';
    echo '</center></div>';
}
?>
