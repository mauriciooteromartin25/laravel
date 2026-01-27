

<?php $__env->startSection('title', 'Publicaciones Publicadas'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Publicaciones Publicadas</h1>
            <p class="text-muted">Filtradas por estado de publicación y ordenadas por fecha.</p>
            <hr>

            <?php if($posts->count() > 0): ?>
                <div class="list-group">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1"><?php echo e($post->title); ?></h5>
                                <small class="text-success"><?php echo e($post->published_at->format('d/m/Y H:i')); ?></small>
                            </div>
                            <p class="mb-1"><?php echo e(Str::limit($post->content, 200)); ?></p>
                            <small class="text-muted">
                                <strong>Autor:</strong> <?php echo e($post->user->name); ?> (<?php echo e($post->user->email); ?>)
                            </small>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info">
                    No hay publicaciones publicadas.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CampusFP\Laravel_RA7\resources\views/MOmposts/published-posts.blade.php ENDPATH**/ ?>