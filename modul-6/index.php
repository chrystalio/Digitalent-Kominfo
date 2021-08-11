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
  <h1 class="text-center pt-4 text-white">INPUT FORMULIR BIODATA MAHASISWA</h1>
  <div class="container p-8">
    <form class="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nama Depan</label>
          <input type="text" class="form-control" id="inputNamaDepan">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Nama Belakang</label>
          <input type="text" class="form-control" id="inputNamaBelakang">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Alamat</label>
        <input type="text" class="form-control" id="inputAlamat" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputJenisKelamin">Jenis Kelamin</label>
        <select id="inputJenisKelamin" class="form-control">
          <option selected>Laki-Laki</option>
          <option>Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <div class="form-group">
          <label for="inputCity">Usia</label>
          <input type="number" class="form-control" id="inputUmur" min="17" max="25">
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
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