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
    <form action="proses-tambah-petugas.php" method="post">
         <h3 style="text-align: center;">Form Daftar Petugas</h3>
         <div class="mb-3">
            <span>ID PETUGAS: </span>
            <input type="text" name="id_petugas" class="form-control" id="exampleInputID1" required>
        </div>
        <br>
        <div class="mb-3">
            <span>USERNAME: </span>
            <input type="text" name="username" class="form-control" id="exampleInputID1" required>
        </div>
        <br>
        <div class="mb-3">
            <span>PASSWORD : </span>
            <input type="password" name="password" class="form-control" required>
        </div>
        <br>
        <div class="mb-3">
            <span> NAMA : </span>
            <input type="text" name="nama_petugas" class="form-control">
        </div>
        <br>
        <div class="mb-3">
            <span> LEVEL : </span>
            <select class="form-select form-select-sm" name="level" aria-label=".form-select-sm example">
                <option selected>--Pilih Level--</option>  
                <option>Petugas</option>
                <option>Admin</option>
            </select>
        </div>
        <br>    
        <button type="submit" style="margin-left: 30px;" class="btn btn-primary">Create</button>
    </form>
    </div>
    <div class="col-md"></div>
    </div>
</body> 
<!-- ini untuk tampilan formnya -->
</html>
