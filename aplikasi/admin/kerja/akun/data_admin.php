<?php include "include/delAlert.php";
include "../../koneksi.php";
?>
<div class="row" id="view">

			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Data Admin
				</div>
					<div class="panel-body">
									<a href="?ap=tambah_admin" class="btn btn-success">
                                        <span class="glyphicon glyphicon-plus"></span> Tambah Akun 
									</a>                
						<table class="table">
						    <thead>
						    <tr>
								<th>No</th>
								<th>Nama</th>
                                <th>Username</th>
                                <th>Jabatan</th>
						    </tr>
						    </thead>
						    <tbody>
						    <?php
						    $no = 1;
							$sql = mysqli_query($dbh, "SELECT * FROM user") or die(mysqli_error($dbh));
							while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
							?>
								<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['username']; ?></td>
                                <td><?php echo $data['tugas']; ?></td>
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