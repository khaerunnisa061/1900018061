<a href="form.html">kembali ke form</a>
<?php
echo"<pre>";
print_r($_POST);
echo "</pre>";

$error = false;

if (@$_POST['nama']=='') {
     echo "nama tidak boleh kosong</br>";
     $error = true;
}
if (@$_POST['almt']=='') {
     echo "alamat tidak boleh kosong</br>";
     
}
if(strlen(@$_POST['telpon'])<10){
	echo "nomor telpon harus lebih dari 9 digit<br?>";
	$error = true;
}
if (@$_POST['umr']=='') {
     echo "umur tidak boleh kosong</br>";
     
}
if (@$_POST['email']=='') {
     echo "email tidak boleh kosong</br>";
     $error = true;
}


if(!$error){
	echo "trimaksih data sudah benar";

}
?>