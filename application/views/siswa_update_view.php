<br>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Data Siswa
            </div>
            <?php echo form_open('siswa/update/'.$data['ID_MURID']);?>
            <div class="panel-body">
                <div class=" form-group">
                    <label class="col-md-4 cotrol-label">ID Kelas</label>
                    <div class="col-md-6">
                        <select class="form-control" name="id_kelas">
                            <option value="7">7A</option>
                            <option value="2">7B</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nama</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Nama" name="nama" type="text" value="<?php echo($data['NAMA']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">NISN</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="NISN" name="nisn" type="text" value="<?php echo($data['NISN']) ;?>">
                    </div>
                </div>
                <div class=" form-group">
                    <label class="col-md-4 cotrol-label">Jenis Kelamin</label>
                    <div class="col-md-6">
                        <select class="form-control" name="jenis_kelamin">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Username</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Username" name="username" type="text" value="<?php echo($data['USERNAME']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input class="form-control" name="password" type="password" value="<?php echo($data['PASSWORD']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Alamat</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Alamat" name="alamat" type="text" value="<?php echo($data['ALAMAT']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">No Telepon</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="No Telepon" name="no_telepon" type="text" value="<?php echo($data['NOMOR_TELEPON']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Tanggal Lahir</label>
                    <div class="col-md-6">
                        <input data-provide="datepicker" placeholder="2015-01-01" class="datepicker form-control" name="tanggal_lahir" value="<?php echo($data['TANGGAL_LAHIR']) ;?>">
                        <script>
                            $.fn.datepicker.defaults.format = "yyyy-mm-dd";
                            $('.datepicker').datepicker({
                                format: 'yyyy-mm-dd',
                                startDate: '-3d'
                            })
                        </script>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Ayah</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Ayah" name="ayah" type="text" value="<?php echo($data['AYAH']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Ibu</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Ibu" name="ibu" type="text" value="<?php echo($data['IBU']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Pekerjaan Ortu</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Pekerjaan Ortu" name="pekerjaan_ortu" type="text" value="<?php echo($data['PEKERJAAN_ORTU']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Gaji</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Gaji" name="gaji" type="text" value="<?php echo($data['GAJI']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Tahun 1</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Tahun 1" name="tahun1" type="text" value="<?php echo($data['TAHUN1']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Tahun 2</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Tahun 2" name="tahun2" type="text" value="<?php echo($data['TAHUN2']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Tahun 3</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Tahun 3" name="tahun3" type="text" value="<?php echo($data['TAHUN3']) ;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Poin Kelakuan</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Poin Kelakuan" name="poin_kelakuan" type="text" value="<?php echo($data['POIN_KELAKUAN']) ;?>">
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