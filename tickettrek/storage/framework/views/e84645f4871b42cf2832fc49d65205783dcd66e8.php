

<?php $__env->startSection('page-content'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(asset('assets/home/images/wisata.jpg')); ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Keranjang </span>
                    </p>
                    <h2 class="mb-0 bread">Keranjang</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="home-section" class="hero">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="bg-danger text-white">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Foto</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1; ?>
                                <?php if(!empty(session('keranjang'))): ?>
                                    <?php $__currentLoopData = $keranjang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idwisata => $jumlah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $wisata = DB::table('wisata')->where('idwisata', $idwisata)->first();
                                            $totalharga = $wisata->harga * $jumlah;
                                            // dd($keranjang);
                                        ?>
                                        <tr class="text-center">
                                            
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo e($wisata->judul); ?></td>
                                            <td class="image-prod">
                                                <img src="<?php echo e(asset('foto/' . $wisata->foto)); ?>" width="100px"
                                                    style="border-radius: 10px;">
                                            </td>
                                            <td>Rp <?php echo e(number_format($wisata->harga)); ?></td>
                                            <td>
                                                <a href="<?php echo e(url('home/hapuskeranjang/' . $wisata->idwisata)); ?>"
                                                    class="btn btn-danger btn-xs">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $nomor++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <td colspan="7" align="center">Keranjang Kosong</td>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row justify-content-center">
                <a href="<?php echo e(url('home/wisata')); ?>" class="btn btn-warning"><i class="fa fa-cart-plus"></i>Lanjutkan
                    Belanja</a>
                &nbsp;
                <?php if(!empty(session('keranjang'))): ?>
                    <a href="<?php echo e(url('home/checkout')); ?>" class="btn btn-danger">Checkout</a>
                <?php endif; ?>
            </div>
            <br><br>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\tickettrek\resources\views/home/keranjang.blade.php ENDPATH**/ ?>