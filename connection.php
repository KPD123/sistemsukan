<?php

$host="localhost";
$user="root";
$password="123456";
$dbname="sistempelajar";
$con=mysqli_connect($host,$user,$password,$dbname);

if (!$con) {
	echo "not connected";
	
}
else {
	echo "connected";
}

?>
