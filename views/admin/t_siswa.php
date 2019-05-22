<div class="card mb-3">
	<div class="card-header">
    	<i class="fas fa-user-plus"></i>
        Tambah Data Siswa
   	</div>
    <div class="card-body">
    	<form action="" method="post" enctype="multipart/form-data">
    		<div class="row">
    			<div class="col-md">
	    			<div class="form-group">
		    			<label for="nis">NIS</label>
		    			<input type="number" name="nis" autofocus class="form-control " id="nis" value="<?= set_value('nis') ?>">
		    		</div>
		    	</div>
		    	<div class="col-md">
		    		<div class="form-group">
		    			<label for="nisn">NISN</label>
		    			<input type="number" name="nisn" class="form-control" id="nisn">
		    		</div>
		    	</div>
    		</div>
    		<div class="row">
    			<div class="col-md">
    				<div class="form-group">
    					<label for="nama">Nama Lengkap</label>
	    				<input type="text" name="nama" class="form-control" id="nama">
		    			<small class="form-text text-muted">example : ilham muhammad yusuf</small>	
    				</div>
    			</div>
    			<div class="col-md">
    				<div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <select name="kelamin" class="form-control">
                            <?php foreach ($kelamin as $a) : ?>
                                <option value="<?= $a ?>"><?= $a == 'L' ? 'Laki-laki': 'Perempuan'; ?></option>
                            <?php endforeach; ?>
                        </select>	
    				</div>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md">
    				<div class="form-group">
    					<label for="tempatLahir">Tempat Lahir</label>
	    				<input type="text" name="tempatLahir" class="form-control" id="tempatLahir">
		    			<small class="form-text text-muted">example : garut</small>	
    				</div>
    			</div>
    			<div class="col-md">
    				<div class="form-group">
    					<label for="tanggalLahir">Tanggal Lahir</label>
	    				<input type="date" name="tanggalLahir" class="form-control" id="tanggalLahir">
		    			<small class="form-text text-muted">example : <?= date('d/m/Y'); ?></small>	
    				</div>
    			</div>
    		</div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <?php foreach ($agama as $a) : ?>
                                <option value="<?= $a ?>"><?= ucfirst($a) ?></option>
                            <?php endforeach; ?>
                        </select>   
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat">
                        <small class="form-text text-muted">example : kp. ciledug</small> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="noHp">No. HP</label>
                        <input type="number" name="noHp" class="form-control" id="noHp">
                        <small class="form-text text-muted">example : ilham</small> 
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                        <small class="form-text text-muted">example : ilham</small> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label>Foto</label>
                        <div class="custom-file">
                            <input type="file" name="foto" class="custom-file-input" id="foto">
                            <label for="foto" class="custom-file-label">Pilih file foto</label> 
                        </div>
                        <small class="form-text text-muted">example : gambar.jpg</small>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="tahunMasuk">Tahun Masuk</label>
                        <input type="number" name="tahunMasuk" class="form-control" id="tahunMasuk" value="<?= date('Y'); ?>">
                        <small class="form-text text-muted">example : <?= date('Y'); ?></small> 
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="noKk">No KK</label>
                        <input type="number" name="noKk" class="form-control " id="noKk" value="<?= set_value('noKk') ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="namaAyah">Nama Ayah</label>
                        <input type="text" name="namaAyah" class="form-control " id="namaAyah" value="<?= set_value('namaAyah') ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="noKtpAyah">No Ktp Ayah</label>
                        <input type="number" name="noKtpAyah" class="form-control" id="noKtpAyah" value="<?= set_value('noKtpAyah'); ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="pendidikanAyah">Pendidikan Terakhir Ayah</label>
                        <select name="pendidikanAyah" id="pendidikanAyah" class="form-control">
                            <?php foreach ($pendidikan as $a) : ?>
                                <option value="<?= $a ?>"><?= $a; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                        <input type="text" name="pekerjaanAyah" class="form-control" id="pekerjaanAyah" value="<?= set_value('pekerjaanAyah') ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="namaIbu">Nama Ibu</label>
                        <input type="text" name="namaIbu" class="form-control " id="namaIbu" value="<?= set_value('namaIbu') ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="noKtpIbu">No Ktp Ibu</label>
                        <input type="number" name="noKtpIbu" class="form-control" id="noKtpIbu" value="<?= set_value('noKtpIbu') ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="pendidikanIbu">Pendidikan Terakhir Ibu</label>
                        <select name="pendidikanIbu" id="pendidikanIbu" class="form-control">
                            <?php foreach ($pendidikan as $a) : ?>
                                <option value="<?= $a ?>"><?= $a; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                        <input type="text" name="pekerjaanIbu" class="form-control" id="pekerjaanIbu" value="<?= set_value('pekerjaanIbu') ?>">
                    </div>
                </div>
            </div>
            <a href="<?= base_url('index.php/admin/d_siswa') ?>" class='btn btn-secondary'>Batal</a>
            <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
    	</form>
	</div>
</div>