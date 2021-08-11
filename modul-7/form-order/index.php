<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>

<body style="padding: 30px;">
	<div class="container" style="padding: 30px;">
		<form action="">
			<table class="table table-sm table-bordered table-responsive-lg table-hover">
				<h1 class="text-center">Aplikasi Kasir Javascript Sederhana</h1>
				<hr>
				<thead class="text-center text-white" style="background-color: #133B5C">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Makanan/Minuman</th>
						<th scope="col">Harga</th>
						<th scope="col">Jumlah Pemesanan</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<tr>
						<th scope="row">1</th>
						<td>Nasi Goreng</td>
						<td> Rp. <input type="text" name="harga1" value="12000" size="10" id="" readonly></td>
						<td>
							<center><input type="text" name="jumlah1" onchange="proses()" id="" size="10"
									style="text-align: center;"></center>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Ayam Bakar</td>
						<td> Rp. <input type="text" name="harga2" value="15000" size="10" id="" readonly></td>
						<td>
							<center><input type="text" name="jumlah2" onchange="proses()" id="" size="10"
									style="text-align: center;"></center>
						</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Ayam Penyet</td>
						<td> Rp. <input type="text" name="harga3" value="18000" size="10" id="" readonly></td>
						<td>
							<center><input type="text" name="jumlah3" onchange="proses()" id="" size="10"
									style="text-align: center;"></center>
						</td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Bakso Sapi</td>
						<td>Rp. <input type="text" name="harga4" value="10000" size="10" id="" readonly></td>
						<td>
							<center><input type="text" name="jumlah4" onchange="proses()" id="" size="10"
									style="text-align: center;"></center>
						</td>
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Teh Obeng</td>
						<td>Rp. <input type="text" name="harga5" value="5000" size="10" id="" readonly></td>
						<td>
							<center><input type="text" name="jumlah5" onchange="proses()" id="" size="10"
									style="text-align: center;"></center>
						</td>
					</tr>
					<tr>
						<th scope="row">6</th>
						<td>Milo Es</td>
						<td> Rp. <input type="text" name="harga6" value="8000" size="10" id="" readonly></td>
						<td>
							<center><input type="text" name="jumlah6" onchange="proses()" id="" size="10"
									style="text-align: center;"></center>
						</td>
					</tr>
					<tr>
						<th scope="row">7</th>
						<td>Kopi O</td>
						<td> Rp. <input type="text" name="harga7" value="5000" size="10" id="" readonly></td>
						<td>
							<center><input type="text" name="jumlah7" onchange="proses()" id="" size="10"
									style="text-align: center;"></center>
						</td>
					</tr>
					<tr>
						<td colspan=3 align="right" class"">JUMLAH TOTAL</td>
						<td>
							<center>Rp. <input type="text" name="total" size="12" style="text-align:center" readonly>
							</center>
						</td>
						</td>
					<tr>
						<td colspan=3 align="right">DISKON</td>
						<td>
							<center>Rp. <input type="text" name="potongan" size="12" style="text-align:center" readonly>
							</center>
						</td>
						</td>
					<tr>
						<td colspan=3 align="right">JUMLAH BAYAR</td>
						<td>
							<center>Rp. <input type="text" name="bayar" size="12" style="text-align:center" readonly>
							</center>
						</td>
						</td>
				</tbody>
			</table>
			<br>
			<center class="pb-4 "><button type="button" class="btn btn-primary btn-block" value="BATAL" onclick="batal()">Batal</button></center>
		</form>
		<footer class="text-center">Made With ❤️ By <a href="https://github.com/chrystalio">Chrystalio</a></footer>
	</div>
	
	<script src="app.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>

</html>