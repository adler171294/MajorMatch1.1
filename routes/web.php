<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index')->middleware('auth.custom');  // Menetapkan nama rute

Route::get('/login', function () {
    return view('/login');
})->name('login'); // Menetapkan nama rute

Route::get('/register', function () {
    return view('/register');
})->name('register'); // Menetapkan nama rute

Route::get('/profil', function () {
    return view('profil');
})->name('profil')->middleware('auth.custom'); // Menetapkan nama rute

Route::get('/faq', function () {
    return view('faq');
})->name('faq')->middleware('auth.custom'); // Menetapkan nama rute

Route::get('/rekomendasi', function () {
    return view('rekomendasi');
})->name('rekomendasi')->middleware('auth.custom'); // Menetapkan nama rute

Route::get('/informasi', function () {
    return view('informasi');
})->name('info')->middleware('auth.custom'); // Menetapkan nama rute

Route::get('/informasi/jurusan', function () {
    return view('jurusan');
})->name('jurusan');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Arahkan kembali ke halaman login
})->name('logout')->middleware('auth.custom');

//rute register dan login
Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

//profil mengambil nama
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

//rekomendasi
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Recommendation;

Route::post('/rekomendasi', function (Request $request) {
    $bidang = $request->input('bidang');
    $features = [];

    // Validasi bidang
    if (!$bidang || !in_array($bidang, ['saintek', 'soshum'])) {
        return redirect()->back()->withErrors(['bidang' => 'Pilih bidang yang valid!']);
    }

    // Siapkan fitur berdasarkan bidang
    if ($bidang === 'saintek') {
        $features = [
            'Matematika' => $request->input('matematika'),
            'Fisika' => $request->input('fisika'),
            'Kimia' => $request->input('kimia'),
            'Biologi' => $request->input('biologi'),
        ];
    } elseif ($bidang === 'soshum') {
        $features = [
            'Matematika' => $request->input('matematika_soshum'),
            'Ekonomi' => $request->input('ekonomi'),
            'Sosiologi' => $request->input('sosiologi'),
            'Geografi' => $request->input('geografi'),
        ];
    }

    // Tambahkan nilai minat dan prestasi
    $features['Minat'] = $request->input('minat');
    $features['Prestasi'] = $request->input('prestasi');

    // Validasi fitur
    foreach ($features as $key => $value) {
        if (is_null($value) || $value === '') {
            return redirect()->back()->withErrors([$key => "Field $key harus diisi!"]);
        }
    }

    // Kirim data ke API Flask
    try {
        $response = Http::post('http://localhost:5000/predict', [
            'category' => $bidang,
            'features' => $features,
        ]);

        if ($response->failed()) {
            return redirect()->back()->withErrors(['api' => 'Gagal mendapatkan respons dari API Flask.']);
        }

        // Ambil prediksi dari respons
        $prediction = $response->json('prediction');

        // **Langkah 4: Simpan data ke database**
        Recommendation::create([
            'bidang' => $bidang,
            'minat' => $features['Minat'],
            'prestasi' => $features['Prestasi'],
            'matematika' => $features['Matematika'],
            'fisika' => $features['Fisika'] ?? null,
            'kimia' => $features['Kimia'] ?? null,
            'biologi' => $features['Biologi'] ?? null,
            'ekonomi' => $features['Ekonomi'] ?? null,
            'sosiologi' => $features['Sosiologi'] ?? null,
            'geografi' => $features['Geografi'] ?? null,
            'prediction' => $prediction,
        ]);

        return view('rekomendasi', ['prediction' => $prediction]);
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
    }
});
