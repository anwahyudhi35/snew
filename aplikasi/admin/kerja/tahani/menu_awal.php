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
								<th>panjang</th>
								<th>Status Tinggi Bayi</th>
								
								
						    </tr>
						    </thead>
						    <tbody>
						    <?php
									$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir,TIMESTAMPDIFF(MONTH, tgl_lahir,now()) as umur FROM bayi where kelamin = 'pria' && TIMESTAMPDIFF(MONTH, tgl_lahir,now()) < 7" ) or die(mysqli_error($dbh));
									$kelamin = "pria";

						    $no = 1;
							while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
							//itungan buat fungsi dengan 3 variabel
								//-----------------------------------------------
								//tinggi badan 
								//umur 0 bulan
								if($data['umur']==0){
									//pendek 0
									if($data['tinggi']<45){
										$pendek=1;
									}
									elseif ($data['tinggi']>46.3) {
										$pendek=0;
									}
									elseif ($data['tinggi']<45 && $data['tinggi']<46.3) {
										$pendek=($data['tinggi']-45)/45;
									}
								
									//normal 0
									if($data['tinggi']<45 || $data['tinggi']>53.4 ){
										$sedang=0;
									}
									elseif ($data['tinggi']>45 && $data['tinggi']<=46.3) {
										$sedang=($data['tinggi']-45)/45;
									}
									elseif ($data['tinggi']<=53.4 && $data['tinggi']>46.3) {
										$sedang=(53.4-$data['tinggi'])/45;
									}
								
									//lebih 0
									if($data['tinggi']>53.4 ){
										$tiang=1;
									}
									elseif ($data['tinggi']>46.3 && $data['tinggi']<53.4) {
										$tiang=($data['tinggi']-46.3)/46.3;
									}
									elseif ($data['tinggi']<=46.3) {
										$tiang=0;
										}
								} 
									//umur 1 bulan
									elseif ($data['umur']==1) {
										if($data['tinggi']<=45){
											$pendek=1;
										}
										elseif ($data['tinggi']>51.1) {
											$pendek=0;
										}
										elseif ($data['tinggi']<=45 && $data['tinggi']<=51.1) {
											$pendek=($data['tinggi']-45)/45;
										}
								
										//normal 1
										if($data['tinggi']<=45 || $data['tinggi']>58.4 ){
											$sedang=0;
										}
										elseif ($data['tinggi']>45 && $data['tinggi']<=51.1) {
											$sedang=($data['tinggi']-45)/45;
										}
										elseif ($data['tinggi']<=58.4 && $data['tinggi']>51.1) {
											$sedang=(58.4-$data['tinggi'])/45;
										}
								
										//lebih 1
										if($data['tinggi']>58.4 ){
											$tiang=1;
										}
										elseif ($data['tinggi']>51.1 && $data['tinggi']<=58.4) {
											$tiang=($data['tinggi']-51.1)/51.1;
										}
										elseif ($data['tinggi']<=51.1) {
											$tiang=0;
											}
									}
									//umur 2 bulan
									elseif ($data['umur']==2) {
										if($data['tinggi']<45){
											$pendek=1;
										}
										elseif ($data['tinggi']>54.7) {
											$pendek=0;
										}
										elseif ($data['tinggi']<=45 && $data['tinggi']<=54.7) {
											$pendek=($data['tinggi']-45)/45;
										}
									
										//normal
										if($data['tinggi']<=45 || $data['tinggi']>62.2 ){
											$sedang=0;
										}
										elseif ($data['tinggi']>45 && $data['tinggi']<=54.7) {
											$sedang=($data['tinggi']-45)/45;
										}
										elseif ($data['tinggi']<=62.2 && $data['tinggi']>54.7) {
											$sedang=(62.2 - $data['tinggi'])/45;
										}
									
										//normal
										if($data['tinggi']>62.2 ){
											$tiang=1;
										}
										elseif ($data['tinggi']>54.7 && $data['tinggi']<=62.2) {
											$tiang=($data['tinggi']-54.7)/54.7;
										}
										elseif ($data['tinggi']<=54.7) {
											$tiang=0;
											}
										}
										//umur 3 bulan
										elseif ($data['umur']==3) {
											if($data['tinggi']<=45){
												$pendek=1;
											}
											elseif ($data['tinggi']>57.6) {
												$pendek=0;
											}
											elseif ($data['tinggi']<=45 && $data['tinggi']<=57.6) {
												$pendek=($data['tinggi']-45)/45;
											}
										
											//normal
											if($data['tinggi']<=45 || $data['tinggi']>65.3 ){
												$sedang=0;
											}
											elseif ($data['tinggi']>45 && $data['tinggi']<=57.6) {
												$sedang=($data['tinggi']-45)/45;
											}
											elseif ($data['tinggi']<=65.3 && $data['tinggi']>57.6) {
												$sedang=(57.6-$data['tinggi'])/45;
											}
										
											//normal
											if($data['tinggi']>65.3){
												$tiang=1;
											}
											elseif ($data['tinggi']>57.6 && $data['tinggi']<65.3) {
												$tiang=($data['tinggi']-57.6)/57.6;
											}
											elseif ($data['tinggi']<=57.6) {
												$tiang=0;
												}
											}
								
											//umur 4 bulan
											elseif ($data['umur']==4) {
												if($data['tinggi']<=45){
													$pendek=1;
												}
												elseif ($data['tinggi']>60) {
													$pendek=0;
												}
												elseif ($data['tinggi']<=45 && $data['tinggi']<=60) {
													$pendek=($data['tinggi']-45)/45;
												}
											
												//normal
												if($data['tinggi']<=45 || $data['tinggi']>67.8 ){
													$sedang=0;
												}
												elseif ($data['tinggi']>45 && $data['tinggi']<=60) {
													$sedang=($data['tinggi']-45)/45;
												}
												elseif ($data['tinggi']<=67.8 && $data['tinggi']>60) {
													$sedang=(60-$data['tinggi'])/45;
												}
											
												//normal
												if($data['tinggi']>67.8 ){
													$tiang=1;
												}
												elseif ($data['tinggi']>60 && $data['tinggi']<=67.8) {
													$tiang=($data['tinggi']-60)/60;
												}
												elseif ($data['tinggi']<=60) {
													$tiang=0;
													}
												}
												// umur 5 bulan
												elseif ($data['umur']==5) {
													if($data['tinggi']<=45){
														$pendek=1;
													}
													elseif ($data['tinggi']>61.9) {
														$pendek=0;
													}
													elseif ($data['tinggi']<=45 && $data['tinggi']<=61.9) {
														$pendek=($data['tinggi']-45)/45;
													}
												
													//normal
													if($data['tinggi']<=45 || $data['tinggi']>69.9 ){
														$sedang=0;
													}
													elseif ($data['tinggi']>45 && $data['tinggi']<=61.9) {
														$sedang=($data['tinggi']-45)/45;
													}
													elseif ($data['tinggi']<=69.9 && $data['tinggi']>61.9) {
														$sedang=(61.9-$data['tinggi'])/45;
													}
												
													//normal
													if($data['tinggi']>69.9 ){
														$tiang=1;
													}
													elseif ($data['tinggi']>61.9 && $data['tinggi']<=69.9) {
														$tiang=($data['tinggi']-61.9)/61.9;
													}
													elseif ($data['tinggi']<=61.9) {
														$tiang=0;
														}
													}
													//umur 6 bulan
													elseif ($data['umur']==6) {
														if($data['tinggi']<=45){
															$pendek=1;
														}
														elseif ($data['tinggi']>63.6) {
															$pendek=0;
														}
														elseif ($data['tinggi']<=45 && $data['tinggi']<=63.6) {
															$pendek=($data['tinggi']-45)/45;
														}
													
														//normal
														if($data['tinggi']<=45 || $data['tinggi']>71.6 ){
															$sedang=0;
														}
														elseif ($data['tinggi']>45 && $data['tinggi']<=63.6) {
															$sedang=($data['tinggi']-45)/45;
														}
														elseif ($data['tinggi']<=71.6 && $data['tinggi']>63.6) {
															$sedang=(63.6-$data['tinggi'])/45;
														}
													
														//normal
														if($data['tinggi']>71.6 ){
															$tiang=1;
														}
														elseif ($data['tinggi']>63.6 && $data['tinggi']<=71.6) {
															$tiang=($data['tinggi']-63.6)/63.6;
														}
														elseif ($data['tinggi']<=63.6) {
															$tiang=0;
															}
														}
																
								//--------------------------------------------------------------------
								//berat badan
								//umur 0 
								if($data['umur']==0){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>2.5) {
									$kurus=0;
								}
								elseif ($data['berat']<=2.5 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>4.3 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=2.5) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=4.3 && $data['berat']>2.5) {
									$berisi=(4.3-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>4.3 ){
									$gemuk=1;
								}
								elseif ($data['berat']>2.5 && $data['berat']<=4.3) {
									$gemuk=($data['berat']-2.5)/2.5;
								}
								elseif ($data['berat']<=2.5) {
									$gemuk=0;
									}
								}

								//umur 1 
								elseif($data['umur']==1){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>3.4) {
									$kurus=0;
								}
								elseif ($data['berat']<=3.4 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>5.7 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=3.4) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=5.7 && $data['berat']>3.4) {
									$berisi=(5.7-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>5.7 ){
									$gemuk=1;
								}
								elseif ($data['berat']>3.4 && $data['berat']<=5.7) {
									$gemuk=($data['berat']-3.4)/3.4;
								}
								elseif ($data['berat']<3.4) {
									$gemuk=0;
									}
								}
								//umur 2 
								elseif($data['umur']==2){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>4.4) {
									$kurus=0;
								}
								elseif ($data['berat']<=4.4 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>7 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=4.4) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=7 && $data['berat']>4.4) {
									$berisi=(7-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>7 ){
									$gemuk=1;
								}
								elseif ($data['berat']>4.4 && $data['berat']<=7) {
									$gemuk=($data['berat']-4.4)/4.4;
								}
								elseif ($data['berat']<=4.4) {
									$gemuk=0;
									}
								}
								//umur 3 
								elseif($data['umur']==3){
									//kurus
								if($data['berat']<1.5){
									$kurus=1;
								}
								elseif ($data['berat']>5.1) {
									$kurus=0;
								}
								elseif ($data['berat']<=5.1 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<1.5 || $data['berat']>7.9 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=5.1) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=7.9 && $data['berat']>5.1) {
									$berisi=(7.9-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>7.9 ){
									$gemuk=1;
								}
								elseif ($data['berat']>5.1 && $data['berat']<=7.9) {
									$gemuk=($data['berat']-5.1)/5.1;
								}
								elseif ($data['berat']<=5.1) {
									$gemuk=0;
									}
								}
								//umur 4 
								elseif($data['umur']==4){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>5.6) {
									$kurus=0;
								}
								elseif ($data['berat']<=5.6 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>8.6 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=5.6) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=8.6 && $data['berat']>5.6) {
									$berisi=(8.6-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>8.6 ){
									$gemuk=1;
								}
								elseif ($data['berat']>5.6 && $data['berat']<=8.6) {
									$gemuk=($data['berat']-5.6)/5.6;
								}
								elseif ($data['berat']<=5.6) {
									$gemuk=0;
									}
								}
								//umur 5 
								elseif($data['umur']==5){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>6.1) {
									$kurus=0;
								}
								elseif ($data['berat']<=6.1 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>9.2 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=6.1) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=9.2 && $data['berat']>6.1) {
									$berisi=(9.2-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>9.2 ){
									$gemuk=1;
								}
								elseif ($data['berat']>6.1 && $data['berat']<=9.2) {
									$gemuk=($data['berat']-6.1)/6.1;
								}
								elseif ($data['berat']<=6.1) {
									$gemuk=0;
									}
								}
								//umur 6 
								elseif($data['umur']==6){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>6.4) {
									$kurus=0;
								}
								elseif ($data['berat']<=6.4 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>9.7 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=6.4) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=9.7 && $data['berat']>6.4) {
									$berisi=(9.7-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>9.7 ){
									$gemuk=1;
								}
								elseif ($data['berat']>6.4 && $data['berat']<=9.7) {
									$gemuk=($data['berat']-6.4)/6.4;
								}
								elseif ($data['berat']<=6.4) {
									$gemuk=0;
									}
								}
								



								//--------------------------------------------------------------
								//status
								if($pendek>$sedang && $pendek>$tiang){
										$status1 = "PENDEK";
								}elseif ($sedang>$pendek && $sedang>$tiang) {
										$status1 = "SEDANG";
								}elseif ($tiang>$sedang && $pendek<$tiang) {
										$status1 = "TINGGI";
								}

								if($kurus>$berisi && $kurus>$gemuk){
									$status2 = "KURUS";
								}elseif ($berisi>$kurus && $berisi>$gemuk) {
									$status2 = "NORMAL";
								}elseif ($gemuk>$berisi && $kurus<$gemuk) {
									$status2 = "GEMUK";
								}

								
        
							?>
								<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['umur']; ?></td>
                                <td><?php echo $data['tinggi']; ?></td>
								<td><?php echo $pendek; ?></td>
								<td><?php echo $sedang; ?></td>
								<td><?php echo $tiang; ?></td>
								<td><?php echo $status1; ?></td>
								<td></td>
								<tr>
								<tr>
								<thead>
								<th></th>
								<th></th>
								<th></th>
								<th>Berat Bayi(Kilogram)</th>
								<th>Kurus</th>
								<th>Normal</th>
								<th>Gemuk</th>
								<th>Status Berat Bayi</th>
								</thead>

								</tr>
								<tbody>
								<td></td>
								<td></td>
								<td></td>
								<td><?php echo $data['berat']; ?></td>
								<td><?php echo $kurus; ?></td>
								<td><?php echo $berisi; ?></td>
								<td><?php echo $gemuk; ?></td>
								<td><?php echo $status2; ?></td>
								</tbody>	
								
								</tr>
								
								
								
							<?php
								$no++;
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
								<th>panjang</th>
								<th>Status Tinggi Bayi</th>
								
								
						    </tr>
						    </thead>
						    <tbody>
						    <?php
									$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir,TIMESTAMPDIFF(MONTH, tgl_lahir,now()) as umur FROM bayi where kelamin = 'perempuan' && TIMESTAMPDIFF(MONTH, tgl_lahir,now()) < 7" ) or die(mysqli_error($dbh));
									$kelamin = "perempuan";

						    $no = 1;
							while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
							//itungan buat fungsi dengan 3 variabel
								//-----------------------------------------------
								//tinggi badan 
								//umur 0 bulan
								if($data['umur']==0){
									//pendek 0
									if($data['tinggi']<40){
										$pendek=1;
									}
									elseif ($data['tinggi']>45.6) {
										$pendek=0;
									}
									elseif ($data['tinggi']<40 && $data['tinggi']<45.6) {
										$pendek=($data['tinggi']-40)/40;
									}
								
									//normal 0
									if($data['tinggi']<40 || $data['tinggi']>52.7 ){
										$sedang=0;
									}
									elseif ($data['tinggi']>40 && $data['tinggi']<=45.6) {
										$sedang=($data['tinggi']-40)/40;
									}
									elseif ($data['tinggi']<=52.7 && $data['tinggi']>45.6) {
										$sedang=(52.7-$data['tinggi'])/40;
									}
								
									//lebih 0
									if($data['tinggi']>52.7 ){
										$tiang=1;
									}
									elseif ($data['tinggi']>45.6 && $data['tinggi']<52.7) {
										$tiang=($data['tinggi']-45.6)/45.6;
									}
									elseif ($data['tinggi']<=45.6) {
										$tiang=0;
										}
								} 
									//umur 1 bulan
									elseif ($data['umur']==1) {
										if($data['tinggi']<=40){
											$pendek=1;
										}
										elseif ($data['tinggi']>50) {
											$pendek=0;
										}
										elseif ($data['tinggi']<=40 && $data['tinggi']<=50) {
											$pendek=($data['tinggi']-40)/40;
										}
								
										//normal 1
										if($data['tinggi']<=40 || $data['tinggi']>57.4 ){
											$sedang=0;
										}
										elseif ($data['tinggi']>40 && $data['tinggi']<=50) {
											$sedang=($data['tinggi']-40)/40;
										}
										elseif ($data['tinggi']<=57.4 && $data['tinggi']>50) {
											$sedang=(57.4-$data['tinggi'])/40;
										}
								
										//lebih 1
										if($data['tinggi']>57.4 ){
											$tiang=1;
										}
										elseif ($data['tinggi']>50 && $data['tinggi']<=57.4) {
											$tiang=($data['tinggi']-50)/50;
										}
										elseif ($data['tinggi']<=50) {
											$tiang=0;
											}
									}
									//umur 2 bulan
									elseif ($data['umur']==2) {
										if($data['tinggi']<40){
											$pendek=1;
										}
										elseif ($data['tinggi']>53.2) {
											$pendek=0;
										}
										elseif ($data['tinggi']<=40 && $data['tinggi']<=53.2) {
											$pendek=($data['tinggi']-40)/40;
										}
									
										//normal
										if($data['tinggi']<=40 || $data['tinggi']>60.9 ){
											$sedang=0;
										}
										elseif ($data['tinggi']>40 && $data['tinggi']<=53.2) {
											$sedang=($data['tinggi']-40)/40;
										}
										elseif ($data['tinggi']<=60.9 && $data['tinggi']>53.2) {
											$sedang=(60.9 - $data['tinggi'])/40;
										}
									
										//normal
										if($data['tinggi']>60.9 ){
											$tiang=1;
										}
										elseif ($data['tinggi']>53.2 && $data['tinggi']<=60.9) {
											$tiang=($data['tinggi']-53.2)/53.2;
										}
										elseif ($data['tinggi']<=53.2) {
											$tiang=0;
											}
										}
										//umur 3 bulan
										elseif ($data['umur']==3) {
											if($data['tinggi']<=40){
												$pendek=1;
											}
											elseif ($data['tinggi']>55.8) {
												$pendek=0;
											}
											elseif ($data['tinggi']<=40 && $data['tinggi']<=55.8) {
												$pendek=($data['tinggi']-40)/40;
											}
										
											//normal
											if($data['tinggi']<=40 || $data['tinggi']>63.8 ){
												$sedang=0;
											}
											elseif ($data['tinggi']>40 && $data['tinggi']<=55.8) {
												$sedang=($data['tinggi']-40)/40;
											}
											elseif ($data['tinggi']<=63.8 && $data['tinggi']>55.8) {
												$sedang=(63.8-$data['tinggi'])/40;
											}
										
											//normal
											if($data['tinggi']>63.8){
												$tiang=1;
											}
											elseif ($data['tinggi']>55.8 && $data['tinggi']<63.8) {
												$tiang=($data['tinggi']-55.8)/55.8;
											}
											elseif ($data['tinggi']<=55.8) {
												$tiang=0;
												}
											}
								
											//umur 4 bulan
											elseif ($data['umur']==4) {
												if($data['tinggi']<=40){
													$pendek=1;
												}
												elseif ($data['tinggi']>58) {
													$pendek=0;
												}
												elseif ($data['tinggi']<=40 && $data['tinggi']<=58) {
													$pendek=($data['tinggi']-40)/40;
												}
											
												//normal
												if($data['tinggi']<=40 || $data['tinggi']>66.2 ){
													$sedang=0;
												}
												elseif ($data['tinggi']>40 && $data['tinggi']<=55.8) {
													$sedang=($data['tinggi']-45)/45;
												}
												elseif ($data['tinggi']<=66.2 && $data['tinggi']>55.8) {
													$sedang=(66.2-$data['tinggi'])/40;
												}
											
												//normal
												if($data['tinggi']>66.2 ){
													$tiang=1;
												}
												elseif ($data['tinggi']>55.8 && $data['tinggi']<=66.2) {
													$tiang=($data['tinggi']-55.8)/55.8;
												}
												elseif ($data['tinggi']<=55.8) {
													$tiang=0;
													}
												}
												// umur 5 bulan
												elseif ($data['umur']==5) {
													if($data['tinggi']<=40){
														$pendek=1;
													}
													elseif ($data['tinggi']>59.9) {
														$pendek=0;
													}
													elseif ($data['tinggi']<=40 && $data['tinggi']<=59.9) {
														$pendek=($data['tinggi']-40)/40;
													}
												
													//normal
													if($data['tinggi']<=40 || $data['tinggi']>68.2 ){
														$sedang=0;
													}
													elseif ($data['tinggi']>40 && $data['tinggi']<=59.9) {
														$sedang=($data['tinggi']-40)/40;
													}
													elseif ($data['tinggi']<=68.2 && $data['tinggi']>59.9) {
														$sedang=(68.2-$data['tinggi'])/40;
													}
												
													//normal
													if($data['tinggi']>69.9 ){
														$tiang=1;
													}
													elseif ($data['tinggi']>61.9 && $data['tinggi']<=69.9) {
														$tiang=($data['tinggi']-61.9)/61.9;
													}
													elseif ($data['tinggi']<=61.9) {
														$tiang=0;
														}
													}
													//umur 6 bulan
													elseif ($data['umur']==6) {
														if($data['tinggi']<=40){
															$pendek=1;
														}
														elseif ($data['tinggi']>61.5) {
															$pendek=0;
														}
														elseif ($data['tinggi']<=40 && $data['tinggi']<=61.5) {
															$pendek=($data['tinggi']-40)/40;
														}
													
														//normal
														if($data['tinggi']<=40 || $data['tinggi']>70){
															$sedang=0;
														}
														elseif ($data['tinggi']>40 && $data['tinggi']<=61.5) {
															$sedang=($data['tinggi']-40)/40;
														}
														elseif ($data['tinggi']<=70 && $data['tinggi']>61.5) {
															$sedang=(70-$data['tinggi'])/40;
														}
													
														//normal
														if($data['tinggi']>70 ){
															$tiang=1;
														}
														elseif ($data['tinggi']>61.5 && $data['tinggi']<=70) {
															$tiang=($data['tinggi']-61.5)/61.5;
														}
														elseif ($data['tinggi']<=61.5) {
															$tiang=0;
															}
														}
																
								//--------------------------------------------------------------------
								//berat badan
								//umur 0 
								if($data['umur']==0){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>2.4) {
									$kurus=0;
								}
								elseif ($data['berat']<=2.4 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>4.2 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=2.4) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=4.2 && $data['berat']>2.4) {
									$berisi=(4.2-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>4.2 ){
									$gemuk=1;
								}
								elseif ($data['berat']>2.4 && $data['berat']<=4.2) {
									$gemuk=($data['berat']-2.4)/2.4;
								}
								elseif ($data['berat']<=2.4) {
									$gemuk=0;
									}
								}

								//umur 1 
								elseif($data['umur']==1){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>3.2) {
									$kurus=0;
								}
								elseif ($data['berat']<=3.2 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>5.4 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=3.2) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=5.4 && $data['berat']>3.2) {
									$berisi=(5.4-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>5.4 ){
									$gemuk=1;
								}
								elseif ($data['berat']>3.2 && $data['berat']<=5.4) {
									$gemuk=($data['berat']-3.2)/3.2;
								}
								elseif ($data['berat']<3.2) {
									$gemuk=0;
									}
								}
								//umur 2 
								elseif($data['umur']==2){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>4.0) {
									$kurus=0;
								}
								elseif ($data['berat']<=4.0 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>6.5 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=4.0) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=6.5 && $data['berat']>4.0) {
									$berisi=(6.5-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>6.5 ){
									$gemuk=1;
								}
								elseif ($data['berat']>4.0 && $data['berat']<=6.5) {
									$gemuk=($data['berat']-4.0)/4.0;
								}
								elseif ($data['berat']<=4.0) {
									$gemuk=0;
									}
								}
								//umur 3 
								elseif($data['umur']==3){
									//kurus
								if($data['berat']<1.5){
									$kurus=1;
								}
								elseif ($data['berat']>4.6) {
									$kurus=0;
								}
								elseif ($data['berat']<=4.6 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<1.5 || $data['berat']>7.4 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=4.6) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=7.4 && $data['berat']>4.6) {
									$berisi=(7.4-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>7.4 ){
									$gemuk=1;
								}
								elseif ($data['berat']>4.6 && $data['berat']<=7.4) {
									$gemuk=($data['berat']-4.6)/4.6;
								}
								elseif ($data['berat']<=4.6) {
									$gemuk=0;
									}
								}
								//umur 4 
								elseif($data['umur']==4){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>5.1) {
									$kurus=0;
								}
								elseif ($data['berat']<=5.1 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>8.6 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=5.1) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=8.1 && $data['berat']>5.1) {
									$berisi=(8.1-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>8.1 ){
									$gemuk=1;
								}
								elseif ($data['berat']>5.1 && $data['berat']<=8.1) {
									$gemuk=($data['berat']-5.1)/5.1;
								}
								elseif ($data['berat']<=5.1) {
									$gemuk=0;
									}
								}
								//umur 5 
								elseif($data['umur']==5){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>5.5) {
									$kurus=0;
								}
								elseif ($data['berat']<=5.5 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>8.7 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=5.5) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=8.7 && $data['berat']>5.5) {
									$berisi=(8.7-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>8.7 ){
									$gemuk=1;
								}
								elseif ($data['berat']>5.5 && $data['berat']<=8.7) {
									$gemuk=($data['berat']-2.5)/2.5;
								}
								elseif ($data['berat']<=5.5) {
									$gemuk=0;
									}
								}
								//umur 6 
								elseif($data['umur']==6){
									//kurus
								if($data['berat']<=1.5){
									$kurus=1;
								}
								elseif ($data['berat']>5.8) {
									$kurus=0;
								}
								elseif ($data['berat']<=5.8 && $data['berat']<=1.5) {
									$kurus=($data['berat']-1.5)/1.5;
								}
						
								//normal
								if($data['berat']<=1.5 || $data['berat']>9.2 ){
									$berisi=0;
								}
								elseif ($data['berat']>1.5 && $data['berat']<=5.8) {
									$berisi=($data['berat']-1.5)/1.5;
								}
								elseif ($data['berat']<=9.2 && $data['berat']>5.8) {
									$berisi=(9.2-$data['berat'])/1.5;
								}
						
								//normal
								if($data['berat']>9.2 ){
									$gemuk=1;
								}
								elseif ($data['berat']>5.84 && $data['berat']<=9.2) {
									$gemuk=($data['berat']-5.8)/5.8;
								}
								elseif ($data['berat']<=5.8) {
									$gemuk=0;
									}
								}
								



								//--------------------------------------------------------------
								//status
								if($pendek>$sedang && $pendek>$tiang){
										$status1 = "PENDEK";
								}elseif ($sedang>$pendek && $sedang>$tiang) {
										$status1 = "SEDANG";
								}elseif ($tiang>$sedang && $pendek<$tiang) {
										$status1 = "TINGGI";
								}

								if($kurus>$berisi && $kurus>$gemuk){
									$status2 = "KURUS";
								}elseif ($berisi>$kurus && $berisi>$gemuk) {
									$status2 = "NORMAL";
								}elseif ($gemuk>$berisi && $kurus<$gemuk) {
									$status2 = "GEMUK";
								}

								
        
							?>
								<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['umur']; ?></td>
                                <td><?php echo $data['tinggi']; ?></td>
								<td><?php echo $pendek; ?></td>
								<td><?php echo $sedang; ?></td>
								<td><?php echo $tiang; ?></td>
								<td><?php echo $status1; ?></td>
								<td></td>
								<tr>
								<tr>
								<thead>
								<th></th>
								<th></th>
								<th></th>
								<th>Berat Bayi(Kilogram)</th>
								<th>Kurus</th>
								<th>Normal</th>
								<th>Gemuk</th>
								<th>Status Berat Bayi</th>
								</thead>

								</tr>
								<tbody>
								<td></td>
								<td></td>
								<td></td>
								<td><?php echo $data['berat']; ?></td>
								<td><?php echo $kurus; ?></td>
								<td><?php echo $berisi; ?></td>
								<td><?php echo $gemuk; ?></td>
								<td><?php echo $status2; ?></td>
								</tbody>	
								
								</tr>
								
								
								
							<?php
								$no++;
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


