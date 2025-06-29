<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Laporan Data Donasi · O-SEEK</title>
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
        .dropdown-select {
            display: none;
            /* Sembunyikan dropdown secara default */
        }

        .nav-item:hover .dropdown-select {
            display: block;
            background-color: #f3c757;
            /* Tampilkan dropdown saat hover */
        }

        .container {
            width: 80%;
            max-width: 1000px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .export-btn {
            background-color: #000;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
        }

        .sort-container {
            display: flex;
            align-items: center;
        }

        .sort-container label {
            margin-right: 20px;
            font-size: 14px;
            color: #333;
        }

        .sort-container select {
            padding: 5px 10px;
            border: 1px solid #ffffff;
            border-radius: 20px;
        }


        thead {
            background-color: #305f72;
            color: #fff;
        }



        tbody tr:nth-child(odd) {
            background-color: white;
            /* Warna latar belakang putih untuk baris ganjil */
        }

        tbody tr:nth-child(even) {
            background-color: #eaeaea;
        }



        .custom-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;

        }

        .export-btn {
            background-color: #D6D6D6;
            color: rgb(0, 0, 0);
            border: 2px solid;
            border-color: #000;
            height: 38px;
        }

        .sort-btn {
            background-color: #D6D6D6;
            color: rgb(0, 0, 0);
            border-radius: 20px;
            height: 38px;
        }
    </style>

    <style>
          body {
            background-color: #ffffff; /* Warna biru muda */
        }
       
/* 
::-webkit-scrollbar {
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
    <!-- ======= Sidebar ======= -->
    <style>
        .dropdown-select {
            display: none;
            /* Sembunyikan dropdown secara default */
        }

        .nav-item:hover .dropdown-select {
            display: block;
            background-color: #f3c757;
            /* Tampilkan dropdown saat hover */
        }
    </style>

<style>
    tbody tr td {
      height: 80px;  /* Tinggi baris */
      padding: 10px; /* Ruang dalam sel */
      line-height: 2; /* Jarak antar teks */
      text-align: center; /* Rata tengah untuk isi kolom */
  }

  table {
      width: 100%; /* Membuat tabel lebih lebar */
      border-collapse: collapse; /* Menghilangkan jarak antar sel */
  }

  thead tr th {
      height: 60px;  /* Tinggi baris */
      padding: 10px; /* Ruang dalam sel */
      line-height: 2; /* Jarak antar teks */
      min-width: 220px; /* Lebar minimum untuk setiap kolom */
      text-align: center; /* Rata tengah untuk isi kolom */
  }

  /* Khusus kolom No */
  thead tr th:first-child,
  tbody tr td:first-child {
      min-width: 80px; /* Lebar minimum untuk kolom No */
      max-width: 90px; /* Lebar maksimum untuk kolom No */
      width: 5%; /* Lebar tetap relatif */
  }

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
            .table td,
            .table th {
                
                vertical-align: middle;
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
                        <li><a class="nav-link collapsed mt-2" href="{{ '/Map' }}" style=" border: 1px solid #000000;"> <i
                                    class="bi bi-globe-asia-australia"></i> Maps Panti Asuhan</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ '/panti_asuhan' }}" style=" border: 1px solid #000000;"> <i
                                    class="bi bi-journal-plus"></i> Data Panti Asuhan</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ '/ValidasiOperator' }}" style=" border: 1px solid #000000;"><i
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
                        <li><a class="nav-link mt-2" href="{{ '/LaporanDonasiAdministrator' }}" > <i
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

        </section>

        </nav>

        <!-- End Disabled and active states -->



        <div class="row align-items-center">
            <!-- Button on the Left -->
            

            <div class="d-flex justify-content-start">
                <h2 ><b>Laporan Data Donasi</b></h2>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <!-- Bagian kiri -->
                <div class="d-flex align-items-center">
                    <span class="me-2">Show</span>
                    <form action="{{ route('validasi-operator') }}" method="GET" class="d-inline">
                        <div class="input-group input-group-sm" style="width: 115px;">
                            <input type="number" name="per_page" class="form-control"
                                   value="{{ request()->get('per_page', 5) }}" min="1" max="100" onchange="this.form.submit()">
                            <span class="input-group-text">Entries</span>
                        </div>
                    </form>
                </div>
            
                <!-- Bagian kanan -->
                
                <div class="d-flex">
                    
                        <button class="btn export-btn me-2" id="exportButton">
                            <i class="bi bi-download me-2"></i> Export Data
                        </button>
                        <script>
                            document.getElementById("exportButton").addEventListener("click", function () {
                                const data = [
                                    ["ID", "Nama", "Email"],
                                    [1, "John Doe", "johndoe@example.com"],
                                    [2, "Jane Doe", "janedoe@example.com"],
                                ];
                
                                let excelContent = `<table>`;
                                data.forEach(row => {
                                    excelContent += `<tr>${row.map(cell => `<td>${cell}</td>`).join('')}</tr>`;
                                });
                                excelContent += `</table>`;
                
                                const blob = new Blob([excelContent], {
                                    type: "application/vnd.ms-excel",
                                });
                
                                const link = document.createElement("a");
                                link.href = URL.createObjectURL(blob);
                                link.download = "data.xls";
                                link.click();
                            });
                        </script>
                 
                    <div class="btn-group">
                        <button type="button" class="btn sort-btn" style="border: 2px solid #000;">Sort by:</button>
                        <button type="button" 
                        class="btn btn-outline-secondary dropdown-toggle" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false" 
                        style="height: 38px; border: 2px solid #000; border-left: 0; border-top-right-radius: 20px; 
                               border-bottom-right-radius: 20px; padding-right: 20px; padding-left: 20px; text-align: right;">
                    Bulanan
                </button>
                
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Harian</a></li>
                    <li><a class="dropdown-item" href="#">Mingguan</a></li>
                    <li><a class="dropdown-item" href="#">Bulanan</a></li>
                    <li><a class="dropdown-item" href="#">Tahunan</a></li>
                </ul>
                
                    </div>
                </div>
            </div>
            
            
            
          
           

       





        </div>
     
        <div class="table-container" style="overflow-x: auto;">
            <table class="table table-striped" style="table-layout: fixed; width: 100%;">
                <thead class="table-header">
                    <tr>
                        <th scope="col" style="background-color: #D6D6D6; color:rgb(0, 0, 0); width: 100px;">No</th>
                        <th scope="col" style="background-color: #D6D6D6; color:rgb(0, 0, 0); width: 250px;">Tanggal Donasi</th>
                        <th scope="col" style="background-color: #D6D6D6; color:rgb(0, 0, 0); width: 250px;">Nama Program Donasi</th>
                        <th scope="col" style="background-color: #D6D6D6; color:rgb(0, 0, 0); width: 250px;">Nama Donatur</th>
                        <th scope="col" style="background-color: #D6D6D6; color:rgb(0, 0, 0); width: 250px;">Nama Panti Asuhan</th>
                        <th scope="col" style="background-color: #D6D6D6; color:rgb(0, 0, 0); width: 250px;">Jenis Donasi</th>
                        <th scope="col" style="background-color: #D6D6D6; color:rgb(0, 0, 0); width: 250px;">Metode Pembayaran</th>
                        <th scope="col" style="background-color: #D6D6D6; color:rgb(0, 0, 0); width: 250px;">Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>






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
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">&laquo;</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
            </li>
        </ul>
    </nav>
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

        <section class="section dashboard">
            <div class="row">




                <!-- Left side columns -->
                <div class="col-lg-5">


                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-7">


                </div><!-- End Right side columns -->

            </div>
            <!-- Disabled and active states -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->


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
