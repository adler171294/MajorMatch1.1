@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
@section('page-class', 'informasi-page')

@csrf
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

{{-- <div class="faq-section">
            <h1 class="faq-title">FAQ</h1>
            <div class="carousel-container">
                <button class="arrow-button left" id="prev">&#8249;</button>
                <div class="carousel">
                    <div class="faq-card">
                        <h2>Informasi</h2>
                        <p>Pada menu ini dapat dilihat informasi seputar jurusan-jurusan yang ada di dunia perkuliahan.
                            Terdapat juga info terkait mata kuliah apa yang dipelajari pada jurusan tersebut.</p>
                    </div>
                    <div class="faq-card">
                        <h2>Rekomendasi</h2>
                        <p>Pada menu ini siswa/i diberikan rekomendasi jurusan kuliah yang cocok sesuai dengan parameter
                            yang dimasukkan berupa nilai serta minat dan bakat siswa/i.</p>
                    </div>
                    <div class="faq-card">
                        <h2>Karir</h2>
                        <p>Pada menu ini siswa/i dapat melihat berbagai informasi karir yang sesuai dengan jurusan yang
                            dipilih untuk persiapan masa depan.</p>
                    </div>
                    <div class="faq-card">
                        <h2>Beasiswa</h2>
                        <p>Menu ini memberikan informasi tentang berbagai program beasiswa yang tersedia untuk mahasiswa
                            sesuai dengan jurusan atau prestasi akademik.</p>
                    </div>
                </div>
                <button class="arrow-button right" id="next">&#8250;</button>
            </div>
        </div>
        <script src="script.js"></script> --}}


{{-- <style>
        .carousel-inner {
            display: flex;
            /* Menggunakan flexbox untuk menampilkan dua item */
        }

        .carousel-item {
            display: flex;
            /* Menggunakan flexbox untuk menampilkan card dalam satu item */
            justify-content: space-between;
            /* Menyebar card secara merata */
        }

        .faq-card {
            flex: 1;
            /* Setiap card mengambil ruang yang sama */
            margin: 10px;
            /* Margin antar card */
        }

        .carousel-control-prev,
        .carousel-control-next {
            opacity: 1;
            /* Pastikan kontrol selalu terlihat */
            transition: opacity 0.5s ease;
            /* Transisi halus untuk kontrol */
        }
    </style>


    <div class="container mt-5">
        <div id="faqCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="faq-card">
                        <div class="card-body">
                            <h5 class="card-title">Apa itu Jurusan X?</h5>
                            <p class="card-text">Jurusan X adalah program studi yang fokus pada ...</p>
                        </div>
                    </div>
                    <div class="faq-card">
                        <div class="card-body">
                            <h5 class="card-title">Apa syarat untuk mendaftar?</h5>
                            <p class="card-text">Syarat untuk mendaftar di Jurusan X adalah ...</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="faq-card">
                        <div class="card-body">
                            <h5 class="card-title">Apa prospek kerja setelah lulus?</h5>
                            <p class="card-text">Prospek kerja untuk lulusan Jurusan X meliputi ...</p>
                        </div>
                    </div>
                    <div class="faq-card">
                        <div class="card-body">
                            <h5 class="card-title">Berapa lama waktu studi?</h5>
                            <p class="card-text">Waktu studi di Jurusan X biasanya memakan waktu ...</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="faq-card">
                        <div class="card-body">
                            <h5 class="card-title">Apa saja mata kuliah yang diajarkan?</h5>
                            <p class="card-text">Mata kuliah yang diajarkan di Jurusan X meliputi ...</p>
                        </div>
                    </div>
                    <div class="faq-card">
                        <div class="card-body">
                            <h5 class="card-title">Bagaimana cara mendapatkan beasiswa?</h5>
                            <p class="card-text">Cara mendapatkan beasiswa di Jurusan X adalah ...</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#faqCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span>Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#faqCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span>Next</span>
            </button>
        </div>
    {{-- </div> --}}

@endsection
