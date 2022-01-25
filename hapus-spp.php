
<?php
include 'koneksi.php';

$id_spp = $_GET['id_spp'];

$sql = "
    DELETE FROM spp
    WHERE id_spp = '" . $id_spp . "';
";

    
$result = mysqli_query($conn, $sql);    
if($result){
    echo "
            <script>
                alert('data berhasil Dihapus');
                document.location.href = 'daftarSpp.php';
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

