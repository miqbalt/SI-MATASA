<br>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="font-size: larger;font-weight: bold">
                Rincian Data Guru Baru
            </div>
            <div class="panel-body">
                <?php echo form_open("guru/save"); ?>
			<div class="form-group">
                <label class="col-md-4 control-label">ID Guru</label>
                <div class="col-md-6">
                    <input class="form-control" placeholder="ID Guru" name="id_guru" type="text">
                </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Nama</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Nama" name="nama" type="text">
                    </div>
                </div>
                <div class=" form-group">
                    <label class="col-md-4 cotrol-label">Mata Pelajaran</label>
                    <div class="col-md-6">
                        <select class="form-control" name="id_mata_pelajaran">
                            <?php foreach($data as $row){?>
                            <option value="<?php echo $row['ID_MATA_PELAJARAN'];?>"><?php echo $row['NAMA_MATA_PELAJARAN'];?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">NIP</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="NIP" name="nip" type="text">
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
                    <label class="col-md-4 control-label">Email</label>
                    <div class="col-md-6">
                        <input class="form-control" placeholder="Email" name="email" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Jabatan</label>
                    <div class="col-md-6">
                        <select class="form-control" name="jabatan">
                            <option value="Guru">Guru</option>
                            <option value="Tata Usaha">Tata Usaha</option>
                            <option value="Bimbingan Kounseling">Bimbingan Kounseling</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                        </select>
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
</div>