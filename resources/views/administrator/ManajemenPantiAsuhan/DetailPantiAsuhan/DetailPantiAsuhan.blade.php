<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit</title>
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
    </style>


     <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/img/logo.ini.png') }}" alt="Logo" height="65" width="125">
                </div>
            <li class="nav-item mt-4">
                <a class="nav-link collapsed" href="{{ '/DashboardAdmin' }}">
                    <i class="bi bi-house-door-fill"></i>
                    <span>Beranda</span>
                </a>
            </li><!-- End Dashboard Nav -->



            <!-- Manajemen Panti Asuhan -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#manajemenPantiSubmenu1" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="manajemenPantiSubmenu">
                        <i class="bi bi-envelope"></i>
                        <span>Manajemen Panti Asuhan</span>
                    </a>

                    <!-- Submenu -->
                    <ul class="submenu" id="manajemenPantiSubmenu1">
                        <li><a class="nav-link collapsed mt-2" href="{{ '/Map' }}" style=" border: 1px solid #000000;"> <i
                                    class="bi bi-globe-asia-australia"></i> Maps Panti Asuhan</a></li>
                        <li><a class="nav-link  mt-2" href="{{ '/panti_asuhan' }}"> <i
                                    class="bi bi-journal-plus"></i> Data Panti Asuhan</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ '/ValidasiOperator' }}" style=" border: 1px solid #000000;"><i
                                    class="bi bi-journal-check"></i> Validasi Operator</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Manajemen Donasi -->

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#manajemenDonasiSubmenu" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="manajemenDonasiSubmenu">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Informasi Donasi</span>
                    </a>

                    <!-- Submenu -->
                    <ul class="collapse submenu" id="manajemenDonasiSubmenu">
                        <li><a class="nav-link collapsed mt-2" href="{{ '/LaporanDonasiAdministrator' }}" style=" border: 1px solid #000000;"> <i
                                    class="bi bi-file-earmark"></i> Laporan Donasi</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ '/ProgramDonasi' }}" style=" border: 1px solid #000000;"><i
                                    class="bi bi-file-earmark-plus"></i> Program Donasi</a></li>
                    </ul>
                </li>
            </ul>



            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ '/CatatanAktivitasOperator' }}">
                    <i class="bi bi-card-list"></i>
                    <span>Catatan Aktivitas Pengelola</span>
                </a>
            </li><!-- End Register Page Nav -->


    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <div class="container" style=" border-radius: 40px; border: 2px solid black; padding: 40px; border: 4px solid #D6D6D6; ">
    <center>
        <h2><b>Detail Data Panti Asuhan</b></h2>
    </center>
    <center>
        @if($panti['foto_panti_asuhan'])
            <img src="{{ asset('photo/' . $panti['foto_panti_asuhan']) }}" alt="Foto Panti" style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
        @else
            Tidak Ada Foto
        @endif
    </center>
    <br><br>

    <form>
        <div class="row">
            <!-- Kolom Kiri -->
            <div class="col-md-6">
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="nama_panti_asuhan" class="col-sm-4 col-form-label">Nama Panti</label>
                        <input type="text" class="form-control" value="{{ $panti['nama_panti_asuhan'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="nama_yayasan" class="col-sm-4 col-form-label">Nama Yayasan</label>
                        <input type="text" class="form-control" value="{{ $panti['nama_yayasan'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="jumlah_penghuni" class="col-sm-4 col-form-label">Jumlah Penghuni</label>
                        <input type="number" class="form-control" value="{{ $panti['jumlah_penghuni'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="provinsi" class="col-sm-4 col-form-label">Provinsi</label>
                        <input type="text" class="form-control" value="{{ $panti['provinsi'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="kota_kabupaten" class="col-sm-4 col-form-label">Kota/Kabupaten</label>
                        <input type="text" class="form-control" value="{{ $panti['kota_kabupaten'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
                        <input type="text" class="form-control" value="{{ $panti['kecamatan'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="kelurahan" class="col-sm-4 col-form-label">Kelurahan</label>
                        <input type="text" class="form-control" value="{{ $panti['kelurahan'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-md-6">
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="no_handphone" class="col-sm-4 col-form-label">No Handphone</label>
                        <input type="text" class="form-control" value="{{ $panti['no_handphone'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="jam_operasional" class="col-sm-4 col-form-label">Jam Operasional</label>
                        <input type="text" class="form-control" value="{{ $panti['jam_operasional'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                        <textarea class="form-control" style="height: 132px; width: 600px; border: 1px solid black;" readonly>{{ $panti['alamat'] }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="kode_pos" class="col-sm-4 col-form-label">Kode Pos</label>
                        <input type="text" class="form-control" value="{{ $panti['kode_pos'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="link_maps" class="col-sm-4 col-form-label">Link Maps</label>
                        <a href="{{ $panti['link_maps'] }}" target="_blank" class="form-control" style="width: 600px; border: 1px solid black;">Lihat di Google Maps</a>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <label for="koordinat" class="col-sm-4 col-form-label">Koordinat</label>
                        <input type="text" class="form-control" value="{{ $panti['koordinat'] }}" style="width: 600px; border: 1px solid black;" readonly>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" rows="4" style="width: 1230px; border: 1px solid black;" readonly>{{ $panti['deskripsi'] }}</textarea>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="visi" class="form-label">Visi</label>
                    <textarea class="form-control" rows="4" style="width: 600px; border: 1px solid black;" readonly>{{ $panti['visi'] }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="misi" class="form-label">Misi</label>
                    <textarea class="form-control" rows="4" style="width: 600px; border: 1px solid black;" readonly>{{ $panti['misi'] }}</textarea>
                </div>
            </div>
        </div>
        </div>

        

        <div class="d-flex justify-content-end">
            <button type="button" class="btn" style="background-color: #E11C1F; color: white;" onclick="window.location.href='{{ url('/panti_asuhan') }}'">
                Back
            </button>
        </div>
    </form>
</div>



        <section class="section dashboard">
            <div class="row">




                <!-- Left side columns -->
                <div class="col-lg-5">


                </div><!-- End Left side columns -->


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
