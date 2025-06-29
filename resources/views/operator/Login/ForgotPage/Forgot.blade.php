<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password · O-SEEK</title>

    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
           body {
    font-family: "Open Sans", sans-serif;
}
body {
            margin: 0;
            height: 100vh; /* Mengatur tinggi body mengisi viewport */
            position: relative; /* Mengatur posisi relatif untuk pseudo-elements */
                background-image: linear-gradient(-180deg, #305F72,#FEE6A8, #C5E1F6);
        }



        .navbar-nav .nav-item {
            margin: 0 30px; /* Beri jarak antar item */
        }

        .navbar-nav .nav-item:not(:last-child) {
            border-right: 1px solid #ccc; /* Sekat antar item */
            padding-right: 100px; /* Tambah padding di sebelah kanan sekat */
        }

        .navbar-nav .nav-link {
            padding: 10px 0; /* Menambah padding vertikal pada teks */
        }

        .custom-shadow {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            position: relative; /* Mengatur posisi relatif untuk navbar */
            z-index: 3; /* Z-index lebih tinggi agar navbar di atas gradient */
        }

        .container.d-flex {
            position: relative; /* Mengatur posisi relatif untuk card */
            z-index: 2; /* Card di atas gradient */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-shadow" style=" border-bottom: 2px solid rgb(209, 209, 209);">
        <div class="container-fluid" style="background-color: #ececec; border-radius:30px;">
        <div class="d-inline-flex p-2">
            <a class="navbar-brand"><img src="{{ asset('assets/img/logo.ini.png') }}" height="50" width="110"></a>
        </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{'dashboard'}}"><b>Beranda</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'tentang'}}"><b>Tentang</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'daftar_panti'}}"><b>Panti Asuhan</b></a>
                    </li>
                </ul>

                <div class="d-inline-flex p-2">
            <button class="btn btn-success" type="button" style="width: 100px; background-color: #27A4DD; color: white; border-color: #27A4DD"><b>Berdonasi</b></button>
            &nbsp;&nbsp;
            <button class="btn btn-success" type="button" style="width: 100px; background-color: #000000; color: white; border-color: #000000" ><b>Login</b></button>
        </div>
            </div>
       
        </div>
    </nav>

 
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card" style="width: 850px; height: 500px; border-radius: 20px">
            <br>
            <div class="card-body">
                <div class="d-flex justify-content-center mt-3 mb-4">
                    <img src="{{asset('assets/img/logo.ini.png')}}" alt="" style="width: 20%;">
                </div>
    
                <div class="d-flex justify-content-center mt-5 mb-4">
                    <h5>Masukkan Alamat Email Anda Yang Terdaftar</h5>
                </div>
    
                <div class="d-flex justify-content-center mb-5">
                    <input type="email" class="form" style="padding: 10px; width: 60%;" id="username" name="username" placeholder="Masukkan Alamat Email" required>
                </div>
    
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success custom-login-btn" onclick="window.location.href='{{('VerifikasiForgot') }}'" style="width: 250px; height:60px; font-size:20px; background-color: #2BB673; border-color: #2BB673"><b>Simpan</b></button>
                    
                    <style>
                        /* Normal state */
                        .custom-login-btn {
                            padding: 14px;
                            font-size: 20px;
                            background-color: #2BB673;
                            border-color: #2BB673;
                            color: white;
                            transition: all 0.3s ease; /* Smooth transition */
                        }
                    
                        /* Hover state */
                        .custom-login-btn:hover {
                            background-color: #249d60; /* Warna latar lebih gelap */
                            border-color: #249d60;
                            color: white; /* Tetap putih untuk teks */
                            transform: scale(1.05); /* Sedikit memperbesar */
                            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Efek bayangan */
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    
  </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</html>