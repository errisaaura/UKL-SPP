<?php
    include 'koneksi.php';

    $id_kelas = $_GET['id_kelas'];
    $nama_kelas = $_POST['nama_kelas'];
    $jurusan = $_POST['jurusan'];
    $angkatan=$_POST['angkatan']; 

    $sql = "
        UPDATE kelas SET nama_kelas = '" . $nama_kelas . "', jurusan = '" . $jurusan . "', angkatan = '" . $angkatan . "'
        WHERE id_kelas = '".$id_kelas."';
    ";

    $result = mysqli_query($conn, $sql);
    

    if($result){
        echo 
        "<script>
            alert('Data Berhasil Diupdate!');
            document.location.href = 'daftarKelas.php';
        </script>
        ";

    }else{
        echo 
        "<script>
            alert('Data Gagal Diupdate!');
        </script>
        ";
        printf('Failed update kelas: '.mysqli_error($conn));
        exit();
    }
?>