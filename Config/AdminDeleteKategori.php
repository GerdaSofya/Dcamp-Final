<?php
include("Connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM kategori WHERE nama_kategori=:id";
$query = $koneksi->prepare($sql);
$query->execute(array(':id' => $id));

?><script>document.location="../View/AdminKategori.php";</script>