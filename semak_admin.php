<?php

if(!isset($_SESSION['id'])) {
	die("Anda belum login");
	//MESEJ JIKA BELUM LOGIN
}

if($_SESSION['level']!="Admin") {
	die("Anda bukan Admin");
	//MESEJ ANDA BUKAN ADMIN
}

?>