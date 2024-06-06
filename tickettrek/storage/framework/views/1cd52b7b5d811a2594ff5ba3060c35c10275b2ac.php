

<?php $__env->startSection('page-content'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(url('assets/home/images/wisata.jpg')); ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i
                                    class="fa fa-chevron-right"></i></a></span><span>Detail Wisata <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">Detail Wisata</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="<?php echo e(asset('foto/' . $wisata->foto)); ?>" class="image-popup prod-img-bg"><img
                            src="<?php echo e(asset('foto/' . $wisata->foto)); ?>" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3><?php echo e($wisata->judul); ?></h3>
                    <p class="price"><span>Rp. <?php echo e(number_format($wisata->harga)); ?></span></p>
                    <p><?php echo $wisata->deskripsi; ?> </p>
                    <form method="post" action="<?php echo e(url('home/pesan')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="idwisata" value="<?php echo e($wisata->idwisata); ?>">
                        <div class="form-group">
                            <input type="hidden" placeholder="Masukkan Jumlah Disini" value="1" class="form-control"
                                name="jumlah" required></input>
                            <br>
                            <button class="btn btn-success float-right text-dark" name="pesan"><i
                                    class="fa fa-shopping-cart"></i>
                                Pesan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cutsula/Downloads/tickettrek/resources/views/home/detailwisata.blade.php ENDPATH**/ ?>