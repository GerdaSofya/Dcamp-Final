<?php
require_once("Connection.php");

if (!empty($_POST["useredit_ds"])) {
    $tgl = date('Y-m-d');
    $pdo_statement = $koneksi->prepare(
        "UPDATE dataset SET 
        judul='" . $_POST['inpJudul'] . "',
        deskripsi='" . $_POST['inpDeskripsi'] . "',
        sumber='" . $_POST['inpSumber'] . "',
        jumlah_data='" . $_POST['inpJlhData'] . "',
        waktu='" . $tgl . "',
        link_download='" . $_POST['inpLinkData'] . "',
        kategori_id='" . $_POST['inpKategori'] . "' 
        WHERE id='" . $_POST['id_dataset'] . "'"
    );
    $result = $pdo_statement->execute();
    if ($result) {
        header('location: ../View/UserProfil.php');
    }
}
