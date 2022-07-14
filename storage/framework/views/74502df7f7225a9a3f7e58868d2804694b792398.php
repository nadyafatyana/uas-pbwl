<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card bg-light">
        <div class="card-body">
            <h3>Ubah Data</h3>
            <hr>
            <form method="POST" action="<?php echo e(url('/bayar/'.$bayar->id)); ?>">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <select name="nama" class="form-control col-4">
                        <option selected value="<?php echo e($bayar->nama); ?>"><?php echo e($bayar->nama); ?></option>
                        <option>==========================</option>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($x->nama); ?>"><?php echo e($x->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Tarif</label>
                    <input type="hidden" name="total" value="<?php echo e($bayar->total); ?>">
                    <select name="tarif" class="form-control col-4">
                        <option selected><?php echo e($bayar->tarif); ?></option>
                        <option>==========================</option>
                        <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($y->id); ?>"><?php echo e($y->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah Kendaraan</label>
                    <input type="text" class="form-control col-1" name="jumlah" value="<?php echo e($bayar->jumlah); ?>">
                </div>
                <button type="submit" class="btn" style="background-color: #0088e0; color:white;">Ubah</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/smith/Smith/tugas/Doorsmeer/resources/views/bayar/edit.blade.php ENDPATH**/ ?>