

<?php $__env->startSection('page-content'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(asset('foto/home2.jpg')); ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i class="fa fa-chevron-right"></i></a></span>
                        <span><a href="product.html">Check Out <i class="fa fa-chevron-right"></i></a></span>
                    </p>
                    <h2 class="mb-0 bread">Check Out</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="home-section" class="hero">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table mt-5">
                            <thead class="bg-danger text-white">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Wisata</th>
                                    <th>Harga</th>
                                    <th>Jumlah Beli</th>
                                    <th>SubHarga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1; ?>
                                <?php $totalbelanja = 0; ?>
                                <?php if(!empty(session('keranjang'))): ?>
                                    <?php $__currentLoopData = $keranjang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idwisata => $jumlah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $wisata = DB::table('wisata')->where('idwisata', $idwisata)->first();
                                            $totalharga = $wisata->harga * $jumlah;
                                        ?>
                                        <tr class="text-center">
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo e($wisata->judul); ?></td>
                                            <td>Rp <?php echo e(number_format($wisata->harga)); ?></td>
                                            <td><?php echo e($jumlah); ?></td>
                                            <td>Rp <?php echo e(number_format($totalharga)); ?></td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php $totalbelanja += $totalharga; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-xl-12 ftco-animate">
                    <form method="post" action="<?php echo e(url('home/docheckout')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Pelanggan</label>
                                    <input type="text" readonly value="<?php echo e(session('pengguna')->nama); ?>"
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>No. Handphone Pelanggan</label>
                                    <input type="text" readonly value="<?php echo e(session('pengguna')->telepon); ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat"></textarea>
                                </div>
                                <input type="hidden" id="dua" name="dua" value="<?php echo e($totalbelanja); ?>">
                                <div class="form-group">
                                    <label>Total Belanja</label>
                                    <input class="form-control" id="result" value="<?php echo e(rupiah($totalbelanja)); ?>" required
                                        readonly type="text">
                                </div>
                                <button class="btn btn-danger pull-right btn-lg" name="checkout">Checkout</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\tickettrek\resources\views/home/checkout.blade.php ENDPATH**/ ?>