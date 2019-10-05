<?php 
    include '../../koneksi.php';
?>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">				
                <form method="POST" action="?ap=input_bulanan_proses" class="row">
					<div class="col-lg-12">
					<div class="col-sm-6">	

					  	<div class="form-group">
							<label>Nama Bayi</label>
							<select name="bayinya">
                        <?php 
                            $query = "select * from bayi";

                            $pilihan = mysqli_query($dbh, $query);
                        
                            while($row = mysqli_fetch_array($pilihan)){
                                   ?> <option value="<?php echo $row['urut'] ?>"><?php echo $row['nama']?></option>
                            <?php }
                        ?>
                        </select>                        
                        </div>

                        <div class="form-group">
                                <label> Berat Badan </label>
                                <input type="number" required name="berat" class="form-control" placeholder="bulan" min="0">
							
                        </div>

                        <div class="form-group">
                                <label> Tinggi Badan </label>
                                <input type="number" required name="tinggi" class="form-control" placeholder="bulan" min="0">
							
                        </div>

                        <div class="form-group">
                                <label> Bulan </label>
                                <input type="text" required name="bulan" class="form-control" placeholder="bulan" readonly value="<?php echo date('m'); ?>">
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