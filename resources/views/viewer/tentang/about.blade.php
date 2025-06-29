@extends('viewer.layouts.master')

@section('main')
    <div class="container-fluid p-0 m-0">
        <div class="c-item">
            <img src="{{ asset('assets2/images/anak3.jpg') }}" class="c-img d-block w-100"
                style="height: 420px; margin-top:-100px; 
            border-bottom: 1rem" alt="O-Seek">
            <div class="glass-overlay" style="height: 420px;"></div>
        </div>
    </div>

    <div class="container-fluid mb-sm-5">
        <div class="d-flex justify-content-center mb-sm-5" style="margin-top: -250px">
            <div class="px-sm-4 py-sm-2"
                style="border-radius: 1rem; z-index: 10; background-color: #C5E1F6; box-shadow: 0px 10px 10px 
            rgba(0, 0, 0, 0.4);">
                <h1 class="text-uppercase fw-bold text-dark">Tentang Kami</h1>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-sm-10">
                    <div class="text-center mt-sm-4 mb-sm-1" style="border-radius: 1rem">
                        <div class="d-flex align-items-center pe-sm-5">
                            <p class="col-sm-6 pe-sm-5" style="text-align: justify">
                                Orphanage Seek adalah aplikasi berbasis website yang berfungsi untuk mempermudah pengguna
                                mencari suatu panti
                                asuhan yang ada di sekitar Bandung Raya. Aplikasi ini juga menyediakan program donasi bagi
                                pengguna yang ingin
                                melakukan sebuah donasi ke suatu panti asuhan. Pemilik panti asuhan juga bisa mendaftarkan
                                panti asuhannya ke
                                aplikasi O-Seek sebagai tempat untuk memberikan informasi dan mempromosikan program donasi
                                yang dibuat oleh
                                panti asuhan ke seluruh masyarakat.</p>
                            <div class="flex-grow-1 col-sm-6 ps-sm-5">
                                <img src="{{ asset('assets2/images/logo_footer.png') }}" class="card-img-top w-25 mb-sm-4"
                                    alt="Berdonasi">
                                <h4 class="text-uppercase fw-bold mb-sm-4 ps-sm-2">Daftarkan Lokasi Panti Asuhanmu di
                                    Website O-Seek! Sebagai
                                    Pengelola Panti</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('viewer.partials.footer')
@endsection
