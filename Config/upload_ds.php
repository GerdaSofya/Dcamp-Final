<?php
include 'Connection.php';

session_start();
$msg = '';
if (isset($_POST['upload_ds'])) {
    $judul = $_POST['inpJudul'];
    $deskripsi = $_POST['inpDeskripsi'];
    $sumber = $_POST['inpSumber'];
    $jumlah_data = $_POST['inpJlhData'];
    $link_download = $_POST['inpLinkData'];
    $id_pengguna = $_SESSION['id'];
    $kategori = $_POST['inpKategori'];

    $select = "SELECT * FROM dataset where judul ='$judul'";
    $stmt = $koneksi->query($select);
    $row = $stmt->fetch();
    if ($row->judul > 0){
      echo '<script type="text/javascript">';
      echo ' alert("Judul sudah ada");';  //not showing an alert box.
      echo ' window.location.href = "../View/UserProfil.php";';
      echo '</script>';  
    }
    else{
        $sql = 'INSERT INTO dataset(judul, deskripsi, sumber, jumlah_data, waktu, link_download, pengguna_id, kategori_id) VALUES (:inpJudul, :inpDeskripsi, :inpSumber, :inpJlhData, now(), :inpLinkData, :id, :inpKategori) ';
        $stmt = $koneksi->prepare($sql);
        if ($stmt->execute([':inpJudul' => $judul, ':inpDeskripsi' => $deskripsi, ':inpSumber' => $sumber, ':inpJlhData' => $jumlah_data, ':inpLinkData' => $link_download, ':id' => $id_pengguna, ':inpKategori' => $kategori])) {
            $msg = 'Data inserted successfully';
            header("location: ../View/UserProfil.php");
        }
    }
}
