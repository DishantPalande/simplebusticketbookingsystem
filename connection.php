<?php  
     	define('DB_SERVER', ' remotemysql.com');
	define('DB_USERNAME', 'KS7qDr6d3U');
	define('DB_PASSWORD', 'x46IbSltx1');
	define('DB_NAME', 'KS7qDr6d3U');

       	$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
