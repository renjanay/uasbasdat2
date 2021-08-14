<html>
<head>
  <title>Aplikasi Data Pegawai</title>
</head>
<body>
  <h1>Ubah Data Pegawai</h1>

  <?php
  // Load file koneksi.php
  include "koneksi.php";

  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id_karyawan = $_GET['id_karyawan'];

  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM t_karyawan WHERE id_karyawan=:id_karyawan");
  $sql->bindParam(':id_karyawan', $id_karyawan);
  $sql->execute();
  $data = $sql->fetch();
  ?>

  <form method="post" action="proses_ubah.php?id_karyawan=<?php echo $id_karyawan; ?>">
    <table cellpadding="8">
      <tr>
        <td>ID Pegawai</td>
        <td><input type="text" name="id_karyawan" value="<?php echo $data['id_karyawan']; ?>"></td>
      </tr>
      <tr>
        <td>Nama Pegawai</td>
        <td><input type="text" name="nama_karyawan" value="<?php echo $data['nama_karyawan']; ?>"></td>
      </tr>
      <tr>
        <td>No HP</td>
        <td><input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
        <?php
        if($data['gender'] == "L"){
          echo "<input type='radio' name='gender' value='L' checked='checked'> L";
          echo "<input type='radio' name='gender' value='P'> P";
        }else{
          echo "<input type='radio' name='gender' value='L'> L";
          echo "<input type='radio' name='gender' value='P' checked='checked'> P";
        }
        ?>
        </td>
      </tr>
      <tr>
        <td>ID Jabatan</td>
        <td><input type="text" name="id_jabatan" value="<?php echo $data['id_jabatan']; ?>"></td>
      </tr>
      <tr>
        <td>ID Tunjangan</td>
        <td><input type="text" name="id_tunjangan" value="<?php echo $data['id_tunjangan']; ?>"></td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>