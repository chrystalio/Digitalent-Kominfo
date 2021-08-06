<?php 
$nama = $_POST['nama'];
 
if($nama == ""){
	header("location:coba.php?nama=kosong");
}else{
	echo "Nama anda adalah ". $nama;
}
?>