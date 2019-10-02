<?php
include '../../koneksi.php';

$id_peserta = $_GET['urut'];
$sql = mysqli_query($dbh,"delete from bayi where urut='$id_peserta'") or die(mysql_error());
	
	if ($sql) {
			echo "<script>alert('Data Berhasil Dihapus');document.location='?ap=data_bayi' </script> ";
		}else {
			echo "<script>alert('Data Gagal Dihapus);document.location='?ap=data_bayi' </script> ";
		}
?>