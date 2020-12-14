<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'id15664741_bookstore'); 
define('DB_USER','id15664741_root'); 
define('DB_PASSWORD',')x]2K_<JZD8<N0#3'); 

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
?>
