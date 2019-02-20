<!--<?php
$error='';
include "linkdb.php";
if(isset($_POST['submit'])){

	$id=$_POST['id'];
	$password=$_POST['password'];
	$level=$_POST['level'];

#echo "SELECT * FROM login WHERE id='".$id."' AND password='".$password."'  ";
	$query=mysqli_query($linkdb,"SELECT * FROM login WHERE id='".$id."' AND password='".$password."'  ");
	 	
	 	if (mysqli_num_rows($query) ==0) {
	 		$error="log nama atau password adalah salah";
	 	}

	 	else{

	 		session_start();
	 		$row=mysqli_fetch_assoc($query);

			if ($row['status'] ==1) {
				
	 		$_SESSION['id']=$row['id'];
	 		$_SESSION['no_kp']=$row['no_kp'];
	 		$_SESSION['level']=$row['level'];
	 		$_SESSION['id_pengguna']=$row['id_pengguna'];

	 			if ($row['level']=="Admin") { //} && $level=="1") {
	 				header("location:page_admin.php");
	 			}
	 			elseif ($row['level']=="Pengguna") { //} && $level=="2") {
	 				header("location:page_Pengguna.php");
	 			}
	 			elseif ($row['level']=="Pelajar") { //} && $level=="3") {
	 				header("location:page_pelajar.php?no_kp=".$row['no_kp']);
	 			}
	 			else{
	 				$error="Log Masuk ke Sistem Gagal";
	 			}
	 		}

	 		else{
	 			$error="pengguna tidak aktif";
	 		}
		}
}
#echo "out";
?>
<!DOCTYPE html>
<html>
<head>
	<title>SISTEM SALAH LAKU MURID KOLEJ VOKASIONAL SEPANG,SELANGOR</title>
</head>
<body>
<center>
	<h3>Log Masuk Sistem Salah Laku Murid<br>KOLEJ VOKASIONAL SEPANG,DENGKIL,SELANGOR</h3>
	<p>Masukkan log nama dan password</p>

	<form class="" action="" method="post">
		<label>Log Nama: </label><input type="text" name="id" required/><br>
		<label>password: </label><input type="password" name="password" required/><br>
		<label>level: </label>
				<input type="text" readonly value="<?php echo$_GET['level']; ?>" name="level" required/>

			<select name="level">
				<option value="">Pilihan Pengguna</option>
				<option value="1" <?php if($_GET['level']=="Admin"){?> selected <?php } ?> >Admin</option>
				<option value="2" <?php if($_GET['level']=="Pengguna"){?> selected <?php } ?> >Pengguna</option>
				<option value="3" <?php if($_GET['level']=="Pelajar"){?> selected <?php } ?> >Pelajar</option>
			</select>--><br>
		<button type="submit" name="submit">Log Masuk</button><br/>
        <!--<?php echo $error; ?>
       </form>
        <?php if($_GET['level']=="Admin" || $_GET['level']=="Pengguna" ){ ?>
	<b>Belum Berdaftar?</b><br><a href="daftar.php?level=<?php echo$_GET['level']; ?>">Daftar di sini</a>

	<?php
	}
	?>

	<br><a href="index.php">Halaman Utama</a>
</center>
</body>
</html>-->