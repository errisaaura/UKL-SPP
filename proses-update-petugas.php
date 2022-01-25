<?php
    include 'koneksi.php';

    $id_petugas = $_GET['id_petugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama_petugas=$_POST['nama_petugas']; 
    $level=$_POST['level'];

    $sql = "
        UPDATE petugas SET username= '" . $username . "', password = '" . $password . "', nama_petugas = '" . $nama_petugas . "' , level = '".$level."'
        WHERE id_petugas = '" . $id_petugas . "';
    ";

    $result = mysqli_query($conn, $sql);
    

    if($result){
        echo 
        "<script>
            alert('Data Berhasil Diupdate!');
            document.location.href = 'daftarPetugas.php';
        </script>
        ";

    }else{
        echo 
        "<script>
            alert('Data Gagal Diupdate!');
        </script>
        ";
        printf('Failed update petugas: '.mysqli_error($conn));
        exit();
    }
?>