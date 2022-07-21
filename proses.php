<?php 

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$noHp = $_POST['noHp'];
$jenisKelamin = $_POST['jenisKelamin'];
$harga = $_POST['harga'];

echo "<head><title>Form</title></head>";
$fp = fopen("kost.txt", "a+");
fputs($fp, "$nama||$nik||$alamat||$noHp||$jenisKelamin||$harga\n");
fclose($fp);

header("Location: setelahProses.php")

?>
