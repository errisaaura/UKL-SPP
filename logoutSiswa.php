<?php 
    session_start();
    unset($_SESSION["nisn"]);
    unset($_SESSION["nama"]);
    unset($_SESSION["status_login"]);
    session_destroy();
    header("Location: loginSiswa.php");
?>