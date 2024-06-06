

<?php $__env->startSection('page-content'); ?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Member</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="table">
                    <thead class="bg-danger text-white">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php $__currentLoopData = $pengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pecah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo e($pecah->nama); ?></td>
                                <td><?php echo e($pecah->email); ?></td>
                                <td><?php echo e($pecah->telepon); ?></td>
                                <td><?php echo e($pecah->alamat); ?></td>
                                <td>
                                    <a href="<?php echo e(url('admin/hapuspengguna'. $pecah->id)); ?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
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
<?php echo $__env->make('admin.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\propertilaravel\resources\views/admin/pengguna.blade.php ENDPATH**/ ?>