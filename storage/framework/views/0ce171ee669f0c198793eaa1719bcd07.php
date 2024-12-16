

<?php $__env->startSection('title', 'FAQ'); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-class', 'informasi-page'); ?>

<?php echo csrf_field(); ?>
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="faq-card">
                <h5 class="card-title">Apa itu Major Match?</h5>
                <p class="card-text">Major Match adalah website yang dapat membantu siswa/i untuk menentukan jurusan
                    kuliah berdasarkan nilai, minat serta prestasi yang dimiliki siswa/i.</p>
            </div>
            <div class="faq-card">
                <h5 class="card-title">Bagaimana cara Menggunakan Website ini?</h5>
                <p class="card-text">Cara menggunakan website ini adalah siswa/siswi dapat masuk ke menu rekomendasi
                    kemudian menginputkan nilai serta minat dan juga prestasi yang dimiliki. Setelah semua terisi
                    kemudian ditekan tombol submit dan hasil rekomendasi jurusan berdasarkan inputan siswa akan muncul
                    di kolom Hasil rekomendasi.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="faq-card">
                <h5 class="card-title">Informasi</h5>
                <p class="card-text">Pada menu ini siswa/i dapat melihat informasi mengenai jurusan yang ada di
                    Perguruan Tinggi</p>
            </div>
            <div class="faq-card">
                <h5 class="card-title">FAQ</h5>
                <p class="card-text">Pada menu ini dijelaskan mengenai fitur-fitur dari website dan juga mengenai
                    pertanyaan yang sering ditannyakan oleh pengguna website ini.</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="faq-card">
                <h5 class="card-title">Informasi</h5>
                <p class="card-text">Pada menu ini dapat dilihat informasi seputar jurusan-jurusan yang ada di dunia
                    perkuliahan. Terdapat juga info terkait mata kuliah apa yang dipelajari pada jurusan tersebut.</p>
            </div>
            <div class="faq-card">
                <h5 class="card-title">Rekomendasi</h5>
                <p class="card-text">Pada menu ini siswa/i diberikan rekomendasi jurusan kuliah yang cocok sesuai
                    dengan
                    parameter yang dimasukkan berupa nilai serta minat dan bakat siswa/i.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_majormatch_final\resources\views/faq.blade.php ENDPATH**/ ?>