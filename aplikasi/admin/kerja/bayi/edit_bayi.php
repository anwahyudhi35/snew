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
							<input type="date" required name="lahir" class="form-control" value="<?php echo $data['tgl_lahir']; ?>" max="<?php echo date('Y-m-d'); ?>">
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
							<label>Nama Orangtua Bayi</label>
							<input type="text" required name="ayah" class="form-control" placeholder="Nama Ayah Bayi" value="<?php echo $data['orangtua']; ?>">
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