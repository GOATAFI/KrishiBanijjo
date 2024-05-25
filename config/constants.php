<?php
//Start Session
session_start();

//Create constants to store non-repeating values
define('SITEURL','http://localhost/krishiBanijjo/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','agri-order');

//Execute Query and save data in db
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn)); // Pass $conn to mysqli_error()
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn)); // Pass $conn to mysqli_error()

?>