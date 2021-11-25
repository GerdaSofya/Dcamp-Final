<?php
$servername = "bqcvozq86rgzrsx3milt-mysql.services.clever-cloud.com";
$username = "ufmtfy1i6xcomm8i";
$password = "SGi7zHccgeiu5l5MkaAh";
$koneksi;

try {
    $conn = new PDO("mysql:host=$servername;dbname=bqcvozq86rgzrsx3milt", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $koneksi = $conn;
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
