<?php 
include"database/koneksi.php";
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tb_jual where id='$id'");
header("location:main.php");
?>