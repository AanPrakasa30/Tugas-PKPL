<html>
<head>
  <title>ADMIN</title>
</head>
<body>
  <h1>Data Pelanggan</h1>
  <a href="index.php">HOME</a><br>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Nomor</th>
    <th>Nama</th>
    <th>Harga</th>
    <th>Tanggal</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php

  include "koneksi.php";


  $sql = $pdo->prepare("SELECT * FROM admin");
  $sql->execute(); 

  while($data = $sql->fetch()){ 
    echo "<tr>";
    echo "<td>".$data['nomor']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['harga']."</td>";
    echo "<td>".$data['tanggal']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>