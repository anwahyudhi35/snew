<?php
$urut= $_GET['urut'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$day1 = strtotime($_POST["lahir"]);
$lahir = date('Y-m-d H:i:s',$day1);
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$kepala = $_POST['kepala'];
$lengan = $_POST['lengan'];
$ayah = $_POST['ayah'];
$bunda = $_POST['bunda'];


$sql=mysqli_query($dbh,"update bayi set nama='$nama', tgl_lahir='$lahir', kelamin='$gender', berat='$berat', tinggi='$tinggi', linkar_kepala='$kepala', lingkar_lengan='$lengan', ayah='$ayah', ibu='$bunda' where urut = '$urut'");
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='?ap=data_bayi' </script> ";
}else {
    echo mysqli.error($dbh);
    echo "<script>alert('Data gagal iubah');document.location='?ap=tambah_bayi' </script> ";
}
?>  