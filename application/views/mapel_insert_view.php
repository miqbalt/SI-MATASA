 
<br>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="font-weight: bold;font-size: larger">
                Rincian Mata Pelajaran Baru
            </div>
            <div class="panel-body">
                <?php echo form_open("mapel/Save"); ?>
                <div class="form-group">
                            <label class="col-md-4 control-label">ID Mapel</label>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="ID Mata Pelajaran" name="id_mapel" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nama Mata Pelajaran</label>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Nama" name="nama" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Nilai SKM</label>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="100" name="nilai_skm" type="text">
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