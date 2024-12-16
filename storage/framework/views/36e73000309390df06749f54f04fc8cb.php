<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&family=Jersey+25&family=Poller+One&family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">

</head>

<body class="<?php echo $__env->yieldContent('page-class'); ?>">

    <header>

        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
                <img src="<?php echo e(asset('asset/logo.png')); ?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo e(request()->routeIs('index') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('index')); ?>">Beranda</a>
                    </li>
                    <li class="nav-item <?php echo e(request()->routeIs('rekomendasi') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('rekomendasi')); ?>">Rekomendasi</a>
                    </li>
                    <li class="nav-item <?php echo e(request()->routeIs('info') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('info')); ?>">Informasi</a>
                    </li>
                    <li class="nav-item <?php echo e(request()->routeIs('faq') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('faq')); ?>">FAQ</a>
                    </li>
                    <li class="nav-item <?php echo e(request()->routeIs('profil') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('profil')); ?>">
                            <i class="fa-duotone fa-solid fa-circle-user fa-xl"
                                style="--fa-primary-color: #357c9d; --fa-secondary-color: #e1f8ff;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <!-- Tambahkan navigasi atau elemen lain di sini -->
    </header>
<?php /**PATH C:\xampp\htdocs\web_majormatch_final\resources\views/layouts/header.blade.php ENDPATH**/ ?>