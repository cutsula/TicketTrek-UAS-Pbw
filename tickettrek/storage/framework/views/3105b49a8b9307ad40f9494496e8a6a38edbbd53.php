

<?php $__env->startSection('page-content'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
	<a href="<?php echo e(url('admin/tambahkategori')); ?>" class="btn btn-sm btn-primary shadow-sm float-right pull-right"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori</a>
</div>
<div class="row">
	<div class="col-md-12 mb-4">
		<div class="card shadow mb-4">
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="table">
					<thead class="bg-danger text-white">
						<tr>
							<th>No</th>
							<th>Kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor = 1; ?>
						<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo $nomor ?></td>
								<td><?php echo e($data->namakategori); ?></td>
								<td>
									<a href="<?php echo e(url('admin/ubahkategori/'.$data->idkategori)); ?>" class="btn btn-warning btn-sm">Ubah</a>
									<a href="<?php echo e(url('admin/hapuskategori/'.$data->idkategori)); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
								</td>
							</td>

							</tr>
							<?php $nomor++; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\propertilaravel\resources\views/admin/kategori.blade.php ENDPATH**/ ?>