

<?php $__env->startSection('content'); ?>
    <h1>Data Mahasiswa</h1>
    <div class="action-buttons">
    <a href="<?php echo e(route('mahasiswa.create')); ?>">Tambah Mahasiswa</a>
    </div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($mhs->id); ?></td>
            <td><?php echo e($mhs->nama); ?></td>
            <td><?php echo e($mhs->nim); ?></td>
            <td><?php echo e($mhs->jurusan); ?></td>
            <td><?php echo e($mhs->email); ?></td>
            <td class="table-actions">
                <a href="<?php echo e(route('mahasiswa.edit', $mhs->id)); ?>" class="edit-btn">Edit</a>
                <form action="<?php echo e(route('mahasiswa.destroy', $mhs->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="delete-btn" onclick="return confirm('Yakin?')">Hapus</button>
                </form>
            </td>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\P13\crud-mahasiswa\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>