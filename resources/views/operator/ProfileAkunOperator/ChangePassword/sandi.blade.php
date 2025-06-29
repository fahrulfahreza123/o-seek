<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ganti Sandi · O-SEEK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/>

   <!-- Make sure you put this AFTER Leaflet's CSS -->
   <link href="//unpkg.com/leaflet/dist/leaflet.css" rel="stylesheet">
   <script src="//unpkg.com/leaflet/dist/leaflet.js"></script>
   <script src="{{asset('assets/js/leaflet-search.js')}}"></script>
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
 integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
 crossorigin=""></script>


  <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="height: 70px;">

    <style>
      /* Posisi awal elemen (margin kiri 300px) */
      .toggle-container {
        margin-left: 305px;
        transition: margin 0.3s ease; /* Animasi perpindahan */
      }
    </style>

    <div class="d-flex align-items-center justify-content-between toggle-container" id="logoContainer">
  <!-- Button 1 -->
  <a class="toggle-sidebar-btn" href="#">
    <img src="{{ asset('assets/img/logo.ini.png') }}" alt="Logo" height="55" width="110">
  </a>
  <!-- Logo -->
 
</div>

<script>
  // Flag untuk memeriksa posisi elemen
  let isLeft = false;

  // Event listener pada elemen container
  document.getElementById("logoContainer").addEventListener("click", function () {
    const container = this;

    // Toggle posisi elemen
    if (isLeft) {
      container.style.marginLeft = "305px"; // Kembali ke posisi awal
    } else {
      container.style.marginLeft = "0"; // Pindah ke pojok kiri
    }

    // Update flag
    isLeft = !isLeft;
  });
