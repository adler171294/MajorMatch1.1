@extends('layouts.app')

@section('title', 'Informasi')

@section('content')
@section('page-class', 'informasi-page')


<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .card-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        /* Membagi layout menjadi 3 kolom */
        gap: 2em;
        padding: 1em;
    }

    .card {
        margin-left: 60px;
        margin-right: 60px;
        background-color: white;
        padding: 1em;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 75%;
        margin-bottom: 40px;
    }


    .card2 {
        background-color: #2d5e72;
        color: #fff;
        margin-bottom: 0.5em;
        border: none;
        cursor: pointer;
        border-radius: 10px;
        /* Sudut membulat */
        font-size: 22px;
        font-family: "Inria Serif", serif;
        height: 42px;
        width: 100%;
        text-decoration: none;

    }

    h1 {
        display: flex;
        color: #fff;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 3rem;
        justify-content: center;
        font-weight: bold;
        margin-top: 30px;
        margin-bottom: 30px;
    }
</style>

@csrf
<h1>Data Jurusan</h1>
<div class="card-container">
    <div class="card">
        <a href="{{ route('jurusan') }}" class="card2">Teknik </a>
        <p>Jurusan teknik mempelajari penerapan ilmu sains dan matematika untuk menciptakan solusi teknis.</p>
    </div>
    <div class="card">

        <a href="{{ route('jurusan') }}" class="card2">Kesehatan</a>
        <p>Jurusan kesehatan berfokus pada ilmu medis, kesehatan masyarakat, farmasi, keperawatan, dan gizi untuk
            menjaga dan meningkatkan kualitas hidup manusia.</p>
    </div>
    <div class="card">

        <a href="{{ route('jurusan') }}" class="card2">Hukum</a>
        <p>Jurusan hukum mempelajari aturan dan sistem hukum yang mengatur masyarakat, termasuk aspek hukum pidana,
            perdata, bisnis, dan internasional.</p>
    </div>

    <div class="card">
        <a href="{{ route('jurusan') }}" class="card2">Peternakan</a>
        <p>Jurusan peternakan mempelajari segala aspek yang berkaitan dengan hewan ternak.</p>
    </div>
    <div class="card">

        <a href="{{ route('jurusan') }}" class="card2">Olahraga</a>
        <p>Jurusan olahraga mempelajari ilmu keolahragaan, meliputi fisiologi, manajemen olahraga, pelatihan, dan
            rekreasi.</p>
    </div>

    <div class="card">
        <a href="{{ route('jurusan') }}" class="card2">IT</a>
        <p>Jurusan IT mempelajari teknologi komputer, jaringan, pengembangan perangkat lunak, dan keamanan informasi
            untuk kebutuhan modern.</p>
    </div>
    <div class="card">
        <a href="{{ route('jurusan') }}" class="card2">Ekonomi</a>
        <p> Jurusan ekonomi mempelajari produksi, distribusi, dan konsumsi barang dan jasa, serta analisis pasar dan
            kebijakan publik.</p>
    </div>
    <div class="card">
        <a href="{{ route('jurusan') }}" class="card2">Matematika</a>
        <p> Jurusan matematika mempelajari teori, analisis, dan aplikasi angka untuk memecahkan berbagai masalah di
            bidang sains, teknologi, dan bisnis.</p>
    </div>
    <div class="card">
        <a href="{{ route('jurusan') }}" class="card2">Seni</a>
        <p> Jurusan seni mempelajari kreativitas dalam seni rupa, desain, musik, teater, atau seni digital, sesuai
            dengan cabang yang diminati.</p>
    </div>
</div>



@endsection
