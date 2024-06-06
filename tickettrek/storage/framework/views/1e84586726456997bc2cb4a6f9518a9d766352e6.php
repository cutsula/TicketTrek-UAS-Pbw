

<?php $__env->startSection('page-content'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(asset('foto/home2.jpg')); ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Properti <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h2 class="mb-0 bread">Properti</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $properti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center"
                                style="background-image: url('<?php echo e(asset('foto/' . $p->fotoproperti)); ?>');">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="<?php echo e(url('home/detail/' . $p->idproperti)); ?>"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="category"><?php echo e($p->namakategori); ?></span>
                                <h2><?php echo e($p->namaproperti); ?></h2>
                                <p class="mb-0"><span class="price price-sale"></span> <span class="price">Rp
                                        <?php echo e(number_format($p->hargaproperti)); ?></span></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\propertilaravel\resources\views/home/properti.blade.php ENDPATH**/ ?>