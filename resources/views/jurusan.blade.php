@extends('layouts.app')

@section('title', 'JURUSAN')

@section('content')
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;

        }

        /* Container */
        /* .container {
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 20px;
                } */

        /* Header */
        .header {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2.5em;
            color: #01365d;
            font-weight: bold;
        }

        /* Content */
        .content {
            display: flex;
            gap: 20px;
            align-items: center;

            width: 140px;
            height: 140px;
            width: 100%;
            position: relative;
            background: linear-gradient(180deg, #fff, #73ceef);
            height: 800px;
        }

        /* Icon Section */
        .icon-section {
            /* flex: 1; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 50px;
            color: #e7f2fa;
            margin-top: 50px;

        }

        .rectangle {
            background-color: #e7f2fa;
            width: 540px;
            height: 800px;
        }

        .icon {
            margin-left: 10px;
            display: flex;
            justify-content: start;
            align-items: flex-start;
            margin-top: 80px;
        }

        .icon img {
            width: 125px;
            height: 125px;
        }

        /* Text Section */
        .text-section {
            flex: 2;
            display: flex;
            flex-direction: column;
            gap: 50px;
            margin-left: 150px;
        }

        .card5 {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            font-size: 1em;
            line-height: 1.6;
            color: #555;
            width: 600px;
            height: auto;

        }

        .card5 p {
            margin: 0;
            color: #1f4959;
            font-family: "Inria Serif", serif;
            font-weight: 700;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: flex-start;
            }

            .icon img {
                width: 80px;
                height: 80px;
            }
        }
    </style>
    {{-- <div class="rectangle-div3"> --}}

@csrf
    <div class="content">
        <div class="rectangle">
            <div class="header">
                <h1>TEKNIK</h1>
            </div>
            <div class="icon-section">

                <div class="icon">
                    <img src="{{ asset('asset/komputer.png') }}" alt="Computer Icon">
                </div>
                <div class="icon">
                    <img src="{{ asset('asset/person.png') }}" alt="Student Icon">
                </div>
            </div>
        </div>

        <div class="text-section">
            <div class="card5">
                <p>Jurusan teknik mempelajari penerapan ilmu sains dan matematika untuk menciptakan solusi teknis, seperti
                    desain, pembangunan, dan pengelolaan infrastruktur atau produk teknologi. Cabang populer termasuk Teknik
                    Sipil, Teknik Mesin, Teknik Elektro, dan Teknik Kimia. </p>
            </div>
            <div class="card5">
                <p>Beberapa prospek kerja bagi lulusan jurusan Teknik Komputer, antara lain: Jurusan yang
                    mempelajari
                    ilmu rekayasa komputasi (Computer Engineering) yang merupakan kombinasi dari ilmu komputer dan
                    ilmu
                    teknik elektro. Jurusan kuliah ini mempelajari berbagai materi, seperti: Matematika teknik dan fisika
                    Mekanika, termodinamika, dan material teknik,
                    Sistem kontrol dan robotika,
                    Pemrograman CAD (Computer-Aided Design),
                    Desain struktur dan analisis rekayasa,
                    Teknologi manufaktur dan energi terbarukan.</p>
            </div>
        </div>
    </div>

    {{-- </div> --}}

@endsection
