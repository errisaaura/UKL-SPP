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
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6> -->
                            <a href="tabelLaporan.php" onclick="window.print();" class="btn btn-primary btn-icon-split" >
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                
                                <span class="text">Cetak Laporan</span>
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
                                        
                                        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                               
                                            // Kita panggil tabel pembayaran
                                            // Setelah kita panggil, JOIN tabel yang ter relasi ke tabel pembayaran
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
                                            
                                            
                                        </tr>
                                        <?php $no++; } ?>
                                        
                                    

                                        
                                    
                                    </tbody>
                                </table>
    
                                            
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
        header("location: daftarLaporan.php");
    }
}
?>