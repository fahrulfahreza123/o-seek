<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Program Donasi · O-SEEK</title>
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

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .add-button {
            background-color: #305f72;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #D6D6D6;
            color: black;
        }

        tbody tr:nth-child(odd) {
            background-color: white;
            /* Warna latar belakang putih untuk baris ganjil */
        }

        tbody tr:nth-child(even) {
            background-color: #eaeaea;
        }


        .icon {
            width: 20px;
            height: 20px;
        }

        .action-icon {
            cursor: pointer;
        }

        .sort-btn {
            background-color: #212529;
            color: white;
            border-radius: 20px;
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
                        <li><a class="nav-link collapsed mt-2" href="{{ 'Map' }}" style=" border: 1px solid #000000;"> <i
                                    class="bi bi-globe-asia-australia"></i> Maps Panti Asuhan</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ '/panti_asuhan' }}" style=" border: 1px solid #000000;"> <i
                                    class="bi bi-journal-plus"></i> Data Panti Asuhan</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ 'ValidasiOperator' }}" style=" border: 1px solid #000000;"><i
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
                        <li><a class="nav-link collapsed mt-2" href="{{ 'LaporanDonasiAdministrator' }}" style=" border: 1px solid #000000;" > <i
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


        <!-- Title Section -->
        <div class="row">
            <div class="col-6">
                <h2><b>Program Donasi</b></h2>
            </div>
        </div>


        <!-- Select and Button Row -->

        <!-- Select Dropdown on the Left -->
        <div class="row align-items-center">
            <!-- Button on the Left -->
            <div class="">
                <div class="row">

                    {{-- Show Entries --}}
                    <div class="d-flex justify-content-between align-items-center mb-2" style="height: 40px">
                        <!-- Bagian kiri -->
                        <div class="d-flex align-items-center">
                            <span class="me-2">Show</span>
                            <form action="{{ route('program-donasi.admin') }}" method="GET" class="d-inline">
                                <div class="input-group input-group-sm" style="width: 110px;">
                                    <input type="number" name="per_page" class="form-control" 
                                           value="{{ request('per_page', 5) }}" min="1" max="100" onchange="this.form.submit()">
                                    <span class="input-group-text">Entries</span>
                                </div>
                            </form>
                        </div>
                    
                        <!-- Bagian kanan -->
                        <div>
                            <button class="btn btn-success" onclick="window.location.href='{{ 'TambahProgramDonasi' }}'"
                                    style="background-color: #C5E1F6; color: black; border: 1px solid #000;">
                                + Tambah Program Donasi
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Select Dropdown on the Right -->





        </div>
        <!-- Right side columns -->

      

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
            tbody tr td {
                height: 80px;
                /* Tinggi baris */
                padding: 10px;
                /* Ruang dalam sel */
                line-height: 2;
                /* Jarak antar teks */
                text-align: center;
            }

            table {
                width: 100%;
                /* Membuat tabel lebih lebar */
            }

            thead tr th {
                height: 80px;
                /* Tinggi baris */
                padding: 10px;
                /* Ruang dalam sel */
                line-height: 2;
                /* Jarak antar teks */
                text-align: center;
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
                padding: 10px 20px;
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
        {{-- Pesan sukses atau error --}}
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif



{{-- Tabel Data Program Donasi --}}
<table>
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Program Donasi</th>
            <th>Batas Waktu</th>
            <th>Target Donasi</th>
            <th>Donasi Terkumpul</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($programDonasi as $index => $program)
            <tr>
                <td>{{ ($programDonasi->currentPage() - 1) * $programDonasi->perPage() + $index + 1 }}.</td>
                <td>{{ $program->nama_program_donasi }}</td>
                <td>{{ \Carbon\Carbon::parse($program->batas_waktu)->format('d-m-Y') }}</td>
                <td>Rp {{ number_format($program->target_donasi, 2, ',', '.') }}</td>
                <td>Rp {{ number_format($program->donasi_terkumpul ?? 0, 2, ',', '.') }}</td>
                <td>
                    @if ($program->foto_panti_asuhan)
                        <button class="custom-btn" data-bs-toggle="modal"
                            data-bs-target="#imageModal"
                            data-image="{{ asset('photo/' . $program->foto_panti_asuhan) }}">
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
                    <a href="" class="btn btn-action">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <a href="#" class="btn-action-delete" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $program->id }}">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
  
                <div class="modal fade" id="deleteModal{{ $program->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $program->id }}" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title w-100 text-center" id="deleteModalLabel{{ $program->id }}"><b>KONFIRMASI</b></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <center>
                                 Apakah Anda yakin menghapus program donasi <strong>{{ $program->nama_program_donasi }}</strong>?
                            </center>
                             
                          </div>
                          <div class="modal-footer d-flex justify-content-center">
                             
                              <form action="{{ route('program-donasi.destroy', $program->id) }}" method="POST" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Hapus</button>

                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
            </tr>

        @empty
            <tr>
                <td colspan="7" class="text-center">Tidak ada data program donasi.</td>
            </tr>
        @endforelse
    </tbody>
