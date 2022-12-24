<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$no = $_POST['no'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO admin(nomor, nama, harga, tanggal) VALUES(:nomor,:nama,:harga,:tanggal)");
$sql->bindParam(':nomor', $no);
$sql->bindParam(':nama', $nama);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':tanggal', $tanggal);
$sql->execute(); 

if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: admin.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>