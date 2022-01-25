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
    <h3 style="text-align: center;">Form Update Petugas</h3>
    <form action="proses-update-petugas.php?id_petugas=<?php echo $_GET['id_petugas'] ?>" method="post">
    <?php
    $sql = 'select * FROM petugas WHERE id_petugas = '.$_GET['id_petugas'];
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    ?>
    <div class="mb-3">
            <span>ID PETUGAS: </span>
            <input type="text" name="id_petugas" value="<?php echo $data['id_petugas'] ?>" class="form-control" id="exampleInputID1" required>
        </div>
        <br>
    <div class="mb-3">
        <span>USERNAME: </span>
        <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control">
        <div id="emailHelp" class="form-text">We'll never share your username Number with anyone else.</div>
    </div>
    <br>
    <div class="mb-3">
        <span>PASSWORD : </span>
        <input type="password" name="password" value="<?php echo $data['password'] ?>" class="form-control">
    </div>
    <br>
    <div class="mb-3">
        <span>NAMA : </span>
        <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>" class="form-control">
    </div>
    <br>
    <div class="mb-3">
        <span>LEVEL : </span>
        <input type="text" name="level" value="<?php echo $data['level'] ?>" class="form-control">
        
    </div>
    <br>
    <button type="submit" style="margin-left: 30px;" class="btn btn-primary">Update</button>
</form>
</body>
</html>