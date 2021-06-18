<?php 
// koneksi database
include"database/koneksi.php";
// menangkap data yang di kirim dari form
if(isset($_POST['update'])){
$id = $_POST['id'];    
$nama_buku = $_POST['nama_buku'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
ini_set('date.timezone', 'Asia/Jakarta');
$tanggal = date('Y-m-d H:i:s');
// menginput data ke database

mysqli_query($koneksi,"update tb_jual set nama_buku='$nama_buku', jumlah='$jumlah', harga='$harga', tanggal='$tanggal'  WHERE id='$id'");
}
header("location:main.php");
