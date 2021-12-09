<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'Connection.php';

// menangkap data yang dikirim dari form login
if (isset($_POST['login'])) {
    $dbuser = $_POST['username'];
    $dbpass = $_POST['password'];
// menyeleksi data user dengan username dan password yang sesuai
    $login = $koneksi->query("select * from pengguna where username='$dbuser' and password='$dbpass'");

    $data = $login->fetch();

// cek apakah username dan password di temukan pada database
    if ($data > 0) {

        // cek jika user login sebagai admin
        if ($data->level== "1") {

            // buat session login dan username
            $_SESSION['username'] = $dbuser;
            $_SESSION['level'] = "1";

            // alihkan ke halaman dashboard admin
            header("location:../View/AdminBeranda.php");

            // cek jika user login sebagai user
        } else if ($data->level == "2") {

            // buat session login dan username
            $_SESSION['username'] = $dbuser;
			$_SESSION['id'] = $data->id;
            $_SESSION['level'] = "2";

            // alihkan ke halaman dashboard user
            header("location:../View/UserBeranda.php");

        } else {

            // alihkan ke halaman login kembali
            header("location:../View/login.php");
        }
    } else {
        echo '<script type="text/javascript">';
        echo ' alert("Username atau Password salah");';  //not showing an alert box.
        echo ' window.location.href = "../View/login.php";';
        echo '</script>'; 
    }
}
