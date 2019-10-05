<?php
include '../../koneksi.php';

$nama = $_POST["bayinya"];
$berat = $_POST["berat"];
$tinggi = $_POST["tinggi"];
$bulan = $_POST["bulan"];
$sql=mysqli_query($dbh,"INSERT INTO bulanan (id_bayi, berat_bayi, tinggi_bayi, bulan_data)VALUES ('$nama', '$berat', '$tinggi', '$bulan')");
 
if ($sql) {
    echo "<script>alert('Data berhasil tersimpan $nama $berat $tinggi $bulan');document.location='?ap=data_bulanan' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal disimpan nama $nama berat $berat tinggi $tinggi bulan $bulan');document.location='?ap=input_bulanan' </script> ";
}
?>