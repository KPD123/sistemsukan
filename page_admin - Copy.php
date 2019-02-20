<!DOCTYPE html>
<html>
<head>
	<title>PAGE ADMIN</title>

	<style>

	</style>
</head>
<body>

<?php

session_start();
if(!$_SESSION['id'])
{
	header("location: index.php");
}

include="semak_admin.php";

$query="select ic,nama,rumah_sukan from senarai";
$result=mysqli_query($con,$query);

?>

<table align="center" border="5">
<center><p><h1><b>SELAMAT DATANG KE PAGE ADMIN SISTEM MAKLUMAT PELJAR 2 SVM KPD</b></h1></p></center>
<center>SENARAI NAMA PELAJAR 2 SVM KPD</center>

	<td align="center" bgcolor="cyan">IC</td>
	<td align="center" bgcolor="cyan">NAMA</td>
	<td align="center" bgcolor="cyan">RUMAH SUKAN</td>
	<td align="center" bgcolor="red">UPDATE</td>
	<td align="center" bgcolor="red">DELETE</td>

<?php
while ($senarai=mysqli_fetch_array($result)) {
		$ic=$senarai["ic"];

	echo "<tr>";
	echo "<td>".$senarai["ic"]."</td>";
	echo "<td>".$senarai["nama"]."</td>";
	echo "<td>".$senarai["rumah_sukan"]."</td>";
	echo "<td>","<a href=\"update_pelajar.php?ic=$ic\">UPDATE</a>";
	echo "<td>","<a href=\"delete_pelajar.php?ic=$ic\">DELETE</a>";
	}

	echo "</tr>";
	echo "</table>";
	?>
</table>
<br><br>
<center>
	<button type="register" name="register"><a href="form_pelajar.php">DAFTAR PELAJAR</a></button>
	<br><br>
	<button a href="logout.php">LOG OUT</a></button>
</center>
</body>
</html>