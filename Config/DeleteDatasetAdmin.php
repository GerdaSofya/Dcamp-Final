<?php
//including the database connection file
include("connection.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$sql = "DELETE FROM dataset WHERE judul=:id";
$query = $koneksi->prepare($sql);
$query->execute(array(':id' => $id));

//redirecting to the display page (index.php in our case)
header("Location:../View/AdminBeranda.php");
?>