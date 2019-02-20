<?php 
$host="localhost";
$user="root";
$passsword="123456";
$dbname="sistempelajar";

$con=mysqli_connect($host,$user,$passsword,$dbname);

if(!$con) {
	echo "tak connect";
}
else {
	echo "connect";
}

?>