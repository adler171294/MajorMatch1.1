

<?php $__env->startSection('title', 'Pofil'); ?>

<?php $__env->startSection('content'); ?>
    <div class="rectangle-div">
        <img src="<?php echo e(asset('asset/user2.png')); ?>" alt="">
        <div class="login-form">
            <h2 class="judul3">Selamat Datang, <?php echo e(Auth::user()->username); ?>!</h2>
                <div id="outputContainer" class="profilcontainer">
                    <label type="username" name="username" id="username" placeholder="Username"><?php echo e(Auth::user()->username); ?></label>
                </div>
                <div id="outputContainer" class="profilcontainer">
                    <label type="email" name="email" id="email" placeholder="Email"><?php echo e(Auth::user()->email); ?></label>
                </div>
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button class="button1" type="submit">Logout</button>
                </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_majormatch_final\resources\views/profil.blade.php ENDPATH**/ ?>