

<?php $__env->startSection('content'); ?>
<div class="form-container">
    <h1>Edit Mahasiswa</h1>

    <form action="<?php echo e(route('mahasiswa.update', $mahasiswa->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <p>
            <label>Nama:</label><br>
            <input type="text" name="nama" value="<?php echo e($mahasiswa->nama); ?>" required>
        </p>
        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" value="<?php echo e($mahasiswa->nim); ?>" required>
        </p>
        <p>
            <label>Jurusan:</label><br>
            <input type="text" name="jurusan" value="<?php echo e($mahasiswa->jurusan); ?>" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="<?php echo e($mahasiswa->email); ?>" required>
        </p>
        <div class="button-group">
                <button type="submit" class="btn-submit">Update</button>
                <button type="button" class="btn-cancel" onclick="window.location='<?php echo e(route('mahasiswa.index')); ?>'">Kembali</button>
        </div>

    </form>

    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\P13\crud-mahasiswa\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>