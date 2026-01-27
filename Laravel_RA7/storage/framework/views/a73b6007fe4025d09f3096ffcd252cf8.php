

<?php $__env->startSection('title', 'Usuarios con Publicaciones'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Usuarios que tienen Publicaciones</h1>
            <p class="text-muted">Listado filtrado con whereHas para mostrar solo usuarios con al menos una publicación.</p>
            <hr>

            <?php if($users->count() > 0): ?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Número de Publicaciones</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><strong><?php echo e($user->name); ?></strong></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td>
                                        <span class="badge bg-primary"><?php echo e($user->posts->count()); ?></span>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('/posts/user/' . $user->id)); ?>" class="btn btn-sm btn-primary">Ver publicaciones</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-info">
                    No hay usuarios con publicaciones.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CampusFP\Laravel_RA7\resources\views/posts/users-with-posts.blade.php ENDPATH**/ ?>