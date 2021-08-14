<html>
<head>
  <title>Aplikasi Data Pegawai</title>
</head>
<body bgcolor=#FFFAF0>

  <center>
  <h1>Data Pegawai PT. Makmur Sejahtera</h1>
</center>

<?php 
require_once'koneksi.php';
?>

<form method="post">
<input type="text" name="cari" placeholder="cari ...">
<input type="submit" name="submit" value="cari">
<form>
<br/>
<br/>

  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>ID Karyawan</th>
    <th>Nama Karyawan</th>
    <th>No. HP</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Gender</th>
    <th>ID Jabatan</th>
    <th>ID Tunjangan</th>
    <th colspan="2">Aksi</th>
  </tr>

  <?php
  // Include / load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data karyawan
  $sql = $pdo->prepare("SELECT * FROM t_karyawan");
  $sql->execute(); // Eksekusi querynya

  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['id_karyawan']."</td>";
    echo "<td>".$data['nama_karyawan']."</td>";
    echo "<td>".$data['no_hp']."</td>";
    echo "<td>".$data['email']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['gender']."</td>";
    echo "<td>".$data['id_jabatan']."</td>";
    echo "<td>".$data['id_tunjangan']."</td>";
    echo "<td><a href='form_ubah.php?id_karyawan=".$data['id_karyawan']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id_karyawan=".$data['id_karyawan']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>

  <?php if (ISSET($_POST['submit'])){}
 $cari = $_POST['cari'];
 $query2 = "SELECT * FROM t_karyawan WHERE nama_karyawan LIKE '%$cari%'";
 
 $sql = mysqli_query($conn, $query2);
 while ($r = mysqli_fetch_array($sql)){}
  ?>
</body>
</html>
