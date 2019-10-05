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
								<th colspan="2" scope="colgroup">Juli</th>
								<th colspan="2" scope="colgroup">Agustus</th>
								<th colspan="2" scope="colgroup">September</th>
								<th colspan="2" scope="colgroup">Oktober</th>
								<th colspan="2" scope="colgroup">November</th>
								<th colspan="2" scope="colgroup">Desember</th>
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
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								
								<td>
								<a href="?ap=edit_bayi&urut=<?php echo $data['urut']; ?>" class="btn btn-info btn-sm btn-fill">
                                        <span class="glyphicon glyphicon-pencil"></span> Ubah Data Bayi 
									</a>   
								<p></p>
								<a class="btn btn-warning btn-sm btn-fill" href="?ap=hapus_bayi&urut=<?php echo $data['urut']; ?>" onclick="return confirm('Apa anda yakin dengan penghapusan data?');">
                                        <span class="glyphicon glyphicon-trash"></span> Hapus Data Bayi 
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