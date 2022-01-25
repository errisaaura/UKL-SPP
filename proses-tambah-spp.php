<?php
if($_POST){
    $id_spp=$_POST['id_spp'];
    $angkatan=$_POST['angkatan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal']; 
    
    if(empty($id_spp)){
        echo "<script>alert('ID SPP tidak boleh kosong');location.href='tambah-spp.php';</script>";
 
    } elseif(empty($nominal)){
        echo "<script>alert('Nominal tidak boleh kosong');location.href='tambah-spp.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into spp (id_spp,angkatan, tahun, nominal) value ('".$id_spp."','".$angkatan."','".$tahun."','".$nominal."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Data SPP Siswa');location.href='daftarSpp.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Data SPP Siswa');location.href='tambah-spp.php';</script>";
        }
    }
}
?>