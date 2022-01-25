
<?php
include 'koneksi.php';

$nisn = $_GET['nisn'];

$sql = "
    DELETE FROM siswa
    WHERE nisn = '" . $nisn . "';
";

    
$result = mysqli_query($conn, $sql);    
if($result){
    echo "
            <script>
                alert('data berhasil Dihapus');
                document.location.href = 'daftarSiswa.php';
            </script>
        ";

}else{
    echo "
            <script>
                alert('Data Gagal Dihapus');
                
            </script>
        ";
    printf('Failed Delete Student: '.mysqli_error($conn));
    exit();
}
?>

