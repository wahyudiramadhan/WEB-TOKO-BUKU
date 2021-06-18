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
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="logout.php" class=" btn-close-white btn bg-danger text-white" style="margin-top:500%;">LOG OUT </a>
                        </li>
                    </ul>
                    <hr>

                </div>
            </div>
            <div class="col py-3">
                <h3 class="text-center text-black-50">TRANSAKSI PENJUALAN</h3>
                <hr>
                <main>
                    <div class="card-body">
                        <form action="input.php" method="post">
                            <div class="mb-3">
                                <label for="text1" class="col-sm-2 col-form-label">JUDUL BUKU</label>
                                <div class="col-sm-5">
                                    <input type="text" name="nama_buku" class="form-control" placeholder="Masukan Judul Buku" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="text1" class="col-sm-2 col-form-label">JUMLAH</label>
                                <div class="col-sm-5">
                                    <input type="text" name="jumlah" class="form-control" placeholder="Masukan Jumlah" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="text1" class="col-sm-2 col-form-label">HARGA</label>
                                <div class="col-sm-5">
                                    <input type="text" name="harga" class="form-control" placeholder="Masukan Harga" required>
                                </div>
                            </div>
                            <button class="btn bg-success ml-3 col-sm-1 text-white" type="submit" name="tambah">Tambah</button>
                        </form>
                    </div>
                </main>
                <hr>
                <h5 class="text-center text-black-50">DATA TRANSAKSI</h5>
                <!-- lihat data transaksi -->
                <main>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">TANGGAL</th>
                                <th scope="col">JUDUL BUKU</th>
                                <th scope="col">JUMLAH</th>
                                <th scope="col">HARGA</th>
                                <th scope="col">TOTAL</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <?php
                        include "database/koneksi.php";
                        $data = mysqli_query($koneksi, "SELECT * from tb_jual");
                        $no = 1;
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td class="col-2"><?php echo $d['tanggal']; ?></td>
                                <td><?php echo $d['nama_buku']; ?></td>
                                <td><?php echo $d['jumlah']; ?>Pcs</td>
                                <td>Rp <?php echo $d['harga']; ?></td>
                                <td>Rp <?php echo $d['jumlah'] * $d['harga'];; ?></td>
                                <td>
                                    <a name="id" class="btn btn-warning fas fa-file text-light" href="edit.php?id=<?php echo $d['id']; ?>"> EDIT</a>
                                    <a name="id" class="btn btn-danger fas fa-file text-light" href="delete.php?id=<?php echo $d['id']; ?>"> HAPUS</a>


                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </main>

            </div>
        </div>
    </div>
</body>

</html>