<br>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Siswa
            </div>
            <div class="panel-body">
                <?php echo form_open('siswa/save');?>
                    <div class="form-group">
                        <label class="col-md-4 control-label">ID Murid</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="ID Murid" name="id_murid" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Nama</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Nama" name="nama" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">NISN</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="NISN" name="nisn" type="text">
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
                            <input class="form-control" placeholder="Username" name="username" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input class="form-control" name="password" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Alamat</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Alamat" name="alamat" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">No Telepon</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="No Telepon" name="no_telepon" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tanggal Lahir</label>
                        <div class="col-md-6">
                            <input data-provide="datepicker" placeholder="2015-01-01" class="datepicker form-control" name="tanggal_lahir">
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
                            <input class="form-control" placeholder="Ayah" name="ayah" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Ibu</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Ibu" name="ibu" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Pekerjaan Ortu</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Pekerjaan Ortu" name="pekerjaan_ortu" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Gaji</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Gaji" name="gaji" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tahun 1</label>
                        <div class="col-md-6">
                            <select class="form-control" name="tahun1">
                                <?PHP print_r($data);?>
                                <?php foreach($data as $row):?>
                                    <option value="<?php echo $row->ID_KELAS;?>"><?php echo $row->NAMA_KELAS;?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tahun 2</label>
                        <div class="col-md-6">
                            <select class="form-control" name="tahun2">
                                <?PHP print_r($data);?>
                                <?php foreach($data as $row):?>
                                    <option value="<?php echo $row->ID_KELAS;?>"><?php echo $row->NAMA_KELAS;?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Tahun 3</label>
                        <div class="col-md-6">
                            <select class="form-control" name="tahun3">
                                <?PHP print_r($data);?>
                                <?php foreach($data as $row):?>
                                    <option value="<?php echo $row->ID_KELAS;?>"><?php echo $row->NAMA_KELAS;?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Poin Kelakuan</label>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Poin Kelakuan" name="poin_kelakuan" type="text">
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