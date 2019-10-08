<?php 
    include '../../koneksi.php';
    $urut = $_GET['urut'];
	$query=mysqli_query($dbh,"select * from bayi where urut='$urut'");
    $data=mysqli_fetch_array($query);
    $query1 = "select * from bulanan where id_bayi = '$urut' ";
    $pilihan = mysqli_query($dbh, $query1);
    $data1 = mysqli_fetch_array($pilihan);

?>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">				
                <form method="POST" action="?ap=edit_bulanan_proses&id_bayi=<?php echo $data1['id_data'];?>" class="row">
					<div class="col-lg-12">
					<div class="col-sm-6">	

					  	<div class="form-group">
							<label>Nama Bayi</label>
	                        <input type="text" value="<?php echo $data['nama'];?>" readonly name="bayinya">                   
                        </div>

                        <div class="form-group">
                                <label> Bulan </label>
                              <input type="number" value="6" name="bulanan" readonly>
                     </div>

                        <div class="form-group">
                                <label> Berat Badan </label>
                                <input type="number" required name="berat" class="form-control" placeholder="bulan" min="0" step="0.1" value="<?php echo $data1['berat_bayi']; ?>" >
							
                        </div>

                        <div class="form-group">
                                <label> Tinggi Badan </label>
                                <input type="number" required name="tinggi" class="form-control" placeholder="bulan" min="0" value="<?php echo $data1['tinggi_bayi']; ?>" >
							
                        </div>


                        
						<br>
                		
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