<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <a href="<?php echo site_url('mapel/insert');?>" ><div class="btn btn-default">Tambah</div></a>
            </div>
            <div class="col-md-5">
                <h4>Halaman Mengelola Data Mapel</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="colmd-10 col-md-offset-1">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="success">
                            <th>NO</th>
                            <th>ID Mata Pelajaran</th>
                            <th>Nama Mata Pelajaran</th>
                            <th>Nilai SKM</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>

                    <?php
                    if($mapel)
                    {
                    	$no = 1;
                    	foreach ($mapel as $data) :
                     ?>
                    
                 	<tr>
                 		<td><?php echo $no; ?></td>
                 		<td><?php echo $data->ID_MATA_PELAJARAN; ?></td>
                 		<td><?php echo $data->NAMA_MATA_PELAJARAN; ?></td>
                 		<td><?php echo $data->NILAI_SKM; ?></td>
                        <td><?php echo '<a href="edit/'; echo $data->ID_MATA_PELAJARAN;  echo '"><div class="btn btn-info">Edit</div></a>'; echo '<a href="delete/'; echo $data->ID_MATA_PELAJARAN; echo '"><div class="btn btn-danger">Hapus</div></a>"'?></td>
                 		</td>
                 	</tr>
                 	<?php
                 	$no++;
                 	endforeach;
                 	}
                 	else
                 	{
                 		echo "Data kosong";
                 	}
                 	?>
                </table>

       		 </div>
    	</div>
    </div>
</div>