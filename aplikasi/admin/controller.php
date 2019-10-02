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
/** 
	if(isset($_GET['ap'])){
		$ap = $_GET['ap'];
		
		//Peserta
		if ($ap=="data_bayi"){
			include "aplikasi/peserta/index.php";
		}

		if($ap=="peserta_tambah"){
			include "aplikasi/peserta/peserta_tambah.php";
		}

		if($ap=="peserta_proses"){
			include "aplikasi/peserta/peserta_proses.php";
		}

		if($ap=="peserta_edit"){
			include "aplikasi/peserta/peserta_edit.php";
		}
		if($ap=="peserta_delete"){
			include "aplikasi/peserta/peserta_delete.php";
		}
		if($ap=="peserta_backup"){
			include "aplikasi/peserta/peserta_backup.php";
		}

		//Kriteria

		if ($ap=="data_kriteria"){
			include "aplikasi/kriteria/index.php";
		}
		if ($ap=="kriteria_edit"){
			include "aplikasi/kriteria/kriteria_edit.php";
		}

		//Himpunan Kriteria
		if ($ap=="hmp_kriteria"){
			include "aplikasi/hmp_kriteria/hmp_kriteria.php";
		}

		//Subkriteria
		if ($ap=="data_subkriteria") {
			include "aplikasi/subkriteria/index.php";
		}
		if ($ap=="subkriteria_edit"){
			include "aplikasi/subkriteria/subkriteria_edit.php";
		}

		//Perhitungan
		if ($ap=="hitung"){
			include "aplikasi/perhitungan/index.php";
		}

		if ($ap=="hitung_tambah"){
			include "aplikasi/perhitungan/hitung_tambah.php";
		}

		if ($ap=="hitung_proses"){
			include "aplikasi/perhitungan/hitung_proses.php";
		}

			if ($ap=="hitung_edit"){
			include "aplikasi/perhitungan/hitung_edit.php";
		}

		if ($ap=="normalisasi"){
			include "aplikasi/perhitungan/normalisasi.php";
		}

		if ($ap=="hasil_seleksi"){
			include "aplikasi/perhitungan/hasil_seleksi.php";
		}

		if($ap=="hitung_delete"){
			include "aplikasi/perhitungan/hitung_delete.php";
		}

		//PerhitunganPerempuan
		if ($ap=="hitung_p"){
			include "aplikasi/perhitungan_p/index.php";
		}

		if ($ap=="hitung_tambah_p"){
			include "aplikasi/perhitungan_p/hitung_tambah.php";
		}

		if ($ap=="hitung_proses_p"){
			include "aplikasi/perhitungan_p/hitung_proses.php";
		}

			if ($ap=="hitung_edit_p"){
			include "aplikasi/perhitungan_p/hitung_edit.php";
		}

		if ($ap=="normalisasi_p"){
			include "aplikasi/perhitungan_p/normalisasi.php";
		}

		if ($ap=="hasil_seleksi_p"){
			include "aplikasi/perhitungan_p/hasil_seleksi.php";
		}

		if($ap=="hitung_delete_p"){
			include "aplikasi/perhitungan_p/hitung_delete.php";
		}

		//Laporan
		if ($ap=="laporan"){
			include "aplikasi/laporan/laporan.php";
		}
		if ($ap=="print"){
			include "aplikasi/laporan/print.php";
		}

		//Akun
		if($ap=="login"){
			include "aplikasi/login.php";
		}
		if($ap=="akun"){
			include "aplikasi/akun/akun.php";
		}
		if($ap=="akun_edit"){
			include "aplikasi/akun/akun_edit.php";
		}

		// peserta lalu
		if($ap=="data_peserta_lalu"){
			include "aplikasi/pesertalalu/peserta.php";
		}

	}else{
		include "home.php";
	}
*/
?>