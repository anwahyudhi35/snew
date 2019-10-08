<?php
include '../../koneksi.php';

$id = $_GET['id_bayi'];
$nama = $_POST["bayinya"];
$berat = $_POST["berat"];
$tinggi = $_POST["tinggi"];
$bulan = $_POST["bulanan"];
$sql=mysqli_query($dbh,"UPDATE bulanan set berat_bayi = '$berat', tinggi_bayi = '$tinggi', bulan_data='$bulan' where id_data = '$id'");
 
if ($sql) {
    echo "<script>alert('Data berhasil tersimpan $nama $berat $tinggi $bulan');document.location='?ap=data_bulanan' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal disimpan nama $nama berat $berat tinggi $tinggi bulan $bulan');document.location='?ap=data_bulanan' </script>";
}
?>