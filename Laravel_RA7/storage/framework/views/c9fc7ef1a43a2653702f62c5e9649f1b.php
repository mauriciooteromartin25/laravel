

<?php $__env->startSection('title', 'Publicaciones con Autores'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Publicaciones con Información del Autor</h1>
            <p class="text-muted">Consulta optimizada con carga ansiosa del modelo User.</p>
            <hr>

            <?php if($posts->count() > 0): ?>
                <div class="row">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header bg-info text-white">
                                    <h6 class="mb-0"><?php echo e($post->title); ?></h6>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"><?php echo e(Str::limit($post->content, 150)); ?></p>
                                    <div class="alert alert-light mb-0">
                                        <strong>Autor:</strong> <?php echo e($post->user->name); ?><br>
                                        <small class="text-muted"><?php echo e($post->user->email); ?></small>
                                    </div>
                                </div>
                                <div class="card-footer bg-light">
                                    <small class="text-muted">
                                        Creada: <?php echo e($post->created_at->format('d/m/Y H:i')); ?>

                                    </small>
                                    <?php if($post->is_published): ?>
                                        <span class="badge bg-success float-end">Publicada</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info">
                    No hay publicaciones registradas.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CampusFP\Laravel_RA7\resources\views/posts/posts-with-authors.blade.php ENDPATH**/ ?>