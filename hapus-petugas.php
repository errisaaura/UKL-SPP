
<?php
include 'koneksi.php';

$id_petugas = $_GET['id_petugas'];

$sql = "
    DELETE FROM petugas
    WHERE id_petugas = '" . $id_petugas . "';
";

    
$result = mysqli_query($conn, $sql);    
if($result){
    echo "
            <script>
                alert('data berhasil Dihapus');
                document.location.href = 'daftarPetugas.php';
            </script>
        ";

}else{
    echo "
            <script>
                alert('Data Gagal Dihapus');
                
            </script>
        ";
    printf('Failed Delete Petugas: '.mysqli_error($conn));
    exit();
}
?>

