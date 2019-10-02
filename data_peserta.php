<?php include "include/delAlert.php";
include "koneksi.php";
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
						<table class="table">
							<thead>
						    <tr>
								<th>No</th>
								<th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
								<th>Umur (Bulan)</th>
								<th>Berat (Kilogram)</th>
                                <th>Tinggi (Centimeter)</th>
								<th>Lingkar Kepala</th>
								<th>Lingkar Lengan</th>
								<th>Nama Ayah</th>
								<th>Nama Bunda</th>
								
						    </tr>
						    </thead>
						    <tbody>
						    <?php
								if(isset($_POST['caribayi'])){
									$cari = $_POST['caribayi'];
									$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir,TIMESTAMPDIFF(MONTH, tgl_lahir,now()) as umur FROM bayi where nama LIKE '$cari%' or nama LIKE '%$cari%' or nama LIKE '%$cari'" ) or die(mysqli_error($dbh));		
								}
								else
								{
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
								<td><?php echo $data['berat']; ?></td>
                                <td><?php echo $data['tinggi']; ?></td>
								<td><?php echo $data['linkar_kepala']; ?></td>
								<td><?php echo $data['lingkar_lengan']; ?></td>
								<td><?php echo $data['ayah']; ?></td>
								<td><?php echo $data['ibu']; ?></td>
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
<!-- kemungkinan bakal disuruh nambah filter dan search -->