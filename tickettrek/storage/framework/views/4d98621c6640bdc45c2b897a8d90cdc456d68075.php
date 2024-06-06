

<?php $__env->startSection('page-content'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(url('foto/home2.jpg')); ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Kategori <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h2 class="mb-0 bread">Kategori</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row mb-3 pb-3">
                <div class="col-md-12 heading-section ftco-animate">
                    <h3 class="mb-4">Kategori : <?php echo e($kategori->namakategori); ?></h3>
                    <?php if(empty($properti)): ?>
                        <div class="alert alert-danger">Properti <strong><?php echo e($kategori->namakategori); ?></strong> Kosong</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $properti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="<?php echo e(url('home/detail/' . $p->idproperti)); ?>" class="img-prod"><img class="img-fluid"
                                    src="<?php echo e(url('foto/' . $p->fotoproperti)); ?>" style="height:300px;width:100%"
                                    alt="">
                                <div class=" overlay">
                                </div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="<?php echo e(url('home/detail/' . $p->idproperti)); ?>"><?php echo e($p->namaproperti); ?></a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>Rp <?php echo e(number_format($p->hargaproperti)); ?></span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">

                                        <a href="<?php echo e(url('home/detail/' . $p->idproperti)); ?>"
                                            class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\propertilaravel\resources\views/home/kategori.blade.php ENDPATH**/ ?>