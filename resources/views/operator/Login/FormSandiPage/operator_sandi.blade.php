<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Operator · O-SEEK</title>

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

       
   
    .verification-container {
        text-align: center;
        max-width: 400px;
        width: 90%;
    }
    .verification-container h2 {
        color: #2AB27B;
        font-size: 24px;
        margin-bottom: 10px;
    }
    .verification-container p {
        font-size: 16px;
        color: #333;
        margin-bottom: 20px;
    }
    .code-inputs {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 20px;
    }
    .code-inputs input {
        width: 50px;
        height: 50px;
        text-align: center;
        font-size: 24px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }
    .resend-container {
        font-size: 14px;
        color: #666;
    }
    .resend-container a {
        color: #2AB27B;
        text-decoration: none;
        font-weight: bold;
    }
    .verify-button {
        background-color: #2AB27B;
        color: white;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        padding: 10px 0;
        width: 100%;
        cursor: pointer;
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
        <div class="card" style="width: 850px; height: 555px; border-radius: 20px;">
            <br>
            <div class="card-body">
                <div class="d-flex justify-content-center mt-5 mb-4">
                    <h2 class="card-title" style="color: #2BB673;"><b>Ganti Kata Sandi Operator</b></h2>
                </div>
    
                <div class="d-flex justify-content-center mb-4">
                    <h6 style="color: #ccc"><b>operator@gmail.com</b></h6>
                </div>
    
                <div class="form-group" style="position: relative; width: 500px; margin: 0 auto;">
                    <input type="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi" style="padding: 30px 15px;" name="password" required>
                    <i id="togglePassword" class="fa fa-eye password-toggle" style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;"></i>
                </div>
                <br>
                <div class="form-group" style="position: relative; width: 500px; margin: 0 auto;">
                    <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Kata Sandi" style="padding: 30px 15px;" name="password1" required>
                    <i id="togglePassword1" class="fa fa-eye password-toggle" style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;"></i>
                </div>
                
                  <br>
    
                <script>
                    // Fungsi untuk toggle password visibility
                    function togglePasswordVisibility(passwordInputId, toggleIconId) {
                        const passwordInput = document.getElementById(passwordInputId);
                        const toggleIcon = document.getElementById(toggleIconId);
                
                        toggleIcon.addEventListener('click', function () {
                            // Ubah tipe input
                            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                            passwordInput.setAttribute('type', type);
                
                            // Ubah ikon
                            toggleIcon.classList.toggle('fa-eye');
                            toggleIcon.classList.toggle('fa-eye-slash');
                        });
                    }
                
                    // Aktifkan fungsi untuk masing-masing pasangan input dan ikon
                    togglePasswordVisibility('password', 'togglePassword');
                    togglePasswordVisibility('confirmPassword', 'togglePassword1');
                </script>
                
                
                <script>
                    const passwordInput = document.getElementById('password1');
                    const togglePassword = document.getElementById('togglePassword1');
                
                    togglePassword.addEventListener('click', function () {
                        // Ubah tipe input antara 'password' dan 'text'
                        const type = passwordInput.getAttribute('type') === 'password1' ? 'text' : 'password1';
                        passwordInput.setAttribute('type', type);
                
                        // Ubah ikon antara 'fa-eye' dan 'fa-eye-slash'
                        this.classList.toggle('fa-eye'); // Mata terbuka
                        this.classList.toggle('fa-eye-slash'); // Mata tertutup
                    });
                </script>

<style>
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



                <!-- Tombol untuk memicu modal -->
<div class="d-flex justify-content-center mt-3">
    <button class="btn btn-success custom-login-btn" data-toggle="modal" data-target="#basicModal" style="width: 250px; height:60px; font-size:20px; background-color: #2BB673; border-color: #2BB673"><b>SIMPAN</b></button>
</div>

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
<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-hidden="true" style="border-radius: 60px;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border: none;">
                <h3 class="modal-title w-100 text-center" id="validasiDokumentasiLabel" style="color: #27A9E0"><b>SELAMAT!</b></h3>
            </div>
            <div class="modal-body">
                <center>
                    <h6>Kata Anda telah Di Ganti</h6> 
                    <h6>Silahkan untuk login Kembali</h6>
               </center>
            </div>
            <div class="modal-footer d-flex justify-content-center" style="border: none;">
                <button type="button" class="btn btn-primary" onclick="window.location.href='{{('LoginOperator') }}'" style="width: 200px; background-color: #27A9E0; border-color: #27A9E0">Mulai</button>
            </div>
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

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</html>