<?php
if($_POST){
    $id_petugas = $_POST['id_petugas'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $nama_petugas=$_POST['nama_petugas'];
    $level=$_POST['level'];
  
    
    if(empty($username)){
        echo "<script>alert('Username petugas tidak boleh kosong');</script>";
 
    } elseif(empty($password)){
        echo "<script>alert('Password petugas tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into petugas (id_petugas,username, password, nama_petugas, level) value ('".$id_petugas."','".$username."','".$password."','".$nama_petugas."','".$level."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan petugas');location.href='daftarPetugas.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah-petugas.php';</script>";
        }
    }
}
?>