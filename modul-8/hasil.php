<?php include 'func.php';?>
<html>
<head>
    <title>Hitung Luas Segitiga Menggunakan PHP</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $alas   = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $toko   = $_POST['toko'];
            $salam  = $_POST['salam'];
            $salam_pembuka = $_POST['salam_pembuka'];
            $nama_acara =   $_POST['acara'];
            $thn_lahir = $_POST['thn_lahir'];
            $thn_sekarang = $_POST['thn_sekarang'];
            $salam_pembukaan = $_POST['salam_pembukaan'];
            $nama_mahasiswa = $_POST['nama_mahasiswa'];
            $faktorial = $_POST['angka'];
        }

        echo '<h1>Hasil Hitung Luas Segitiga</h1>';
        echo alasSegitiga($alas, $tinggi);
        echo '<hr>';
        
        echo '<h1>Pesan Pembuka</h1>';
        echo  pesanPembuka($toko, $salam);
        echo '<hr>';
        
        echo '<h1>Kalimat Pembuka Acara</h1>';
        echo kalimatPembuka($nama_acara, $salam_pembuka);
        echo '<hr>';

        echo '<h1>Hasil Hitung Umur</h1>';
        echo hitungUmur($thn_lahir, $thn_sekarang);
        echo '<hr>';

        echo '<h1>Hasil Perkenalan (Membuat Fungsi Di Dalam Fungsi)</h1>';
        echo perkenalan($nama_mahasiswa, $salam_pembukaan);
        echo '<hr>';

        echo '<h1>Hasil Faktorial (Fungsi Rekursif)</h1>';
        echo faktorial($faktorial);
        echo '<hr>';

        
    ?>
    <hr>
    
    
</body>
</html>