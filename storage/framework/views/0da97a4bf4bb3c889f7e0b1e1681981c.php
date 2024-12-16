

<?php $__env->startSection('title', 'MajorMatch'); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-class', 'home-page'); ?>
<div class="hero-section" style="background-image: url('<?php echo e(asset('asset/bghome.png')); ?>');">
    <h1>MAJOR MATCH</h1>
    <div class="rectangle-div1">
        <div class="info-cards">
            <div class="card">
                <h2>APA ITU MAJOR MATCH ?</h2>
                <p>Major Match adalah website yang dapat membantu siswa tingkat SLTA dalam mendapatkan rekomendasi
                    jurusan
                    kuliah berdasarkan data nilai akademik dan juga bakat siswa.</p>
            </div>
            <div class="card">
                <h2>KETAHUI JURUSAN YANG TEPAT UNTUKMU !</h2>
                <p>Nantinya akan diberikan rekomendasi jurusan kuliah berdasarkan data nilai akademik dan juga bakat
                    kalian
                    lho!</p>
            </div>
        </div>
    </div>
</div>

<div class="second-section">
    <div class="slogan">
        <img src="<?php echo e(asset('asset/jam.png')); ?>" alt="">
        <h5 class="slogan1">Kapan Saja</h5>
    </div>
    <div class="slogan">
        <img src="<?php echo e(asset('asset/dolar.png')); ?>" alt="">
        <h5 class="slogan2">Gratis</h5>
    </div>
    <div class="slogan">
        <img src="<?php echo e(asset('asset/map.png')); ?>" alt="">
        <h5 class="slogan3">Dimana Saja</h5>
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_majormatch_final\resources\views/index.blade.php ENDPATH**/ ?>