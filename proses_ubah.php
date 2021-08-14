<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id_karyawan = $_GET['id_karyawan'];

// Ambil Data yang Dikirim dari Form
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$id_jabatan = $_POST['id_jabatan'];
$id_tunjangan = $_POST['id_tunjangan'];

// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE TO t_karyawan SET id_karyawan=:id_karyawan, nama_karyawan=:nama_karyawan, no_hp=:no_hp,
email=:email, alamat=:alamat, ,gender=:gender , id_jabatan=:id_jabatan , id_tunjangan=:id_tunjangan  WHERE id_karyawan=:id_karyawan");
$sql->bindParam(':id_karyawan', $id_karyawan);
$sql->bindParam(':nama_karyawan', $nama_karyawan);
$sql->bindParam(':no_hp', $no_hp);
$sql->bindParam(':email', $email);
$sql->bindParam(':alamat', $alamat);
$sql->bindParam(':gender', $gender);
$sql->bindParam(':id_jabatan', $id_jabatan);
$sql->bindParam(':id_tunjangan', $id_tunjangan);
$execute = $sql->execute(); // Eksekusi / Jalankan query

if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>