<?php
include("Connection.php");

$id = $_GET['id'];
$judul = $_GET['judul'];

$sql = "DELETE FROM dataset WHERE judul=:judul";
$query = $koneksi->prepare($sql);
$query->execute(array(':judul' => $judul));
header('location: ../View/AdminProfil.php?id='.$id);
?>