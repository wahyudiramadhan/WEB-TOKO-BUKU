<?php 
// koneksi database
include"database/koneksi.php";
// menangkap data yang di kirim dari form
if(isset($_POST['tambah'])){
$nama_buku   = $_POST['nama_buku'];
$jumlah  = $_POST['jumlah'];
$harga   = $_POST['harga'];
ini_set('date.timezone', 'Asia/Jakarta');
$tanggal =date('Y-m-d H:i:s');


// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tb_jual VALUES('','$nama_buku','$jumlah','$harga','$tanggal')");
header("location:main.php");
}else{
    echo "gagal";
}
