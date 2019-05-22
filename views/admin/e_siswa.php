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
                        <input type="number" readonly name="nis" class="form-control" id="nis" value="<?= $siswa['siswaNis']; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="number" name="nisn" class="form-control" id="nisn" value="<?= $siswa['siswaNisn']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $siswa['siswaNama']; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <input type="text" name="kelamin" class="form-control" id="kelamin" value="<?= $siswa['siswaKelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?>"> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" name="tempatLahir" class="form-control" id="tempatLahir" value="<?= $siswa['siswaTempatLahir'] ?>"> 
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <input type="text" name="tanggalLahir" class="form-control" id="tanggalLahir" value="<?= $siswa['siswaTanggalLahir'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" name="agama" class="form-control" id="agama" value="<?= $siswa['siswaAgama']; ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $siswa['siswaAlamat']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="noHp">No. HP</label>
                        <input type="number" name="noHp" class="form-control" id="noHp" value="<?= $siswa['siswaNoHp'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?= $siswa['siswaEmail'] ?>">
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
                        <small class="form-text text-muted">file terdaftar : <?= $siswa['siswaFoto'] ?></small>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="tahunMasuk">Tahun Masuk</label>
                        <input type="number" name="tahunMasuk" class="form-control" id="tahunMasuk" value="<?= $siswa['siswaTahunMasuk']; ?>"> 
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="noKk">No KK</label>
                        <input type="number" readonly name="noKk" class="form-control " id="noKk" value="<?= $siswa['ortuNoKk'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="namaAyah">Nama Ayah</label>
                        <input type="text" name="namaAyah" class="form-control " id="namaAyah" value="<?= $ortu['ortuNamaAyah'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="noKtpAyah">No Ktp Ayah</label>
                        <input type="number" name="noKtpAyah" class="form-control" id="noKtpAyah" value="<?= $ortu['ortuKtpAyah']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="pendidikanAyah">Pendidikan Terakhir Ayah</label>
                        <input type="text" name="pendidikanAyah" class="form-control" value="<?= $ortu['ortuPendidikanAyah'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="pekerjaanAyah">Pekerjaan Ayah</label>
                        <input type="text" name="pekerjaanAyah" class="form-control" id="pekerjaanAyah" value="<?= $ortu['ortuKerjaAyah'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="namaIbu">Nama Ibu</label>
                        <input type="text" name="namaIbu" class="form-control " id="namaIbu" value="<?= $ortu['ortuNamaIbu'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="noKtpIbu">No Ktp Ibu</label>
                        <input type="number" name="noKtpIbu" class="form-control" id="noKtpIbu" value="<?= $ortu['ortuKtpIbu'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="pendidikanIbu">Pendidikan Terakhir Ibu</label>
                        <input type="text" name="pendidikanIbu" class="form-control" value="<?= $ortu['ortuPendidikanIbu'] ?>">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="pekerjaanIbu">Pekerjaan Ibu</label>
                        <input type="text" name="pekerjaanIbu" class="form-control" id="pekerjaanIbu" value="<?= $ortu['ortuKerjaIbu'] ?>">
                    </div>
                </div>
            </div>
            <a href="<?= base_url('index.php/admin/d_siswa'); ?>" name="kembali" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
        </form>
    </div>
</div>