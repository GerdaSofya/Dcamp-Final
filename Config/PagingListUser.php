<?php 
require_once("Connection.php");
$start = 0;
$per_page = 5;
$page_counter=0;

if(isset($_GET['start'])){
$start = $_GET['start'];
$page_counter = $_GET['start'];
$start = ($start-1) * $per_page;
}

// query untuk menampilkan data pada tabel murid dengan batasan pagination
$q = "SELECT * FROM pengguna LIMIT $start, $per_page";
$query = $conn->prepare($q);
$query->execute();
$result = $query->fetchAll();

//menghitung jumlah total baris pada tabel murid
$count_query = "SELECT * FROM pengguna";
$query_jlh = $conn->prepare($count_query);
$query_jlh->execute();
$count = $query_jlh->rowCount();

//menghitung jumlah pagination dengan membagi jumlah baris dengan jumlah tampil data per halaman
$paginations = ceil($count / $per_page); //ceil fungsi pembulatan
?>