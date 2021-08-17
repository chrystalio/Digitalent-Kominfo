<?php

$server = "localhost";
$user = "root";
$pass = "";
$db_name = "pendaftaran_siswa_chrystalio";

$db = mysqli_connect($server, $user, $pass, $db_name);

if (!$db){
    die ("Failed Connect to database: " . mysqli_connect_error());
} else{
    // echo "Database terhubung!";
}

?>