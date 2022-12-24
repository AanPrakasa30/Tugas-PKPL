<html>
<head>
  <title>Form Create</title>
</head>
<body>
  <h1>Tambah Data Pelanggan</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>Nomor</td>
        <td><input type="text" name="no"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type="text" name="harga"></td>
      </tr>
      <tr>
        <td>tanggal</td>
        <td><input type="date" name="tanggal"></td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Simpan">
    <a href="admin.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>