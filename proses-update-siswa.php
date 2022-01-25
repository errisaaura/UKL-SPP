<?php
    include 'koneksi.php';

    $nisn = $_GET['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas=$_POST['id_kelas']; //ini pokok ngambil dr tabel kelas
    $alamat=$_POST['alamat'];
    $no_tlp= $_POST['no_tlp'];

    $sql = "
        UPDATE siswa SET nis= '" . $nis . "', nama = '" . $nama . "', id_kelas = '" . $id_kelas . "' , alamat = '".$alamat."' , no_tlp = '".$no_tlp."'
        WHERE nisn = '" . $nisn . "';
    ";

    $result = mysqli_query($conn, $sql);
    

    if($result){
        echo 
        "<script>
            alert('Data Berhasil Diupdate!');
            document.location.href = 'daftarSiswa.php';
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