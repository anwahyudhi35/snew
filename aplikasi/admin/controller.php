<?php

if(isset($_GET['ap'])){
	$ap = $_GET['ap'];
	if($ap=="home"){
		include "home.php";
	}
	//bayi
	elseif ($ap=="data_bayi"){
		include "kerja/bayi/data_bayi.php";
	} elseif($ap=="tambah_bayi"){
		include "kerja/bayi/tambah_bayi.php";
	}elseif($ap=="proses_tambah_bayi"){
		include "kerja/bayi/proses_tambah_bayi.php";
	}elseif($ap=="edit_bayi"){
			include "kerja/bayi/edit_bayi.php";
	}elseif($ap=="edit_bayi_proses"){
		include "kerja/bayi/edit_bayi_proses.php";
	}elseif($ap=="hapus_bayi"){
		include "kerja/bayi/hapus_bayi.php";
	}elseif($ap=="hapus_bayi"){
		include "kerja/bayi/hapus_bayi.php";
	}elseif($ap=="data_kriteria"){
		include "kerja/bayi/data_kriteria.php";
		
	//data bulanan
	}elseif($ap=="input_bulanan"){
		include "kerja/bayi/bulan/input_bulanan.php";
	}elseif($ap=="input_bulanan_proses"){
		include "kerja/bayi/bulan/proses_bulanan.php";	
	}elseif($ap=="edit_bulanan"){
		include "kerja/bayi/bulan/edit_bulanan.php";
	}elseif($ap=="edit_bulanan_proses"){
		include "kerja/bayi/bulan/edit_bulanan_proses.php";
	}elseif($ap=="hapus_bulanan"){
		include "kerja/bayi/bulan/hapus_bulanan.php";
	}elseif($ap=="data_bulanan"){
		include "kerja/bayi/bulan/data_bulanan.php";
	
	
	//admin
	}elseif ($ap=="data_admin"){
		include "kerja/akun/data_admin.php";
	} elseif($ap=="tambah_admin"){
		include "kerja/akun/tambah_admin.php";
	}elseif($ap=="proses_tambah_admin"){
		include "kerja/akun/proses_tambah_admin.php";
	}elseif($ap=="edit_admin"){
		include "kerja/akun/edit_admin.php";
	}elseif($ap=="edit_admin_proses"){
		include "kerja/akun/edit_admin_proses.php";
	}elseif($ap=="hapus_admin"){
		include "kerja/akun/hapus_admin.php";


	//perhitungan
	}elseif ($ap=="menu_awal"){
	include "kerja/tahani/menu_awal.php";


	
	}else{
		include "home.php";
}
}
?>