</table>

        </div><!-- End Right side columns -->

        </div>
        </section>

        </nav>

        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title w-100 text-center" id="validasiDokumentasiLabel"><b>KONFIRMASI</b></h5>
                        <button type="button" class="btn-close position-absolute end-0 top-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus item ini? Tindakan ini tidak dapat dibatalkan.
                    </div>
                    <div class="modal-footer d-flex justify-content-center gap-4">
                        <button type="button" class="btn btn-primary"
                            style="background-color: #2BB673; border-color: #2BB673; color: white; width: 100px;"
                            onclick="window.location.href='{{ 'data_panti' }}'">Ya</button>

                        <button type="button" class="btn btn-danger"
                            style="background-color: #E11C1F; border-color:#E11C1F; color: white; width: 100px;"
                            onclick="window.location.href='{{ '' }}'"
                            data-bs-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Structure -->
        <div class="modal fade" id="verticalycentered" tabindex="-1" aria-labelledby="modalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title w-100 text-center" id="modalLabel"><b>Konfirmasi</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <center>
                            Apakah anda yakin akan mendelete data ini?
                        </center>

                    </div>

                    <div class="modal-footer d-flex justify-content-center gap-2">
                        <button type="button" class="btn btn-primary"
                            style="background-color: #305f72; border-color: #305f72; color: white; width: 100px;"
                            onclick="window.location.href='{{ '' }}'">Ya</button>

                        <button type="button" class="btn btn-danger"
                            style="background-color: #305f72; border-color: #305f72; color: white; width: 100px;"
                            onclick="window.location.href='{{ '' }}'"
                            data-bs-dismiss="modal">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Disabled and active states -->

        
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

<!-- Disabled and active states -->
<div class="pagination-container">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{-- Tombol ke halaman sebelumnya --}}
            @if ($programDonasi->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $programDonasi->previousPageUrl() }}&per_page={{ request('per_page', 5) }}" aria-label="Previous">&laquo;</a>
                </li>
            @endif

            {{-- Tombol nomor halaman --}}
            @foreach (range(
                max(1, $programDonasi->currentPage() - 2),
                min($programDonasi->lastPage(), $programDonasi->currentPage() + 2)
            ) as $page)
                @if ($page == $programDonasi->currentPage())
                    <li class="page-item active">
                        <span class="page-link">{{ $page }}</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $programDonasi->url($page) }}&per_page={{ request('per_page', 5) }}">{{ $page }}</a>
                    </li>
                @endif
            @endforeach

            {{-- Tombol ke halaman berikutnya --}}
            @if ($programDonasi->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $programDonasi->nextPageUrl() }}&per_page={{ request('per_page', 5) }}" aria-label="Next">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
</div>
    </main><!-- End #main -->

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
