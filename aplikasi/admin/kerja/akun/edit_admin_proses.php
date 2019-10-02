<?php
$siapadia = $_GET['no'];
$nama = $_POST['nama'];
$passlama = $_POST['passlama'];
$passbaru = $_POST['passbaru'];

if(empty($passbaru)){
    $sql=mysqli_query($dbh,"update user set nama='$nama', password='$passlama' where no='$siapadia'");
}
else{
    $sql=mysqli_query($dbh,"update user set nama='$nama', password='$passbaru' where no='$siapadia'");
}
    
 
if ($sql) {
    echo "<script>alert('Data berhasil Diubah');document.location='?ap=data_admin' </script> ";
}else {
    echo mysqli.error($dbh);
    echo "<script>alert('Data gagal iubah');document.location='?ap=tambah_admin' </script> ";
}
?>  