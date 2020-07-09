<!DOCTYPE html>
<html>
<head>
	<title>TABEL DATA SISWA</title>
	<style type="text/css">
		td {
			padding: 20px;
		}
		table,th,td{
			border-collapse: collapse;
		}
		th {
			background: #B8860B;
			padding: 15px;
			color: #000000;
		}
	</style>
</head>
<center><font face="impact" size="5">form transaksi</font><center>
<body>
		<h2>Jual beli online</h2>
		<table border="2px" width="75px">
			<?php
			echo "<head><title>my guest book</title><head>";
			$fp =fopen("transaksi.txt", "r");
			echo "<table border=0>";

			while ($isi = fgets($fp,90))
			{

				$pisah = explode("|", $isi);
				echo "<tr><td>nama</td><td>:$pisah[0]</td></tr>";
				echo "<tr><td>alamat</td><td>:$pisah[1]</td></tr>";
				echo "<tr><td>jenis barang</td><td>:$pisah[2]</td></tr>";
				echo "<tr><td>telp</td><td>:$pisah[3]</td></tr>";
				echo "<tr><td>email</td><td>:$pisah[4]</td></tr>";
				echo "<tr><td>Jumlah</td><td>:$pisah[5]</td></tr>";
				echo "<tr><td>Harga</td><td>:$pisah[6]</td></tr> 	
				<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
				
			}
			echo "</table>";
			echo "<a href=form.html> klik disini</a>	isi from transaksi";
			?>
		</table>
</body>
</html>