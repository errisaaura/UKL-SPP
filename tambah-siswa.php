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
    <form action="proses-tambah-siswa.php" method="post">
         <h3 style="text-align: center;">Form Tambah Siswa</h3>
        <div class="mb-3">
            <span>NISN: </span>
            <input type="text" name="nisn" class="form-control" id="exampleInputID1" required>
        </div>
        <br>
        <div class="mb-3">
            <span>NIS : </span>
            <input type="text" name="nis" class="form-control" required>
        </div>
        <br>
        <div class="mb-3">
            <span> NAMA : </span>
            <input type="text" name="nama" class="form-control">
        </div>
        <br>
        <div class="mb-3">
            <span> KELAS : </span>
            <select class="form-select form-select-sm" name="id_kelas" aria-label=".form-select-sm example">
                <option selected>--Pilih Kelas--</option>  
                <?php 
                    include "koneksi.php";
                    $qry_kelas=mysqli_query($conn,"select * from kelas");
                    while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
                    }
                 ?>
            </select>
        </div>
        <br>
        <div class="mb-3">
            <span> ALAMAT : </span>
            <input type="text" name="alamat" class="form-control">
        </div>
        <br>
        <div class="mb-3">
            <span> TELEPON : </span>
            <input type="text" name="no_tlp" class="form-control">
        </div>
        <br>    
        <button type="submit" style="margin-left: 30px;" class="btn btn-primary">Create </button>
    </form>
    </div>
    <div class="col-md"></div>
    </div>
</body> 
<!-- ini untuk tampilan formnya -->
</html>
