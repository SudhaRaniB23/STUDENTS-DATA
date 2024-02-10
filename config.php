<?php 
// server to connect to 
$server = "localhost"; 
 
// name of the database 
$database = "s_sburla"; 
 
// mysql username to access the database 
$db_user = "s_sburla"; 
 
// mysql password to access the database 
$db_pass = "depTNyR4"; 
 
//connect to mysql server 
$link = mysqli_connect($server, $db_user, $db_pass, $database) or die("Could not connect to Database because ".mysqli_connect_error()); 
?>
