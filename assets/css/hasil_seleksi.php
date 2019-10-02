<?php
	#Cari nilai maximal
	$carimax = mysql_query("SELECT max(c1) as max1,
									max(c2) as max2,
									max(c3) as max3
									FROM proses");
	$max = mysql_fetch_array($carimax);
	# Cari nilai minimal
	$carimin = mysql_query("SELECT min(c1) as min1,
									min(c2) as min2,
									min(c3) as min3
									FROM proses");
	$min = mysql_fetch_array($carimin);

	$bbt_c1 = mysql_query("SELECT bobot as bbt from kriteria where nama_kriteria = 'Sertifikat prestasi akademik/ non-akademik'");
	$bobot_c1 = mysql_fetch_array($bbt_c1);

	$bbt_c2 = mysql_query("SELECT bobot as bbt from kriteria where nama_kriteria = 'Nilai Ijazah Terakhir'");
	$bobot_c2 = mysql_fetch_array($bbt_c2);

	$bbt_c3 = mysql_query("SELECT bobot as bbt from kriteria where nama_kriteria = 'Asal Sekolah'");
	$bobot_c3 = mysql_fetch_array($bbt_c3);
?>


<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
		<div class="panel-heading">Hasil Seleksi</div>
			<div class="panel-body">
				<table class="table" width="500" align="center">
					<thead>
						<tr>
							<th width="80">Nomor</th>
							<th width="300">Nama</th>
							<th>Nilai</th>
						</tr>
				    </thead>
				    <tbody>
						<tr>
					    	<?php
					    	$no=0;
							$query = "select proses.id_mahasiswa, mahasiswa.nama, mahasiswa.alamat, proses.c1, proses.c2, proses.c3 from mahasiswa, proses where mahasiswa.id_mahasiswa = proses.id_mahasiswa order by id_mahasiswa asc";
							
							$hasil = mysql_query($query) or die("");
							while ($data = mysql_fetch_array($hasil)) {

							$no++;
							?>
								<td><?php echo "".$no; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo round((($data['c1']/$max['max1'])*$bobot_c1['bbt'])+			
													 (($data['c2']/$max['max2'])*$bobot_c2['bbt'])+
													 (($data['c3']/$max['max3'])*$bobot_c3['bbt']),4); ?></td>
							</tr>
							<?php
							}
							// mysql_close();
							?>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</div>