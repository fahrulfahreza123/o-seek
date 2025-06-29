<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Manajemen Akun · O-SEEK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


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
    <!-- Include Font Awesome for the pencil icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

     
    .edit-icon {
        font-size: 24px;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .col-md-4:hover .edit-icon {
        opacity: 1; /* Tampilkan logo saat gambar di-hover */
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
          <a class="nav-link mt-2" href="{{('ManajemenAkun')}}">
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
        <div class="p-2 bd-highlight">
            <h2>Profile Operator</h2>
        </div>
        
    </div>

    <section class="section dashboard">
      <div class="row">

        


        <!-- Left side columns -->
        <div class="col-lg-5 mt-5">
      


        </div><!-- End Left side columns -->
        <div class="container">
           
            <div class="row">
                <!-- Profile Picture Section -->
                <div class="col-md-4 text-center" style="position: relative; display: inline-block;">
                  <!-- Gambar yang dapat diklik -->
                  <img id="profilePicture" src="{{ asset('assets/img/login.png') }}" alt="Profile Picture"
                       class="profile-picture mb-2" style="width: 70%; border-radius: 100px; cursor: pointer; display: none; border: 2px solid #ccc;">
              
                  <!-- Frame untuk ketika gambar tidak ada -->
                  <div id="defaultFrame" style="width: 90%; height: 100%; background-color: #ccc; border-radius: 100px; display: block; margin: 0 auto; position: relative;">
                      <!-- Pencil icon -->
                      <i class="fas fa-pencil-alt" id="editIcon" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 2rem; color: #fff; opacity: 0; transition: opacity 0.3s;"></i>
                  </div>
              
                  <!-- Input file tersembunyi -->
                  <input type="file" id="fileInput" style="display: none;" accept="image/*">
              </div>
              
              <script>
                  // Get the profile picture, file input, and default frame elements
                  const profilePicture = document.getElementById('profilePicture');
                  const fileInput = document.getElementById('fileInput');
                  const defaultFrame = document.getElementById('defaultFrame');
                  const editIcon = document.getElementById('editIcon');
              
                  // When the image is clicked, trigger the file input click
                  defaultFrame.addEventListener('click', function() {
                      fileInput.click();
                  });
              
                  // When hovering over the frame, show the pencil icon
                  defaultFrame.addEventListener('mouseenter', function() {
                      editIcon.style.opacity = 1; // Make the pencil icon visible on hover
                  });
              
                  // When the mouse leaves the frame, hide the pencil icon
                  defaultFrame.addEventListener('mouseleave', function() {
                      editIcon.style.opacity = 0; // Hide the pencil icon when mouse leaves
                  });
              
                  // When a file is selected, update the image with the selected file
                  fileInput.addEventListener('change', function(event) {
                      const file = event.target.files[0];
                      if (file) {
                          const reader = new FileReader();
                          reader.onload = function(e) {
                              // Set the image source to the selected file
                              profilePicture.src = e.target.result;
                              // Hide the default frame and display the image
                              profilePicture.style.display = 'block';
                              defaultFrame.style.display = 'none';
                          };
                          reader.readAsDataURL(file);
                      } else {
                          // If no file is selected, reset the image to the default
                          profilePicture.src = "{{ asset('assets/img/login.png') }}";
                          profilePicture.style.display = 'none'; // Hide the image
                          defaultFrame.style.display = 'block'; // Show the grey frame
                      }
                  });
              </script>
              
            
              
              

              
            
        
                <!-- Profile Form Section -->
                <div class="col-md-8">
                    
                    <div class="container" style="width: 100%; min-height: 48vh; max-width: 1000px; border:2px solid; border-color:#000000; border-radius:20px" >
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="mt-5">
                                    </div>
                                    <div class="mt-5">
                                    </div>
                                   
                                    <div class="col-md-6 mb-6">
                                        <label for="operatorName" class="form-label">Nama Operator</label>
                                        <input type="text" class="form-control" id="operatorName" placeholder="Nama Operator" style="padding: 15px;">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="phoneNumber" class="form-label">No. Handphone</label>
                                        <input type="text" class="form-control" id="phoneNumber" placeholder="No. Handphone" style="padding: 15px;">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="nik" placeholder="NIK" style="padding: 15px;">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email" style="padding: 15px;">
                                    </div>
                                    <div class="mt-5">
                                    </div>
                                    <div class="mt-5">
                                    </div>
                                </div>


                                <div class="text-center">
                                  <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#verticalycentered"  style="width: 300px; height: 50px;">Simpan</button>
                                </div>

                                <div class="modal fade" id="verticalycentered" tabindex="-1">
                                  {{-- <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" style="border: none; box-shadow: none;">
                                    
                                      <div class="modal-header">
                                        <h5 class="modal-title w-100 text-center" id="validasiDokumentasiLabel"><b>Konfirmasi</b></h5>
                                        <button type="button" class="btn-close position-absolute end-0 top-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      
                                      <div class="modal-body" style="border-radius: 8px; padding: 30px 0;">
                                        <center>
                                          <h6>Apakah Anda akan Menyimpan</h6> 
                                          <h6>perubahan ini?</h6>
                                        </center>
                                      </div>
                                      
                                      <div class="modal-footer d-flex justify-content-center gap-4">
                                        <button type="button" class="btn btn-primary" style="background-color: #2BB673; border-color: #2BB673; color: white; width: 100px;" onclick="window.location.href='{{('/ManajemenAkun') }}'">Ya</button>
                                        <button type="button" class="btn btn-danger" style="background-color: #E11C1F; border-color:#E11C1F; color: white; width: 100px;" onclick="window.location.href='{{('/Sandi') }}'" data-bs-dismiss="modal">Tidak</button>
                                      </div>
                                      
                                    </div>
                                  </div> --}}
                                  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 400px; margin: auto;">
                                    <div class="modal-content text-center" style="border: 2px black; border-radius: 30px;">
                                      <div class="modal-header">
                                        <h3 class="modal-title w-100 font-weight-bold" id="modalTitle" style="color: #000000;"><b>Konfirmasi</b></h3>
                                      </div>
                                      <div class="modal-body">
                                        <p class="mb-2 mt-4">Apakah Anda akan mengubah perubahan ini?</p>
                                      </div>
                                      <div class="modal-footer d-flex justify-content-center gap-4 border-0">
                                        <button type="button" class="btn btn-primary" style="background-color: #2BB673; border-color: #2BB673; color: white; width: 100px;" onclick="window.location.href='{{('/ManajemenAkun') }}'">Ya</button>
                                        <button type="button" class="btn btn-danger" style="background-color: #E11C1F; border-color:#E11C1F; color: white; width: 100px;" onclick="window.location.href='{{('/Sandi') }}'" data-bs-dismiss="modal">Tidak</button>
                                      </div>
                                    </div>
                                  </div>
                                  
                                </div><!-- End Vertically centered Modal-->

                                <style>
                                  /* Remove border around the modal */
.modal-content {
  border: none !important;  /* Remove any default border */
  box-shadow: none !important;  /* Remove the shadow, if you want to keep it borderless */
}

                                </style>
                            </form>

                        </div>
                        
                    </div>
                  
                </div>
            </div>
        
            <!-- Password Button -->
            
           
            <style>
                
                                  /* Kustomisasi tombol */
                                  .btn-custom {
                                      background-color:#27A9E0; /* Warna latar */
                                      color: white; /* Warna teks */
                                      border: none; /* Hilangkan border */
                                      border-radius: 5px; /* Sudut melengkung */
                                      font-size: 1rem; /* Ukuran teks */
                                      padding: 0.5rem 1rem; /* Spasi dalam */
                                      transition: background-color 0.3s ease; /* Efek transisi */
                                  }
                              
                                  /* Efek hover */
                                  .btn-custom:hover {
                                      background-color: #274b59; /* Warna latar saat hover */
                                  }
                        
            </style>
            
            </div>
        </div>
    
        <!-- Right side columns -->
        <div class="col-lg-7" style="min-height: 10vh;">


        </div><!-- End Right side columns -->

      </div>
    </section>
 
  </nav>
  
  <!-- End Disabled and active states -->

        <!-- Disabled and active states -->

 
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


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