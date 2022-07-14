<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card bg-light">
        <div class="card-body" style="background-color: #dddddd; color:black;">
            <h3>Ubah Data</h3>
            <hr>
            <form method="POST" action="<?php echo e(url('/tarif/'.$tarif->id)); ?>">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Jenis Kendaraan</label>
                    <input type="text" class="form-control col-4" name="nama" value="<?php echo e($tarif->nama); ?>">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control col-2" name="harga" value="<?php echo e($tarif->harga); ?>">
                </div>
                <button type="submit" class="btn" style="background-color: #0088e0; color:white;">Ubah</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/smith/Smith/tugas/Doorsmeer/resources/views/tarif/edit.blade.php ENDPATH**/ ?>