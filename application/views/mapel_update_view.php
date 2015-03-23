 
<br>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Mata Pelajaran
            </div>
            <div class="panel-body">
                <?php echo form_open("mapel/update/".$data['ID_MATA_PELAJARAN']); ?>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nama Mata Pelajaran</label>
                    <div class="col-md-6">
                        <input class="form-control" value="<?php echo $data['NAMA_MATA_PELAJARAN'];?>" name="nama" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nilai SKM</label>
                    <div class="col-md-6">
                        <input class="form-control" value="<?php echo $data['NILAI_SKM'];?>" name="nilai_skm" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-10">
                        <input class="btn btn-success" type="submit" name="submit" value="Simpan">
                    </div>
                </div>
                </form>
            </div>
        </div>
         <div class="container-fluid">
        </div>
    </div>
</div>