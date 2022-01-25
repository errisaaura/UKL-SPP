
<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='loginAdmin.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='loginAdmin.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from petugas where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                if($dt_login['level']=="admin"){
                    session_start();
                    $_SESSION['username']=$dt_login['username'];
                    $_SESSION['password']=$dt_login['password'];
                    $_SESSION['level']="admin";
                    echo"<script>alert('Sukses login ke dashboard admin'); location.href='Dashboard-Admin.php';</script>";
                    }elseif($dt_login['level']=="petugas"){
                    session_start();
                    $_SESSION['username']=$dt_login['username'];
                    $_SESSION['password']=$dt_login['password'];
                    $_SESSION['level']="petugas";
                    echo"<script>alert('Sukses login ke dashboard petugas'); location.href='Dashboard-Petugas.php';</script>";

                    }
                // session_start();
                // $_SESSION['id_petugas']=$dt_login['id_petugas'];
                // $_SESSION['nama_petugas']=$dt_login['nama_petugas'];
                // $_SESSION['level']=$dt_login['level'];
                
                // $_SESSION['status_login']= true;
            
                // if($_SESSION['level']=='admin'){
                //     header("location: Dashboard-Admin.php");
                // }elseif($_SESSION['level']=='petugas'){
                //     header("location: Dashboard-Petugas.php");
                    
                // }
                
            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='loginAdmin.php';</script>";
            }
        }
    }
?>
