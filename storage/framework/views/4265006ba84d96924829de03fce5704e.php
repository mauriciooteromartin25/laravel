

<?php $__env->startSection('content'); ?>
<h2 class="mb-4 text-center">Listado de Productos MOM</h2>

<?php if($productos->isEmpty()): ?>
    <div class="alert alert-warning text-center">
        No hay productos registrados en la base de datos.
    </div>
<?php else: ?>
    <div class="row">
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary"><?php echo e($producto->nombre); ?></h5>
                    <p class="card-text"><?php echo e(Str::limit($producto->descripcion, 80)); ?></p>
                    <ul class="list-unstyled mb-3">
                        <li><strong>Precio:</strong> <?php echo e(number_format($producto->precio, 2)); ?> €</li>
                        <li><strong>Stock:</strong> <?php echo e($producto->stock); ?></li>
                    </ul>
                    <a href="<?php echo e(route('productos.show', $producto->id)); ?>" class="btn btn-outline-primary btn-sm w-100">
                    Ver Detalles
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\CampusFP\AE_MOM\resources\views/productos/index.blade.php ENDPATH**/ ?>