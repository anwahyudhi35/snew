<?php
$urut= $_GET['urut'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$day1 = strtotime($_POST["lahir"]);
$lahir = date('Y-m-d H:i:s',$day1);
$ayah = $_POST['ayah'];


$sql=mysqli_query($dbh,"update bayi set nama='$nama', tgl_lahir='$lahir', kelamin='$gender', orangtua='$ayah' where urut = '$urut'");
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='?ap=data_bayi' </script> ";
}else {
    echo mysqli.error($dbh);
    echo "<script>alert('Data gagal iubah');document.location='?ap=data_bayi' </script> ";
}
?>  