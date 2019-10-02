<?php
include '../../koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['kunci'];

$sql=mysqli_query($dbh,"INSERT INTO user (username, password, nama, tugas)VALUES ('$username', '$pass', '$nama', 'admin')");
 
if ($sql) {
    echo "<script>alert('Data berhasil tersimpan');document.location='?ap=data_bayi' </script> ";
}else {
    echo mysqli.error($dbh);
    echo "<script>alert('Data gagal disimpan');document.location='?ap=tambah_bayi' </script> ";
}
?>