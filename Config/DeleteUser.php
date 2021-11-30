<?php
include("connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM pengguna WHERE id=:id";
$query = $koneksi->prepare($sql);
$query->execute(array(':id' => $id));

?><script>document.location="../View/AdminListUser.php";</script>