<?php
include '../../koneksi.php';

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$day1 = strtotime($_POST["lahir"]);
$lahir = date('Y-m-d H:i:s',$day1);
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$kepala = $_POST['kepala'];
$lengan = $_POST['lengan'];
$ayah = $_POST["ayah"];
$bunda = $_POST["ibu"];

$sql=mysqli_query($dbh,"INSERT INTO bayi (nama, tgl_lahir, kelamin, berat, tinggi, linkar_kepala, lingkar_lengan, ayah, ibu)VALUES ('$nama', '$lahir', '$gender', '$berat', '$tinggi', '$kepala', '$lengan', '$ayah', '$bunda')");
 
if ($sql) {
    echo "<script>alert('Data berhasil tersimpan');document.location='?ap=data_bayi' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal disimpan');document.location='?ap=tambah_bayi' </script> ";
}
?>