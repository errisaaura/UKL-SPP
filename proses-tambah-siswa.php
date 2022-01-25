<?php
if($_POST){
    $nisn=$_POST['nisn'];
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $id_kelas=$_POST['id_kelas']; //ini pokok ngambil dr tabel kelas
    $alamat=$_POST['alamat'];
    $no_tlp= $_POST['no_tlp'];
    
    if(empty($nisn)){
        echo "<script>alert('NISN siswa tidak boleh kosong');location.href='tambah-siswa.php';</script>";
 
    } elseif(empty($nama)){
        echo "<script>alert('Nama siswa tidak boleh kosong');location.href='tambah-siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nisn,nis, nama, id_kelas, alamat, no_tlp) value ('".$nisn."','".$nis."','".$nama."','".$id_kelas."','".$alamat."','".$no_tlp."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='daftarSiswa.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah-siswa.php';</script>";
        }
    }
}
?>