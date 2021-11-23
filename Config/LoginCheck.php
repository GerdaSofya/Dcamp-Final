<?php
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'Connection.php';
 
// menangkap data yang dikirim dari form login
$dbuser = $_POST['username'];
$dbpass = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = $koneksi->query("select * from pengguna where username='$dbuser' and password='$dbpass'");
// menghitung jumlah data yang ditemukan
// $cek = $koneksi->execute($login);
$data = $login->fetch();
// cek apakah username dan password di temukan pada database
if($data > 0){
 
	
 
	// cek jika user login sebagai admin
	if($data['level']=="1"){
 
		// buat session login dan username
		$_SESSION['username'] = $dbuser;
		$_SESSION['level'] = "1";
		// alihkan ke halaman dashboard admin
		header("location:../index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $dbuser;
		$_SESSION['level'] = "2";
		// alihkan ke halaman dashboard pegawai
		header("location:../index.php");
 
	
	}else{
 
		// alihkan ke halaman login kembali
		header("location:../View/login.php");
	}	
}else{
	header("location:../View/login.php");
}
 
?>