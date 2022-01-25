<?php include 'koneksi.php' ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SPP.yuk</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="Dashboard-Admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Admin</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>
            <li class="nav-item">
                <a class="nav-link" href="daftarSiswa.php">
                    <i class="fas fa-users "></i>
                    <span> Siswa</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daftarPetugas.php">
                    <i class="fas fa-address-card"></i>
                    <span> Petugas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daftarKelas.php">
                    <i class="fas fa-clipboard-list"></i>
                    <span>  Kelas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daftarSpp.php">
                    <i class="fas fa-dollar-sign"></i>
                    <span>  SPP</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daftarTransaksi">
                    <i class="fas fa-money-check-alt"></i>
                    <span> Transaksi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="daftarLaporan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span> Laporan</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Divider -->
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logoutAdmin.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Data Transaksi</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6> -->
                            <a href="tambah-transaksi.php" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Transaksi</span>
                            </a>
                        </div>
                        <?php
                            $sql = 'SELECT * FROM `siswa` inner join kelas on kelas.id_kelas = siswa.id_kelas ;';
                            $result = mysqli_query($conn, $sql);
                        ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <td>No. </td>
                                        <td>Nama Petugas</td>
                                        <td>Nama Siswa</td>
                                        <td>Tanggal Membayar</td>
                                        <td>SPP Bulan</td>
                                        <td>SPP Tahun</td>
                                        <td>Nominal harus dibayar</td>
                                        <td>Jumlah yang dibayar</td>
                                        <td>Status</td>
                                        <td>Aksi</td>  
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <td>No. </td>
                                        <td>Nama Petugas</td>
                                        <td>Nama Siswa</td>
                                        <td>Tanggal Membayar</td>
                                        <td>SPP Bulan</td>
                                        <td>SPP Tahun</td>
                                        <td>Nominal harus dibayar</td>
                                        <td>Jumlah yang dibayar</td>
                                        <td>Status</td>
                                        <td>Aksi</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                            $sql = mysqli_query($conn, "SELECT * FROM pembayaran
                                            JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas 
                                            JOIN siswa ON pembayaran.nisn = siswa.nisn
                                            JOIN spp ON pembayaran.id_spp = spp.id_spp
                                            ORDER BY tgl_bayar ");
                                            $no = 1;
                                            while($r = mysqli_fetch_assoc($sql)){ ?>   
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $r['nama_petugas']; ?></td>
                                            <td><?= $r['nama']; ?></td>
                                            <td><?= $r['tgl_bayar']; ?></td>
                                            <td><?= $r['bulan_spp']; ?></td>
                                            <td><?= $r['tahun_spp'];?></td>
                                            <td><?= " Rp. " . $r['nominal']; ?></td>
                                            <td><?= $r['jumlah_bayar']; ?></td>
                                            <td>
                                            <?php
                                            // Jika jumlah bayar sesuai dengan yang harus dibayar maka Status LUNAS
                                            if($r['jumlah_bayar'] == $r['nominal']){ ?>
                                                            <font style="color: darkgreen; font-weight: bold;">LUNAS</font>
                                            <?php }else{ ?>                             BELUM LUNAS <?php } ?> </td>
                                            <td>
                                            <?php
                                                // Jika siswa ingin membayar lunas sisa pembayaran
                                                if($r['jumlah_bayar'] == $r['nominal']){ echo "-";
                                                }else{ ?>
                                                    <a href="?lunas&id=<?= $r['id_pembayaran']; ?>">BAYAR LUNAS</a>
                                            <?php } ?>  </td> 
                                        </tr>
                                        <?php $no++; } ?>
                                        
                                    

                                        
                                    
                                    </tbody>
                                </table>
                                    
                                            <hr />
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logoutAdmin.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
<?php
    // Ada siswa yang ingin membayar sisa pembayaran
if(isset($_GET['lunas'])){
    $id = $_GET['id'];
    $ambilData = mysqli_query($conn, "SELECT * FROM pembayaran JOIN spp ON pembayaran.id_spp=spp.id_spp 
                               WHERE id_pembayaran = '$id'");
    $row = mysqli_fetch_assoc($ambilData);
    $sisa = $row['nominal'] - $row['jumlah_bayar'];
    $hasil = $row['jumlah_bayar'] + $sisa;
    $update = mysqli_query($conn, "UPDATE pembayaran SET jumlah_bayar='$hasil' WHERE id_pembayaran='$id'");
    if($update){
        header("location: daftarTransaksi.php");
    }
}
?>