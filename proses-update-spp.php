<?php
    include 'koneksi.php';

    $id_spp = $_GET['id_spp'];
    $angkatan = $_POST['angkatan'];
    $tahun = $_POST['tahun'];
    $nominal=$_POST['nominal']; 


    $sql = "
        UPDATE spp SET angkatan= '" . $angkatan . "', tahun = '" . $tahun . "', nominal = '" . $nominal . "' 
        WHERE id_spp = '" . $id_spp . "';
    ";

    $result = mysqli_query($conn, $sql);
    

    if($result){
        echo 
        "<script>
            alert('Data Berhasil Diupdate!');
            document.location.href = 'daftarSpp.php';
        </script>
        ";

    }else{
        echo 
        "<script>
            alert('Data Gagal Diupdate!');
        </script>
        ";
        printf('Failed update student: '.mysqli_error($conn));
        exit();
    }
?>