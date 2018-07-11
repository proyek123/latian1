<?php
include('config/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Utama</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<tr>
	<td width="800">
	<h1><center>Input Buku</center></h1>
	<form name="input_Tarif" method="post" action="data.php">
	<table align="center">
	  <tr>
		<td width="150" height="30">Judul Buku</td>
		<td>:</td>
		<td><input type="text" name="judul" placeholder="masukkan Judul" required="required" /></td>
	  </tr>
	  <tr>
		<td width="150" height="30">Pengarang</td>
		<td>:</td>
		<td><input type="text" name="pengarang" placeholder="pengarang" required="required" /></td>
	  </tr>
	  <tr>
		<td width="150" height="30">Tahun Terbit</td>
		<td>:</td>
		<td><input type="text" name="thnterbit" placeholder="tahun" required="required" /></td>
	  </tr>
	  	  <tr>
		<td width="150" height="30">Kategori</td>
		<td>:</td>
		<td><input type="text" name="kategori" placeholder="masukkan Kategori" required="required" /></td>
	  </tr>
	  	  <tr>
		<td width="150" height="30">Jumlah</td>
		<td>:</td>
		<td><input type="text" name="stock" placeholder="masukkan jumlah" required="required" /></td>
	  </tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	
		<td><input type="submit" name="submit" value="Input" /></td>
		<td><input type="reset" name="reset" value="Reset" /></td>
		</tr>
	</form>
	</table>
	</td>
	</tr>
</body>
</html>