<?php

	if(isset($_GET['ap'])){
		$ap = $_GET['ap'];
		
		if ($ap=="data_bayi"){
			include "data_peserta.php";
		}

		if($ap=="about"){
			include "about.php";
		}

		if($ap=="aplikasi"){
			include "/aplikasi/admin/index.php";
		}


	}else{
		include "home.php";
	}

?>