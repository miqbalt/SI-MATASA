<br>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Kelas
            </div>
            <div class="panel-body">
                <?php echo form_open('kelas/save');?>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nama Kelas</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Nama" name="nama_kelas" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-10">
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>