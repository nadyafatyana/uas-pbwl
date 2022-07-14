<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card bg-light">
        <div class="card-body" style="background-color: #dddddd; color:black;">
            <h3>Data Pelanggan</h3>
            <hr>
            <a href="<?php echo e(url('pelanggan/create')); ?>" class="btn btn-primary btn-sm mb-3">Tambah</a>
            <table class="table table-hover">
                <thead>
                    <tr style="background-color: #4c5434;color:white;">
                        <th>Nama</th>
                        <th>Nomor Handphone</th>
                        <th class="text-center">Opsi</th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($x->nama); ?></td>
                    <td><?php echo e($x->no_hp); ?></td>
                    <td class="text-center">
                        <form action="<?php echo e(url('pelanggan/'.$x->id)); ?>" method="POST">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <a href="<?php echo e(url('pelanggan/'.$x->id.'/edit')); ?>" class="btn btn-sm btn-warning">Ubah</a>
                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/smith/Smith/tugas/Doorsmeer/resources/views/pelanggan/index.blade.php ENDPATH**/ ?>