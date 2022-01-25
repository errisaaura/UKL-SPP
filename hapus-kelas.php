
<?php
include 'koneksi.php';

$id_kelas = $_GET['id_kelas'];

$sql = "
    DELETE FROM kelas
    WHERE id_kelas = '" . $id_kelas . "';
";

    
$result = mysqli_query($conn, $sql);    
if($result){
    echo "
            <script>
                alert('data berhasil Dihapus');
                document.location.href = 'daftarKelas.php';
            </script>
        ";

}else{
    echo "
            <script>
                alert('Data Gagal Dihapus');
                
            </script>
        ";
    printf('Failed Delete Kelas: '.mysqli_error($conn));
    exit();
}
?>

