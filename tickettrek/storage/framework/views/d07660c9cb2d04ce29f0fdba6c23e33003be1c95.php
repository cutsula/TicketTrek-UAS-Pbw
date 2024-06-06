

<?php $__env->startSection('page-content'); ?>
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="table">
                        <thead class="bg-danger text-white">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Daftar</th>
                                <th>Tanggal Transaksi</th>
                                <th>Total Transaksi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><?php echo e($p->nama); ?></td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $datawisata[$p->idtransaksi]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li>
                                                    <?php echo e($dp->judul); ?>

                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                    <td><?php echo e(tanggal(date('Y-m-d', strtotime($p->tanggalbeli)))); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->totalbeli)); ?></td>
                                    <td><?php echo e($p->statusbeli); ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="<?php echo e(url('admin/pembayaran/' . $p->idtransaksi)); ?>"
                                                class="btn btn-info m-1">Detail</a>
                                            <a href="<?php echo e(url('admin/hapuspembayaran/' . $p->idtransaksi)); ?>"
                                                class="btn btn-danger m-1"
                                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ?')">Hapus</a>
                                        </div>
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

<?php echo $__env->make('admin.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\tickettrek\resources\views/admin/transaksi.blade.php ENDPATH**/ ?>