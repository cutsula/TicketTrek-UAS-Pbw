

<?php $__env->startSection('page-content'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(asset('assets/home/images/wisata.jpg')); ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Daftar <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h2 class="mb-0 bread">Daftar</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="home-section" class="ftco-section">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-5 my-auto">
                    <img width="100%" src="<?php echo e(asset('foto/loginn.png')); ?>">
                </div>

                <div class="col-md-7">
                    <?php if(session('alert')): ?>
                        <div class="alert alert-primary"><?php echo e(session('alert')); ?></div>
                    <?php endif; ?>
                    <form method="post" class="form-horizontal" action="<?php echo e(url('home/dodaftar')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="text" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Alamat</label>
                            <textarea class="form-control " name="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telepon</label>
                            <input type="text" name="telepon" class="form-control">
                        </div>
                        <div class="form-group ">
                            <br>
                            <button class="btn btn-danger btn-block" name="daftar">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\tickettrek\resources\views/home/daftar.blade.php ENDPATH**/ ?>