</script>

  
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell custom-bell"></i>
            <span class="badge bg-success badge-number">4</span>
        </a><!-- End Notification Icon -->

        <style>
            .custom-bell {
            color: #D21D60;
            }   

        </style>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

         

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{ asset('assets/img/messages-1.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{ asset('assets/img/messages-2.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="{{ asset('assets/img/messages-3.jpg')}}" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
        
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> --}}

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  

      <style>
        body {
            background-color: #ffffff; /* Warna biru muda */
        }
        .dropdown-select {
          display: none; /* Sembunyikan dropdown secara default */
      }
      .nav-item:hover .dropdown-select {
          display: block; /* Tampilkan dropdown saat hover */
      }
      </style>

      <style>
        .dropdown-select {
          display: none; /* Sembunyikan dropdown secara default */
      }
      .nav-item:hover .dropdown-select {
          display: block; /* Tampilkan dropdown saat hover */
      }
      </style>
   <!-- Manajemen Panti Asuhan -->



        <style>
          .dropdown-select {
            display: none; /* Sembunyikan dropdown secara default */
        }
        .nav-item:hover .dropdown-select {
            display: block; /* Tampilkan dropdown saat hover */
        }
        .table-header {
            background-color: #007bff;
            color: white;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #fa0000;
        }
        #tabel-stripet{
            background: #007bff;
        }

        
        .pagination {
            justify-content: center; /* Pusatkan pagination */
        }
        .add-button {
            float: right; /* Mengapung tombol ke kanan */
        }
        .table-container {
            overflow-x: auto; /* Mengizinkan scroll horizontal */
            max-width: 100%; /* Maksimal lebar tabel */
        }
        /* CSS untuk mengatur lebar kolom */
        th, td {
            min-width: 150px; /* Lebar minimum untuk setiap kolom */
            text-align: center; /* Rata tengah untuk isi kolom */
        }
       
        .profile-picture-wrapper {
            position: relative;
            display: inline-block;
        }
        .edit-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
        }
        .edit-icon:hover {
            background-color: rgba(255, 255, 255, 1);
        }
    
        </style>
    
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
        <div class="d-flex justify-content-center">
          <img src="{{ asset('assets/img/logo.ini.png') }}" alt="Logo" height="55" width="110">
          </div>

        <li class="nav-item mt-4">
          <a class="nav-link collapsed" href="{{('DashboardOperator')}}">
            <i class="bi bi-house-door-fill"></i>
            <span>Beranda</span>
          </a>
        </li><!-- End Dashboard Nav -->
    
        <li class="nav-item">
          <!-- Menu Utama -->
          <a class="nav-link" href="#akunOperatorSubmenu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="akunOperatorSubmenu">
            <i class="bi bi-person"></i>
            <span>Profile Akun Operator</span>
          </a>
        
          <!-- Submenu -->
          <ul class="submenu" id="akunOperatorSubmenu">
            <li>
              <a class="nav-link collapsed mt-2" href="{{('ManajemenAkun')}}" style=" border: 1px solid #000000;"">
                <i class="bi bi-person-badge"></i>
                Detail Profile
              </a>
            </li>
            <li>
              <a class="nav-link mt-1" href="{{('Sandi')}}">
                <i class="bi bi-key"></i>
                Ubah Password
              </a>
            </li>
          </ul>
        </li>
        
    
     <!-- Manajemen Panti Asuhan -->
    <ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{('ManajemenPantiOperator')}}">
            <i class="bi bi-envelope"></i>
            <span>Manajemen Panti Asuhan</span>
        </a>
    </li>
    </ul>
    
    <!-- Manajemen Donasi -->
    <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link collapsed" href="#manajemenDonasiSubmenu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="manajemenDonasiSubmenu">
        <i class="bi bi-file-earmark-text"></i>
        <span>Informasi Donasi</span>
      </a>
    
      <!-- Submenu -->
      <ul class="collapse submenu" id="manajemenDonasiSubmenu">
        <li><a class="nav-link collapsed mt-2" href="{{('LaporanDonasiOperator')}}" style=" border: 1px solid #000000;"> <i class="bi bi-file-earmark"></i> Laporan Donasi</a></li>
        <li><a class="nav-link collapsed mt-1" href="{{('ProgramDonasiOprator')}}" style=" border: 1px solid #000000;"><i class="bi bi-file-earmark-plus"></i> Program Donasi</a></li>
      </ul>
    </li>
    </ul>
    
      </ul>
    
    
    </aside><!-- End Sidebar-->
    
    

  <main id="main" class="main">


    <div class="d-flex justify-content-start mt-4">

        <div class="p-2 bd-highlight">
        </div>
        <div class="p-2 bd-highlight"> 
        </div>
        <div class="p-2 bd-highlight">
        </div>
        {{-- <div class="p-2 bd-highlight">
            <h2><b>Profil Operator</b></h2>
        </div> --}}
        
    </div>

    <section class="section dashboard">
        <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh; ">
            <div class="card" style="width: 1000px; border:2px solid; border-color:#000; border-radius:20px;">
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-4">
                       
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                       
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <h4  style="color: forestgreen;"><b>Ganti Kata Sandi Operator</b></h4>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                       
                    </div>
                   
                    <div class="form-group" style="position: relative;  width: 650px; margin: 0 auto">
                      <input type="password" class="form-control" id="password" placeholder="Masukkan Kata Sandi" style="padding: 20px;" name="password" required>
                      <i id="togglePassword" class="fa fa-eye password-toggle" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                  </div>
                  <br>
                  <div class="form-group" style="position: relative; width: 650px; margin: 0 auto">
                      <input type="password" class="form-control" id="confirmPassword" placeholder="Konfirmasi Kata Sandi" style="padding: 20px;" name="password1" required>
                      <i id="togglePassword1" class="fa fa-eye password-toggle" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                  </div>
        
                    <div class="d-flex justify-content-center mb-4 mt-5">
                      <button 
                      type="button" 
                      class="btn btn-custom" 
                      data-bs-toggle="modal" 
                      data-bs-target="#verticalycentered" 
                      style="width: 300px; height: 50px;">
                      Simpan
                  </button>
                  
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

                  <style>
                      /* Styling untuk tombol dengan warna #f18c8e */
                      .btn-custom {
                          background-color:#27A4DD; /* Warna latar */
                          color: white; /* Warna teks */
                          border: none; /* Hilangkan border */
                          border-radius: 5px; /* Sudut melengkung */
                          font-size: 1rem; /* Ukuran font */
                          font-weight: bold; /* Teks tebal */
                          transition: background-color 0.3s ease; /* Transisi halus */
                      }
                  
                      /* Efek hover */
                      .btn-custom:hover {
                          background-color:#2bb6f6; /* Warna latar lebih gelap saat hover */
                      }
                  </style>
                  
            
                    </div>
                     <!-- Vertically centered Modal -->
             
                     <div class="modal fade" id="verticalycentered" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered" style="max-width: 400px; margin: auto;">
                        <div class="modal-content text-center" style="border: 2px black; border-radius: 30px;">
                          <div class="modal-header">
                            <h3 class="modal-title w-100 font-weight-bold" id="modalTitle" style="color: #000000;"><b>Konfirmasi</b></h3>
                          </div>
                          <div class="modal-body">
                            <p class="mb-2 mt-4">Apakah Anda akan menyimpan </p>
                            <p>kata sandi baru?</p>
                          </div>
                          <div class="modal-footer d-flex justify-content-center gap-4 border-0">
                            <button type="button" class="btn btn-primary" style="background-color: #27A4DD; border-color: #27A4DD; color: white; width: 100px;" onclick="window.location.href=''">Ya</button>
                            <button type="button" class="btn btn-danger" style="background-color: #E11C1F; border-color:#E11C1F; color: white; width: 100px;" onclick="window.location.href=''" data-bs-dismiss="modal">Tidak</button>
                          </div>
                        </div>
                      </div>
                    </div><!-- End Vertically centered Modal-->
                    
                </div>
            </div>
        </div>

        


        <!-- Left side columns -->
        <div class="col-lg-5 mt-5">
      


        </div><!-- End Left side columns -->
       
        
          
    
        <!-- Right side columns -->
        {{-- <div class="col-lg-7" style="min-height: 18vh;">


        </div><!-- End Right side columns --> --}}

    </section>
 
  </nav>
  
  <!-- End Disabled and active states -->

        <!-- Disabled and active states -->

 
  </main><!-- End #main -->
{{-- 
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
   
    </div>
    <div class="credits">

    </div>
  </footer><!-- End Footer --> --}}

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.js')}}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</body>

</html>