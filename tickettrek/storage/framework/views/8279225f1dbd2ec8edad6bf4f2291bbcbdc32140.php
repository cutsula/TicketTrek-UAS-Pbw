

<?php $__env->startSection('page-content'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(asset('assets/home/images/wisata.jpg')); ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i
                                    class="fa fa-chevron-right"></i></a></span><span>Login <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h2 class="mb-0 bread">Login</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="home-section" class="ftco-section">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <img width="100%" src="<?php echo e(asset('foto/daftar.png')); ?>">
                </div>
                <div class="col-md-7 my-auto">
                    <?php if(session('alert')): ?>
                        <div class="alert alert-primary"><?php echo e(session('alert')); ?></div>
                    <?php endif; ?>
                    <form method="post" action="<?php echo e(url('home/dologin')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <br>
                        <button class="btn btn-danger btn-block" name="simpan">Masuk</button>
                    </form>
                </div>
            </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\tickettrek\resources\views/home/login.blade.php ENDPATH**/ ?>