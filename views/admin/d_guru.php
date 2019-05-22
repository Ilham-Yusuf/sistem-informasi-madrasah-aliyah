<nav arial-label='breadcrumb'>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?= base_url(); ?> ">Home</a>
		</li>
		<li class="breadcrumb-item active">Data Master</li>
	</ol>
</nav>

<!-- asas -->
<div class="card mb-3">
	<div class="card-header">
    	<i class="fas fa-table"></i>
        Daftar Guru Yang Terdaftar</div>
       	<div class="card-body">

       		<a href="<?= base_url('index.php/admin/t_guru'); ?>" class="btn btn-primary mb-3 float-right">Tambah Guru</a>
        	<div class="table-responsive">
            	<table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                	<tr>
	                    <th>#</th>
	                    <th>NUPTK</th>
	                    <th>Nama Lengkap</th>
	                    <th>Status</th>
	                    <th>Aksi</th>
                  	</tr>
                </thead>
                <tbody>
	                <tr>
	                    <td>1</td>
	                    <td>1111111111111116</td>
	                    <td>Ilham Muhammad Yusuf</td>
	                    <td>Honorer</td>
	                    <td>
	                    	<a href="#" class="btn btn-sm btn-success">Lihat</a>
	                    	<a href="#" class="btn btn-sm btn-info">Edit</a>
	                    	<a href="#" class="btn btn-sm btn-danger">Hapus</a>
	                    </td>
	                </tr>
				</tbody>
			</table>
		</div>
	</div>
</div>