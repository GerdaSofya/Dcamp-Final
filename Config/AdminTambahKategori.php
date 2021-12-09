<?php
include 'Connection.php';

session_start();
$msg = '';
if (isset($_POST['upkategori'])) {
    $judul = $_POST['namakategori'];

    $select = "SELECT * FROM kategori where nama_kategori ='$judul'";
    $stmt = $koneksi->query($select);
    $row = $stmt->fetch();
    if ($row->nama_kategori > 0){
      echo '<script type="text/javascript">';
      echo ' alert("Kategori sudah ada");';  //not showing an alert box.
      echo ' window.location.href = "../View/AdminKategori.php";';
      echo '</script>';  
    }
    else{
        $sql = 'INSERT INTO kategori(nama_kategori) VALUES (:judul) ';
        $stmt = $koneksi->prepare($sql);
        if ($stmt->execute(array(':judul' => $judul))) {
            $msg = 'Data inserted successfully';
            header("location: ../View/AdminKategori.php");
        }
    }
}