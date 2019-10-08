<?php include "include/delAlert.php";
include "../../koneksi.php";
//include "rumusl.php";
?>
<div class="row" id="view">
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Data Bayi
				</div>
					<div class="panel-body">
					<form class="form-inline" action="" method="post">
					<div class="form-group">
						<input type="submit" value="Laki - Laki" name="mulail" id="button" class="btn">
					</div>

					<div class="form-group">
						<input type="submit" value="Perempuan" name="mulaip" id="button" class="btn">
					</div>
				</form>
				<br>                

								<?php 
									if(isset($_POST['mulail'])){
								?>
								<div class = "panel-heading"> Derajat Keanggotaan </div>
							<table class="table">
						    <thead>
						    <tr>
								<th>No</th>
								<th>Nama</th>
								<th>Umur (Bulan)</th>
                                <th>Tinggi Bayi(Centimeter)</th>
								<th>Bertambah</th>
								<th>Tetap</th>
								<th>Status Tinggi Bayi</th>
								
								
						    </tr>
						    </thead>
						    <tbody>
						    <?php
									$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir, TIMESTAMPDIFF(MONTH, tgl_lahir, '2019-07-31') as umur FROM bayi where kelamin = 'pria' && TIMESTAMPDIFF(MONTH, tgl_lahir, '2019-07-31') < 7 ORDER BY umur" ) or die(mysqli_error($dbh));
									$kelamin = "pria";

						    $no = 1;
							while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
							//itungan buat fungsi dengan 3 variabel
								//-----------------------------------------------
								//tinggi badan 
								$hitungan = mysqli_query($dbh, "SELECT * FROM bulanan where id_bayi = '$data[urut]' && bulan_data=6") or die(mysqli_error($dbh));
								while ($hitung = mysqli_fetch_array($hitungan)){

											//umur 1 bulan -- tinggi laki v

											if($data['umur'] == 1){
												if($hitung['tinggi_bayi'] <= 50.4){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 50.4 && $hitung['tinggi_bayi'] < 56.2 ){
													$pendek = ($hitung['tinggi_bayi'] - 50.4)/5.8;
													$sedang = (56.2 - $hitung['tinggi_bayi'])/5.8;
												}
		
												elseif($hitung['tinggi_bayi' >= 56.2]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}
									
									elseif($data['umur'] == 2){
											
												if($hitung['tinggi_bayi'] <= 53.2){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 53.2 && $hitung['tinggi_bayi'] < 59.1 ){
													$pendek = ($hitung['tinggi_bayi'] - 53.2)/5.9;
													$sedang = (59.1 - $hitung['tinggi_bayi'])/5.9;
												}
		
												elseif($hitung['tinggi_bayi' >= 59.1]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}
										
									elseif($data['umur'] == 3){
											
												if($hitung['tinggi_bayi'] <= 55.7){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 55.7 && $hitung['tinggi_bayi'] < 61.9 ){
													$pendek = ($hitung['tinggi_bayi'] - 55.7)/6.2;
													$sedang = (61.9 - $hitung['tinggi_bayi'])/6.2;
												}
		
												elseif($hitung['tinggi_bayi' >= 62.9]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}
									elseif($data['umur'] == 4){
											
												if($hitung['tinggi_bayi'] <= 58.1){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 58.1 && $hitung['tinggi_bayi'] < 64.6 ){
													$pendek = ($hitung['tinggi_bayi'] - 58.1)/6.2;
													$sedang = (64.6 - $hitung['tinggi_bayi'])/6.2;
												}
		
												elseif($hitung['tinggi_bayi' >= 64.6]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}

									elseif($data['umur'] == 5){
											
												if($hitung['tinggi_bayi'] <= 60.4){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 60.4 && $hitung['tinggi_bayi'] < 67.1 ){
													$pendek = ($hitung['tinggi_bayi'] - 60.4)/6.5;
													$sedang = (67.1 - $hitung['tinggi_bayi'])/6.5;
												}
		
												elseif($hitung['tinggi_bayi' >= 67.1]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}

									elseif($data['umur'] == 6){
											
												if($hitung['tinggi_bayi'] <= 62.4){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 62.4 && $hitung['tinggi_bayi'] < 69.2 ){
													$pendek = ($hitung['tinggi_bayi'] - 62.4)/6.8;
													$sedang = (69.2 - $hitung['tinggi_bayi'])/6.8;
												}
		
												elseif($hitung['tinggi_bayi' >= 69.2]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}	

									//--------------------------------------------------------------
								//status
								if($pendek>$sedang){
									$status1 = "Tinggi Bertambah";
								}
								if($sedang>$pendek ) {
									$status1 = "Tinggi Tetap";
								}

								//---------------------------------------------------berat badan-----------------------------------
								if($data['umur'] == 1){
											
									if($hitung['berat_bayi'] <= 3.4){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 3.4 && $hitung['berat_bayi'] < 4.7 ){
										$kurus = ($hitung['berat_bayi'] - 3.4)/1.3;
										$berisi = (4.7 - $hitung['berat_bayi'])/1.3;
									}

									elseif($hitung['berat_bayi' >= 4.7]){
										$kurus = 1;
										$berisi = 0;
									}

								}

								elseif($data['umur'] == 2){
											
									if($hitung['berat_bayi'] <= 4.2){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 4.2 && $hitung['berat_bayi'] <5.5 ){
										$kurus = ($hitung['berat_bayi'] - 4.2)/1.3;
										$berisi = (5.5 - $hitung['berat_bayi'])/1.3;
									}

									elseif($hitung['berat_bayi' >= 5.5]){
										$kurus = 1;
										$berisi = 0;
									}

								}
								
								elseif($data['umur'] == 3){
											
									if($hitung['berat_bayi'] <= 4.8){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 4.8 && $hitung['berat_bayi'] < 6.4 ){
										$kurus = ($hitung['berat_bayi'] - 4.8) / 1.6;
										$berisi = (6.4 - $hitung['berat_bayi']) / 1.6;
									}

									elseif($hitung['berat_bayi' >= 6.4]){
										$kurus = 1;
										$berisi = 0;
									}

								}

								elseif($data['umur'] == 4){
											
									if($hitung['berat_bayi'] <= 5.7){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 5.7 || $hitung['berat_bayi'] < 7.1 ){
										$kurus = ($hitung['berat_bayi'] - 5.7)/1.4;
										$berisi = (7.1 - $hitung['berat_bayi'])/1.4;
									}

									elseif($hitung['berat_bayi' >= 7.1]){
										$kurus = 1;
										$berisi = 0;
									}

								}

								elseif($data['umur']  == 5){
											
									if($hitung['berat_bayi'] <= 5.8){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 5.8 && $hitung['berat_bayi'] < 7.8 ){
										$kurus = ($hitung['berat_bayi'] - 5.8)/2;
										$berisi = (7.8 - $hitung['berat_bayi'])/2;
									}

									elseif($hitung['berat_bayi' >= 7.8]){
										$kurus = 1;
										$berisi = 0;
									}

								}

								elseif($data['umur' ]== 6){
											
									if($hitung['berat_bayi'] <= 6.3){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 6.3 && $hitung['berat_bayi'] < 8.4 ){
										$kurus = ($hitung['berat_bayi'] - 6.3)/2.1;
										$berisi = (8.4 - $hitung['berat_bayi'])/2.1;
									}

									elseif($hitung['berat_bayi' >= 8.4]){
										$kurus = 1;
										$berisi = 0;
									}

								}


							if($kurus>$berisi){
								$status2 = "Berat Badan Bertambah";
							}elseif ($berisi>$kurus) {
								$status2 = "Berat Badan Tetap";
							}

							
	
						?>
							<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['umur']; ?></td>
							<td><?php echo $hitung['tinggi_bayi']; ?></td>
							<td><?php echo round($pendek, 2); ?></td>
							<td><?php echo round($sedang, 2); ?></td>
							<td><?php echo $status1; ?></td>
							<td></td>
							<tr>
							<tr>
							<thead>
							<th colspan = "3"></th>
							
							<th>Berat Bayi(Kilogram)</th>
							<th>Bertambah</th>
							<th>Tetap</th>
							<th>Status Berat Bayi</th>
							</thead>

							</tr>
							<tbody>
							<td colspan = "3"></td>
							<td><?php echo $hitung['berat_bayi']; ?></td>
							<td><?php echo round($kurus, 2); ?></td>
							<td><?php echo round($berisi, 2); ?></td>
							<td><?php echo $status2; ?></td>
							</tbody>	
							
							
							</tr>
						<?php
							$no++;
								}
							}
								
									
						
							?>
							</tr>
							</tbody>
							<?php
									}
							?>

							<?php 
								//bagian perempuan
									if(isset($_POST['mulaip'])){
								?>
								<div class = "panel-heading">Derajat Keanggotaan </div>
							<table class="table">
						    <thead>
						    <tr>
								<th>No</th>
								<th>Nama</th>
								<th>Umur (Bulan)</th>
                                <th>Tinggi Bayi(Centimeter)</th>
								<th>pendek</th>
								<th>normal</th>
								<th>Status Tinggi Bayi</th>
								
								
						    </tr>
						    </thead>
						    <tbody>

							
						    <?php
							//perempuan
							$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir,TIMESTAMPDIFF(MONTH, tgl_lahir,'2019-07-31') as umur FROM bayi where kelamin = 'perempuan' && TIMESTAMPDIFF(MONTH, tgl_lahir, '2019-07-31') < 7 ORDER BY umur" ) or die(mysqli_error($dbh));
									$kelamin = "perempuan";

						    $no = 1;
							while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
							//itungan buat fungsi dengan 3 variabel
								//-----------------------------------------------
								$hitungan = mysqli_query($dbh, "SELECT * FROM bulanan where id_bayi = '$data[urut]' && bulan_data=6") or die(mysqli_error($dbh));
								while ($hitung = mysqli_fetch_array($hitungan)){

											//umur 1 bulan -- tinggi perempuan v

											if($data['umur'] == 1){
												if($hitung['tinggi_bayi'] <= 40.4){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 40.4 && $hitung['tinggi_bayi'] < 56.0 ){
													$pendek = ($hitung['tinggi_bayi'] - 40.4)/15.6;
													$sedang = (56.0 - $hitung['tinggi_bayi'])/15.6;
												}
		
												elseif($hitung['tinggi_bayi' >= 56.2]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}
									
									elseif($data['umur'] == 2){
											
												if($hitung['tinggi_bayi'] <= 52.0){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 52.0 && $hitung['tinggi_bayi'] < 59.0 ){
													$pendek = ($hitung['tinggi_bayi'] - 52.0)/7;
													$sedang = (59.0 - $hitung['tinggi_bayi'])/7;
												}
		
												elseif($hitung['tinggi_bayi' >= 59.0]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}
										
									elseif($data['umur'] == 3){
											
												if($hitung['tinggi_bayi'] <= 54.4){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 54.4 && $hitung['tinggi_bayi'] < 61.8 ){
													$pendek = ($hitung['tinggi_bayi'] - 54.4)/7.4;
													$sedang = (61.8 - $hitung['tinggi_bayi'])/7.4;
												}
		
												elseif($hitung['tinggi_bayi' >= 61.8]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}
									elseif($data['umur'] == 4){
											
												if($hitung['tinggi_bayi'] <= 56.8){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 56.8 && $hitung['tinggi_bayi'] < 64.5 ){
													$pendek = ($hitung['tinggi_bayi'] - 58.1)/7.7;
													$sedang = (64.5 - $hitung['tinggi_bayi'])/7.7;
												}
		
												elseif($hitung['tinggi_bayi' >= 64.5]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}

									elseif($data['umur'] == 5){
											
												if($hitung['tinggi_bayi'] <= 58.9){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 58.9 && $hitung['tinggi_bayi'] < 66.9 ){
													$pendek = ($hitung['tinggi_bayi'] - 58.9)/8;
													$sedang = (66.9 - $hitung['tinggi_bayi'])/8;
												}
		
												elseif($hitung['tinggi_bayi' >= 66.9]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}

									elseif($data['umur'] == 6){
											
												if($hitung['tinggi_bayi'] <= 60.9){
													$pendek = 0;
													$sedang = 1;
												
												}
		
												elseif($hitung['tinggi_bayi'] > 60.9 && $hitung['tinggi_bayi'] < 69.1 ){
													$pendek = ($hitung['tinggi_bayi'] - 60.9)/8.2;
													$sedang = (69.1 - $hitung['tinggi_bayi'])/8.2;
												}
		
												elseif($hitung['tinggi_bayi' >= 69.1]){
													$pendek = 1;
													$sedang = 0;
												}
		
									}	

									//--------------------------------------------------------------
								//status
								if($pendek>$sedang){
									$status1 = "Tinggi Bertambah";
								}
								if($sedang>$pendek ) {
									$status1 = "Tinggi Tetap";
								}

								//---------------------------------------------------berat badan-----------------------------------
								if($data['umur'] == 1){
											
									if($hitung['berat_bayi'] <= 3.3){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 3.3 && $hitung['berat_bayi'] < 4.4 ){
										$kurus = ($hitung['berat_bayi'] - 3.3)/1.1;
										$berisi = (4.4 - $hitung['berat_bayi'])/1.1;
									}

									elseif($hitung['berat_bayi' >= 4.4]){
										$kurus = 1;
										$berisi = 0;
									}

								}

								elseif($data['umur'] == 2){
											
									if($hitung['berat_bayi'] <= 3.8){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 3.8 && $hitung['berat_bayi'] < 5.2 ){
										$kurus = ($hitung['berat_bayi'] - 3.8)/1.4;
										$berisi = (5.2 - $hitung['berat_bayi'])/1.4;
									}

									elseif($hitung['berat_bayi' >= 5.2]){
										$kurus = 1;
										$berisi = 0;
									}

								}
								
								elseif($data['umur'] == 3){
											
									if($hitung['berat_bayi'] <= 4.4){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 4.4 && $hitung['berat_bayi'] < 6.0 ){
										$kurus = ($hitung['berat_bayi'] - 4.4) / 1.6;
										$berisi = (6.0 - $hitung['berat_bayi']) / 1.6;
									}

									elseif($hitung['berat_bayi' >= 6.0]){
										$kurus = 1;
										$berisi = 0;
									}

								}

								elseif($data['umur'] == 4){
											
									if($hitung['berat_bayi'] <= 4.9){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 4.9 && $hitung['berat_bayi'] < 6.7 ){
										$kurus = ($hitung['berat_bayi'] - 4.9)/1.8;
										$berisi = (6.7 - $hitung['berat_bayi'])/1.8;
									}

									elseif($hitung['berat_bayi' >= 6.7]){
										$kurus = 1;
										$berisi = 0;
									}

								}

								elseif($data['umur']  == 5){
											
									if($hitung['berat_bayi'] <= 5.7){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 5.7 && $hitung['berat_bayi'] < 7.3 ){
										$kurus = ($hitung['berat_bayi'] - 5.7)/1.6;
										$berisi = (7.3 - $hitung['berat_bayi'])/1.6;
									}

									elseif($hitung['berat_bayi' >= 7.3]){
										$kurus = 1;
										$berisi = 0;
									}

								}

								elseif($data['umur' ]== 6){
											
									if($hitung['berat_bayi'] <= 5.8){
										$kurus = 0;
										$berisi = 1;
									
									}

									elseif($hitung['berat_bayi'] > 5.8 && $hitung['berat_bayi'] < 7.9 ){
										$kurus = ($hitung['berat_bayi'] - 5.8)/2.1;
										$berisi = (7.9 - $hitung['berat_bayi'])/2.1;
									}

									elseif($hitung['berat_bayi' >= 7.9]){
										$kurus = 1;
										$berisi = 0;
									}

								}


							if($kurus>$berisi){
								$status2 = "Berat Badan Bertambah";
							}elseif ($berisi>$kurus) {
								$status2 = "Berat Badan Tetap";
							}

							
	
						?>
							<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['umur']; ?></td>
							<td><?php echo $hitung['tinggi_bayi']; ?></td>
							<td><?php echo round($pendek, 2); ?></td>
							<td><?php echo round($sedang, 2); ?></td>
							<td><?php echo $status1; ?></td>
							<td></td>
							<tr>
							<tr>
							<thead>
							<th colspan = "3"></th>
							
							<th>Berat Bayi(Kilogram)</th>
							<th>Bertambah</th>
							<th>Tetap</th>
							<th>Status Berat Bayi</th>
							</thead>

							</tr>
							<tbody>
							<td colspan = "3"></td>
							<td><?php echo $hitung['berat_bayi']; ?></td>
							<td><?php echo round($kurus, 2); ?></td>
							<td><?php echo round($berisi, 2); ?></td>
							<td><?php echo $status2; ?></td>
							</tbody>	
							
							
							</tr>
						<?php
							$no++;
								}
							}
							?>
							</tr>
							</tbody>
							<?php
									}
							?>
						</table>
						</div>		
					</div>
				</div>
			</div>


