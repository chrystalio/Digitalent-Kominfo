<?php
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_siswa_chrystalio";

    $conn = mysqli_connect($host, $user, $pass, $db);
    echo "Sukses terhubung ke database!";
    if(!$conn){
        die("Gagal terhubung dengan Database :" . mysqli_connect_error());
    }

?>