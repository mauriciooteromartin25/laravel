

<?php $__env->startSection('title', 'Publicaciones del Usuario'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo e(url('/posts/all')); ?>" class="btn btn-secondary mb-3">← Volver</a>
            
            <h1><?php echo e($user->name); ?></h1>
            <p class="text-muted"><?php echo e($user->email); ?></p>
            <hr>

            <?php if($user->posts->count() > 0): ?>
                <h3>Publicaciones (<?php echo e($user->posts->count()); ?>)</h3>
                <div class="row">
                    <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($post->title); ?></h5>
                                    <p class="card-text"><?php echo e($post->content); ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">
                                            Publicada: <?php echo e($post->published_at ? $post->published_at->format('d/m/Y H:i') : 'Borrador'); ?>

                                        </small>
                                        <?php if($post->is_published): ?>
                                            <span class="badge bg-success">Publicada</span>
                                        <?php else: ?>
                                            <span class="badge bg-warning">Borrador</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="alert alert-info">
                    <strong><?php echo e($user->name); ?></strong> no tiene publicaciones aún.
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CampusFP\Laravel_RA7\resources\views/MOmposts/user-posts.blade.php ENDPATH**/ ?>