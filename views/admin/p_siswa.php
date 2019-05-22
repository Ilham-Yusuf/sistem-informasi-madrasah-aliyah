<div class="card mb-3">
	<div class="card-header">
        <i class="fas fa-user"></i>
        Profile Siswa
    </div>
    <div class="card-body">
    	<form action="" method="post" enctype="multipart/form-data">
    		<div class="row">
    			<div class="col-md">
	    			<div class="form-group">
		    			<label for="nis">NIS</label>
		    			<input type="number" name="nis" class="form-control" readonly id="nis" value="<?= $siswa['siswaNis']; ?>">
		    		</div>
		    	</div>
		    	<div class="col-md">
		    		<div class="form-group">
		    			<label for="nisn">NISN</label>
		    			<input type="number" name="nisn" class="form-control" readonly id="nisn" value="<?= $siswa['siswaNisn']; ?>">
		    		</div>
		    	</div>
    		</div>
    		<div class="row">
    			<div class="col-md">
    				<div class="form-group">
    					<label for="nama">Nama Lengkap</label>
	    				<input type="text" name="nama" class="form-control" readonly id="nama" value="<?= $siswa['siswaNama']; ?>">
    				</div>
    			</div>
    			<div class="col-md">
    				<div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <input type="text" name="kelamin" class="form-control" readonly id="kelamin" value="<?= $siswa['siswaKelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?>">	
    				</div>
    			</div>
    		</div>

    		<div class="row">
    			<div class="col-md">
    				<div class="form-group">
    					<label for="tempatLahir">Tempat Lahir</label>
	    				<input type="text" name="tempatLahir" class="form-control" readonly id="tempatLahir" value="<?= $siswa['siswaTempatLahir'] ?>">	
    				</div>
    			</div>
    			<div class="col-md">
    				<div class="form-group">
    					<label for="tanggalLahir">Tanggal Lahir</label>
	    				<input type="text" name="tanggalLahir" class="form-control" readonly id="tanggalLahir" value="<?= $siswa['siswaTanggalLahir'] ?>">
    				</div>
    			</div>
    		</div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" name="agama" class="form-control" readonly id="agama" value="<?= $siswa['siswaAgama']; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" readonly id="alamat" value="<?= $siswa['siswaAlamat']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="noHp">No. HP</label>
                        <input type="number" name="noHp" class="form-control" readonly id="noHp" value="<?= $siswa['siswaNoHp'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" readonly id="email" value="<?= $siswa['siswaEmail'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="text" name="text" class="form-control" readonly id="text" value="<?= $siswa['siswaFoto'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="tahunMasuk">Tahun Masuk</label>
                        <input type="number" name="tahunMasuk" class="form-control" readonly id="tahunMasuk" value="<?= $siswa['siswaTahunMasuk']; ?>"> 
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="noKk">No KK</label>
                        <input type="number" name="noKk" class="form-control " id="noKk" readonly value="<?= $siswa['ortuNoKk'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="namaAyah">Nama Ayah</label>
                        <input type="text" name="namaAyah" class="form-control " id="namaAyah" readonly value="<?= $ortu['ortuNamaAyah'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="noKtpAyah">No Ktp Ayah</label>
                        <input type="number" name="noKtpAyah" class="form-control" id="noKtpAyah" readonly value="<?= $ortu['ortuKtpAyah']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="pendidikanAyah">Pendidikan Terakhir Ayah</label>
                        <input type="text" name="pendidikanAyah" class="form-control" readonly value="<?= $ortu['ortuPendidikanAyah'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                        <input type="text" name="pekerjaanAyah" class="form-control" id="pekerjaanAyah" readonly value="<?= $ortu['ortuKerjaAyah'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="namaIbu">Nama Ibu</label>
                        <input type="text" name="namaIbu" class="form-control " id="namaIbu" readonly value="<?= $ortu['ortuNamaIbu'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="noKtpIbu">No Ktp Ibu</label>
                        <input type="number" name="noKtpIbu" class="form-control" id="noKtpIbu" readonly value="<?= $ortu['ortuKtpIbu'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="pendidikanIbu">Pendidikan Terakhir Ibu</label>
                        <input type="text" name="pendidikanIbu" class="form-control" readonly value="<?= $ortu['ortuPendidikanIbu'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                        <input type="text" name="pekerjaanIbu" class="form-control" readonly id="pekerjaanIbu" value="<?= $ortu['ortuKerjaIbu'] ?>">
                    </div>
                </div>
            </div>
            <a href="<?= base_url('index.php/admin/d_siswa'); ?>" name="kembali" class="btn btn-primary">Kembali</a>
    	</form>
	</div>
</div>