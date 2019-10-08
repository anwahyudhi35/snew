<?php include "include/delAlert.php";
include "../../koneksi.php";
?>

<div class="row" id="view">

			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Data Bulanan Bayi
				</div>
					<div class="panel-body">
					<form class="form-inline" action="" method="post">
					<div class="form-group">
					<label> Cari Nama Bayi </label>
					&nbsp;&nbsp;
  						<input type="text" class="form-control" name="caribayi" placeholder="masukkan nama bayi"> 
					</div>
					&nbsp;&nbsp;
					<div class="form-group">
						<b><input type="submit" class="btn" value="mencari" name="button" id="button"></b>
					</div>
				</form>
				<br>
									<a href="?ap=input_bulanan" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus"></span> Tambah Data Bulanan Bayi 
									</a> 
									<br>
									<br>               
						<table class="table table-bordered table-hover">
						    <thead>
						    <tr>
								<th rowspan="2">No</th>
								<th rowspan="2">Nama</th>
                                <th rowspan="2">Jenis Kelamin</th>
                                <th rowspan="2">Tanggal Lahir</th>
								<th colspan="2" scope="colgroup">Januari</th>
								<th colspan="2" scope="colgroup">Februari</th>
								<th colspan="2" scope="colgroup">Maret</th>
								<th colspan="2" scope="colgroup">April</th>
								<th colspan="2" scope="colgroup">Mei</th>
								<th colspan="2" scope="colgroup">Juni</th>
								<th rowspan="2">Aksi</th>	
							</tr>
							<tr>
								<th>Berat</th>
								<th>Tinggi</th>
								<th>Berat</th>
								<th>Tinggi</th>
								<th>Berat</th>
								<th>Tinggi</th>
								<th>Berat</th>
								<th>Tinggi</th>
								<th>Berat</th>
								<th>Tinggi</th>
								<th>Berat</th>
								<th>Tinggi</th>
								
							</tr>
						    </thead>
						    <tbody>
						    <?php
								if(isset($_POST['caribayi'])){
									$cari = $_POST['caribayi'];
									$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir FROM bayi where nama LIKE '$cari%' or nama LIKE '%$cari%' or nama LIKE '%$cari'" ) or die(mysqli_error($dbh));
								}
								else{
									$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir FROM bayi") or die(mysqli_error($dbh));
								}
						    $no = 1;
							while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
							?>
								<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['kelamin']; ?></td>
                                <td><?php echo $data['lahir']; ?></td>
							<?php 
								$bulanan1 = mysqli_query($dbh, "SELECT * FROM bulanan WHERE id_bayi = '$data[urut]' && bulan_data=1");
								$bulanan2 = mysqli_query($dbh, "SELECT * FROM bulanan WHERE id_bayi = '$data[urut]' && bulan_data=2");
								$bulanan3 = mysqli_query($dbh, "SELECT * FROM bulanan WHERE id_bayi = '$data[urut]' && bulan_data=3");
								$bulanan4 = mysqli_query($dbh, "SELECT * FROM bulanan WHERE id_bayi = '$data[urut]' && bulan_data=4");
								$bulanan5 = mysqli_query($dbh, "SELECT * FROM bulanan WHERE id_bayi = '$data[urut]' && bulan_data=5");
								$bulanan6 = mysqli_query($dbh, "SELECT * FROM bulanan WHERE id_bayi = '$data[urut]' && bulan_data=6");
								

							
								$bulananb1= mysqli_fetch_array($bulanan1);
								$bulananb2= mysqli_fetch_array($bulanan2);
								$bulananb3= mysqli_fetch_array($bulanan3);
								$bulananb4= mysqli_fetch_array($bulanan4);
								$bulananb5= mysqli_fetch_array($bulanan5);
								$bulananb6= mysqli_fetch_array($bulanan6);
							?>
								<td> <?php echo $bulananb1['berat_bayi']; ?></td>
								<td> <?php echo $bulananb1['tinggi_bayi']; ?></td>
								<td> <?php echo $bulananb2['berat_bayi'] ;?></td>
								<td> <?php echo $bulananb2['tinggi_bayi']; ?></td>
								<td> <?php echo $bulananb3['berat_bayi'] ;?></td>
								<td> <?php echo $bulananb3['tinggi_bayi'] ;?></td>
								<td> <?php echo $bulananb4['berat_bayi'] ;?></td>
								<td> <?php echo $bulananb4['tinggi_bayi'] ;?></td>
								<td> <?php echo $bulananb5['berat_bayi'] ;?></td>
								<td> <?php echo $bulananb5['tinggi_bayi'] ;?></td>
								<td> <?php echo $bulananb6['berat_bayi'] ;?></td>
								<td> <?php echo $bulananb6['tinggi_bayi'] ;?></td>
								
								<td>
								<a href="?ap=edit_bulanan&urut=<?php echo $data['urut']; ?>" class="btn btn-info btn-sm btn-fill">
                                        <span class="glyphicon glyphicon-pencil"></span> Ubah Data Bulanan Bayi 
									</a>   
								<p></p>
								<a class="btn btn-warning btn-sm btn-fill" href="?ap=hapus_bulanan&urut=<?php echo $data['urut']; ?>" onclick="return confirm('Apa anda yakin dengan penghapusan data?');">
                                        <span class="glyphicon glyphicon-trash"></span> Hapus Data Bulanan Bayi 
									</a>
								</td>
							<?php
								$no++;
							}
							?>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				</div>
</div>