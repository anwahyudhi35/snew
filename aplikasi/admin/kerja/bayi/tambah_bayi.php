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
							<label>Nama Orangtua Bayi</label>
							<input type="text" required name="ayah" class="form-control" placeholder="Nama Ayah Bayi">
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