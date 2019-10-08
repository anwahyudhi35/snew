<?php
include '../../koneksi.php';

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$day1 = strtotime($_POST["lahir"]);
$lahir = date('Y-m-d H:i:s',$day1);
$ayah = $_POST["ayah"];

$sql=mysqli_query($dbh,"INSERT INTO bayi (nama, tgl_lahir, kelamin, orangtua)VALUES ('$nama', '$lahir', '$gender', '$ayah')");
 
if ($sql) {
    echo "<script>alert('Data berhasil tersimpan');document.location='?ap=data_bayi' </script> ";
}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal disimpan');document.location='?ap=tambah_bayi' </script> ";
}
?>