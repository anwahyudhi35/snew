<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">				
                <form method="POST" action="?ap=proses_tambah_bayi" class="row">
					<div class="col-lg-12">
					<div class="col-sm-6">	

					  	<div class="form-group">
							<label>Nama Bayi</label>
							<input type="text" required name="nama" class="form-control" placeholder="Nama Lengkap">
							</div>

						<div class="form-group">
							<label>Tanggal Lahir Bayi</label>
							<input type="date" required name="lahir" class="form-control" max="<?php
								date_default_timezone_set("Asia/Shanghai");
								echo date('Y-m-d');
								?>">
						  </div>
						  
						  <div class="form-group">
							<label>Berat Bayi (kilogram)</label>
							<input type="number" required name="berat" class="form-control" placeholder="Berat Badan Bayi" min="0" step="any">
						</div>

						<div class="form-group">
							<label>Tinggi Bayi (Centimeter)</label>
							<input type="number" required name="tinggi" class="form-control" placeholder="Tinggi Badan Bayi" min="0" step="any">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<br>
							<div class="panel panel-default">
								<div class="panel-body">
								<input type="radio" name="gender" value="Pria">Pria
								<input type="radio" name="gender" value="Perempuan">Perempuan	
							</div>
						</div>
							<br>
							
							<div class="form-group">
							<label>Lingkar Kepala (Centimeter)</label>
							<input type="number" required name="kepala" class="form-control" placeholder="Lingkar Kepala Bayi" min="0" step="any">
							</div>

							<div class="form-group">
							<label>Lingkar Lengan Bayi (Centimeter)</label>
							<input type="number" required name="lengan" class="form-control" placeholder="Lingkar Lengan Bayi" min="0" step="any">
							</div>
							
							<div class="form-group">
							<label>Nama Ayah Bayi</label>
							<input type="text" required name="ayah" class="form-control" placeholder="Nama Ayah Bayi">
							</div>

							<div class="form-group">
							<label>Nama Bunda Bayi</label>
							<input type="text" required name="ibu" class="form-control" placeholder="Nama Ibu Bayi">
							</div>
						</div>

						
						<div class="form-group">
								<input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
								<input type="submit" required name="Submit" value = "Submit" class="btn btn-primary pull-right btn-fill">
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