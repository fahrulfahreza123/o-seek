<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Operator · O-SEEK </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: "Open Sans", sans-serif;
        }

        body {
            margin: 0;
            height: 100vh;
            /* Mengatur tinggi body mengisi viewport */
            position: relative;
            /* Mengatur posisi relatif untuk pseudo-elements */
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
            background: linear-gradient(to right, white 1300px, #305F72);
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
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
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


    <br><br><br><br>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card" style="width: 90%;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="assets/img/login.png" width="20%" class="card-img" alt="Photo">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="container">
                            <br>
                            <center>
                                <h3 class="card-title" style="color: forestgreen;"><b>Yuk Daftar Sebagai Pengelola Panti</b>
                                </h3>
                            </center>
                            <h6><b>Selamat kamu sudah mempunyai akun O-seek, kamu sudah berpartisipasi didalam membantu
                                    anak-anak.</b></h6>
                            <h6 style="color: forestgreen">Silahkan Masuk!</h6>
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

                        <br><br>
                        <form action="{{ url('/register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" style="padding: 30px;" name="name"
                                    id="name" placeholder="Masukkan Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" style="padding: 30px;" name="email"
                                    id="email" placeholder="Masukkan Alamat Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password"
                                    placeholder="Masukkan Kata Sandi" style="padding: 30px;" name="password" required>
                                <i id="togglePassword" class="fa fa-eye password-toggle"
                                    style="position: absolute;"></i>
                            </div>
                            {{-- <div class="form-group">
                                <label for="role">Pilih Role:</label>
                                <select type="role" name="role" id="role" style="padding: 20px">
                                    <option value="Admin">Admin</option>
                                    <option value="Operator">Operator</option>
                                    <option value="User">User</option>
                                </select>
                            </div> --}}
                            <button type="submit" class="btn btn-success btn-block btn-lg"
                                style="padding: 18px; font-size: 20px;">Register</button>
                        </form>
                        {{-- <div class="form-group" style="position: relative;">
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Kata Sandi" style="padding: 30px;" name="password1" required>
                            <i id="togglePassword1" class="fa fa-eye password-toggle" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                        </div> --}}

                        <script>
                            // Fungsi untuk toggle password visibility
                            function togglePasswordVisibility(passwordInputId, toggleIconId) {
                                const passwordInput = document.getElementById(passwordInputId);
                                const toggleIcon = document.getElementById(toggleIconId);

                                toggleIcon.addEventListener('click', function() {
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

                            togglePassword.addEventListener('click', function() {
                                // Ubah tipe input antara 'password' dan 'text'
                                const type = passwordInput.getAttribute('type') === 'password1' ? 'text' : 'password1';
                                passwordInput.setAttribute('type', type);

                                // Ubah ikon antara 'fa-eye' dan 'fa-eye-slash'
                                this.classList.toggle('fa-eye'); // Mata terbuka
                                this.classList.toggle('fa-eye-slash'); // Mata tertutup
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
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

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


</html>
