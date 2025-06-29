<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Data Panti Asuhan · O-SEEK</title>
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
  <li class="nav-item">
      <a class="nav-link" href="{{ route('panti_asuhan_operator.show', ['id' => $pantiAsuhan->id]) }}">
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
        
     .dropdown-select {
          display: none; /* Sembunyikan dropdown secara default */
      }
      .nav-item:hover .dropdown-select {
          display: block; /* Tampilkan dropdown saat hover */
      }
        </style>
     
    
  
 




  <main id="main" class="main">


    <div class="container mt-2" style=" border-radius: 40px; /* Membuat sudut rounded pada form */
    border: 4px solid #D6D6D6;   padding: 40px; /* Memberikan border hitam dengan ketebalan 2px */">
      <div class="d-flex justify-content-center mb-2">
       <h2><b>Detail Data Panti Asuhan</b></h2>
      </div>
        

      <form action="{{ route('panti_asuhan_operator.update', ['id' => $pantiAsuhan->id]) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
      
          <div class="row mt-5">
              <!-- Kolom Kiri -->
              <div class="col-md-6">
                  <div class="row mb-3">
                     
                      <div class="col-sm-8">
                           <label for="nama_panti_asuhan" class="col-sm-8 col-form-label">Nama Panti Asuhan</label>
                          <input type="text" class="form-control @error('nama_panti_asuhan') is-invalid @enderror" name="nama_panti_asuhan" id="nama_panti_asuhan" value="{{ old('nama_panti_asuhan', $pantiAsuhan->nama_panti_asuhan ?? '') }}"style="width: 580px; border: 1px solid black;" placeholder="Masukkan Nama Panti" required>
                          @error('nama_panti_asuhan')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div>

                  <div class="row mb-3">
                     
                      <div class="col-sm-8">
                           <label for="nama_yayasan" class="col-sm-4 col-form-label">Nama Yayasan</label>
                          <input type="text" class="form-control @error('nama_yayasan') is-invalid @enderror" name="nama_yayasan" id="nama_yayasan" value="{{ old('nama_yayasan', $pantiAsuhan->nama_yayasan ?? '') }}" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Nama Yayasan" required>
                          @error('nama_yayasan')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div>
                  
                  <div class="row mb-3">
                      
                      <div class="col-sm-8">
                          <label for="jumlah_penghuni" class="col-sm-4 col-form-label">Jumlah Penghuni</label>
                          <input type="number" class="form-control @error('jumlah_penghuni') is-invalid @enderror" name="jumlah_penghuni" id="jumlah_penghuni" value="{{ old('jumlah_penghuni', $pantiAsuhan->jumlah_penghuni ?? '') }}" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Jumlah Penghuni" required>
                          @error('jumlah_penghuni')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div>

                  <div class="row mb-3">
                   
                    <div class="col-sm-8">
                     <label class="col-sm-4 col-form-label">Provinsi</label>
                      <select name="provinsi" class="form-select form-control" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Provinsi" required>
                        <option selected disabled value="">Pilih Provinsi</option>
                        <option value="1" {{ old('provinsi', $pantiAsuhan->provinsi) == '1' ? 'selected' : '' }}>Jawa Barat</option>
                        <option value="2" {{ old('provinsi', $pantiAsuhan->provinsi) == '2' ? 'selected' : '' }}>Provinsi 2</option>
                        <option value="3" {{ old('provinsi', $pantiAsuhan->provinsi) == '3' ? 'selected' : '' }}>Provinsi 3</option>
                      </select>
                        @error('provinsi') 
                          <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                      
                      <div class="col-sm-8">
                          <label class="col-sm-4 col-form-label">Kota/Kabupaten</label>
                          <select name="kota_kabupaten" class="form-select form-control" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Kota/Kabupaten" required>
                            <option selected disabled value="">Kota/Kabupaten</option>
                            <option value="1" {{ old('kota_kabupaten', $pantiAsuhan->kota_kabupaten) == '1' ? 'selected' : '' }}>Bandung</option>
                            <option value="2" {{ old('kota_kabupaten', $pantiAsuhan->kota_kabupaten) == '2' ? 'selected' : '' }}>Kota/Kabupaten 2</option>
                            <option value="3" {{ old('kota_kabupaten', $pantiAsuhan->kota_kabupaten) == '3' ? 'selected' : '' }}>Kota/Kabupaten 3</option>
                          </select>
                          @error('kota_kabupaten') 
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div>
                  
                  <div class="row mb-3">
                    
                      <div class="col-sm-8">
                            <label class="col-sm-4 col-form-label">Kecamatan</label>
                          <select name="kecamatan" class="form-select form-control" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Kecamatan" required>
                            <option selected disabled value="">Pilih Kecamatan</option>
                            <option value="1" {{ old('kecamatan', $pantiAsuhan->kecamatan) == '1' ? 'selected' : '' }}>Batununggal</option>
                            <option value="2" {{ old('kecamatan', $pantiAsuhan->kecamatan) == '2' ? 'selected' : '' }}>Cicendo</option>
                            <option value="3" {{ old('kecamatan', $pantiAsuhan->kecamatan) == '3' ? 'selected' : '' }}>Bandung Kidul</option>
                          </select>
                          @error('kecamatan') 
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div>
                  
                  <div class="row mb-3">
                      
                      <div class="col-sm-8">
                          <label class="col-sm-4 col-form-label">Kelurahan</label>
                          <select name="kelurahan" class="form-select form-control" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Kelurahan" required>
                            <option selected disabled value="">Pilih Kelurahan</option>
                            <option value="1" {{ old('kelurahan', $pantiAsuhan->kelurahan) == '1' ? 'selected' : '' }}>Kacapiring</option>
                            <option value="2" {{ old('kelurahan', $pantiAsuhan->kelurahan) == '2' ? 'selected' : '' }}>Cicadas</option>
                            <option value="3" {{ old('kelurahan', $pantiAsuhan->kelurahan) == '3' ? 'selected' : '' }}>Cikutra</option>
                          </select>
                          @error('kelurahan') 
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div>

                  <div class="row mb-3">
                      
                    <div class="col-sm-8">
                        <label for="no_rekening" class="col-sm-8 col-form-label">No. Rekening a.n Yayasan</label>
                        <input type="number" class="form-control @error('no_rekening') is-invalid @enderror" name="no_rekening" id="no_rekening" value="{{ old('no_rekening', $pantiAsuhan->no_rekening ?? '') }}" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Jumlah Penghuni" required>
                        @error('no_rekening')
                          <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                  <div class="col-md-6 mb-3">
                      <label for="visi" class="form-label">Visi</label>
                      <textarea class="form-control @error('visi') is-invalid @enderror" id="textarea" name="visi" rows="4" style="width: 600px; border: 1px solid black;"placeholder="Masukkan Visi">{{ old('visi', $pantiAsuhan->visi ?? '') }}</textarea>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="misi" class="form-label">Misi</label>
                      <textarea class="form-control @error('misi') is-invalid @enderror" id="textarea" name="misi" rows="4" style="width: 600px; border: 1px solid black;"placeholder="Masukkan Misi">{{ old('misi', $pantiAsuhan->misi ?? '') }}</textarea>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="sejarah" class="form-label">Sejarah</label>
                      <textarea class="form-control @error('sejarah') is-invalid @enderror" id="textarea" name="sejarah" rows="4" style="width: 600px; border: 1px solid black;"placeholder="Masukkan sejarah">{{ old('sejarah', $pantiAsuhan->sejarah ?? '') }}</textarea>
                  </div>

                  {{-- <div class="row mb-3">
                     
                      <div class="col-sm-8">
                           <label for="foto_kegiatan_panti_asuhan" class="col-sm-4 col-form-label">Foto Kegiatan</label>
                          <input class="form-control @error('foto_kegiatan_panti_asuhan') is-invalid @enderror" type="file" name="foto_kegiatan_panti_asuhan" id="foto_kegiatan_panti_asuhan" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Kegiatan Panti" required>
                          @error('foto_kegiatan_panti_asuhan')
                              <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div> --}}
                </div>
      
              <!-- Kolom Kanan -->
              <div class="col-md-6">
                  <div class="row mb-3">
                      
                      <div class="col-sm-8">
                      <label for="no_handphone" class="col-sm-4 col-form-label">No Handphone</label>
                          <input type="number" class="form-control @error('no_handphone') is-invalid @enderror" name="no_handphone" id="no_handphone" value="{{ old('no_handphone', $pantiAsuhan->no_handphone ?? '') }}" style="width: 580px; border: 1px solid black;" placeholder="Masukkan No Handphone" required>
                          @error('no_handphone')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div>
                  <div class="row mb-3">
                     
                      <div class="col-sm-8">
                       <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                          <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" value="{{ old('tanggal', $pantiAsuhan->tanggal ?? '') }}" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Tanggal" required>
                          @error('tanggal')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div>
                  <div class="row mb-3">
                     
                      <div class="col-sm-8">
                       <label for="jam_operasi" class="col-sm-4 col-form-label">Jam Operasi</label>
                          <input type="time" class="form-control @error('jam_operasi') is-invalid @enderror" name="jam_operasi" id="jam_operasi" value="{{ old('jam_operasi', $pantiAsuhan->jam_operasi ?? '') }}" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Jam Operasi" required>
                          @error('jam_operasi')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div>

                  <div class="row mb-3">
                    
                    <div class="col-sm-8">
                      <label for="textarea" class="col-sm-4 col-form-label">Alamat</label>
                      <textarea class="form-control @error('alamat') is-invalid @enderror" id="textarea" name="alamat" style="height: 131px; width: 580px; border: 1px solid black;" placeholder="Masukkan Alamat Panti">{{ old('alamat', $pantiAsuhan->alamat ?? '') }}</textarea>
                        @error('alamat')
                          <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    
                      <div class="col-sm-8">
                            <label for="inputNumber" class="col-sm-4 col-form-label">Kode Pos</label>
                          <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" id="inputNumber" name="kode_pos" value="{{ old('kode_pos', $pantiAsuhan->kode_pos ?? '') }}" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Kode Pos" required>
                          @error('kode_pos')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror
                      </div>
                  </div>

                  <div class="row mb-3">
                      
                      <div class="col-sm-8">
                          <label for="inputText" class="col-sm-4 col-form-label">Link Google Map</label>
                          <input type="text" class="form-control @error('link_google_map') is-invalid @enderror" id="inputText" name="link_google_map" value="{{ old('link_google_map', $pantiAsuhan->link_google_map ?? '') }}" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Link Google" required>
                          @error('link_google_map')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror  
                      </div>
                  </div>

                  <div class="row mb-3">
                     
                      <div class="col-sm-8">
                           <label for="inputText" class="col-sm-4 col-form-label">Koordinat</label>
                          <input type="text" class="form-control @error('koordinat') is-invalid @enderror" id="inputText" name="koordinat" value="{{ old('koordinat', $pantiAsuhan->koordinat ?? '') }}" style="width: 580px; border: 1px solid black;" placeholder="Masukkan Koordinat" required>
                          @error('koordinat')
                            <small class="text-danger">{{ $message }}</small>
                          @enderror 
                      </div>
                  </div>

                  <div class="row mb-3">
                      
                    <div class="col-sm-8">
                        <label class="col-sm-4 col-form-label">Nama Bank</label>
                        <select name="nama_bank" class="form-select form-control" style="width: 580px; border: 1px solid black;" placeholder="Masukkan nama_bank" required>
                          <option selected disabled value="">Pilih Bank</option>
                          <option value="1" {{ old('nama_bank', $pantiAsuhan->nama_bank) == '1' ? 'selected' : '' }}>Mandiri</option>
                          <option value="2" {{ old('nama_bank', $pantiAsuhan->nama_bank) == '2' ? 'selected' : '' }}>BCA</option>
                          <option value="3" {{ old('nama_bank', $pantiAsuhan->nama_bank) == '3' ? 'selected' : '' }}>BJB</option>
                          <option value="4" {{ old('nama_bank', $pantiAsuhan->nama_bank) == '3' ? 'selected' : '' }}>BRI</option>
                          <option value="5" {{ old('nama_bank', $pantiAsuhan->nama_bank) == '3' ? 'selected' : '' }}>BNI</option>
                        </select>
                        @error('nama_bank') 
                          <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                  <div class="row mb-3">
                    <div class="col-sm-11">
                        <label for="foto_panti_asuhan" class="col-sm-8 col-form-label">Foto Panti Asuhan</label>
                        
                        <div class="input-group">
                            <input type="text" 
                                   class="form-control" style="border: 1px solid black;" 
                                   id="nama_foto_panti_asuhan" 
                                   value="{{ !empty($pantiAsuhan->foto_panti_asuhan) ? basename($pantiAsuhan->foto_panti_asuhan) : 'Belum ada foto' }}" 
                                   readonly>
                            <input type="file" 
                                   class="form-control @error('foto_panti_asuhan') is-invalid @enderror" 
                                   name="foto_panti_asuhan" 
                                   id="foto_panti_asuhan" 
                                   style="display: none;">
                            <label class="btn btn-primary" for="foto_panti_asuhan">Pilih File</label>
                        </div>
                
                        @error('foto_panti_asuhan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-11">
                      <label for="dokumen_akte_pendirian" class="col-sm-8 col-form-label">Dokumen Akta Pendirian</label>
                      
                      <div class="input-group">
                          <input type="text" 
                                 class="form-control" style="border: 1px solid black;" 
                                 id="nama_dokumen_akpe" 
                                 value="{{ !empty($pantiAsuhan->dokumen_akte_pendirian) ? basename($pantiAsuhan->dokumen_akte_pendirian) : 'Belum ada dokumen' }}" 
                                 readonly>
                          <input type="file" 
                                 class="form-control @error('dokumen_akte_pendirian') is-invalid @enderror" 
                                 name="dokumen_akte_pendirian" 
                                 id="dokumen_akte_pendirian" 
                                 style="display: none;">
                          <label class="btn btn-primary" for="dokumen_akte_pendirian">Pilih File</label>
                      </div>
              
                      @error('dokumen_akte_pendirian')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
              </div>
                <div class="row mb-3">
                  <div class="col-sm-11">
                      <label for="sk_pengesahan" class="col-sm-8 col-form-label">SK Pengesahan Badan Hukum Yayasan</label>
                      
                      <div class="input-group">
                          <input type="text" 
                                 class="form-control" style="border: 1px solid black;" 
                                 id="nama_sk_pengesahan" 
                                 value="{{ !empty($pantiAsuhan->sk_pengesahan) ? basename($pantiAsuhan->sk_pengesahan) : 'Belum ada foto' }}" 
                                 readonly>
                          <input type="file" 
                                 class="form-control @error('sk_pengesahan') is-invalid @enderror" 
                                 name="sk_pengesahan" 
                                 id="sk_pengesahan" 
                                 style="display: none;">
                          <label class="btn btn-primary" for="sk_pengesahan">Pilih File</label>
                      </div>
              
                      @error('sk_pengesahan')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
              </div>
                <div class="row mb-3">
                  <div class="col-sm-11">
                      <label for="dokumen_sosial" class="col-sm-8 col-form-label">Dokumen Lembaga Kesejahteraan Sosial</label>
                      
                      <div class="input-group">
                          <input type="text" 
                                 class="form-control" style="border: 1px solid black;" 
                                 id="nama_dokumen_sosial" 
                                 value="{{ !empty($pantiAsuhan->dokumen_sosial) ? basename($pantiAsuhan->dokumen_sosial) : 'Belum ada dokumen' }}" 
                                 readonly>
                          <input type="file" 
                                 class="form-control @error('dokumen_sosial') is-invalid @enderror" 
                                 name="dokumen_sosial" 
                                 id="dokumen_sosial" 
                                 style="display: none;">
                          <label class="btn btn-primary" for="dokumen_sosial">Pilih File</label>
                      </div>
              
                      @error('dokumen_sosial')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror
                  </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-11">
                    <label for="foto_kegiatan_panti_asuhan" class="col-sm-8 col-form-label">Foto Kegiatan Panti Asuhan</label>
                    
                    <div class="input-group">
                        <input type="text" 
                               class="form-control" style="border: 1px solid black;" 
                               id="nama_foto_kegiatan_panti_asuhan" 
                               value="{{ !empty($pantiAsuhan->foto_kegiatan_panti_asuhan) ? basename($pantiAsuhan->foto_kegiatan_panti_asuhan) : 'Belum ada dokumen' }}" 
                               readonly>
                        <input type="file" 
                               class="form-control @error('foto_kegiatan_panti_asuhan') is-invalid @enderror" 
                               name="foto_kegiatan_panti_asuhan" 
                               id="foto_kegiatan_panti_asuhan" 
                               style="display: none;">
                        <label class="btn btn-primary" for="foto_kegiatan_panti_asuhan">Pilih File</label>
                    </div>
            
                    @error('foto_kegiatan_panti_asuhan')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
                    
      
                  
      
                  <!-- Submit Button -->
                
                     
               
              </div>

              

              {{-- <div class="mb-3">
                <label for="sejarah" class="form-label">Sejarah</label>
                <textarea class="form-control @error('sejarah') is-invalid @enderror" id="textarea" name="sejarah" rows="4" style="width: 1230px; border: 1px solid black;"placeholder="Masukkan Sejarah">{{ old('sejarah', $pantiAsuhan->sejarah ?? '') }}</textarea>
            </div> --}}
     
               <div class="d-flex justify-content-center mt-3">
                          <button type="submit" class="btn btn-success" style="width: 250px"><b>Update Data Panti Asuhan</b></button>
                      </div>
          </div>
      </form>

        {{-- <form>
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Nama Panti Asuhan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Nama Yayasan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-4 col-form-label">Jumlah Penghuni</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="inputNumber">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Provinsi</label>
                        <div class="col-sm-8">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Pilih Provinsi</option>
                                <option value="1">Provinsi 1</option>
                                <option value="2">Provinsi 2</option>
                                <option value="3">Provinsi 3</option>
                            </select>
                            @error('provinsi') 
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Kota/Kabupaten</label>
                        <div class="col-sm-8">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Pilih Kota/Kabupaten</option>
                                <option value="1">Kota 1</option>
                                <option value="2">Kota 2</option>
                                <option value="3">Kota 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Kecamatan</label>
                        <div class="col-sm-8">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Pilih Kecamatan</option>
                                <option value="1">Kecamatan 1</option>
                                <option value="2">Kecamatan 2</option>
                                <option value="3">Kecamatan 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Kelurahan</label>
                        <div class="col-sm-8">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Pilih Kelurahan</option>
                                <option value="1">Kelurahan 1</option>
                                <option value="2">Kelurahan 2</option>
                                <option value="3">Kelurahan 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="formFile" class="col-sm-4 col-form-label">File Upload Foto</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
    
                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-4 col-form-label">No Handphone</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="inputNumber">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-4 col-form-label">Tanggal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="inputDate">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTime" class="col-sm-4 col-form-label">Jam Operasi</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control" id="inputTime">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="textarea" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="textarea" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-4 col-form-label">Kode Pos</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="inputNumber">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Link Google Map</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Koordinat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputText">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="formFile" class="col-sm-4 col-form-label"> Upload Kegiatan Panti Asuhan</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
            </div>
        </form> --}}

        
    </div>

    <section class="section dashboard">
     

        


        <!-- Left side columns -->
        <div class="col-lg-5 mt-1">
      


        </div><!-- End Left side columns -->
       
        
          
    
        <!-- Right side columns -->
       
                <div class="d-flex justify-content-end">
                    <div class="">
                      {{-- <button 
                      type="button" 
                      class="btn btn-custom" 
                      data-bs-toggle="modal" 
                      data-bs-target="#updateDataModal">
                      Edit
                  </button> --}}
                  
                  <style>
                      /* Styling untuk tombol dengan warna #f18c8e */
                      .btn-custom {
                          background-color:  #27A4DD; /* Warna latar */
                          color: white; /* Warna teks */
                          border: none; /* Hilangkan border */
                          border-radius: 5px; /* Sudut melengkung */
                          font-size: 1rem; /* Ukuran font */
                          font-weight: bold; /* Teks tebal */
                          padding: 0.5rem 1rem; /* Spasi dalam */
                          transition: background-color 0.3s ease; /* Efek transisi */
                      }
                  
                      /* Efek hover */
                      .btn-custom:hover {
                          background-color: #007bff; /* Warna latar lebih gelap saat hover */
                      }
                  </style>
                  
                    </div>
                </div>
       
                <!-- Button to trigger modal -->

<!-- Modal -->
<div class="modal fade" id="updateDataModal" tabindex="-1" aria-labelledby="updateDataModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateDataModalLabel"><b>Update Data Panti Asuhan</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
             <div class="container">
              <div class="d-flex justify-content-center mb-2">
                <h2><b>Panti Asuhan xxxxx</b></h2>
               </div>
                 <div class="d-flex justify-content-center mb-5">
                  <img src="{{asset('assets/img/f4.png')}}" alt="" width="30%" style="border-radius: 40px;">
                   &nbsp; <i class="bi bi-pencil"></i>
                 </div>
        <form>
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Nama Panti Asuhan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Nama Yayasan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-4 col-form-label">Jumlah Penghuni</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="inputNumber">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Provinsi</label>
                        <div class="col-sm-8">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Pilih Provinsi</option>
                                <option value="1">Provinsi 1</option>
                                <option value="2">Provinsi 2</option>
                                <option value="3">Provinsi 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Kota/Kabupaten</label>
                        <div class="col-sm-8">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Pilih Kota/Kabupaten</option>
                                <option value="1">Kota 1</option>
                                <option value="2">Kota 2</option>
                                <option value="3">Kota 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Kecamatan</label>
                        <div class="col-sm-8">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Pilih Kecamatan</option>
                                <option value="1">Kecamatan 1</option>
                                <option value="2">Kecamatan 2</option>
                                <option value="3">Kecamatan 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Kelurahan</label>
                        <div class="col-sm-8">
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Pilih Kelurahan</option>
                                <option value="1">Kelurahan 1</option>
                                <option value="2">Kelurahan 2</option>
                                <option value="3">Kelurahan 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="formFile" class="col-sm-4 col-form-label">File Upload Foto</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
    
                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-4 col-form-label">No Handphone</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="inputNumber">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-4 col-form-label">Tanggal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="inputDate">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTime" class="col-sm-4 col-form-label">Jam Operasi</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control" id="inputTime">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="textarea" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="textarea" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-4 col-form-label">Kode Pos</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="inputNumber">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Link Google Map</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputText">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label">Koordinat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="inputText">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="formFile" class="col-sm-4 col-form-label"> Upload Kegiatan Panti Asuhan</label>
                        <div class="col-sm-8">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        
    </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" style="background-color:#27A4DD; border-color:#27A4DD; color: white; width: 100px;" data-bs-toggle="modal" data-bs-target="#verticalycentered1">Simpan</button>
              <button type="button" class="btn btn-secondary" style="background-color: #fa0000; border-color:#fa0000; color: white; width: 100px;"  data-bs-dismiss="modal">Cancel</button>
            </div>

          
      </div>
  </div>
</div>

  
            
                <div class="modal fade" id="verticalycentered" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title"><b>Validasi Dokumentasi</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body" style="border-radius: 8px; padding: 30px 0;">
                          <center>
                              <h6>Apakah Anda akan Menyimpan</h6> 
                                  <h6>data panti asuhan</h6>
                                
                          </center>
                                  
                        
                        
                      </div>
                      <div class="modal-footer d-flex justify-content-center gap-2">
                        <button type="button" class="btn btn-primary" 
                                style="background-color: #27A4DD; border-color: #27A4DD; color: white; width: 100px;" 
                                onclick="window.location.href='{{('tambah') }}'">Ya</button>
                    
                        <button type="button" class="btn btn-danger" 
                                style="background-color: #D21D60; border-color: #D21D60; color: white; width: 100px;" 
                                onclick="window.location.href='{{('') }}'" data-bs-dismiss="modal">Tidak</button>
                    </div>
                    
                    
                    </div>
                  </div>
                </div><!-- End Vertically centered Modal-->
    
    


       

    </section>
 
  </nav>
  
  <!-- End Disabled and active states -->

        <!-- Disabled and active states -->

 
  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <script>
    document.getElementById('foto_panti_asuhan').addEventListener('change', function() {
        let fileName = this.files[0] ? this.files[0].name : 'Belum ada foto';
        document.getElementById('nama_foto_panti_asuhan').value = fileName;
    });
  </script>

  <script>
    document.getElementById('foto_kegiatan_panti_asuhan').addEventListener('change', function() {
        var fileName = this.files[0] ? this.files[0].name : 'Belum ada foto';
        document.getElementById('nama_foto_kegiatan_panti_asuhan').value = fileName;
    });
  </script>

  <script>
    document.getElementById('dokumen_akte_pendirian').addEventListener('change', function() {
        let fileName = this.files[0] ? this.files[0].name : 'Belum ada dokumen';
        document.getElementById('nama_dokumen_akpe').value = fileName;
    });
  </script>

  <script>
    document.getElementById('sk_pengesahan').addEventListener('change', function() {
        var fileName = this.files[0] ? this.files[0].name : 'Belum ada dokumen';
        document.getElementById('nama_sk_pengesahan').value = fileName;
    });
  </script>

  <script>
    document.getElementById('dokumen_sosial').addEventListener('change', function() {
        let fileName = this.files[0] ? this.files[0].name : 'Belum ada dokumen';
        document.getElementById('nama_dokumen_sosial').value = fileName;
    });
  </script>

  <script>
    document.getElementById('foto_kegiatan_panti_asuhan').addEventListener('change', function() {
        var fileName = this.files[0] ? this.files[0].name : 'Belum ada dokumen';
        document.getElementById('nama_foto_kegiatan_panti_asuhan').value = fileName;
    });
  </script>

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