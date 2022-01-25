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
    <h3 style="text-align: center;">Form Update Kelas</h3>
    <form action="proses-update-kelas.php?id_kelas=<?php echo $_GET['id_kelas']?>" method="post">
    
    <?php
    $sql = 'SELECT * FROM kelas WHERE id_kelas = '.$_GET['id_kelas'];
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    ?>
     <div class="mb-3">
        <span>ID KELAS : </span>
        <input type="text" name="id_kelas" value="<?php echo $data['id_kelas'] ?>" class="form-control">
    </div>
    <div class="mb-3">
        <span>NAMA KELAS : </span>
        <input type="text" name="nama_kelas" value="<?php echo $data['nama_kelas'] ?>" class="form-control">
    </div>
    <br>
    <div class="mb-3">
        <span>JURUSAN : </span>
        <input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>" class="form-control">
    </div>
    <br>
    <div class="mb-3">
        <span>ANGKATAN : </span>
        <input type="text" name="angkatan" value="<?php echo $data['angkatan'] ?>" class="form-control">
    </div>
    <br>
    <button type="submit" style="margin-left: 30px;" class="btn btn-primary">Update</button>
</form>
</body>
</html>