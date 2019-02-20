<?php

$error='';
include "linkdb.php";
if(isset($_POST['submit']))

{
	$id = $_POST['id'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$query = mysqli_query($connection, "SELECT * FROM login WHERE id='$id', password='$password', AND level='$level' ");

	if(mysqli_num_rows($query) ==0)
	{
		$error = "Id atau Katalaluan adalah salah";
	}
	else
	{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['id']=$row['id'];
		$_SESSION['password']=$row['password'];
		$_SESSION['level']=$row['level'];

		if($row['level'] == "Admin" && $level=="1")
		{
			header("location: page_admin.php");
		}
		else if ($row['level'] == "Pengguna" && $level="2")
		{
			header("location: page_pengguna.php");
		}
		else
		{
			$error = "Log masuk ke sistem gagal";
		}
	}
}

?>-->
