<?php
include('config/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Utama</title>
<link href="styl.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<h1>Peminjaman</h1><br>
<a href="inputbuku2.php" class="tmbl tombol1">TAMBAH BUKU</a>
<br><br><br>
<table width="650" border="1" cellspacing="0" cellpadding="5">
<tr class="head">
<th width="300" height="5" bgcolor="#E6E6FA">Judul Buku</th>
<th width="300" height="5"bgcolor="#E6E6FA">Pengarang</th>
<th colspan="1" height="5" bgcolor="#E6E6FA">Tahun Terbit</th>
<th colspan="1" height="5" bgcolor="#E6E6FA">Kategori</th>
<th colspan="1" height="5" bgcolor="#E6E6FA">Jumlah Buku</th>
</tr>
</table>
</center>
<?php
include "config/koneksi.php";
?>
<?php
$query="select * from buku";
$row=mysqli_query($db_link,$query);
while ($data=mysqli_fetch_array($row)) {
?>

<tr align="center">
    <td width="226"><?php echo $data['judul'];?></td>
    <td width="266"><?php echo $data['pengarang'];?></td>
	<td width="226"><?php echo $data['thnterbit'];?></td>
    <td width="266"><?php echo $data['kategori'];?></td>
	<td width="226"><?php echo $data['stock'];?></td>
    <td width="100"><a href="edit.php?id=<?php echo $data['id_buku'];?>"><img src="image/button-edit.gif" /></a></td>
    <td width="110"><a href="delete.php?id=<?php echo $data['id_buku'];?>"><img src="image/button-cross.gif" /></a></td>
  </tr>
 <?php
}
?>
</table>
</td>
</tr>

</table>

</body>
</html>