<?php
	echo "<head><title>Form Transaksi Penjualan online</title></head>";
	$fp =fopen ("transaksi.txt","a+");
	$Nama = $_POST['Nama'];
	$Alamat =  $_POST['Alamat'];
	$Jenis_barang =  $_POST['Jenis_barang'];
	$Telp =  $_POST['Telp'];
	$Email =  $_POST['Email'];
	$jumlah =  $_POST['Jumlah'];
	$Harga =  $_POST['Harga'];
	fputs($fp,"$Nama|$Alamat|$Jenis_barang|$Telp|$Email|$jumlah|$Harga|\n");
	fclose($fp);

	echo "terimaksih atas partisipasi anda belanja ditoko kami<br>";
	echo "<a href=form.html>isi form transaksi belanja </a><br>";
	echo "<a href=tabel.php>lihat form transaksi belanja</a><br>";
?>