<nav arial-label='breadcrumb'>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?= base_url(); ?> ">Home</a>
		</li>
		<li class="breadcrumb-item active">Data Master <small>: Siswa</small></li>
	</ol>
</nav>

<!-- alert -->
<?php if ( $this->session->flashdata('info') ) : ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	<strong>Berhasil</strong> <?= $this->session->flashdata('info') ?> data siswa
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<?php endif; ?>

<!-- asas -->
<div class="card mb-3">
	<div class="card-header">
    	<i class="fas fa-table"></i>
        Daftar Guru Yang Terdaftar</div>
       	<div class="card-body">
       		<div class="row">
       			<div class="col-md">
       				<form action="" method="post">
       					<div class="input-group">
		       				<input type="text" name="cariSiswa" class="form-control">
		       				<div class="input-group-append">
		       					<button type="submit" class="btn btn-outline-success" name="buttonCariSiswa">Cari</button>
		       				</div>
	       				</div>
       				</form>			
       			</div>
       			<div class="col-md mt-2 mt-md-0">
		       		<a href="<?= base_url('index.php/admin/t_siswa'); ?>" class="btn btn-primary mb-3 float-right">Tambah Siswa</a>
       			</div>
       		</div>
        	<div class="table-responsive">
            	<table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                	<tr>
	                    <th style="width: 50px">#</th>
	                    <th style="">NIS</th>
	                    <th>Nama Lengkap</th>
	                    <th>Kelas</th>
	                    <th style="width: 200px">Aksi</th>
                  	</tr>
                </thead>
                <tbody>
                	<?php $no = 1; foreach ($siswa as $a) : ?>
	                <tr>
	                    <td><?= $no++ ?></td>
	                    <td><?= $a['siswaNis'] ?></td>
	                    <td>
	                    	<?= $a['siswaNama'] ?>
	                    	<?= $a['ortuNoKk'] == '0' ? "<span class='badge badge-danger'>data orang tua belum diisi</span>":''; ?>
	                    </td>
	                    <td><?= $a['kelas'] ?></td>
	                    <td>
	                    	<a href="<?= base_url('index.php/admin/p_siswa/'.$a['siswaNis']); ?>" class="btn btn-sm btn-success my-1 my-md-0">Lihat</a>
	                    	<a href="<?= base_url('index.php/admin/e_siswa/'.$a['siswaNis']); ?>" class="btn btn-sm btn-info my-1 my-md-0">Edit</a>
	                    	<a href="<?= base_url('index.php/admin/h_siswa/'.$a['siswaNis']); ?>" onClick="return confirm('hapus data siswa tersbut ?')" class="btn btn-sm btn-danger my-1 my-md-0">Hapus</a>
	                    </td>
	                </tr>
		            <?php endforeach; ?>
				</tbody>
			</table>
			<?= $page ?>
		</div>
	</div>
</div>