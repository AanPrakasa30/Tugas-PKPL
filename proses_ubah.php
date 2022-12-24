<?php

include "koneksi.php";


$id = $_GET['id'];


$no = $_POST['no'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];

// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE admin SET nomor=:no, nama=:nama, harga=:harga, tanggal=:tanggal WHERE id=:id");
$sql->bindParam(':no', $no);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query

if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: admin.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>