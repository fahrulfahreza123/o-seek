<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Panti · O-SEEK</title>
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

        tbody tr:nth-child(odd) {
            background-color: white;
            /* Warna latar belakang putih untuk baris ganjil */
        }

        tbody tr:nth-child(even) {
            background-color: #f0dddd;
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
        tbody th,
        td {
            height: 80px;
            /* Tinggi baris */
            padding: 10px;
            /* Ruang dalam sel */
            line-height: 2;
            /* Jarak antar teks */
            text-align: center;
            /* Rata tengah untuk isi kolom */
        }

        thead tr th {


            text-align: center;
            /* Rata tengah untuk isi kolom */
            line-height: 50px;
        }
    </style>
    <!-- ======= Sidebar ======= -->
    <style>
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



        <section class="section dashboard">
            <div class="row">




                <!-- Left side columns -->
                <div class="col-lg-5">



                </div><!-- End Left side columns -->

                <style>
                    .table thead {
                        background-color: #00AEEF;
                        color: white;
                    }

                    .table td,
                    .table th {
                        vertical-align: middle;
                    }

                    .status-active {
                        color: green;
                    }

                    .status-inactive {
                        color: red;
                    }

                    .btn-action {
                        color: #00AE00;
                        /* warna ikon edit */
                    }

                    .btn-action-delete {
                        color: #FF007F;
                        /* warna ikon hapus */
                    }

                    .role-badge {
                        border: 1px solid #000;
                        border-radius: 15px;
                        padding: 2px 10px;
                        font-size: 0.9em;
                    }
                </style>

                <style>
                    /* Tombol */
                    .custom-btn {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        background-color: #209764;
                        /* Warna hijau */
                        color: white;
                        /* Warna teks */
                        border: none;
                        padding: 5px 10px;
                        font-size: 16px;
                        font-weight: bold;
                        border-radius: 10px;
                        /* Membuat sudut melengkung */
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                        /* Efek bayangan */
                        cursor: pointer;
                        text-decoration: none;
                        /* Hilangkan garis bawah pada tautan */
                    }

                    /* Ikon di dalam tombol */
                    .custom-btn i {
                        margin-right: 8px;
                        /* Jarak antara ikon dan teks */
                        font-size: 18px;
                        /* Ukuran ikon */
                    }

                    /* Hover */
                    .custom-btn:hover {
                        background-color: #218838;
                        /* Warna hijau lebih gelap */
                    }

                    /* Fokus */
                    .custom-btn:focus {
                        outline: none;
                        box-shadow: 0 0 0 3px rgba(72, 180, 97, 0.5);
                        /* Fokus dengan bayangan hijau */
                    }
                </style>


                <div class="container">
                    <h2><b>Data Panti Asuhan</b></h2>
                    <button class="btn add-button"
                    onclick="window.location.href='{{ route('panti_asuhan.create') }}'"
                    style="background-color: #C5E1F6; color: black; border: 1px solid #000;">
                + Tambah Data Panti Asuhan
            </button>

            <div class="d-flex align-items-center" style="height: 40px">
                <span class="me-2">Show</span>
                <form action="{{ route('panti_asuhan.index') }}" method="GET" class="d-inline">
                    <div class="input-group input-group-sm" style="width: 110px;">
                        <input type="number" name="per_page" class="form-control" 
                               value="{{ $perPage }}" min="1" max="100" onchange="this.form.submit()">
                          
                        <span class="input-group-text">Entries</span>
                    </div>
                </form>
            </div>
            
            
            
            

              
                    <div class="table-container mt-3">
                        <table class="table table-striped">
                            <thead class="table-header" id="tabel-stripet">
                                <tr>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 100px;">No</th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Nama Panti
                                        Asuhan</th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Nama Yayasan
                                    </th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6;color:rgb(0, 0, 0); min-width: 220px;">Jumlah
                                        Penghuni</th>
                                    {{-- <th scope="col" style="background-color: #305f72; color:white">Jenis Donasi</th> --}}
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">No. Handphone
                                    </th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Jam Operasi
                                    </th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Alamat</th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Provinsi</th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">
                                        Kota/Kabupaten</th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Kecamatan
                                    </th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Kelurahan
                                    </th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Kode Pos</th>

                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Sejarah Panti
                                    </th>

                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Visi & Misi
                                    </th>

                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Link Gmaps
                                    </th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Koordinat
                                    </th>

                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Foto</th>
                                    <th scope="col"
                                        style="background-color: #D6D6D6; color:rgb(0, 0, 0); min-width: 220px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($panti_asuhans as $panti)
                                    <tr>
                                        <td>{{ $loop->iteration + ($panti_asuhans->currentPage() - 1) * $panti_asuhans->perPage() }}
                                        </td>
                                        <td>{{ $panti->nama_panti_asuhan }}</td>
                                        <td>{{ $panti->nama_yayasan }}</td>
                                        <td>{{ $panti->jumlah_penghuni }}</td>
                                        <td>{{ $panti->no_handphone }}</td>
                                        <td>{{ $panti->jam_operasional }}</td>
                                        <td>{{ $panti->alamat }}</td>
                                        <td>{{ $panti->provinsi }}</td>
                                        <td>{{ $panti->kota_kabupaten }}</td>
                                        <td>{{ $panti->kecamatan }}</td>
                                        <td>{{ $panti->kelurahan }}</td>
                                        <td>{{ $panti->kode_pos }}</td>
                                        <td>
                                            @if ($panti->deskripsi)
                                                <!-- Tombol untuk memunculkan modal -->
                                                <button class="custom-btn" data-bs-toggle="modal"
                                                    data-bs-target="#descriptionModal"
                                                    data-description="{{ $panti->deskripsi }}">
                                                    <i class="bi bi-text-paragraph"></i> Preview
                                                </button>
                                            @else
                                                <button class="custom-btn" disabled>
                                                    <i class="bi bi-text-paragraph"></i> No Description
                                                </button>
                                            @endif
                                        </td>

                                        <!-- Modal -->
                                        <div class="modal fade" id="descriptionModal" tabindex="-1"
                                            aria-labelledby="descriptionModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="descriptionModalLabel">Sejarah Panti Asuhan</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p id="modalDescription"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const descriptionModal = document.getElementById('descriptionModal');
                                                const modalDescription = document.getElementById('modalDescription');

                                                descriptionModal.addEventListener('show.bs.modal', function(event) {
                                                    const button = event.relatedTarget; // Tombol yang diklik
                                                    const descriptionText = button.getAttribute(
                                                        'data-description'); // Ambil atribut data-description

                                                    modalDescription.textContent = descriptionText; // Ganti teks deskripsi di modal
                                                });
                                            });
                                        </script>

                                        <td>
                                            @if ($panti->visi || $panti->misi)
                                                <button class="custom-btn" data-bs-toggle="modal"
                                                    data-bs-target="#visiMisiModal" data-visi="{{ $panti->visi }}"
                                                    data-misi="{{ $panti->misi }}">
                                                    <i class="bi bi-eye"></i> Preview
                                                </button>
                                            @else
                                                <button class="custom-btn" disabled>
                                                    <i class="bi bi-eye-slash"></i> No Visi or Misi
                                                </button>
                                            @endif
                                        </td>

                                        <!-- Modal for Visi & Misi -->
                                        <div class="modal fade" id="visiMisiModal" tabindex="-1"
                                            aria-labelledby="visiMisiModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="visiMisiModalLabel">Preview Visi &
                                                            Misi</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6><strong>Visi:</strong></h6>
                                                        <p id="modalVisi"></p>
                                                        <h6><strong>Misi:</strong></h6>
                                                        <p id="modalMisi"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const visiMisiModal = document.getElementById('visiMisiModal');
                                                const modalVisi = document.getElementById('modalVisi');
                                                const modalMisi = document.getElementById('modalMisi');

                                                visiMisiModal.addEventListener('show.bs.modal', function(event) {
                                                    const button = event.relatedTarget; // Tombol yang diklik
                                                    const visiText = button.getAttribute('data-visi') ||
                                                        "Tidak ada visi yang tersedia"; // Ambil visi
                                                    const misiText = button.getAttribute('data-misi') ||
                                                        "Tidak ada misi yang tersedia"; // Ambil misi

                                                    modalVisi.textContent = visiText; // Ganti teks visi di modal
                                                    modalMisi.textContent = misiText; // Ganti teks misi di modal
                                                });
                                            });
                                        </script>







                                        <td>
                                            @if ($panti->link_maps)
                                                <a href="{{ $panti->link_maps }}" target="_blank"
                                                    class="custom-btn">
                                                    <i class="bi bi-map"></i> Preview
                                                </a>
                                            @else
                                                <button class="custom-btn" disabled>
                                                    <i class="bi bi-map"></i> No Link Available
                                                </button>
                                            @endif
                                        </td>



                                        <td>{{ $panti->koordinat }}</td>

                                        <td>
                                            @if ($panti->foto_panti_asuhan)
                                                <button class="custom-btn" data-bs-toggle="modal"
                                                    data-bs-target="#imageModal"
                                                    data-image="{{ asset('photo/' . $panti->foto_panti_asuhan) }}">
                                                    <i class="bi bi-image"></i> View
                                                </button>
                                            @else
                                                <button class="custom-btn" disabled>
                                                    <i class="bi bi-image"></i> No Image
                                                </button>
                                            @endif


                                            <!-- Modal -->
                                            <div class="modal fade" id="imageModal" tabindex="-1"
                                                aria-labelledby="imageModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                                    <!-- Gunakan modal-xl untuk ukuran ekstra besar -->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="imageModalLabel">Image Preview
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body text-center">
                                                            <img id="modalImage" src="" alt="Panti Image"
                                                                class="img-fluid"> <!-- Gunakan img-fluid -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    const imageModal = document.getElementById('imageModal');
                                                    const modalImage = document.getElementById('modalImage');

                                                    imageModal.addEventListener('show.bs.modal', function(event) {
                                                        const button = event.relatedTarget; // Tombol yang diklik
                                                        const imageSrc = button.getAttribute('data-image'); // Ambil atribut data-image

                                                        modalImage.src = imageSrc; // Ganti sumber gambar di modal
                                                    });
                                                });
                                            </script>
                                        </td>
                                        <td>
                                            <div style="display: flex; align-items: center; gap: 2px; padding-left: 40px;">
                                                <!-- Form untuk icon file -->
                                                <form action="{{ route('panti_asuhan.detail', $panti->id) }}" method="GET" style="display:inline;">
                                                <button type="submit" class="btn btn-action btn-document" style="color: #007bff">
                                                 <i class="bi bi-file-earmark-text"></i>
                                                </button>
                                                </form>

                                        
                                                <!-- Link Edit -->
                                                <a href="{{ route('panti_asuhan.edit', $panti->id) }}" class="btn btn-action">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                        
                                                <!-- Form Delete -->
                                                <form action="{{ route('panti_asuhan.destroy', $panti->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-action btn-action-delete" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal" data-id="{{ $panti->id }}">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                        

                                        <style>
                                           
