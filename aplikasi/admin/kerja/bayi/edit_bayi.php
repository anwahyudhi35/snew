<?php
	include "../../koneksi.php";
	$urut = $_GET['urut'];
	$query=mysqli_query($dbh,"select * from bayi where urut='$urut'");
	$data=mysqli_fetch_array($query);

	date_default_timezone_set("Asia/Shanghai");
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">				
                <form method="POST" action="?ap=edit_bayi_proses&urut=<?php echo $data['urut'];?>" class="row">
					<div class="col-lg-12">
					<div class="col-sm-6">	

					  	<div class="form-group">
							<label>Nama Bayi</label>
							<input type="text" required name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $data['nama']; ?>">
						</div>

						<div class="form-group">
							<label>Tanggal Lahir Bayi</label>
							<input type="date" required name="lahir" class="form-control" value="<?php echo $data['tgl_lahir']; ?>" max="<?php
echo date('Y-m-d');
?>">
						  </div>
						  
						  <div class="form-group">
							<label>Berat Bayi (gram)</label>
							<input type="number" required name="berat" class="form-control" placeholder="Berat Badan Bayi" min="0" step = "any" value="<?php echo $data['berat']; ?>">
						</div>

						<div class="form-group">
							<label>Tinggi Bayi (Centimeter)</label>
							<input type="number" required name="tinggi" class="form-control" placeholder="Tinggi Badan Bayi" min="0" step = "any" value="<?php echo $data['tinggi']; ?>">
						</div>

						<div class="form-group">
							<label>Jenis Kelamin</label>
							<br>
							<div class="panel panel-default">
                                <?php   
                                 If($data['kelamin']=="Pria")
                                 {
                                     echo "
                                <div class='panel-body'>
								<input type='radio' name='gender' value='Pria' checked>Pria<br>
								<input type='radio' name='gender' value='Perempuan'>Perempuan
								</div> ";
                                 } else {
                                    echo "
                                    <div class='panel-body'>
                                    <input type='radio' name='gender' value='Pria'>Pria<br>
                                    <input type='radio' name='gender' value='Perempuan' checked>Perempuan
                                    </div> ";
                                 }
                                ?>	
							</div>
							<br>
						</div>

						<div class="form-group">
							<label>Lingkar Kepala Bayi (Centimeter)</label>
							<input type="number" required name="kepala" class="form-control" placeholder="Ukuran Lingkar Kepala Bayi" min="0" step = "any" value="<?php echo $data['linkar_kepala']; ?>">
						</div>

						<div class="form-group">
							<label>Lingkar Lengan Bayi (Centimeter)</label>
							<input type="number" required name="lengan" class="form-control" placeholder="Ukuran Lingkar Lengan Bayi" min="0" step = "any" value="<?php echo $data['lingkar_lengan']; ?>">
						</div>

						<div class="form-group">
							<label>Nama Ayah Bayi</label>
							<input type="text" required name="ayah" class="form-control" placeholder="Nama Ayah Bayi" value="<?php echo $data['ayah']; ?>">
						</div>

						<div class="form-group">
							<label>Nama Bunda Bayi</label>
							<input type="text" required name="bunda" class="form-control" placeholder="Nama Bunda Bayi" value="<?php echo $data['ibu']; ?>">
						</div>

						<div class="form-group">
								<input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
								<input type="submit" required name="update" value = "update" class="btn btn-primary pull-right btn-fill" onclick="return confirm('Apa anda yakin dengan pengubahan data?');">
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="">
		    <div class="card-body">
				<!-- content!-->
				<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="body">
                           
                </div>
            </div>
        </div>