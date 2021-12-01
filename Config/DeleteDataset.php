<?php
include("Connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM dataset WHERE judul=:id";
$query = $koneksi->prepare($sql);
$query->execute(array(':id' => $id));

?><script>document.location="../View/UserProfil.php";</script>