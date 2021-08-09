<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Selamat Datang</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="img/logo-kominfo-dts.png" alt="Logo-DTS">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">Partner</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Navbar -->

    <!-- Jumbotron -->
    <div class="container" style="padding-top: 120px; padding-left: 20px; padding-right: 20px;">
        <p class=" jumbotron text-white text-center" style="font-size: 28px;">Silahkan isi data diri anda di formulir bawah ini
        </p>
    </div>
    <!-- Akhir Jumbotron -->
    <!-- Garis Pembatas -->
    <div style="padding-top:2px; padding-left: 110px; padding-right: 110px">
        <hr class="mt-1 bg-white">
    </div>
    <!-- Akhir garis pembatas -->
    <?php 
	if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
		}
	}
	?>
    <!-- Form pendaftaran -->
        <div class="">
            <form action="cek.php" method="post">
                <h2 class="text-white text-center">Formulir Biodata Peserta</h2>
                <hr class="bg-light">
                <fieldset class="text-white">
                    <!-- Nama -->
                    <label for="name">Nama:</label>
                    <input type="text" class=" form-control form-control-sm" id="name" name="user_name" placeholder="Masukkan Nama Anda" required>
                    <!-- Jenis Kelamin -->
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                        <select>
                            <option>Pilih Jenis Kelamin</option>
                            <option value="0">Laki-Laki</option>
                            <option value="1">Perempuan</option>
                        </select>
                    <!-- Tanggal Lahir -->
                    <label for="tgl_lahir">Tanggal Lahir: </label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir Anda" required>
                    <!-- Umur -->
                    <label for="umur">Umur: </label>
                    <input type="number" name="" id="" min="15" max="30" placeholder="Masukkan Umur Anda" required>
                    <!-- Alamat -->
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="" cols="10" rows="2" placeholder="Masukkan Alamat Anda" required></textarea>
                    <!-- Pilihan peserta -->
                    <!-- <label for="jurusan">Pilihan jurusan:</label>
                    <select id="jurusan" name="jurusan">
                        <optgroup label="Silahkan Pilih Sesuai Minat Anda">
                            <option value="junior_web_dev">Junior Web Developer</option>
                            <option value="network_admin">Junior Network Administrator</option>
                            <option value="mobile_dev">Junior Mobile Programmer</option>
                            <option value="graphic_design">Junior Graphic Designer</option>
                            <option value="multimedia_designer">Intermediate Multimedia Designer</option>
                            <option value="animator">Intermediate Animator</option>
                            <option value="video_editor">Video Editor</option>
                            <option value="data_management">Data Management Staff</option>
                        </optgroup>
                    </select> -->
                </fieldset>
                <button type="submit" class="btn bg-primary btn-lg w-100 text-white">Kirim</button>
            </form>
        </div>
        <!-- Akhir Form Pendaftaran -->
    
    <!-- Akhir Pengumuman -->
    <br>
    <br>
    <!-- Footer -->
    <footer class="page-footer font-small text-white" style="background-color: #133B5C;">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://github.com/chrystalio" class="text-white">Chrystalio</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>