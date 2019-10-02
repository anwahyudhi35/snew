<?php
	include "../../koneksi.php";
	$urut = $_GET['no'];
	$query=mysqli_query($dbh,"select * from user where no='$urut'");
	$data=mysqli_fetch_array($query);
?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">				
                <form method="POST" action="?ap=edit_admin_proses&no=<?php echo $data['no'];?>" class="row">
					<div class="col-lg-12">
					<div class="col-sm-6">	
          
            		  	<div class="form-group">
							<label>Username</label>
							<input type="text" required name="username" class="form-control" placeholder="username akun" value="<?php echo $data['username']; ?>" disabled>
					  	</div>

					  	<div class="form-group">
								<label>Nama</label>
								<input type="text" required name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $data['nama']; ?>">
							</div>

						<div class="form-group">
							<label>Jabatan</label>
							<input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo $data['tugas']; ?>" disabled>
						</div>

						<div class="form-group">
							<label>Password Lama</label>
							<div class="input-container">	
							<input type="password" required name="passlama" class="form-control" value="<?php echo $data['password']; ?>" id="alamatpalsu" >
							<input type="checkbox" onclick="myFunction()">Lihat Password </div>
							</div>
							
							<div class="form-group">
							<label>Password baru</label>
							<div class="input-container">	
							<input type="password" name="passbaru" class="form-control" id="alamatbaru" >
							<input type="checkbox" onclick="myFunction1()">Lihat Password
							</div>                                                                         
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
				
<script>
var x = document.getElementById("alamatpalsu");
var y = document.getElementById("alamatbaru");
function myFunction() {
	if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
	}
}

function myFunction1() {
	if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
	}
}
</script>