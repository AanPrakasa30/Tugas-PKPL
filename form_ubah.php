<html>
<head>
  <title>Form Update</title>
</head>
<body>
  <h1>Ubah Data Pelanggan</h1>

  <?php
  // Load file koneksi.php
  include "koneksi.php";


  $id = $_GET['id'];

  $sql = $pdo->prepare("SELECT * FROM admin WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>

  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
      <tr>
        <td>Nomor</td>
        <td><input type="text" name="no" value="<?php echo $data['nomor']; ?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
      </tr>
      <tr>
        <td>Tanggal</td>
        <td><input type="date" name="tanggal"><?php echo $data['tanggal']; ?></td>
      </tr>
    </table>

    <hr>
    <input type="submit" value="Ubah">
    <a href="admin.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>