<?php
    // Fungsi Perhitungan Luas Segitiga
    function alasSegitiga($alas, $tinggi){
        $luas = ($alas * $tinggi) /2;
        echo "Hasil hitung luas segitiga adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Alas Segitiga = $alas<br />";
        echo "Tinggi Segitiga = $tinggi<br />";
        echo "Maka luas segitiga sama dengan 1/2 ($alas x $tinggi) = $luas";
    }

    // Fungsi Dengan Parameter
    function pesanPembuka($toko, $salam){
        echo $salam. ", ";
        echo "Selamat Datang Di " .$toko."<br/>";
        echo "Selamat Berbelanja";
    }


    // Fungsi dengan Nilai Default
    function kalimatPembuka($nama_acara, $salam_pembuka){
        
        echo "$salam_pembuka, <br> ";
        echo "Selamat Datang di acara peresmian ". $nama_acara ."<br/>";
        echo "Semoga dengan rahmat tuhan YME Kegiatan kita dapat berjalan dengan lancar <br/>";
    }

    // Fungsi Yang Mengembalikan Nilai
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        echo "umur saya saat ini adalah " . $umur . " tahun";
    }

    // Fungsi Di Dalam Fungsi 
        // membuat fungsi
        function perkenalan($nama_mahasiswa, $salam_pembukaan){
            echo $salam_pembukaan;
            echo "Perkenalkan, nama saya ".$nama_mahasiswa ."<br/>";
            // memanggil fungsi lain
            echo "Saya berusia ". hitungUmur(2002, 2021) . " tahun <br>";
            echo "Senang berkenalan dengan anda<br/>";
        }

    // Fungsi rekursif
        function faktorial($angka) {
            if ($angka < 2) {
                return 1;
            } else {
            // memanggil dirinya sendiri
            return ($angka * faktorial($angka-1));
            }
        }
?>