.btn-action:hover {
background-color: rgba(0, 123, 255, 0.1); /* Efek hover */
border-radius: 5px; /* Membuat sudut tombol melengkung */
}



/* ::-webkit-scrollbar {
    width: 10px; 
}

::-webkit-scrollbar-track {
    background: #f1f1f1; 
    border-radius: 5px; 
}

::-webkit-scrollbar-thumb {
    background: #888; 
    border-radius: 5px;
}

::-webkit-scrollbar-thumb:hover {
    background: #555; 
}


 {
    scrollbar-width: thin; 
    scrollbar-color: #D6D6D6 #f1f1f1; 
} */


                                        </style>
                                        

                                        <!-- Modal Konfirmasi Hapus -->
                                        <div class="modal fade" id="deleteModal" tabindex="-1"
                                            aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title w-100 text-center" id="deleteModalLabel">Konfirmasi
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus item ini?
                                                    </div>
                                                    <div class="modal-footer d-flex justify-content-center gap-2">
                                                        <form id="deleteForm" action="" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger" style="background-color: #E11C1F; width: 120px; height: 40px;">Hapus</button>
                                                        </form>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal" style="background-color: #2BB673; width: 120px; height: 40px;">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const deleteModal = document.getElementById('deleteModal');
                                                const deleteForm = document.getElementById('deleteForm');

                                                deleteModal.addEventListener('show.bs.modal', function(event) {
                                                    const button = event.relatedTarget; // Tombol yang diklik
                                                    const pantiId = button.getAttribute('data-id'); // Ambil ID panti

                                                    // Set action URL untuk form hapus
                                                    deleteForm.action = `/panti_asuhan/${pantiId}`;
                                                });
                                            });
                                        </script>


                                        </form>



                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <script>
                        document.getElementById('logoContainer').addEventListener('click', function (event) {
                          event.preventDefault(); // Mencegah aksi default jika ada
                          const paginationContainer = document.querySelector('.pagination');
                      
                          if (paginationContainer) {
                            // Periksa apakah elemen sudah bergeser
                            if (paginationContainer.style.marginRight === '-400px') {
                              // Kembalikan ke posisi semula
                              paginationContainer.style.marginRight = ''; // Reset ke default
                            } else {
                              // Geser ke kanan -400px
                              paginationContainer.style.marginRight = '-400px';
                            }
                          }
                        });
                      </script>
                    <br><br>
                    <style>
                        .pagination-container {
                            position: fixed;
                            /* Tetap berada di tempat yang sama */
                            bottom: 0;
                            /* Berada di bagian bawah halaman */
                            width: 100%;
                            /* Lebar penuh */
                            background: #fff;
                            /* Warna latar belakang */
                            padding: 15px 0;
                    
                            z-index: 1000;
                            /* Agar selalu di atas elemen lainnya */
                        }
                    
                        .pagination-container .pagination {
                            gap: 10px;
                            /* Tambahkan jarak antar elemen */
                            transform: translateX(-240px);
                            /* Geser ke kiri sebesar 20px */
                            margin: 0;
                        }
                    
                        /* Styling untuk memastikan ukuran dan tampilan serupa */
                        .pagination li a,
                        .pagination li span {
                            padding: 5px 15px;
                            font-size: 14px;
                            color: #000000;
                            /* Set text color to #305f72 */
                            border-color: #000000;
                            /* Set border color */
                            border-radius: 10px;
                        }
                    
                        .pagination .page-item.active .page-link {
                            background-color: #C5E1F6;
                            /* Active page background color */
                            border-color: #000000;
                            /* Active page border color */
                            color: rgb(0, 0, 0);
                            /* Active page text color */
                        }
                    
                        .pagination .page-item.disabled .page-link {
                            color: #000000;
                            /* Disabled page text color */
                            border-color: #000000;
                            /* Disabled page border color */
                        }
                    
                        .pagination .page-item:hover .page-link {
                            background-color: #f3c757;
                            /* Hover effect with #f3c757 */
                            border-color: #f3c757;
                            /* Hover border color */
                        }
                        .pagination {
              transition: margin-right 0.3s ease; /* Animasi pergeseran margin-right selama 0.5 detik */
            }
            
                    </style>



<div class="pagination-container">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            @if ($panti_asuhans->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $panti_asuhans->previousPageUrl() }}&per_page={{ $perPage }}"
                        aria-label="Previous">&laquo;</a>
                </li>
            @endif

            @foreach ($panti_asuhans->getUrlRange(max(1, $panti_asuhans->currentPage() - 2), min($panti_asuhans->lastPage(), $panti_asuhans->currentPage() + 2)) as $page => $url)
                @if ($page == $panti_asuhans->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                @else
                    <li class="page-item"><a class="page-link"
                            href="{{ $url }}&per_page={{ $perPage }}">{{ $page }}</a></li>
                @endif
            @endforeach

            @if ($panti_asuhans->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $panti_asuhans->nextPageUrl() }}&per_page={{ $perPage }}"
                        aria-label="Next">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
</div>




                </div>
                <!-- Right side columns -->
                <div class="col-lg-7">


                </div><!-- End Right side columns -->

            </div>
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
