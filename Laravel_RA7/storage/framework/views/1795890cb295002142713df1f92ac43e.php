<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Aplicación Laravel'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 20px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .container {
            margin-top: 20px;
        }

        /* Custom colors: light blue → black, green → blue */
        .bg-info {
            background-color: #000 !important;
            border-color: #000 !important;
        }

        .bg-success,
        .badge.bg-success {
            background-color: #0d6efd !important;
            border-color: #0d6efd !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Usuarios y Publicaciones</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('posts.all')); ?>">Todos los Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('users.with-posts')); ?>">Usuarios con Publicaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('posts.list')); ?>">Publicaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('posts.published')); ?>">Publicadas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="bg-light py-4 mt-5 border-top">
        <div class="container text-center">
            <p class="text-muted mb-0">© 2026 Actividad Laravel - Relaciones Eloquent. Usuarios y Publicaciones</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\CampusFP\Laravel_RA7\resources\views/layouts/app.blade.php ENDPATH**/ ?>