

<?php $__env->startSection('page-content'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(asset('foto/home2.jpg')); ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i class="fa fa-chevron-right"></i></a></span>
                        <span><a href="product.html">Pembayaran <i class="fa fa-chevron-right"></i></a></span>
                    </p>
                    <h2 class="mb-0 bread">Pembayaran</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="home-section" class="ftco-section">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <table class="">
                        <tr>
                            <td width="150px"><strong>No. transaksi</strong></td>
                            <td>: <?php echo e($datatransaksi->idtransaksi); ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>: <?php echo e(tanggal(date('Y-m-d', strtotime($datatransaksi->tanggalbeli)))); ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>: <?php echo e($datatransaksi->statusbeli); ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>: Rp. <?php echo e(number_format($datatransaksi->totalbeli)); ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="">
                        <tr>
                            <td width="150px"><strong>Nama</strong></td>
                            <td>: <?php echo e($datatransaksi->nama); ?></td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>: <?php echo e($datatransaksi->telepon); ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: <?php echo e($datatransaksi->email); ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: <?php echo e($datatransaksi->alamat); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <table class="table table-bordered">
                <thead class="bg-danger text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Properti</th>
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
            <div class="row justify-content-center mb-5 mt-5">
                <div class="col-md-5">
                    <img width="100%" src="<?php echo e(asset('foto/bayar.webp')); ?>">
                </div>
                <div class="col-md-7">
                    <p>Kirim Bukti Pembayaran</p>
                    <b>No Rek : 0123 4567 89 (Bank BRI, Atas Nama : Properti SRD)</b>
                    <br>
                    <br>
                    <div class="alert alert-info">Total Tagihan Anda : <strong>Rp.
                            <?php echo e(number_format($datatransaksi->totalbeli)); ?></strong></div>

                    <form method="post" enctype="multipart/form-data" action="<?php echo e(url('home/pembayaransimpan')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($datatransaksi->idtransaksi); ?>" name="idtransaksi">
                        <div class="form-group">
                            <label>Nama Rekening</label>
                            <input type="text" name="nama" class="form-control"
                                value="<?php echo e(session('pengguna')->nama); ?>" required>

                        </div>
                        <div class="form-group">
                            <label>Tanggal Transfer</label>
                            <input type="date" name="tanggaltransfer" class="form-control" value="<?= date('Y-m-d') ?>"
                                required>

                        </div>
                        <div class="form-group">
                            <label>Foto Bukti</label>
                            <input type="file" name="bukti" class="form-control" required>
                        </div>
                        <button class="btn btn-danger float-right" name="kirim">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\tickettrek\resources\views/home/pembayaran.blade.php ENDPATH**/ ?>