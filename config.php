<?php
// Database credentials
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','stories');

//Connecting to database
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Checking connection
if($connection===false){
    die("ERROR: Could not connect.".mysqli_connect_error());
}
?>