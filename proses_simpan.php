<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$id_jabatan = $_POST['id_jabatan'];
$id_tunjangan = $_POST['id_tunjangan'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO t_karyawan(id_karyawan, nama_karyawan,no_hp, 
email, alamat, gender, id_jabatan, id_tunjangan)
VALUES(:id_karyawan,:nama_karyawan,:no_hp,:email,:alamat,:gender,:id_jabatan,:id_tunjangan)");
$sql->bindParam(':id_karyawan', $id_karyawan);
$sql->bindParam(':nama_karyawan', $nama_karyawan);
$sql->bindParam(':no_hp', $no_hp);
$sql->bindParam(':email', $email);
$sql->bindParam(':alamat', $alamat);
$sql->bindParam(':gender', $gender);
$sql->bindParam(':id_jabatan', $id_jabatan);
$sql->bindParam(':id_tunjangan', $id_tunjangan);
$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>