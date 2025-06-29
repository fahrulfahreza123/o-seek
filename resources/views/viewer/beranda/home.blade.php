@extends('viewer.layouts.master')

@section('css')
    <style>
        .glass-overlay {
        background-color: rgba( 0, 0, 0, 0.4);
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

    <div class="position-relative">
        <div class="row">
            <h2 class="col-sm-5 ms-sm-5 text-uppercase text-white position-absolute top-50 start-0 translate-middle-y text-center" style="z-index: 10">
                Temukan panti asuhan di daerah Bandung Raya
            </h2>
            <div class="card col-sm-4 me-sm-5 text-center position-absolute top-50 end-0 translate-middle-y" style="border-radius: 1rem; z-index: 10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="card-title fw-bold d-flex justify-content-center">Daftarkan Lokasi Panti Asuhanmu Di Website O-SEEK! Sebagai Operator</h3>
                            <div class="d-flex align-items-center flex-row justify-content-center">
                                <button type="button" class="login-button py-sm-2 px-sm-5 rounded-3 fw-bold text-uppercase">Sign Up</button>
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
                @foreach($programDonasi as $index => $image)
                    <div class="carousel-item c-item">
                        <img src="{{ asset('photo/' . $image['foto']) }}" class="c-img d-block w-100 mb-5" alt="{{ $image['nama_panti_asuhan'] }}">
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

    @if(session()->has('error'))
        <div class="alert alert-danger mb-sm-5" role="alert">
            {{ session()->get('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success mb-sm-5">
            {{ session('success') }}
        </div>
    @endif

    <section class="bg-light">
        <div class="container-fluid">
            <div class="row d-flex justify-content-start" style="margin-top: -50px">
                <div class="col-md-4 px-4">
                    <div class="card text-center mb-sm-5" style="border-radius: 1rem; height: 100%;">
                        <img src="{{ asset('assets2/images/anak2.jpg') }}" alt="Dummy Panti Asuhan" style="object-fit: cover; height: 300px; border-radius: 1rem;" class="card-img-top img-fluid p-3">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h3 class="card-title">Panti Asuhan Bandung</h3>
                            <p class="card-text text-uncrate" style="min-height: 60px;">Jalan Pahlawan</p>
                            <a href="panti_asuhan_all" class="panti-button rounded-3 border border-dark border-2 fw-bold">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @foreach ($programDonasi as $panti)
                    <div class="col-md-4 px-4">
                        <div class="card text-center mb-sm-5" style="border-radius: 1rem; height: 100%;">
                        @if($panti['foto_panti_asuhan'])
                            <img src="{{ asset('photo/' . $panti['foto_panti_asuhan']) }}" alt="{{ $panti['nama_panti_asuhan'] }}" style="object-fit: cover; height: 300px; border-radius: 1rem;" class="card-img-top img-fluid p-3">
                        @else
                            <span>No Image</span>
                        @endif
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h3 class="card-title">{{ $panti['nama_panti_asuhan'] }}</h3>
                                <p class="card-text text-uncrate" style="min-height: 60px;">{{ $panti['alamat_panti_asuhan'] }}</p>
                                <a href="panti_asuhan_all/{{ $panti['panti_asuhan_operators_id'] }}" class="panti-button rounded-3 border border-dark border-2 fw-bold">Lihat Selengkapnya</a>
                            </div>      
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <div class="mt-sm-4 mb-sm-5">
                    <a href="/panti_asuhan_all">
                        <button type="button" class="btn btn-cloud border border-2 border-dark py-2 px-5 rounded-3 fw-bold text-uppercase">Selengkapnya</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="d-flex justify-content-center">
                <div class="col-md-6 mt-sm-5">
                    <div class="text-center">
                        <h2 class="text-uppercase fw-bold">Program Donasi</h2>
                        <h3 class="fw-normal fs-4">Yang Dapat Anda Salurkan Melalui Kami</h3>
                    </div>
                </div>
            </div>


            {{-- @foreach ($programDonasi as $program)
                <div class="card">
                    <img src="{{ asset('storage/' . $program->pantiAsuhan->foto) }}" class="card-img-top" alt="Foto Panti Asuhan">
                    <div class="card-body">
                        <h5 class="card-title">{{ $program->nama_program }}</h5>
                        <p class="card-text">Panti Asuhan: {{ $program->pantiAsuhan->nama_panti }}</p>
                        <p class="card-text">Batas Waktu: {{ $program->batas_waktu }}</p>
                        <p class="card-text">Dana Terkumpul: Rp {{ number_format($program->dana_terkumpul, 0, ',', '.') }}</p>
                        <p class="card-text">Target Donasi: Rp {{ number_format($program->target_donasi, 0, ',', '.') }}</p>
                        
                        <!-- Progress Bar -->
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{ $program->persentase }}%" aria-valuenow="{{ $program->persentase }}" aria-valuemin="0" aria-valuemax="100">
                                {{ round($program->persentase) }}%
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach --}}


            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-md-6 px-5">
                        <div class="card text-center mt-sm-4 mb-sm-5 border border-dark" style="border-radius: 1rem">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="card-title text-uppercase fw-bold d-flex justify-content-center" style="color: #02073E">Berinfaq</h3>
                                        <p class="card-text" style="text-align: justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo dolor fuga aperiam ipsam maiores praesentium ratione.</p>
                                        <div class="d-flex align-items-center flex-row justify-content-start">
                                            <button type="button" class="btn btn-yellow rounded-circle">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </button>
                                            <a class="text-decoration-none ms-sm-2" style="color: black" href="#">Donasi Sekarang</a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets2/images/berdonasi.png') }}" class="card-img-top w-50" alt="Berdonasi">
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-md-6 px-5">
                        <div class="card text-center mt-sm-4 mb-sm-5 border border-dark" style="border-radius: 1rem">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="card-title text-uppercase fw-bold d-flex justify-content-center" style="color: #02073E">Bersedekah</h3>
                                        <p class="card-text" style="text-align: justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo dolor fuga aperiam ipsam maiores praesentium ratione.</p>
                                        <div class="d-flex align-items-center flex-row justify-content-start">
                                            <button type="button" class="btn btn-yellow rounded-circle">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </button>
                                            <a class="text-decoration-none ms-sm-2" style="color: black" href="#">Donasi Sekarang</a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets2/images/berdonasi.png') }}" class="card-img-top w-50" alt="Berdonasi">
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container-fluid">
            <div class="d-flex justify-content-center">
                <div class="col-md-6 mt-sm-5">
                    <div class="text-center">
                        <h2 class="text-uppercase fw-bold">Yuk Berdonasi Untuk Hari Ini</h2>
                        <h3 class="fw-normal fs-4">Untuk Panti Asuhan Kesayangan Kamu</h3>
                        <a href="#">
                            <button type="button" class="btn btn-blue py-2 px-4 rounded-3 text-uppercase">Yuk, Berdonasi</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Dummy Card -->
                <div class="col-md-4 px-4">
                    <div class="card text-center my-sm-5">
                        <div class="border-top-0 border border-dark" style="border-radius: 1rem">
                            <img src="{{ asset('assets2/images/anak2.jpg') }}" class="card-img-top img-fluid p-3" style="object-fit: cover; height: 300px; border-radius: 1rem;" alt="Dummy Program">
                            <div class="card-body">
                                <div class="row">
                                    <div class="d-flex align-items-center flex-row justify-content-start">
                                        <span class="badge bg-cloud rounded-circle p-sm-2">
                                            <i class="fa fa-map-marker fa-2x" style="color: #000" aria-hidden="true"></i>
                                        </span>
                                        <h5 class="card-title ms-sm-2 mt-sm-1">Panti Asuhan Bandung</h5>
                                    </div>
                                </div>
                                <h5 class="fw-bold mb-0">Sedekah</h5>
                                <div class="row mt-sm-1">
                                    <div class="d-flex align-items-center flex-row justify-content-center">
                                        <span style="font-size: 12px">Sampai dengan</span>
                                        <p class="card-text ms-sm-1 fw-bold" style="font-size: 12px">
                                            31 Desember 2025
                                        </p>
                                    </div>
                                </div>
                                <hr class="mt-sm-2 mb-0">
                                <p class="mt-sm-2 mb-0 d-flex justify-content-end" style="font-size: 13px"><span>Dana Terkumpul</span></p>
                                <p class="mb-0 d-flex justify-content-end fw-bold" style="color: #297ABE">Rp. 0</p>
                                <div class="progress mt-sm-1 rounded-pill border border-dark bg-white" style="height: 25px">
                                    <div class="progress-bar fw-bold bg-cloud rounded-pill text-dark" style="width: 0%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                </div>
                                <p class="mt-sm-2 mb-0 d-flex justify-content-end">
                                    <span style="font-size: 13px">Rp. 1.000.000</span>
                                </p>
                                <div class="d-grid gap-2 mt-sm-3">
                                    <a href="#" class="btn btn-blue rounded-3">Donasi Sekarang</a>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                @foreach ($programDonasi as $program)
                    <div class="col-md-4 px-4">
                        <div class="card text-center my-sm-5">
                            <div class="border-top-0 border border-dark" style="border-radius: 1rem">
                                <img src="{{ asset('photo/' . $program['foto']) }}" class="card-img-top img-fluid p-3" style="object-fit: cover; height: 300px; border-radius: 1rem;" alt="{{ $program['nama_panti_asuhan'] }}">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="d-flex align-items-center flex-row justify-content-start">
                                            <span class="badge bg-cloud rounded-circle p-sm-2">
                                                <i class="fa fa-map-marker fa-2x" style="color: #000" aria-hidden="true"></i>
                                            </span>
                                            <h5 class="card-title ms-sm-2 mt-sm-1">{{ $program['nama_panti_asuhan'] }}</h5>
                                        </div>
                                    </div>
                                    <h5 class="fw-bold mb-0">{{ $program['nama_program_donasi'] }}</h5>
                                    <div class="row mt-sm-1">
                                        <div class="d-flex align-items-center flex-row justify-content-center">
                                            <span style="font-size: 12px">Sampai dengan</span>
                                            <p class="card-text ms-sm-1 fw-bold" style="font-size: 12px">
                                                {{ $program['batas_waktu'] }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr class="mt-sm-2 mb-0">
                                    <p class="mt-sm-2 mb-0 d-flex justify-content-end" style="font-size: 13px"><span>Dana Terkumpul</span></p>
                                    <p class="mb-0 d-flex justify-content-end fw-bold" style="color: #297ABE">Rp. {{ number_format($program['dana_terkumpul'], 0, ',', '.') }}</p>
                                    <div class="progress mt-sm-1 rounded-pill border border-dark bg-white" style="height: 25px">
                                        <div class="progress-bar fw-bold bg-cloud rounded-pill text-dark" style="width: {{ $program['persentase'] }}" role="progressbar" aria-valuenow="{{ $program['persentase'] }}" aria-valuemin="0" aria-valuemax="100">{{ $program['persentase'] }}</div>
                                    </div>
                                    <p class="mt-sm-2 mb-0 d-flex justify-content-end">
                                        <span style="font-size: 13px">Rp. {{ number_format($program['target_donasi'], 0, ',', '.') }}</span>
                                    </p>
                                    <div class="d-grid gap-2 mt-sm-3">
                                        <a href="#" class="btn btn-blue rounded-3">Donasi Sekarang</a>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('viewer.partials.footer')
@endsection