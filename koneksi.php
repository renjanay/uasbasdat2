<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "karyawan"; // Nama databasenya
$conn = mysqli_connect("localhost","root","","karyawan");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
   }
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>