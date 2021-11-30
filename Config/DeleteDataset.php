<?php
include("connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM dataset WHERE judul=:id";
$query = $koneksi->prepare($sql);
$query->execute(array(':id' => $id));

// header("Location:../View/UserProfil.php");
?><script>document.location="../View/UserProfil.php";</script>