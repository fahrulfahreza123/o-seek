<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Operator · O-SEEK </title>

    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
    font-family: "Open Sans", sans-serif;
}

        body {
            margin: 0;
            height: 100vh; /* Mengatur tinggi body mengisi viewport */
            position: relative; /* Mengatur posisi relatif untuk pseudo-elements */
        }

      body::before {
            content: ""; 
            position: absolute; 
            top: 0;
            left: 0;
            right: 0;
            height: 50%; 
            background: linear-gradient(to right, #C5E1F6 , white 550px); 
            z-index: 1; /* Menambahkan z-index */
        }

        body::after {
            content: ""; 
            position: absolute; 
            bottom: 0; 
            left: 0;
            right: 0;
            height: 50%; 
            background: linear-gradient(to right, white 1300px,#305F72); 
            z-index: 1; /* Menambahkan z-index */
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

  
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="card" style="width: 1200px; height: 600px; margin-top: -1vh; border-radius:25px;  box-shadow: 2px 4px rgba(148, 148, 148, 0.2);">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="assets/img/login.png" class="card-img" alt="Photo" style="width: 510px; height:598px; border-radius:25px;">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="container mb-4">
                           <br>
                            <center>
                                <h3 class="card-title" style="color: forestgreen;"><b>Yuk Daftar Sebagai Pengelola Panti</b></h3>
                            </center>
                            <h6>
                                <b>Selamat kamu sudah mempunyai akun O-seek, kamu sudah berpartisipasi didalam membantu anak-anak.</b>
                                <span style="color: #2BB673;"><a href="" style="color: #2BB673">Silahkan Masuk!</a></span>
                              </h6>
                              
                        </div>

                   

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" style="padding: 30px;" placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" style="padding: 30px;" placeholder="Masukkan Alamat Email" value="{{ old('email') }}">
                                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group" style="position: relative;">
                                <input type="password" name="password" id="password" class="form-control" style="padding: 30px;" placeholder="Masukkan Kata Sandi">
                                <button type="button" id="togglePassword" class="btn btn-link" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); border: none; background: transparent;">
                                    <i class="fa fa-eye-slash" style="color: gray;"></i>
                                </button>
                                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            
                            <div class="form-group" style="position: relative;">
                                <input type="password" name="password_confirmation" id="confirmPassword" class="form-control" style="padding: 30px;" placeholder="Konfirmasi Kata Sandi">
                                <button type="button" id="togglePassword1" class="btn btn-link" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); border: none; background: transparent;">
                                    <i class="fa fa-eye-slash" style="color: gray;"></i>
                                </button>
                            </div>
                            
                            <script>
                                // Function to toggle password visibility and icon
                                function togglePasswordVisibility(passwordInputId, toggleIconId) {
                                    const passwordInput = document.getElementById(passwordInputId);
                                    const toggleIcon = document.getElementById(toggleIconId);
                            
                                    toggleIcon.addEventListener('click', function () {
                                        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                                        passwordInput.setAttribute('type', type);
                            
                                        // Toggle the icon between fa-eye and fa-eye-slash
                                        toggleIcon.querySelector('i').classList.toggle('fa-eye');
                                        toggleIcon.querySelector('i').classList.toggle('fa-eye-slash');
                                    });
                                }
                            
                                // Activate the toggle function for password and confirm password fields
                                togglePasswordVisibility('password', 'togglePassword');
                                togglePasswordVisibility('confirmPassword', 'togglePassword1');
                            </script>
                            
                            <button onclick="window.location.href='{{('VerifikasiSignUp') }}'" type="submit" class="btn btn-success btn-block custom-login-btn btn-lg" style="padding: 14px; font-size: 20px; background-color: #2BB673; border-color: #2BB673;"><b>Signup</b></button>
                            
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

                            <div class="d-flex justify-content-center mt-3"> 
                                <h6><b>Sudah punya akun?</b><a href="{{ url('LoginOperator') }}" class="ml-auto custom-link"> &nbsp;<b>Login</b></a></h6>  
                        </div>
                        </form>

                        
                        {{-- <div class="form-group">
                            <input type="text" class="form-control" style="padding: 30px;" id="username" name="username" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="padding: 30px;" id="username" name="username" placeholder="Masukkan Alamat Email" required>
                        </div>
                        <div class="form-group" style="position: relative;">
                            <input type="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi" style="padding: 30px;" name="password" required>
                            <i id="togglePassword" class="fa fa-eye password-toggle" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                        </div>
                        <div class="form-group" style="position: relative;">
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Kata Sandi" style="padding: 30px;" name="password1" required>
                            <i id="togglePassword1" class="fa fa-eye password-toggle" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                        </div> --}}
                        
                       
                       
                     
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-link {
            color: #2BB673;
            text-decoration: none; /* Menghilangkan underline default */
        }
    
        .custom-link:hover {
            text-decoration: underline; /* Menambahkan underline ketika hover */
        }
    </style>
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
            width: 100%; /* Input mengisi penuh kontainer */
            padding-right: 40px; /* Tambahkan ruang untuk ikon */
            box-sizing: border-box; /* Pastikan padding dihitung */
        }
    
        .password-toggle {
            position: absolute;
            top: 50%; /* Pusatkan secara vertikal */
            right: 10px; /* Jarak dari sisi kanan */
            transform: translateY(-50%); /* Koreksi posisi vertikal */
            font-size: 20px; /* Ukuran ikon */
            cursor: pointer; /* Tambahkan pointer saat di-hover */
            color: #666; /* Warna default */
        }
    
        .password-toggle:hover {
            color: #000; /* Warna ikon berubah saat di-hover */
        }
    </style>

  </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</html>