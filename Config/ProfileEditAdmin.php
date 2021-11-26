<?php
// <?php
//including the database connection file
// include("connection.php");

//getting id of the data from url
$id = $_GET['id'];
//updating the row from table
$sql = "SELECT * from pengguna WHERE id='$id'";
$data = $koneksi->query($sql);
$row = $data->fetch();
if (isset($_POST["submitform"])) {
  $dbusername = $_POST['username'];
  $dbnama = $_POST['name'];
  $dbpassword = $_POST['password'];
  $dbemail = $_POST['email'];
  $dbinstansi = $_POST['instansi'];
  $update = "UPDATE pengguna SET username='" . $dbusername . "', nama = '" . $dbnama . "', password='" . $dbpassword . "', email='" . $dbemail . "', instansi='" . $dbinstansi . "' WHERE id='$id' ";
  $koneksi->query($update);
  header("location:../View/AdminListUser.php");
}
