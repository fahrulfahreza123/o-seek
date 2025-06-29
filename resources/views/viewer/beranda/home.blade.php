@extends('viewer.layouts.master')

@section('css')
    <style>
        .glass-overlay {
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
        }
    </style>
@endsection

@section('main')
    <section>
        <div class="position-relative">
            <div class="row">
                <h2 class="col-sm-5 ms-sm-5 text-uppercase text-white position-absolute top-50 start-0 translate-middle-y text-center"
                    style="z-index: 10">
                    Temukan panti asuhan di daerah Bandung Raya
                </h2>
                <div class="card col-sm-4 me-sm-5 text-center position-absolute top-50 end-0 translate-middle-y"
                    style="border-radius: 1rem; z-index: 10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h3 class="card-title fw-bold d-flex justify-content-center">Daftarkan Lokasi Panti Asuhanmu
                                    Di
                                    Website O-SEEK! Sebagai Operator</h3>
                                <div class="d-flex align-items-center flex-row justify-content-center">
                                    <a href="/RegisterOperator"
                                        class="login-button py-sm-2 px-sm-5 rounded-3 fw-bold text-uppercase">Sign Up</a>
                                    {{-- <button type="button"
                                        class="login-button py-sm-2 px-sm-5 rounded-3 fw-bold text-uppercase">Sign
                                        Up</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item c-item active">
                        <img src="{{ asset('assets2/images/anak2.jpg') }}" class="c-img d-block w-100 mb-5" alt="image">
                        <div class="glass-overlay"></div>
                    </div>
                    @foreach ($pantiAsuhan as $index => $image)
                        <div class="carousel-item c-item">
                            <img src="{{ asset('photo/' . $image['foto_panti_asuhan']) }}" class="c-img d-block w-100 mb-5"
                                alt="{{ $image['nama_panti_asuhan'] }}">
                            <div class="glass-overlay"></div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container mb-5">
            <div class="row d-flex justify-content-start" style="margin-top: -50px">
                @foreach ($pantiAsuhan as $panti)
                    <div class="col-md-4 mb-3 px-4">
                        <div class="card text-center mb-sm-5" style="border-radius: 1rem; height: 100%;">
                            @if ($panti['foto_panti_asuhan'])
                                <img src="{{ asset('photo/' . $panti['foto_panti_asuhan']) }}"
                                    alt="{{ $panti['nama_panti_asuhan'] }}"
                                    style="object-fit: cover; height: 300px; border-radius: 1rem;"
                                    class="card-img-top img-fluid p-3">
                            @else
                                <span>No Image</span>
                            @endif
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h3 class="card-title">{{ $panti['nama_panti_asuhan'] }}</h3>
                                <p class="card-text text-uncrate" style="min-height: 60px;">
                                    {{ $panti['alamat'] }}</p>
                                <a href="panti_asuhan_all/{{ $panti['id'] }}"
                                    class="panti-button rounded-3 border border-dark border-2 fw-bold">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('viewer.partials.footer')
@endsection
