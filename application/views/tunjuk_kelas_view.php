<br>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Pilih Wali Kelas
            </div>
            <div class="panel-body">
                <?php echo form_open('tunjukKelas/save');?>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nama Kelas</label>
                    <div class="col-md-6">
                        <select class="form-control" name="id_kelas">
                            <?php foreach($kelas as $row):?>
                                <option value="<?php echo $row->ID_KELAS;?>"><?php echo $row->NAMA_KELAS;?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nama Guru Wali</label>
                    <div class="col-md-6">
                        <select class="form-control" name="id_guru">
                            <?php foreach($guru as $row):?>
                                <option value="<?php echo $row->ID_GURU;?>"><?php echo $row->NAMA_GURU;?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">tahun Angkatan</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="tahun_angkatan">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-10">
                        <button type="submit" class="btn btn-primary">
                            Pilih
                        </button>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
        </div>
        <br>
        <div class="row">
            <div class="colmd-10 col-md-offset-1">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr class="success">
                        <th>NO</th>
                        <th>ID kelas</th>
                        <th>ID Guru</th>
                        <th>Tahun angkatan</th>
                        <th>Pilihan</th>
                    </tr>
                    </thead>

                    <?php
                    if($data)
                    {
                        $no = 1;
                        foreach ($data as $data) :
                            ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data->ID_KELAS; ?></td>
                                <td><?php echo $data->ID_GURU; ?></td>
                                <td><?php echo $data->TAHUN_ANGKATAN; ?></td>
                                <td>
                                    <a href="tunjukKelas/delete/<?php echo $data->ID_KELAS."/".$data->ID_GURU."/".$data->TAHUN_ANGKATAN;  ?>"><button class="btn btn-danger">Delete</button></a>
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