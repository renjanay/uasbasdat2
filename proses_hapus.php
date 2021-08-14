<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data ID yang dikirim oleh index.php melalui URL
$id_karyawan = $_GET['id_karyawan'];
// Query untuk menghapus data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("DELETE FROM t_karyawan WHERE id_karyawan=:id_karyawan");
$sql->bindParam(':id_karyawan', $id_karyawan);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>