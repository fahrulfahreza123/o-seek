<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Operator · O-SEEK</title>
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
        .dropdown-select {
          display: none; /* Sembunyikan dropdown secara default */
      }
      .nav-item:hover .dropdown-select {
          display: block; /* Tampilkan dropdown saat hover */
      }
      </style>
   
   <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <div class="d-flex justify-content-center">
        <img src="{{ asset('assets/img/logo.ini.png') }}" alt="Logo" height="65" width="125">
      </div>
    
     
  
      <li class="nav-item mt-4">
        <a class="nav-link" href="{{('DashboardOperator')}}">
          <i class="bi bi-house-door-fill"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->
  
      <li class="nav-item">
        <!-- Menu Utama -->
        <a class="nav-link collapsed" href="#akunOperatorSubmenu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="akunOperatorSubmenu">
          <i class="bi bi-person"></i>
          <span>Profile Akun Operator</span>
        </a>
      
        <!-- Submenu -->
        <ul class="collapse submenu" id="akunOperatorSubmenu">
          <li>
            <a class="nav-link collapsed mt-2" href="{{('ManajemenAkun')}}" style=" border: 1px solid #000000;">
              <i class="bi bi-person-badge"></i>
              Detail Profile
            </a>
          </li>
          <li>
            <a class="nav-link collapsed mt-1" href="{{('Sandi')}}" style=" border: 1px solid #000000;">
              <i class="bi bi-key"></i>
              Ubah Password
            </a>
          </li>
        </ul>
      </li>
      
  
   <!-- Manajemen Panti Asuhan -->
  <ul class="nav flex-column">
  {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('panti_asuhan_operator.show', ['id' => $pantiAsuhan->id]) }}">
          <i class="bi bi-envelope"></i>
          <span>Manajemen Panti Asuhan</span>
      </a>
  </li> --}}
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
      <li><a class="nav-link collapsed mt-1" href="{{('ProgramDonasiOprator')}}"  style=" border: 1px solid #000000;"> <i class="bi bi-file-earmark-plus"></i> Program Donasi</a></li>
    </ul>
  </li>
  </ul>
  
    </ul>
  
  
  </aside><!-- End Sidebar-->
  
  

  <main id="main" class="main">
    
    @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
    @endif

    @if (session('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
    @endif
    

    <section class="section dashboard">
      

        <div id="map"></div>


    
  
      
           
             <div class="row">
             <script>
                var southWest = L.latLng(-7.019827997321301, 107.76074489069929);
                        var northEast = L.latLng(-6.815334003791101, 107.52299388267853);
                        var bounds = L.latLngBounds(southWest, northEast);
                        const map = L.map('map', {
                            zoomControl: false,
                            interactive: true,
                            cursor: true,
                            maxBounds:bounds,
                            maxBoundsViscosity:1.0,
                            maxZoom: 14,
                            minZoom: 12
                        }).setView([-6.907196838285372, 107.60968287827053], 13);
                        
                        map.setMaxBounds(bounds);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
         

// Define the card HTML
var cardHTML = `
    <div class="card-body" style="background-color: #C5E1F6; border-radius:20px; box-shadow: 0px 6px 10px #305f72">
                <div class="card"></div>
        
                  <div class="d-flex">
                  <div class="card-custom-blue card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cash-coin" style="color:#black;"></i>
                  </div>
                  <div class="ps-3">
                    <h6 style="color:rgb(0, 0, 0);">Jumlah Donasi Keseluruhan <br> <span class=" small pt-1 fw-bold" style="color:rgb(0, 0, 0);">10.000</span></h6>
                  </div>
                </div>
              </div>
`;

// Add the card as a custom control in Leaflet
var cardControl = L.control({ position: 'topright' });

cardControl.onAdd = function () {
    var container = L.DomUtil.create('div', '');
    container.innerHTML = cardHTML;
    container.style.width = '300px'; // Set width for the card
    container.style.margin = '10px'; // Add some margin
    container.style.zIndex = '1000'; // Ensure it appears above the map
    return container;
};

cardControl.addTo(map);


// Fetch the panti asuhan data for the logged-in operator
fetch('/panti-asuhans') // Assuming this route returns the correct data for the logged-in operator
            .then(response => response.json())
            .then(data => {
                // Loop through the data and place markers for each panti asuhan
                data.forEach(panti => {
                    // Extract the latitude and longitude from the 'koordinat' field
                    const [lat, lng] = panti.koordinat.split(',').map(coord => parseFloat(coord.trim()));

                    // Create a custom icon for the marker
                    const customIcon = L.icon({
                        iconUrl: '{{ asset("assets/img/location.png") }}',  // Path to your custom icon
                        iconSize: [40, 40],
                        iconAnchor: [20, 40],
                        popupAnchor: [0, -40]
                    });

                    // Add the marker to the map
                    const marker = L.marker([lat, lng], { icon: customIcon })
                        .addTo(map)
                        .bindPopup(`
                        <center>
                          <strong>${panti.nama_panti_asuhan}</strong><br>
                          </center>
                            ${panti.alamat}<br>
                            <a href="${panti.link_google_map}" target="_blank">Buka di Google Maps</a><br><br>    
                        `);
                });
            })
            .catch(error => console.error('Error:', error)); // Handle any errors

             </script>
        
        <!-- Right side columns -->
        

      </div>
    </section>
 
  </nav>
  
  <!-- End Disabled and active states -->

        <!-- Disabled and active states -->

 
  </main><!-- End #main -->


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

</body>

</html>