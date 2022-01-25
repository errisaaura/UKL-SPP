<?php 
    if($_POST){
        $nisn=$_POST['nisn'];
        // $nis=$_POST['nis'];
        $nama=$_POST['nama'];
        if(empty($nisn)){
            echo "<script>alert('NISN Siswa tidak boleh kosong');location.href='loginSiswa.php';</script>";
        } elseif(empty($nama)){
            echo "<script>alert('Nama Siswa tidak boleh kosong');location.href='loginSiswa.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from siswa where nisn = '".$nisn."' and nama = '".$nama."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['nisn']=$dt_login['nisn'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['status_login']=true;
                header("location: Dashboard-Siswa.php");
                
                
            } else {
                echo "<script>alert('NISN dan Nama tidak benar');location.href='loginSiswa.php';</script>";
            }
        }
    }
?>
