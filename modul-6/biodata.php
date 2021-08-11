<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Form-Biodata</title>
</head>

<body>
    <?php
        $Nama_Depan = $_POST['inputNamaDepan'];
        $Nama_Belakang = $_POST['inputNamaBelakang'];
        $alamat = $_POST['inputAlamat'];
        $JK = $_POST['JK'];
        $umur = $_POST['inputUmur']
    ?>

    <div class="container biodata">
        <div class="card text-center">
            <div class="card-header bg-dark">
                <h4 class="text-white">DATA BIODATA MAHASISWA</h4>
            </div>
            <div class="card-body" style="text-align: left;" >
                <p class="card-text">Nama Lengkap : <?php echo $Nama_Depan . ' ' . $Nama_Belakang;?></p>
                <p class="card-text">Alamat : <?php echo $alamat; ?></p>
                <p class="card-text">Jenis Kelamin : <?php echo $JK;?></p>
                <p class="card-text">Umur : <?php echo $umur; ?></p>
            </div>
        </div>
        <!-- <div class="card"> -->
        <!-- <table border="0" width="100%" style="">
                <tbody>
                    <tr>
                        <td width="25%" valign="top" class="textt">Nama Lengkap</td>
                        <td width="2%">:</td>
                        <td style="color: #e9a7f9; font-weight:bold">Bayu Afrizatul Rizki</td>
                    </tr>
                    <tr>
                        <td class="textt">Alamat</td>
                        <td>:</td>
                        <td>Laki-Laki</td>
                    </tr>
                    <tr>
                        <td class="textt">Jenis Kelamin</td>
                        <td>:</td>
                        <td>Airmolek,Riau</td>
                    </tr>
                    <tr>
                        <td class="textt">Umur</td>
                        <td>:</td>
                        <td>31/08/1997</td>
                    </tr>
                </tbody>
            </table> -->
        <!-- </div> -->
    </div>



    <!-- JS - JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</body>

</html>