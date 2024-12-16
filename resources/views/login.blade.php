<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&family=Poller+One&family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,800&display=swap"
        rel="stylesheet">

</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            /* Mengatur posisi ke kiri */
            align-items: center;
            /* Mengatur posisi vertikal ke tengah */
            background-image: url('asset/bglogin.png');
            /* Ganti dengan URL gambar latar belakang Anda */
            background-size: cover;
            /* Mengatur gambar agar menutupi seluruh latar belakang */
            background-position: center;
            /* Mengatur posisi gambar di tengah */
        }

        .container {
            width: 100%;
            max-width: 400px;
            /* Lebar maksimum form login */
            padding: 20px;
        }

        .login-form {
            background-color: #357C9D;
            /* Warna latar belakang form dengan transparansi */
            border-radius: 8px;
            /* Sudut membulat */
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Bayangan untuk efek kedalaman */
        }

        h2 {
            font-family: "Inria Serif", serif;
            font-weight: 700;
            margin-bottom: 36px;
            margin-top: 15px;
            color: #fff;
            text-align: center;
            /* Mengatur teks judul ke tengah */
        }

        .form-group {
            margin-bottom: 15px;
        }

        input[type="username"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            /* Lebar penuh */
            padding: 10px;
            border: 1px solid #ccc;
            /* Garis batas */
            border-radius: 4px;
            /* Sudut membulat */
        }

        button {
            width: 100%;
            /* Lebar penuh */
            padding: 10px;
            margin-top: 22px;
            background-color: #2d5e72;
            /* Warna latar belakang tombol */
            color: white;
            /* Warna teks tombol */
            border: none;
            /* Menghapus garis batas */
            border-radius: 4px;
            /* Sudut membulat */
            cursor: pointer;
            /* Mengubah kursor saat hover */
            font-size: 25px;
            font-family: "Inria Serif", serif;

        }

        button:hover {
            background-color: #1f4959;
            /* Warna saat hover */
        }

        .daftar {
            color: #fff;
            font-size: 15px;
            font-family: "Inria Serif", serif;
            padding-left: 75px;
            padding-top: 3px;
        }

        a {
            font-size: 15px;
            font-family: "Inria Serif", serif;
            color: #fff;
            padding-top: 3px;
        }
    </style>
    <div class="container">
        <div class="login-form">
            <h2>LOGIN</h2>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="form-group">
                    <input type="username" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <button type="submit">Login</button>
                <span class="daftar">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></span>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
