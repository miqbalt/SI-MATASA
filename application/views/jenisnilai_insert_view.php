 
<br>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="font-weight: bold;font-size: larger">
                Tambah Jenis Rincian Penilaian
            </div>
            <div class="panel-body">
                <?php echo form_open("jenisnilai/Save"); ?>
                <div class="form-group">
                            <label class="col-md-4 control-label">ID Jenis Penilaian</label>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="ID Jenis Penilaian" name="id_jenisnilai" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Jenis Penilaian</label>
                            <div class="col-md-6">
                                <input class="form-control" placeholder="Jenis Penilaian" name="jenisnilai" type="text">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input class="btn btn-success" type="submit" name="submit" value="Submit">
                            </div>
                        </div>
                        
                </form>
            </div>
        </div>
         <div class="container-fluid">
        </div>
    </div>
</div>