<?php

require_once("Connection.php");

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $nama = $_POST['name'];
    // enkripsi password
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $instansi = $_POST['instansi'];

    // $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // $nama = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    // // enkripsi password
    // $password = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    // $instansi = filter_input(INPUT_POST, 'instansi', FILTER_SANITIZE_STRING);



    // $sql = "INSERT INTO pengguna ( email, username, password, nama, instansi, level) 
    //         VALUES ( $email, $username, $password, $nama, $instansi, 2)";
    // $stmt = $koneksi->query($sql);

    $sql = 'INSERT INTO pengguna(email, username, password, nama, instansi, level) 
    VALUES (:email, :username, :password, :nama, :instansi, 2) ';
    $stmt = $koneksi->prepare($sql);
    if ($stmt->execute([':email' => $email, ':username' => $username, ':password' => $password, ':nama' => $nama, ':instansi' => $instansi])) {
        $msg = 'Data inserted successfully';
        header("location: ../View/login.php");
    }

    // $params = array(
    //     ":email" => $email,
    //     ":username" => $username,
    //     ":password" => $password,
    //     ":nama" => $nama,
    //     ":instansi" => $instansi
    // );

    // $saved = $stmt->execute($params);


    // if ($stmt) echo "<script>
    // alert('Register Berhasil !');
    // document.location.href = '../View/Login.php';
    // </script>";;
}
