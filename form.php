<?php
	echo "<head><title>Form Transaksi Penjualan online</title></head>";
	$fp =fopen ("transaksi.txt","a+");
	fputs($fp,"$Nama|$Alamat|$Jenis_barang|$Telp|$Email|$jumlah|$harga|\n");
	fclose($fp);

	echo "terimaksih atas partisipasi anda mengisi buku tamu<br>";
	echo "<a href=form.html>isi buku tmu </a><br>";
	echo "<a href=table.html>lihat buku tamu</a><br>";
?>