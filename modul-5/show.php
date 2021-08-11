<!DOCTYPE html>
<html>

<head>
	<title>Biodata</title>
</head>

<body>
	<?php
  $npm=$_POST['NPM'];
  $Nama=$_POST['Nama'];
  $IPK=$_POST['IPK'];
  $Tahun=$_POST['Tahun'];
  $Bulan=$_POST['Bulan'];
  $jurusan=$_POST['jurusan'];
  $Tempat=$_POST['Tempat'];
  $Tgl=$_POST['Tgl'];
  $Bln=$_POST['Bln'];
  $Thn=$_POST['Thn'];
  $JK=$_POST['JK'];
  $alamat=$_POST['alamat'];
  $tentang=$_POST['tentang'];
 ?>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td>NPM</td>
			<td> <?php echo $npm ?> </td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td> <?php echo $Nama ?> </td>
		</tr>
		<tr>
			<td>Lama Study</td>
			<td> <?php echo $Tahun ?>Th,<?php echo $Bulan ?>Bl </td>
		</tr>
		<tr>
			<td>IPK Terakhir</td>
			<td> <?php echo $IPK ?> </td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td> <?php echo $jurusan ?> </td>
		</tr>
		<tr>
			<td>TTL</td>
			<td> <?php echo $Tempat ?>,<?php echo $Tgl ?>/<?php echo $Bln ?>/<?php echo $Thn ?> </td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td> <?php echo $JK ?> </td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> <?php echo $alamat ?> </td>
		</tr>
		<tr>
			<td>Tentang Anda</td>
			<td> <?php echo $tentang ?> </td>
		</tr>
	</table>
</body>

</html>