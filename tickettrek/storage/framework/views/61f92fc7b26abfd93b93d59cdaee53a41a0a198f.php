

<?php $__env->startSection('page-content'); ?>
    <div class="hero-wrap" style="background-image: url('<?php echo e(asset('foto/home2.jpg')); ?>');" data-stellar-background-ratio="0.5">
        <div class=""></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-8 ftco-animate d-flex align-items-end">
                    <div class="text w-100 text-center">
                        <h1 class="mb-4">Selamat Datang Di <span>Properti SRD</span>.</h1>
                        <p><a href="<?php echo e(url('home/properti')); ?>" class="btn btn-danger py-2 px-4">Properti Kami</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-intro" style="background-color: #764ca3;">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex">
                    <div class="intro d-lg-flex w-100 ftco-animate" style="background-color: #6953f5;">
                        <div class="icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="text">
                            <h2>Layanan 24 Jam</h2>
                            <p>Melayani Dengan Integritas Dan Pelayanan Yang Terpadu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100 ftco-animate" style="background-color: #6777ef;">
                        <div class="icon">
                            <span class="flaticon-cashback"></span>
                        </div>
                        <div class="text">
                            <h2>Harga Worth It</h2>
                            <p>Kami menjual properti dengan harga paling murah</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100 ftco-animate" style="background-color: #6953f5;">
                        <div class="icon">
                            <span class="flaticon-shopping-bag"></span>
                        </div>
                        <div class="text">
                            <h2>Properti Aman</h2>
                            <p>Properti legal dan bersurat lengkap</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center">
                    <img src="<?php echo e(asset('foto/home.jpg')); ?>" width="100%" style="border-radius: 10px">
                </div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                    <div class="heading-section">

                        <h3 class="mt-4">Tentang kami</h3>
                        <p>
                            Properti SRD adalah agen properti yang berfokus pada penjualan berbagai jenis properti di
                            Palembang. Dengan pengalaman yang luas dan pemahaman mendalam tentang pasar properti di kawasan
                            tersebut, Properti SRD telah menjadi mitra terpercaya bagi mereka yang mencari investasi
                            properti atau tempat tinggal di Palembang.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\propertilaravel\resources\views/home/index.blade.php ENDPATH**/ ?>