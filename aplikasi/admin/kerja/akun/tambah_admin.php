<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">				
                <form method="POST" action="?ap=proses_tambah_admin" class="row">
					<div class="col-lg-12">
					<div class="col-sm-6">	

					  	<div class="form-group">
							<label>Nama Admin</label>
							<input type="text" required name="nama" class="form-control" placeholder="Nama Lengkap">
							</div>

							<div class="form-group">
							<label>username</label>
							<input type="text" required name="username" class="form-control" placeholder="username admin">
							</div>

							<div class="form-group">
							<label>Password Admin</label>
							<input type="password" required name="kunci" class="form-control" placeholder="password" id="kunci">
							<input type="checkbox" onclick="myFunction()">Lihat Password
							</div>

						<div class="form-group">
								<input type="reset" required name="Reset" class="btn btn-warning btn-fill"> 
								<input type="submit" required name="Submit" value = "Submit" class="btn btn-primary btn-fill">
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

<script>
	var x = document.getElementById("kunci");
	function myFunction() {
	if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
	}
	}
</script>
