<?php
session_start();
include('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = "select * from user where username = '$username' and password = '$password'";
$execute = mysqli_query($dbh,$query);
$count = mysqli_num_rows($execute);
$hasil = mysqli_fetch_array($execute);
$nama = $hasil['nama'];
$level = $hasil['tugas'];

if($count == 0) { // jika salah, redirect ke login
	?><script language="JavaScript">alert('Login Gagal  !'); 
			document.location='login.php'</script><?php
}
else { // jika benar, redirec ke halaman utama
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $nama;
    if ($level == "admin") {
        header('location: aplikasi/admin/index.php');
    }else {
        ?>
        <script language="JavaScript">alert('Login Gagal  !'); 
			document.location='login.php'</script>
        <?php    
        }
   
    
	
}
?>