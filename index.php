<?php
session_start();
	if ($_SESSION) {
	if ($_SESSION['level']=="Admin")
	{
		header("Location: page_admin.php");
	}
	if ($_SESSION['level']=="Pengguna")
	{
		header("Location: page_pengguna.php");
	}
}
	include('login.php');

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
</html>
