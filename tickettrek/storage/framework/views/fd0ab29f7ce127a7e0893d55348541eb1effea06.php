

<?php $__env->startSection('page-content'); ?>
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar transaksi</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <td><strong>No. Transaksi</strong></td>
                                    <td><?php echo e($datatransaksi->idtransaksi); ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td><?php echo e(tanggal(date('Y-m-d', strtotime($datatransaksi->tanggalbeli)))); ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><?php echo e($datatransaksi->statusbeli); ?></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>Rp. <?php echo e(number_format($datatransaksi->totalbeli)); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <td><strong>Nama</strong></td>
                                    <td><?php echo e($datatransaksi->nama); ?></td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td><?php echo e($datatransaksi->telepon); ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo e($datatransaksi->email); ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><?php echo e($datatransaksi->alamat); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Wisata</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php $__currentLoopData = $datawisata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo $nomor; ?></td>
                                    <td><?php echo e($dp->judul); ?></td>
                                    <td>Rp. <?php echo e(number_format($dp->harga)); ?></td>
                                </tr>
                                <?php $nomor++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <?php if($datatransaksi->statusbeli != 'Selesai' && $datatransaksi->statusbeli != 'Belum Bayar'): ?>
            <div class="col-md-6 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Konfirmasi</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tr>
                                        <th>Nama</th>
                                        <th><?php echo e($pembayaran->nama); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Transfer</th>
                                        <th><?php echo e(tanggal(date('Y-m-d', strtotime($pembayaran->tanggaltransfer)))); ?></th>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Upload Bukti Pembayaran</th>
                                        <th><?= tanggal(date('Y-m-d', strtotime($pembayaran->tanggal))) ?></th>
                                    </tr>
                                </table>
                                <form method="post"
                                    action="<?php echo e(url('admin/simpanpembayaran/' . $datatransaksi->idtransaksi)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="statusbeli">
                                            <option <?php if ($datatransaksi->statusbeli == 'Belum di Konfirmasi') {
                                                echo 'selected';
                                            } ?> value="Belum di Konfirmasi">Belum di Konfirmasi
                                            </option>
                                            <option <?php if ($datatransaksi->statusbeli == 'Pesanan Di Tolak') {
                                                echo 'selected';
                                            } ?> value="Pesanan Di Tolak">Pesanan Di Tolak</option>
                                            <option <?php if ($datatransaksi->statusbeli == 'Di Terima, Silahkan Cetak Tiket') {
                                                echo 'selected';
                                            } ?> value="Di Terima, Silahkan Cetak Tiket">Di Terima,
                                                Silahkan Cetak Tiket</option>
                                            <option <?php if ($datatransaksi->statusbeli == 'Selesai') {
                                                echo 'selected';
                                            } ?> value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                    <button class=" btn btn-danger float-right pull-right" name="proses">Simpan</button>
                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="col-md-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Bukti Pembayaran</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo e(url('buktitransaksi/' . $pembayaran->bukti)); ?>" alt=""
                                class="img-responsive" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cutsula/Downloads/tickettrek/resources/views/admin/pembayaran.blade.php ENDPATH**/ ?>