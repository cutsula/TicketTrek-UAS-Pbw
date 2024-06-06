

<?php $__env->startSection('page-content'); ?>
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Properti</h6>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data"
                        action="<?php echo e(url('admin/updateproperti/' . $properti->idproperti)); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo e($properti->namaproperti); ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <select class="form-control" name="idkategori">
                                <option value="">Pilih Kategori</option>
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($k->idkategori); ?>" <?php if($k->idkategori == $properti->idkategori): ?> selected <?php endif; ?>>
                                        <?php echo e($k->namakategori); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Harga (Rp)</label>
                            <input type="number" class="form-control" name="harga"
                                value="<?php echo e($properti->hargaproperti); ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="10"><?php echo e($properti->deskripsiproperti); ?></textarea>
                            <script>
                                CKEDITOR.replace('deskripsi');
                            </script>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <div class="letak-input" style="margin-bottom: 10px;">
                                <input type="file" class="form-control" name="foto">
                            </div>
                        </div>
                        <button class="btn btn-danger" name="save"><i
                                class="glyphicon glyphicon-saved"></i>Simpan</a></button>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\tickettrek\resources\views/admin/ubahproperti.blade.php ENDPATH**/ ?>