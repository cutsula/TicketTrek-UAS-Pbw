

<?php $__env->startSection('page-content'); ?>
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <br>
                    <h3 class="text-center">Selamat Datang</h3>
                    <br>
                    <img src="<?php echo e(asset('foto/home.jpg')); ?>" width="100%">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\propertilaravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>