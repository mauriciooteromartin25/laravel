

<?php $__env->startSection('title', 'Todos los Usuarios y sus Publicaciones'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Todos los Usuarios y sus Publicaciones</h1>
            <p class="text-muted">Mostrando usuarios con carga ansiosa (eager loading) para optimizar consultas.</p>
            <hr>

            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0"><?php echo e($user->name); ?></h5>
                        <small><?php echo e($user->email); ?></small>
                    </div>
                    <div class="card-body">
                        <?php if($user->posts->count() > 0): ?>
                            <h6>Publicaciones (<?php echo e($user->posts->count()); ?>)</h6>
                            <ul class="list-group">
                                <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item">
                                        <strong><?php echo e($post->title); ?></strong>
                                        <br>
                                        <small class="text-muted">
                                            Publicado: <?php echo e($post->published_at ? $post->published_at->format('d/m/Y') : 'No publicado'); ?>

                                        </small>
                                        <br>
                                        <em><?php echo e(Str::limit($post->content, 100)); ?></em>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php else: ?>
                            <p class="text-muted">Este usuario no tiene publicaciones.</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="alert alert-info">No hay usuarios registrados.</div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CampusFP\Laravel_RA7\resources\views/MOmposts/all-users.blade.php ENDPATH**/ ?>