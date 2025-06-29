<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Manajemen Panti Map · O-SEEK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.css">

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
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

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
    </style>

    <!-- ======= Sidebar ======= -->
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
                    <a class="nav-link" href="#manajemenPantiSubmenu1" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="manajemenPantiSubmenu">
                        <i class="bi bi-envelope"></i>
                        <span>Manajemen Panti Asuhan</span>
                    </a>

                    <style>
                  
                    </style>
                    <!-- Submenu -->
                    <ul class="submenu" id="manajemenPantiSubmenu1">
                        <li><a class="nav-link  mt-2" href="{{ 'Map' }}"> <i
                                    class="bi bi-globe-asia-australia"></i> Maps Panti Asuhan</a></li>
                        <li ><a class="nav-link collapsed mt-2" href="{{ 'panti_asuhan' }}" style=" border: 1px solid #000000;"> <i
                                    class="bi bi-journal-plus" ></i> Data Panti Asuhan</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ 'ValidasiOperator' }}" style=" border: 1px solid #000000;"><i
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
                        <li><a class="nav-link collapsed mt-2" href="{{ 'LaporanDonasiAdministrator' }}" style=" border: 1px solid #000000;"> <i
                                    class="bi bi-file-earmark"></i> Laporan Donasi</a></li>
                        <li><a class="nav-link collapsed mt-2" href="{{ 'ProgramDonasi' }}" style=" border: 1px solid #000000;"><i
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



        <section class="section dashboard">
            <div class="row">




                <!-- Left side columns -->
              
                <div class="d-flex align-items-center mb-4">
                    <!-- Gunakan align-items-center untuk memastikan semuanya sejajar -->
                    <div class="mr-5 "> <!-- Tambahkan margin kanan yang lebih besar pada div pencarian -->

                        <style>
                            /* Styling untuk input group */
                            .input-group {
                                style:border: 1px solid black;
                                width: 400px; /* Sesuaikan lebar dengan kontainer */
                                max-width: 600px; /* Batas maksimal lebar */
                                margin: auto; /* Pusatkan elemen */
                                display: flex; /* Agar input dan ikon sejajar */
                                align-items: center;
                                color: #000000;
                            }
                        
                            /* Styling untuk elemen input */
                            .form-control {
                                background-color: #ffffff; /* Warna latar belakang */
                                border: 1px solid black;
                                color: #000000; /* Warna teks agar terlihat */
                            
                                padding: 10px; /* Ruang dalam */
                                height: 40px; /* Tinggi yang diinginkan */
                                border-top-left-radius: 5px; /* Sudut kiri melengkung */
                                border-bottom-left-radius: 5px; /* Sudut kiri melengkung */
                                flex: 1; /* Isi seluruh ruang yang tersisa */
                                font-size: 14px; /* Ukuran teks */
                            }
                        
                            /* Styling placeholder untuk input */
                            .form-control::placeholder {
                                color: #00000090; /* Warna placeholder transparan */
                                font-style: italic; /* Gaya miring */
                            }
                        
                            /* Styling untuk ikon pencarian */
                            .input-group-text {
                                background-color: #C5E1F6; /* Warna ikon */
                                color: rgb(0, 0, 0); /* Warna teks pada prepend */
                                border: 1px solid black;/* Border */
                                height: 40px; /* Tinggi yang diinginkan */
                                display: flex;
                                align-items: center; /* Pusatkan ikon secara vertikal */
                                justify-content: center;
                                padding: 0 10px; /* Ruang dalam horizontal */
                                border-top-right-radius: 5px; /* Sudut kanan melengkung */
                                border-bottom-right-radius: 5px; /* Sudut kanan melengkung */
                                cursor: pointer; /* Tampilkan pointer saat hover */
                                transition: background-color 0.3s ease; /* Menambahkan transisi untuk hover */
                            }
                        
                            /* Hover effect untuk ikon pencarian */
                            .input-group-text:hover {
                                background-color: #f3c757; /* Warna latar belakang saat hover */
                            }
                        </style>
                        
                        
                      


                       



                    </div>
                    <style>
                        .btn-custom {

                            color: rgb(0, 0, 0);
                            /* Warna teks */

                            margin-left: 670px;

                        }
                    </style>

                    



