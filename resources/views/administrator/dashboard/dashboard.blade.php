<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard · O-SEEK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

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
                transition: margin 0.3s ease;
                /* Animasi perpindahan */
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
            document.getElementById("logoContainer").addEventListener("click", function() {
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
                        </li> --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                style="display: none;">
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
            background-color: #ffffff;
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
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/img/logo.ini.png') }}" alt="Logo" height="65" width="125">
            </div>
            <li class="nav-item mt-4">
                <a class="nav-link" href="{{ 'DashboardAdmin' }}">
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
                        <li><a class="nav-link collapsed mt-2" href="{{ 'Map' }}"
                                style=" border: 1px solid #000000;"> <i class="bi bi-globe-asia-australia"></i> Maps
                                Panti Asuhan</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ 'panti_asuhan' }}"
                                style=" border: 1px solid #000000;"> <i class="bi bi-journal-plus"></i> Data Panti
                                Asuhan</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ 'ValidasiOperator' }}"
                                style=" border: 1px solid #000000;"><i class="bi bi-journal-check"></i> Validasi
                                Operator</a></li>
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
                        <li><a class="nav-link collapsed mt-2" href="{{ 'LaporanDonasiAdministrator' }}"
                                style=" border: 1px solid #000000;"> <i class="bi bi-file-earmark"></i> Laporan
                                Donasi</a></li>
                        <li><a class="nav-link collapsed mt-1" href="{{ 'ProgramDonasi' }}"
                                style=" border: 1px  solid #000000;"><i class="bi bi-file-earmark-plus"></i> Program
                                Donasi</a></li>
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


        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-7">
                    <div class="row">
                        <!-- Sales Card 1 -->
                        <div class="col-xxl-6 col-md-3">
                            <div class="card info-card sales-card card-custom-blue"
                                style="padding: 10px; box-shadow: 0 6px 8px #305f72;"> <!-- Reduced padding -->

                                <div class="card-body card-custom-blue" style="padding: 10px;">
                                    <!-- Reduced padding in card body -->
                                    <div class="d-flex align-items-center">
                                        <div class="card-custom-blue card-icon rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 65px; height: 65px;"> <!-- Smaller icon container -->
                                            <i class="ri-home-4-fill" style="color: #000000; font-size: 1.2rem;"></i>
                                            <!-- Smaller icon size -->
                                        </div>
                                        <div class="ps-2"> <!-- Adjust padding as needed here -->
                                            <h6
                                                style="color: #000000; font-size: 0.9rem; display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                <span>Jumlah Panti Asuhan Terdaftar</span>
                                                <span class="small pt-1"
                                                    style="color: #000000; font-size: 2rem;">13440</span>
                                            </h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- End Sales Card 1 -->
                    </div>

                    <div class="row">
                        <!-- Sales Card 2 -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card sales-card card-custoom-blue"
                                style="padding: 10px; background-color:#FEE6A8; box-shadow: 0 6px 8px #f3c757;">
                                <!-- Reduced padding -->

                                <div class="card-body card-custom-blue"
                                    style="padding: 10px; background-color:#FEE6A8;">
                                    <!-- Reduced padding in card body -->
                                    <div class="d-flex align-items-center">
                                        <div class="card-custom-blue card-icon rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 65px; height: 65px;"> <!-- Smaller icon container -->
                                            <i class="bi bi-cash-coin" style="color: #000000; font-size: 1.2rem;"></i>
                                            <!-- Smaller icon size -->
                                        </div>
                                        <div class="ps-2"> <!-- Adjust padding as needed here -->
                                            <h6
                                                style="color: #000000; font-size: 1rem; display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                <span>Jumlah Donasi Keseluruhan</span>
                                                <span class="small pt-1"
                                                    style="color: #000000; font-size: 2rem; padding-left:50px">10.000</span>
                                            </h6>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- End Sales Card 2 -->
                    </div>


                    <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-6 col-md-5">
                            <div class="card info-card sales-card card-custom-blue"
                                style="padding: 10px; box-shadow: 0 6px 8px #305f72;"> <!-- Reduced padding -->

                                <div class="card-body card-custom-blue" style="padding: 10px;">
                                    <!-- Reduced padding in card body -->
                                    <div class="d-flex align-items-center">
                                        <div class="card-custom-blue card-icon rounded-circle d-flex align-items-center justify-content-center"
                                            style="width: 65px; height: 65px;"> <!-- Smaller icon container -->
                                            <i class="bx bxs-user" style="color:#000000; font-size: 1.2rem;"></i>
                                            <!-- Smaller icon size -->
                                        </div>
                                        <div class="ps-2"> <!-- Adjust padding as needed here -->
                                            <h6
                                                style="color: #000000; font-size: 1rem; display: flex; align-items: center; justify-content: space-between; gap: 10px;">
                                                <span>Jumlah Operator Terdaftar</span>
                                                <span class="small pt-1"
                                                    style="color: #000000; font-size: 2rem; padding-left:50px">50</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- End Sales Card -->
                    </div>

                    <style>
                        .card-custom-blue {
                            background-color: #C5E1F6;
                            color: white;
                            /* Ensure text is readable on blue background */
                        }
                    </style>



                </div><!-- End Left side columns -->


                <!-- Right side columns -->
                <div class="row justify-content-end">


                    <div class="col-lg-8 col-md-9" style="margin-top: -405px;">

                        <!-- Recent Activity -->
                        <div class="card"
                            style="width: 107%; padding: 32px; background-color:#F2F2F2;  box-shadow: 0 6px 10px #305f72; margin-left: -47px;">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Aktivitas Operator <span>| Today</span></h5>

                                <div class="activity">
                                    <div class="activity-item d-flex">
                                        <div class="activite-label">32 min</div>
                                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                        <div class="activity-content">
                                            Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo
                                                officiis</a> beatae
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">56 min</div>
                                        <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                        <div class="activity-content">
                                            Voluptatem blanditiis blanditiis eveniet
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2 hrs</div>
                                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                        <div class="activity-content">
                                            Voluptates corrupti molestias voluptatem
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">1 day</div>
                                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                        <div class="activity-content">
                                            Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati
                                                voluptatem</a> tempore
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">2 days</div>
                                        <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                        <div class="activity-content">
                                            Est sit eum reiciendis exercitationem
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">4 weeks</div>
                                        <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                        <div class="activity-content">
                                            Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                        </div>
                                    </div><!-- End activity item-->

                                </div>
                            </div>
                        </div><!-- End Recent Activity -->
                    </div>












                </div><!-- End Right side columns -->
            </div>

            </div>
        </section>


        <div class="d-flex justify-content-between align-items-center"
            style="background-color: #C5E1F6; padding: 5px; border-top-left-radius: 15px; border-top-right-radius: 15px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <h6 class="card-title" style="color: rgb(0, 0, 0); margin-left: 10px;"><b>Donasi
                    Terbaru</b> </h6>
            <a href="" class="ri-settings-3-line"
                style="color: rgb(0, 0, 0); font-size: 28px; margin-right: 30px;"></a>
        </div>

        <div class="table-container"
            style="background-color: #f4f4f4; max-height: 200px; overflow-y: auto; padding: 10px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
            <table class="table no-border" style="margin: auto; width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #f4f4f4; ">
                        <th style="padding: 5px; text-align: left; vertical-align: middle; ">Nama Donatur</th>
                        <th style="padding: 5px; text-align: left; vertical-align: middle; ">Nama
                            Panti Asuhan</th>
                        <th style="padding: 5px; text-align: left; vertical-align: middle; ">Jenis
                            Donasi</th>
                        <th style="padding: 5px; text-align: left; vertical-align: middle; ">Jumlah
                            Donasi</th>
                        <th style="padding: 5px; text-align: left; vertical-align: middle; ">Tanggal
                            Donasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 5px;">Ahmad Yusuf</td>
                        <td style="padding: 5px;">Panti Asuhan Harapan</td>
                        <td style="padding: 5px;">Uang Tunai</td>
                        <td style="padding: 5px;">Rp 1.000.000</td>
                        <td style="padding: 5px;">01 November 2024</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;">Siti Aisyah</td>
                        <td style="padding: 5px;">Panti Asuhan Kasih Ibu</td>
                        <td style="padding: 5px;">Uang Tunai</td>
                        <td style="padding: 5px;">Rp 750.000</td>
                        <td style="padding: 5px;">03 November 2024</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;">Budi Santoso</td>
                        <td style="padding: 5px;">Panti Asuhan Sejahtera</td>
                        <td style="padding: 5px;">Uang Tunai</td>
                        <td style="padding: 5px;">Rp 1.200.000</td>
                        <td style="padding: 5px;">04 November 2024</td>
                    </tr>
                    <tr>
                        <td style="padding: 5px;">Linda Puspita</td>
                        <td style="padding: 5px;">Panti Asuhan Bina Anak</td>
                        <td style="padding: 5px;">Uang Tunai</td>
                        <td style="padding: 5px;">Rp 1.500.000</td>
                        <td style="padding: 5px;">05 November 2024</td>
                    </tr>
                    {{-- <tr>
                        <td style="padding: 8px;">Hendra Saputra</td>
                        <td style="padding: 8px;">Panti Asuhan Cinta Kasih</td>
                        <td style="padding: 8px;">Uang Tunai</td>
                        <td style="padding: 8px;">Rp 500.000</td>
                        <td style="padding: 8px;">06 November 2024</td>
                    </tr> --}}
                    <!-- Tambahkan data lainnya di sini -->
                </tbody>
            </table>
        </div>




        <style>
            .table.no-border {
                border: none;
                /* Menghilangkan border utama tabel */
                border-collapse: collapse;
                /* Menghilangkan jarak antar border */
                box-shadow: none;
                /* Menghapus bayangan tabel */
                width: 100%;
                /* Menjaga ukuran tabel agar penuh */
            }

            .table.no-border th,
            .table.no-border td {
                border: none;
                /* Menghilangkan garis pada header dan sel */
                outline: none;
                /* Menghapus garis outline */
                padding: 10px;
                /* Memberikan ruang antar isi */

            }

            .table.no-border th {
                background-color: #f4f4f4;
                /* Warna latar header */
                color: #000000;
                /* Warna teks header */
                font-weight: bold;
                /* Menonjolkan teks header */
                padding: 16px 20px;
                /* Lebih besar untuk header */
            }

            .table.no-border td {
                background-color: #f4f4f4;
                /* Warna latar sel */
                border: none;
                /* Menghilangkan garis */
                outline: none;
                /* Menghapus garis outline */
                padding: 12px 16px;
                /* Memberikan ruang atas-bawah dan kiri-kanan */
                text-align: left;
                /* Mengatur posisi teks ke kiri */
            }

            .table-container {
                max-height: 300px;
                /* Atur tinggi maksimum sesuai kebutuhan */
                overflow-y: auto;
                /* Aktifkan scrollbar vertikal jika konten melebihi tinggi */
                overflow-x: hidden;
                /* Sembunyikan scrollbar horizontal (jika tidak dibutuhkan) */
                margin: auto;
                /* Tengahkan tabel secara horizontal */

            }
        </style>
        <!-- End Table with stripped rows -->







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
            document.getElementById('logoContainer').addEventListener('click', function(event) {
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
                transition: margin-right 0.3s ease;
                /* Animasi pergeseran margin-right selama 0.5 detik */
            }
        </style>



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
