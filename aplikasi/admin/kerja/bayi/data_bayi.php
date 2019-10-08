<?php include "include/delAlert.php";
include "../../koneksi.php";
?>
<div class="row" id="view">

			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Data Bayi
				</div>
					<div class="panel-body">
					<form class="form-inline" action="" method="post">
					<div class="form-group">
					<label> Cari Nama Bayi </label>
  						<input type="text" class="form-control" name="caribayi" placeholder="masukkan nama bayi"> 
					</div>

					<div class="form-group">
						<input type="submit" value="cari" name="button" id="button">
					</div>
				</form>
				<br>
									<a href="?ap=tambah_bayi" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus"></span> Tambah Data Bayi 
									</a>                
						<table class="table">
						    <thead>
						    <tr>
								<th>No</th>
								<th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
								<th>Umur (Bulan)</th>
                                <th>Nama Orantua</th>
                                
							    <th>Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php
								if(isset($_POST['caribayi'])){
									$cari = $_POST['caribayi'];
									$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir,TIMESTAMPDIFF(MONTH, tgl_lahir,now()) as umur FROM bayi where nama LIKE '$cari%' or nama LIKE '%$cari%' or nama LIKE '%$cari'" ) or die(mysqli_error($dbh));
								}
								else{
									$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir,TIMESTAMPDIFF(MONTH, tgl_lahir,now()) as umur FROM bayi") or die(mysqli_error($dbh));
								}
						    $no = 1;
							while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
							?>
								<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['kelamin']; ?></td>
                                <td><?php echo $data['lahir']; ?></td>
								<td><?php echo $data['umur']; ?></td>
								<td><?php echo $data['orangtua']; ?></td>
								  
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