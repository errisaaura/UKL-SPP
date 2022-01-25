<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Poppins';
        }
        .mb-3{
            padding-left: 20px;
            padding-right: 20px;
        }
        h3{
            margin-top: 20px;
            margin-bottom: 20px;
            text-decoration: underline grey 2px;
        }
    </style>
</head>
<body>
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
    <div class="col-md">
    <form action="" method="POST">
    <h3 style="text-align: center;">Form Tambah Transaksi</h3>
    <div class="mb-3">
            <span> Nama Petugas / Admin : </span>
            <select class="form-select form-select-sm" name="petugas" aria-label=".form-select-sm example">
                <option selected>--Pilih Petugas--</option> 
                <?php
                    // Kita akan ambil Nama Petugas yang ada pada tabel Petugas
                    $petugas = mysqli_query($conn, "SELECT * FROM petugas");
                    while($r = mysqli_fetch_assoc($petugas)){ ?>
                    <option value="<?= $r['id_petugas']; ?>"><?= $r['nama_petugas']; ?></option>
                <?php } ?>          </select></td> 
                
            </select>
        </div>
        <br>
        <div class="mb-3">
            <span> NAMA SISWA : </span>
            <select type="text" name="siswa" class="form-control">
                <?php
                        // Sekarang kita ambil NISN Siswa 
                        $siswa = mysqli_query($conn, "SELECT * FROM siswa");
                        while($r = mysqli_fetch_assoc($siswa)){ ?>
                        <option value="<?= $r['nisn']; ?>"><?= $r['nama']; ?></option>
                <?php } ?>          </select></td>
        </div>
        <br> 
        <div class="mb-3">
            <span> Tanggal Membayar :  </span>
                <input type="date" name="tgl"  placeholder="Tanggal / Bulan / Tahun" class="form-control">      
        </div>
        <br>
        <div class="mb-3">
            <span> SPP Bulan :   </span>
            <select type="text" name="bulan" class="form-control">
                <option selected>--Pilih Bulan--</option>
                <option>JANUARI</option>  
                <option>FEBRUARI</option> 
                <option>MARET</option> 
                <option>APRIL</option> 
                <option>MEI</option> 
                <option>JUNI</option>
                <option>JULI</option>
                <option>AGUSTUS</option>
                <option>SEPTEMBER</option>
                <option>OKTOBER</option>
                <option>NOVEMBER</option>
                <option>DESEMBER</option>
            </select>  
        </div>
        <br>
        <div class="mb-3">
            <span> SPP Tahun :   </span>
                <input type="int" name="tahun" class="form-control" placeholder="Ketik Tahun ">   
        </div>
        <br>
        <div class="mb-3">
            <span> Angkatan / Nominal yang harus dibayar : </span>
            <select class="form-select form-select-sm" name="spp" aria-label=".form-select-sm example"> 
                <?php
                    // Ambil juga data SPP
                    $spp = mysqli_query($conn, "SELECT * FROM spp");
                    while($r = mysqli_fetch_assoc($spp)){ ?>
                    <option value="<?= $r['id_spp']; ?>">
                    <?=  $r['angkatan'] ." | ".$r['nominal']; ?></option>
                    <?php } ?>        
            </select> 
        </div>
        <br>
        <div class="mb-3">
            <span> JUMLAH BAYAR : </span>
            <td><input type="text" name="jumlah" placeholder="1000000" class="form-control" >
        </div>
        <br>
        
        <button type="submit" style="margin-left: 30px;" class="btn btn-primary" name="simpan">Create </button>
    </form>
    </div>
    <div class="col-md"></div>
    </div>
</body> 
<!-- ini untuk tampilan formnya -->
</html>
<?php
// Kita simpan proses simpan datanya disini
if(isset($_POST['simpan'])){
    $petugas = $_POST['petugas'];
    $nama = $_POST['siswa'];
    $tgl = $_POST['tgl']; //tanggal membayarnya
    $bulan = $_POST['bulan']; //ini bayar bulan berapa
    $tahun = $_POST['tahun']; //ini bayar tahun berapa
    $spp = $_POST['spp'];
    // $cek = mysqli_query($conn, "SELECT * FROM pembayaran WHERE nama='$nama'");
    // $ambil = mysqli_fetch_assoc($cek);
    $jumlah = $_POST['jumlah'];
    // if($spp == $ambil['id_spp']){
    //     echo "<script>alert('Tahun spp tersebut sudah ada pada siswa');</script>";
    // }else{
    $s = mysqli_query($conn,"INSERT INTO pembayaran VALUES
                (NULL, '$petugas', '$nama', '$tgl', '$bulan', '$tahun', '$spp', '$jumlah')");
    // Arahkan ke menu transaksi
    if($s){
        echo "<script>alert('Sukses menambahkan Transaksi');location.href='daftarTransaksiPetugas.php'</script>";
    }else{
        echo "<script>alert('Gagal menambahkan transaksi');</scriplocation.href=>";
    }}
?>
