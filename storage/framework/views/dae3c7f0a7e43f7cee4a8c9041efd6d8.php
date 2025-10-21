

<?php $__env->startSection('content'); ?>
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h2 class="mb-0"><?php echo e($producto->nombre); ?></h2>
    </div>
    <div class="card-body">
        <p><strong>Descripción:</strong> <?php echo e($producto->descripcion); ?></p>
        <p><strong>Precio:</strong> <?php echo e(number_format($producto->precio, 2)); ?> €</p>
        <p><strong>Stock:</strong> <?php echo e($producto->stock); ?></p>

        <div class="mt-3">
            <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">
                Volver
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CampusFP\AE_MOM\resources\views/productos/show.blade.php ENDPATH**/ ?>