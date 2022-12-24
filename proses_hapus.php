<?php

include "koneksi.php";


$id = $_GET['id'];


$sql = $pdo->prepare("DELETE FROM admin WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 

if($execute){ 
 
  header("location: admin.php"); 
}else{

  echo "Data gagal dihapus. <a href='admin.php'>Kembali</a>";
}
?>