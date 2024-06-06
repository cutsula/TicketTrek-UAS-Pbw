

<?php $__env->startSection('page-content'); ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo e(asset('foto/home2.jpg')); ?>');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate mb-5 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a>Home <i
                                    class="fa fa-chevron-right"></i></a></span><span>Akun </span></p>
                    <h2 class="mb-0 bread">Akun</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="home-section" class="hero">
        <form method="post" enctype="multipart/form-data" action="<?php echo e(url('home/ubahakun/' . $pengguna->id)); ?>">
            <?php echo csrf_field(); ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama</label>
                            <input value="<?php echo e($pengguna->nama); ?>" type="text" value="" class="form-control"
                                name="nama">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input value="<?php echo e($pengguna->email); ?>" type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input value="<?php echo e($pengguna->telepon); ?>" type="number" class="form-control" name="telepon">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="5"><?php echo e($pengguna->alamat); ?></textarea>
                            <script>
                                CKEDITOR.replace('alamat');
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password">
                            <input type="hidden" class="form-control" name="passwordlama"
                                value="<?php echo e($pengguna->password); ?>">
                            <span class="text-primary">Kosongkan Password jika tidak ingin mengganti</span>
                        </div>
                        <button class="btn btn-danger float-right pull-right" name="ubah"><i
                                class="glyphicon glyphicon-saved"></i>Simpan</a></button>
                    </div>
                </div>
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/cutsula/Downloads/tickettrek/resources/views/home/akun.blade.php ENDPATH**/ ?>