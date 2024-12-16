@extends('layouts.app')

@section('title', 'Rekomendasi')

@section('content')
@section('page-class', 'rekomendasi-page')

<div class="rectangle-div">
    <script>
        function showFields() {
            const bidang = document.getElementById('bidang').value;
    const saintekFields = document.getElementById('saintek-fields');
    const soshumFields = document.getElementById('soshum-fields');

    if (bidang === 'saintek') {
        saintekFields.style.display = 'block';
        soshumFields.style.display = 'none';

        // Hapus required dari Soshum, tambahkan ke Saintek
        document.querySelectorAll('#soshum-fields input').forEach(input => input.required = false);
        document.querySelectorAll('#saintek-fields input').forEach(input => input.required = true);
    } else if (bidang === 'soshum') {
        soshumFields.style.display = 'block';
        saintekFields.style.display = 'none';

        // Hapus required dari Saintek, tambahkan ke Soshum
        document.querySelectorAll('#saintek-fields input').forEach(input => input.required = false);
        document.querySelectorAll('#soshum-fields input').forEach(input => input.required = true);
    } else {
        saintekFields.style.display = 'none';
        soshumFields.style.display = 'none';

        // Hapus required dari semua
        document.querySelectorAll('.sasos input').forEach(input => input.required = false);
    }
}
    </script>


    <b class="judul">Input Data</b>
    <div class="container1">
        <form action="/rekomendasi" method="POST">
            @csrf
            <div class="form-group">
                <label for="bidang">Bidang</label>
                <select name="bidang" id="bidang" onchange="showFields()" required>
                    <option value="">Pilih</option>
                    <option value="saintek">Saintek</option>
                    <option value="soshum">Soshum</option>
                </select>
            </div>
            <div class="sasos" id="saintek-fields" style="display: none;">
                <h3 class="judul1">Input Nilai Saintek</h3>
                <div class="form-group">
                    <label for="matematika">Matematika</label>
                    <input type="number" name="matematika" id="matematika" placeholder="Masukkan nilai Matematika"
                        required>
                </div>
                <div class="form-group">
                    <label for="fisika">Fisika</label>
                    <input type="number" name="fisika" id="fisika" placeholder="Masukkan nilai Fisika" required>
                </div>
                <div class="form-group">
                    <label for="kimia">Kimia</label>
                    <input type="number" name="kimia" id="kimia" placeholder="Masukkan nilai Kimia" required>
                </div>
                <div class="form-group">
                    <label for="biologi">Biologi</label>
                    <input type="number" name="biologi" id="biologi" placeholder="Masukkan nilai Biologi" required>
                </div>
            </div>

            <div class="sasos" id="soshum-fields" style="display: none;">
                <h3 class="judul1">Input Nilai Soshum</h3>
                <div class="form-group">
                    <label for="matematika-soshum">Matematika</label>
                    <input type="number" name="matematika_soshum" id="matematika-soshum"
                        placeholder="Masukkan nilai Matematika" required>
                </div>
                <div class="form-group">
                    <label for="ekonomi">Ekonomi</label>
                    <input type="number" name="ekonomi" id="ekonomi" placeholder="Masukkan nilai Ekonomi" required>
                </div>
                <div class="form-group">
                    <label for="sosiologi">Sosiologi</label>
                    <input type="number" name="sosiologi" id="sosiologi" placeholder="Masukkan nilai Sosiologi"
                        required>
                </div>
                <div class="form-group">
                    <label for="geografi">Geografi</label>
                    <input type="number" name="geografi" id="geografi" placeholder="Masukkan nilai Geografi" required>
                </div>
            </div>

            <div class="form-group">
                <label for="minat">Minat</label>
                <select name="minat" id="minat" required>
                    <option value="">Pilih</option>
                    <option value="Teknologi">Teknologi</option>
                    <option value="Sosial">Sosial</option>
                    <option value="Seni">Seni</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Olahraga">Olahraga</option>
                    <option value="Sains">Sains</option>
                    <option value="Bahasa">Bahasa</option>
                </select>
            </div>

            <div class="form-group">
                <label for="prestasi">Prestasi Akademik/Non-Akademik</label>
                <select name="prestasi" id="prestasi" required>
                    <option value="">Pilih</option>
                    <option value="Teknologi">Teknologi</option>
                    <option value="Sosial">Sosial</option>
                    <option value="Seni">Seni</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Olahraga">Olahraga</option>
                    <option value="Keagamaan">Keagamaan</option>
                </select>
            </div>

            <button type="submit">Submit</button>
        </form>

    </div>
    <b class="judul">Hasil Rekomendasi</b>
    <div id="outputContainer" class="output-container">
    @if(isset($prediction))
        <p id="output">Rekomendasi Jurusan: {{ $prediction }}</p>
    @endif
    </div>
</div>



@endsection