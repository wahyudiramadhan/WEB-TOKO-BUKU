<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>TOKO BUKU</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="main.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                    </ul>
                    <hr>

                </div>
            </div>
            <div class="col py-3">
                <h3 class="text-center text-black-50">EDIT DATA TRANSAKSI PENJUALAN</h3>
                <hr>
                <main>
                    <div class="card-body">

                        <!-- =================== -->
                        <?php
                        include "database/koneksi.php";
                        $id = $_GET['id'];
                        $data = mysqli_query($koneksi, "SELECT * from tb_jual where id='$id'");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <!-- =================== -->
                            <form action="update.php" method="post">
                                <div class="mb-3">
                                    <label for="text1" class="col-sm-2 col-form-label">JUDUL BUKU</label>
                                    <div class="col-sm-5">
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $d['id']; ?>">
                                        <input type="text" name="nama_buku" class="form-control" value="<?php echo $d['nama_buku']; ?>">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="text1" class="col-sm-2 col-form-label">JUMLAH</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="jumlah" class="form-control" value="<?php echo $d['jumlah']; ?>">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="text1" class="col-sm-2 col-form-label">HARGA</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="harga" class="form-control" value="<?php echo $d['harga']; ?>">
                                    </div>
                                </div>
                                <button class="btn bg-warning ml-3 col-sm-1 text-white" type="submit" name="update">UPDATE</button>
                            </form>
                    </div>
                </main>
            <?php
                        }
            ?>

            </div>
        </div>
    </div>
</body>

</html>