<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="<?php echo site_url('jenisnilai/insert');?>" ><div class="btn btn-default">Tambah</div></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="colmd-10 col-md-offset-1">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="success">
                            <th>NO</th>
                            <th>ID Jenis Nilai</th>
                            <th>Jenis Nilai</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>

                    <?php
                    if($jenisnilai)
                    {
                    	$no = 1;
                    	foreach ($jenisnilai as $data) :
                     ?>
                    
                 	<tr>
                 		<td><?php echo $no; ?></td>
                 		<td><?php echo $data->ID_JENISNILAI; ?></td>
                 		<td><?php echo $data->JENISNILAI; ?></td>
                 		<td>
							<a href="jenisnilai/delete/<?php echo $data->ID_JENISNILAI; ?>"><button class="btn btn-danger">Delete</button></a>
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