<style>
    /* Custom styling for the button */
    .custom-button {
        color: black; /* Text color */
        background-color: #C5E1F6; /* Background color */
        padding: 9px 40px; /* Padding */
        border: 1px solid black; /* Black border */
        display: inline-block; /* Ensure it's inline-block */
        font-size: 16px; /* Font size */
        font-weight: bold; /* Bold text */
        cursor: pointer; /* Pointer cursor on hover */
        text-align: center; /* Center text */
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
    }

    /* Hover effect */
    .custom-button:hover {
        background-color: #f3c757; /* Yellow color when hovering */
        color: #f3c757;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Light shadow for hover effect */
        transform: translateY(-2px); /* Slight lift effect */
    }
</style>


                        
                </div>

                <div class="container">
                    <style>
                        .custom-cursor {
                            cursor: default;
                        }
                    </style>

                   

                    <div id="map" style="margin-top: -3vh;"></div>

                    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
                        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

                    <script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>

                    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>




                    <style>
                        /* Style to make the 'X' clear button appear inside the search input */
                        input[type=search]::-webkit-search-cancel-button {
                            -webkit-appearance: searchfield-cancel-button;
                            cursor: pointer;
                            margin-right: 10px;
                            color: black; /* Set the color to black */
                        }
                    </style>
                    
                    
                    <script>
                        // Initialize the map
                        var southWest = L.latLng(-7.019827997321301, 107.76074489069929);
                        var northEast = L.latLng(-6.815334003791101, 107.52299388267853);
                        var bounds = L.latLngBounds(southWest, northEast);
                        const initialCenter = [-6.907196838285372, 107.60968287827053];
                        const initialZoom = 10;
                    
                        const map = L.map('map', {
                            zoomControl: false,
                            interactive: true,
                            cursor: true,
                            maxZoom: 15,
                            minZoom: 10
                        }).setView(initialCenter, initialZoom);
                    
                        map.setMaxBounds(bounds);
                    
                        // Add OpenStreetMap tile layer
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);
                    
                        var allMarkers = []; // Array to store all the markers initially
                        var searchMarker = null; // Marker for search result
                    
                        // Fetch data for all orphanages
                        fetch('/panti-asuhans')
                            .then(response => response.json())
                            .then(data => {
                                data.forEach(panti => {
                                    const [lat, lng] = panti.koordinat.split(',').map(coord => parseFloat(coord.trim()));
                    
                                    // Create a custom icon
                                    const customIcon = L.icon({
                                        iconUrl: '{{ asset("assets/img/location.png") }}',
                                        iconSize: [40, 40],
                                        iconAnchor: [20, 40],
                                        popupAnchor: [0, -40]
                                    });
                    
                                    // Add marker to the map
                                    const marker = L.marker([lat, lng], { icon: customIcon })
                                        .addTo(map)
                                        .bindPopup(`<strong>${panti.nama_panti_asuhan}</strong>
                                            <br>${panti.alamat}<br>
                                            <a href="${panti.link_maps}" target="_blank">Open in Google Maps</a>
                                            <br><br>
                                            <center>
                                                <form action="/panti_asuhan/${panti.id}" method="get" style="display: inline;">
                                                    <button type="submit" class="custom-button" style="background-color: #C5E1F6; color: black; border: none;">
                                                        Detail
                                                    </button>
                                                </form>
                                            </center>
                                        `);
                    
                                    allMarkers.push(marker); // Save marker to the array
                                });
                            })
                            .catch(error => console.error('Error:', error));
                    
                        // Search Control
                        var Search = L.Control.extend({
                            options: { position: 'topleft' },
                    
                            onAdd: function (map) {
                                var container = L.DomUtil.create('div', 'leaflet-bar custom-control-container');
                                container.innerHTML = `
                                    <div class="input-group" >
                                        <input type="search" class="form-control" placeholder="Cari Panti Asuhan..."  id="search-input">
                                        <div class="input-group-text" id="search-button">
                                            <i class="ri-search-line"></i>
                                        </div>
                                    </div>
                                `;
                    
                                L.DomEvent.disableClickPropagation(container);
                    
                                var searchInput = container.querySelector('#search-input');
                                var searchButton = container.querySelector('#search-button');
                    
                                // Event listener for search input
                                searchInput.addEventListener('input', function () {
                                    performSearch();
                                });
                    
                                const performSearch = () => {
                                    const query = searchInput.value.trim();
                    
                                    // If input is empty, show all markers and reset map view
                                    if (query === '') {
                                        // Remove search marker and popup
                                        if (searchMarker) {
                                            map.removeLayer(searchMarker);
                                            searchMarker = null;
                                        }
                    
                                        // Show all markers again
                                        allMarkers.forEach(marker => marker.addTo(map));
                    
                                        // Reset map position
                                        map.setView(initialCenter, initialZoom);
                    
                                        // Close any open popups
                                        map.closePopup();
                                        return;
                                    }
                    
                                    // Hide all markers
                                    allMarkers.forEach(marker => map.removeLayer(marker));
                    
                                    // Perform search
                                    fetch(`/search-panti-asuhan?query=${query}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            if (searchMarker) {
                                                map.removeLayer(searchMarker); // Remove previous search marker
                                                searchMarker = null;
                                            }
                                            if (data.length > 0) {
                                                const panti = data[0];
                                                const [lat, lng] = panti.koordinat.split(',').map(coord => parseFloat(coord.trim()));
                    
                                                // Create a custom icon for search result
                                                const customIcon = L.icon({
                                                    iconUrl: '{{ asset("assets/img/location.png") }}',
                                                    iconSize: [40, 40],
                                                    iconAnchor: [20, 40],
                                                    popupAnchor: [0, -40]
                                                });
                    
                                                // Add search result marker
                                                searchMarker = L.marker([lat, lng], { icon: customIcon }).addTo(map)
                                                    .bindPopup(`<strong>${panti.nama_panti_asuhan}</strong>
                                                        <br>${panti.alamat}<br>
                                                        <a href="${panti.link_maps}" target="_blank">Open in Google Maps</a>
                                                        <br><br>
                                                        <center>
                                                            <form action="/panti_asuhan/${panti.id}" method="get" style="display: inline;">
                                                                <button type="submit" class="btn btn-success" style="background-color: #C5E1F6; color: black; border: none;">
                                                                    Details
                                                                </button>
                                                            </form>
                                                        </center>
                                                    `)
                                                    .openPopup();
                    
                                                // Center map to marker
                                                map.setView([lat, lng], 18);
                                            }
                                        })
                                        .catch(error => console.error('Error:', error));
                                };
                    
                                // Event listener for search button
                                searchButton.addEventListener('click', performSearch);
                    
                                return container;
                            }
                        });
                    
                        map.addControl(new Search());
                    
                        // Custom control for adding orphanage data
                        const CustomControl = L.Control.extend({
                            options: { position: 'topright' },
                    
                            onAdd: function (map) {
                                const container = L.DomUtil.create('div', 'leaflet-bar custom-control-container');
                                container.innerHTML = `
                                    <div class="custom-button" type="button"
                                        onclick="window.location.href='{{ route('panti_asuhan.create') }}'"
                                        style="color: black; background-color: #C5E1F6; padding: 9px 40px; border: 1px solid black;" >+ Tambah Data Panti Asuhan</div>
                                `;
                                L.DomEvent.disableClickPropagation(container);
                                return container;
                            }
                        });
                    
                        map.addControl(new CustomControl());
                    </script>
                    
                        
                    

                </div>
                <!-- Right side columns -->
             

            </div>
        </section>

        </nav>

        <!-- End Disabled and active states -->



    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet-search@3.0.9/dist/leaflet-search.src.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.fullscreen@2.4.0/Control.FullScreen.min.js"></script>
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
