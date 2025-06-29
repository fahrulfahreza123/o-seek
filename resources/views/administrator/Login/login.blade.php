<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin · O-SEEK</title>

    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            /* Mengatur tinggi body mengisi viewport */
            position: relative;
            /* Mengatur posisi relatif untuk pseudo-elements */
            font-family: "Open Sans", sans-serif;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 50%;
            background: linear-gradient(to right, #C5E1F6, white 550px);
            z-index: 1;
            /* Menambahkan z-index */
        }

        body::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50%;
            background: linear-gradient(to right, white 900px, #305F72);
            z-index: 1;
            /* Menambahkan z-index */
        }

        .navbar-nav .nav-item {
            margin: 0 30px;
            /* Beri jarak antar item */
        }

        .navbar-nav .nav-item:not(:last-child) {
            border-right: 1px solid #ccc;
            /* Sekat antar item */
            padding-right: 100px;
            /* Tambah padding di sebelah kanan sekat */
        }

        .navbar-nav .nav-link {
            padding: 10px 0;
            /* Menambah padding vertikal pada teks */
        }

        .custom-shadow {
            /* box-shadow: 0 2px 4px rgba(206, 206, 206, 0.2); */
            position: relative;
            /* Mengatur posisi relatif untuk navbar */
            z-index: 3;
            /* Z-index lebih tinggi agar navbar di atas gradient */
        }

        .container.d-flex {
            position: relative;
            /* Mengatur posisi relatif untuk card */
            z-index: 2;
            /* Card di atas gradient */
        }
    </style>
</head>

<body>
    <div style="">

    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card" style="width: 1200px; height: 600px; margin-top:13vh; border-radius:25px;  box-shadow: 2px 4px rgba(148, 148, 148, 0.2);">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="assets/img/login.png" class="card-img" alt="Photo" style="width: 510px; height:598px; border-radius:25px;">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="container mt-3">
                        <div class="d-flex justify-content-center">
                            <img src="assets/img/logo.ini.png" alt="" style="width: 190px; height:95px;">
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                                <h3 class="card-title" style="color: #2BB673;;"><b>Yuk Login Sebagai Admin</b></h3>
                            </div>

                            <div class="d-flex justify-content-center mt-3">
                                <h6>
                                    <b>Selamat kamu sudah mempunyai akun O-seek, kamu sudah berpartisipasi didalam membantu anak-anak. 
                                <span ><a href="" style="color: #2BB673;;">Silahkan Masuk!</a></span>
                                    </b>
                            </h6>
                        
                            </div>
                            

                        </div>

                        <!-- jika error akan keluar pesan -->
                        @if ($errors->any())
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <div class="container mt-4">

                    
                        <form action="{{ url('/login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" style="padding: 30px;" id="email"
                                    name="email" placeholder="Masukkan Alamat Email" required>
                            </div>
                            <div class="form-group" style="position: relative;">
                                <input type="password" class="form-control" id="password"
                                    placeholder="Masukkan Kata Sandi" style="padding: 30px;" name="password" required>
                                <i id="togglePassword" class="fa fa-eye password-toggle"
                                    style="position: absolute;"></i>
                            </div>

                            <!-- JavaScript untuk toggle password -->
                            <script>
                                const passwordInput = document.getElementById('password');
                                const togglePassword = document.getElementById('togglePassword');

                                togglePassword.addEventListener('click', function() {
                                    // Ubah tipe input antara 'password' dan 'text'
                                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                                    passwordInput.setAttribute('type', type);

                                    // Ubah ikon antara 'fa-eye' dan 'fa-eye-slash'
                                    this.classList.toggle('fa-eye'); // Mata terbuka
                                    this.classList.toggle('fa-eye-slash'); // Mata tertutup
                                });
                            </script>

                            <style>
                                ::placeholder{
                                    font-size: 15px;
                                }
                                p{
                                    font-size: 80%;
                                }
                                .form-group {
                                    position: relative;
                                }

                                .form-control {
                                    width: 100%;
                                    /* Input mengisi penuh kontainer */
                                    padding-right: 40px;
                                    /* Tambahkan ruang untuk ikon */
                                    box-sizing: border-box;
                                    /* Pastikan padding dihitung */
                                }

                                .password-toggle {
                                    position: absolute;
                                    top: 50%;
                                    /* Pusatkan secara vertikal */
                                    right: 10px;
                                    /* Jarak dari sisi kanan */
                                    transform: translateY(-50%);
                                    /* Koreksi posisi vertikal */
                                    font-size: 20px;
                                    /* Ukuran ikon */
                                    cursor: pointer;
                                    /* Tambahkan pointer saat di-hover */
                                    color: #666;
                                    /* Warna default */
                                }

                                .password-toggle:hover {
                                    color: #000;
                                    /* Warna ikon berubah saat di-hover */
                                }
                            </style>
                            <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-success btn-block custom-login-btn btn-lg"
                                style="padding: 14px; font-size: 20px; background-color: #2BB673; border-color: #2BB673;"><b>Login</b></button>
                            </div>
                            <!-- Link untuk Sign Up dan Lupa Password -->
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
                            
                            <div class="d-flex justify-content-center mt-4">
                                
                                {{-- <h6 ><b>Belum Punya Akun? <a href="{{ 'register' }}" style="color: forestgreen;">Sign Up</a></b></h6> --}}
                                {{-- <p><b>Belum Punya Akun? <a href="{{ 'RegisterAdministrator' }}">Sign Up</a></b></p> --}}
                                {{-- <p><b><a href="forgot-password">Lupa Password?</a></b></p> --}}
                            </div>

                        </form>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


</html>
