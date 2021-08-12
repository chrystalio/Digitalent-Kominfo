<html>
<head>
    <title>Penggunaan Fungsi</title>
</head>
<body>
    <form action="hasil.php" method="POST">
    <h1>Form Hitung Luas Segitiga Dengan PHP</h1>
        <table>
            <tr>
                <td>Alas Segitiga</td>
                <td>:</td>
                <td><input type="text" name="alas" required></td>
            </tr>
            <tr>
                <td>Tinggi Segitiga</td>
                <td>:</td>
                <td><input type="text" name="tinggi" required ></td>
            </tr>
        </table>

        <hr>
        <h1>Form Pesan Pembuka</h1>
        <table>
            <tr>
                <td>Ucapan Salam</td>
                <td>:</td>
                <td><input type="text" name="salam" required></td>
            </tr>
            <tr>
                <td>Nama Toko</td>
                <td>:</td>
                <td><input type="text" name="toko" required ></td>
            </tr>
        </table>

        <hr>
        <h1>Form Kalimat Pembuka Acara</h1>
        <table>
            <tr>
                <td>Ucapan Salam</td>
                <td>:</td>
                <td><input type="text" name="salam_pembuka"></td>
            </tr>
            <tr>
                <td>Nama Acara</td>
                <td>:</td>
                <td><input type="text" name="acara" required ></td>
            </tr>
        </table>

        <hr>
        <h1>Form Penghitung Usia </h1>
        <table>
            <tr>
                <td>Tahun Lahir</td>
                <td>:</td>
                <td><input type="text" name="thn_lahir" required></td>
            </tr>
            <tr>
                <td>Tahun Sekarang</td>
                <td>:</td>
                <td><input type="text" name="thn_sekarang" required ></td>
            </tr>
        </table>

        <hr>
        <h1>Form Perkenalan (Fungsi Di Dalam Fungsi)</h1>
        <table>
            <tr>
                <td>Ucapan Salam</td>
                <td>:</td>
                <td><input type="text" name="salam_pembukaan"></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td><input type="text" name="nama_mahasiswa" required ></td>
            </tr>
        </table>

        <hr>
        <h1>Form Penghitung Bilangan Faktorial </h1>
        <table>
            <tr>
                <td>Masukkan Angka</td>
                <td>:</td>
                <td><input type="text" name="angka" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
</body>
</html>
