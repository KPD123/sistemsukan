<!--<?php
$error='';
include "linkdb.php";
if(isset($_POST['submit'])){

	$id = $_POST['id'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	$query = mysqli_query($linkdb, " SELECT * FROM login WHERE id='".$id."', password='".$password."' AND level='".$level."' ");

	if(mysqli_num_rows($query) == 0){
		$error = "Id atau Katalaluan adalah salah";			
	}

	else{

		session_start();
		$row = mysqli_fetch_assoc($query);

		$_SESSION['id']=$row['id'];
		$_SESSION['password']=$row['password'];
		$_SESSION['level']=$row['level'];

		if($row['level'] == "Admin" && $level=="1"){
			header("location: page_admin.php");
		}
		elseif ($row['level'] == "Pengguna" && $level="2"){
			header("location: page_pengguna.php");
		}
		else{
			$error = "Log masuk ke sistem gagal"
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>INDEX</title>
</head>
<body>
<center>
<h2>LOGIN to SISTEM MAKLUMAT PELAJAR</h2>
<p><h3>Insert your ID and PASSWORD</h3></p>
<form action="" method="post">
<label><h3>Id:</h3></label>
<input align="center" type="name" name="id" placeholder="Id here" required/>
<br>
<label><h3>Password:</h3></label>
<input align="center" type="password" name="password" placeholder="Password here" required/>
<br>
<label><h3>Choose:</h3></label>
	<select name="level" required/>
	<option value="1">Admin</option>
	<option value="2">Pengguna</option>
</select>
<br>
<br>
<button type="submit" name="submit">LOGIN</button>
<br/>
<br>

<?php
echo $error;
?>

</form>
<p><h3>Not register Yet?</h3></p>
<a href="daftar.php"><input type="submit" name="button" value="Register Here"></a>
</center>
</body>
</html>-->