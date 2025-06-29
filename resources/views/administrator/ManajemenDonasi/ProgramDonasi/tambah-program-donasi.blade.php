<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tambah Program Donasi · O-SEEK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <link href="//unpkg.com/leaflet/dist/leaflet.css" rel="stylesheet">
    <script src="//unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="{{ asset('assets/js/leaflet-search.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

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
                                <img src="{{ asset('assets/img/messages-1.jpg') }}" alt=""
                                    class="rounded-circle">
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
                                <img src="{{ asset('assets/img/messages-2.jpg') }}" alt=""
                                    class="rounded-circle">
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
                                <img src="{{ asset('assets/img/messages-3.jpg') }}" alt=""
                                    class="rounded-circle">
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

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>

                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                @csrf
                            </form>
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
            display: none;
            /* Sembunyikan dropdown secara default */
        }

        .nav-item:hover .dropdown-select {
            display: block;
            /* Tampilkan dropdown saat hover */
        }

        .table-header {
            background-color: #007bff;
            color: white;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #fa0000;
        }

        #tabel-stripet {
            background: #007bff;
        }


        .pagination {
            justify-content: center;
            /* Pusatkan pagination */
        }

        .add-button {
            float: right;
            /* Mengapung tombol ke kanan */
        }

        .table-container {
            overflow-x: auto;
            /* Mengizinkan scroll horizontal */
            max-width: 100%;
            /* Maksimal lebar tabel */
        }

        /* CSS untuk mengatur lebar kolom */
        th,
        td {
            min-width: 150px;
            /* Lebar minimum untuk setiap kolom */
            text-align: center;
            /* Rata tengah untuk isi kolom */
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


    <style>
        .dropdown-select {
            display: none;
            /* Sembunyikan dropdown secara default */
        }

        .nav-item:hover .dropdown-select {
            display: block;
            /* Tampilkan dropdown saat hover */
        }
        .form-control::placeholder {
    color: #a9a9a9; /* Warna abu-abu terang */
    opacity: 0.5;   /* Membuat teks lebih samar */
}
    </style>


    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/img/logo.ini.png') }}" alt="Logo" height="65" width="125">
                </div>
            <li class="nav-item mt-4">
                <a class="nav-link collapsed" href="{{ 'DashboardAdmin' }}">
                    <i class="bi bi-house-door-fill"></i>
                    <span>Beranda</span>
                </a>
            </li><!-- End Dashboard Nav -->



            <!-- Manajemen Panti Asuhan -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#manajemenPantiSubmenu1" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="manajemenPantiSubmenu">
                        <i class="bi bi-envelope"></i>
                        <span>Manajemen Panti Asuhan</span>
                    </a>

                    <!-- Submenu -->
                    <ul class="collapse submenu" id="manajemenPantiSubmenu1">
                        <li><a class="nav-link collapsed mt-2" href="{{ 'Map' }}" style=" border: 2px solid #000000;"> <i
                                    class="bi bi-globe-asia-australia"></i> Maps Panti Asuhan</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ '/panti_asuhan' }}" style=" border: 2px solid #000000;"> <i
                                    class="bi bi-journal-plus"></i> Data Panti Asuhan</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ 'ValidasiOperator' }}" style=" border: 2px solid #000000;"><i
                                    class="bi bi-journal-check"></i> Validasi Operator</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Manajemen Donasi -->

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#manajemenDonasiSubmenu" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="manajemenDonasiSubmenu">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Informasi Donasi</span>
                    </a>

                    <!-- Submenu -->
                    <ul class="submenu" id="manajemenDonasiSubmenu">
                        <li><a class="nav-link collapsed mt-2" href="{{ 'LaporanDonasiAdministrator' }}" style=" border: 2px solid #000000;" > <i
                                    class="bi bi-file-earmark"></i> Laporan Donasi</a></li>
                        <li><a class="nav-link mt-2" href="{{ 'ProgramDonasi' }}"><i
                                    class="bi bi-file-earmark-plus"></i> Program Donasi</a></li>
                    </ul>
                </li>
            </ul>



            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ 'CatatanAktivitasOperator' }}">
                    <i class="bi bi-card-list"></i>
                    <span>Catatan Aktivitas Pengelola</span>
                </a>
            </li><!-- End Register Page Nav -->


    </aside><!-- End Sidebar-->

    <main id="main" class="main">


        <div class="container">

           

            <div class="d-flex justify-content-start mt-3 mb-3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2><b>Tambah Program Donasi</b></h2>
            </div>

        </div>

        <section class="section dashboard">
            <div class="d-flex justify-content-center align-items-center">
                <div class="" style=" border: 4px solid #D6D6D6; border-radius: 40px; padding: 80px 200px;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                           
                        </div>
    
                        <form action="{{ route('program_donasi.store1') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="mb-3">
                                <label for="nama_program_donasi" class="form-label">Nama Program Donasi</label>
                                <input type="text" class="form-control @error('nama_program_donasi') is-invalid @enderror" 
                                      id="nama_program_donasi" name="nama_program_donasi" value="{{ old('nama_program_donasi') }}" style="width: 800px; border: 1px solid black;">
                                @error('nama_program_donasi')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                    
                            <div class="mb-3">
                                <label for="batas_waktu" class="form-label">Batas Waktu</label>
                                <input type="date" class="form-control @error('batas_waktu') is-invalid @enderror" 
                                      id="batas_waktu" name="batas_waktu" value="{{ old('batas_waktu') }}" style="width: 800px; border: 1px solid black;">
                                @error('batas_waktu')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                    
                            <div class="mb-3">
                                <label for="target_donasi" class="form-label">Target Donasi</label>
                                <input type="number" step="0.01" class="form-control @error('target_donasi') is-invalid @enderror" 
                                      id="target_donasi" name="target_donasi" value="{{ old('target_donasi') }}"style="width: 800px; border: 1px solid black;" >
                                @error('target_donasi')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                    
                            <div class="mb-3">
                                <label for="foto_panti_asuhan" class="form-label">Foto Panti Asuhan</label>
                                <input type="file" class="form-control @error('foto_panti_asuhan') is-invalid @enderror" 
                                      id="foto_panti_asuhan" name="foto_panti_asuhan">
                                @error('foto_panti_asuhan')
                                    <small class="text-danger" style="width: 800px; border: 1px solid black;">{{ $message }}</small>
                                @enderror
                            </div>
                    <center>
                       <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#verticalycentered">Simpan</button>
                    </center>
    
                    
                  
    
                    <div class="modal fade" id="verticalycentered" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header ">
                            <h5 class="modal-title w-100 text-center" id="validasiDokumentasiLabel"><b>KONFIRMASI</b></h5>
                            <button type="button" class="btn-close position-absolute end-0 top-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                          <div class="modal-body">
                              Apakah anda yakin akan menyimpan
                              Program Donasi?
                          </div>
                          <div class="modal-footer d-flex justify-content-center gap-4">
                            <button type="submit" class="btn btn-primary" 
                                    style="background-color: #27A4DD; border-color: #27A4DD; color: white; width: 100px;" 
                                    onclick="window.location.href='{{('ProgramDonasiOprator') }}'">Ya</button>
                        
                            <button type="button" class="btn btn-danger" 
                                    style="background-color: #E11C1F; border-color:#E11C1F; color: white; width: 100px;" 
                                    onclick="window.location.href='{{('') }}'" data-bs-dismiss="modal">Tidak</button>
                        </div>
                        </div>
                  
                        </div>
      
      
              </div><!-- End Right side columns -->
     </form>
     <style>
        .btn-custom {
            background-color: #C5E1F6;
            /* Warna latar belakang */
            color: rgb(0, 0, 0);
            /* Warna teks */
            border: none;
            /* Hapus border */
            width: 300px;
            /* Lebar tombol */
            height: 50px;
            /* Tinggi tombol */
            border-radius: 5px;
            /* Sudut melengkung */
            font-size: 16px;
            /* Ukuran teks */
            font-weight: bold;
            /* Ketebalan teks */
            cursor: pointer;
            /* Ubah kursor menjadi pointer */
            transition: background-color 0.3s ease;
            /* Efek transisi untuk hover */
        }

        .btn-custom:hover {
            background-color: #1B87B3;
            /* Warna latar belakang saat hover */
        }

        .btn-custom:focus {
            outline: none;
            /* Hilangkan outline default */
            box-shadow: 0 0 5px #27A9E0;
            /* Tambahkan efek fokus */
        }
    </style>
                       
                        {{-- <div class="row justify-content-center mb-2">
                            <div class="col-12">
                                <label for="" class="col-form-label">Nama Program Donasi</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Kata Sandi" required>
                            </div>
                        </div>
                    
                        <div class="row justify-content-center mb-2">
                            <div class="col-12">
                                <label for="" class="col-form-label">Batas Waktu</label>
                                <input type="date" class="form-control" id="date" name="date" placeholder="Kata Sandi" required>
                            </div>
                        </div>
                    
                        <div class="row justify-content-center mb-2">
                            <div class="col-12">
                                <label for="" class="col-form-label">Target Donasi</label>
                                <input type="number" class="form-control" id="target" name="target" placeholder="Kata Sandi" required>
                            </div>
                        </div>
    
                        <div class="row justify-content-center mb-2">
                            <div class="col-12">
                                <label for="" class="col-form-label">Upload Foto Panti Asuhan</label>
                                <input class="form-control" type="file" class="form-control" id="formFile">
                            </div>
                        </div>
            
                        <div class="d-flex justify-content-center mb-4 mt-5">
                            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#verticalycentered" style="width: 300px; height:50px; background-color: #27A4DD; color: white">
                               Simpan
                              </button> --}}
                
                        </div>
                         <!-- Vertically centered Modal -->
                 
                        
                    </div>
                </div>
            </div>
    
            
    
    
            <!-- Left side columns -->
            {{-- <div class="col-lg-5 mt-5">
          
    
    
            </div><!-- End Left side columns --> --}}
           
            
              
        
            <!-- Right side columns -->
            {{-- <div class="col-lg-7" style="min-height: 9vh;">
    
    
            </div><!-- End Right side columns --> --}}
    
        </section>

        </nav>

        <!-- End Disabled and active states -->

        <!-- Disabled and active states -->


    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
