<html>
<head>
  <title>Aplikasi Data Pegawai</title>
</head>
<body>
  <h1>Tambah Data Pegawai</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>ID Pegawai</td>
        <td><input type="text" name="id_karyawan"></td>
      </tr>
      <tr>
        <td>Nama Pegawai</td>
        <td><input type="text" name="nama_karyawan"></td>
      </tr>
      <tr>
        <td>No HP</td>
        <td><input type="text" name="no_hp"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
        <input type="radio" name="gender" value="L"> L
        <input type="radio" name="gender" value="P"> P
        </td>
      </tr>
      <tr>
        <td>ID Jabatan</td>
        <td><input type="text" name="id_jabatan"></td>
      </tr>
      <tr>
        <td>ID Tunjangan</td>
        <td><input type="text" name="id_tunjangan"></td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>