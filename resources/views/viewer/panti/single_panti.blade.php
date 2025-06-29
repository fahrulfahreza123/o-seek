@extends('viewer.layouts.master')

@section('css')
    <style>
        .bg-button-carousel {
            background-color: #C5E1F6;
        }

        .button-carousel {
            background-color: transparent;
            border: none;
            color: #000 ;
            /* Warna teks */
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            /* Membuat rounded-pill */
            transition: all 0.3s ease;
            /* Animasi halus */
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
        }

        .button-carousel:hover {
            background-color: rgba(48, 95, 114, 0.4);
            /* Warna latar saat hover */
            color: #fff;
            /* Ubah warna teks */
        }

        .button-carousel.active {
            background-color: #305F72;
            /* Warna aktif */
            color: #fff;
            /* Warna teks aktif */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Tambahkan bayangan */
        }

        .button-carousel:focus {
            outline: none;
            box-shadow: 0 0 8px rgba(48, 95, 114, 0.8);
            /* Indikator fokus */
        }
    </style>
@endsection

@section('main')
    <div class="container-fluid p-0 m-0">
        <h2 class="col-sm-5 text-uppercase text-white fw-bold position-absolute top-50 start-50 translate-middle text-center"
            style="z-index: 10; margin-top: -100px">
            {{ $panti_asuhan_operator->nama_panti_asuhan }}
        </h2>
        {{-- <img src="{{ asset('assets2/images/anak3.jpg') }}" class="c-img d-block w-100" style="height: 420px; margin-top:-100px; border-bottom: 1rem" alt="O-Seek"> --}}
        <div class="c-item" style="height: 360px">
            @if($panti_asuhan_operator->foto_panti_asuhan)
                <img src="{{ asset('photo/' . $panti_asuhan_operator->foto_panti_asuhan) }}" alt="{{ $panti_asuhan_operator->nama_panti_asuhan }}" style="height: 420px; margin-top:-100px;" class="c-img d-block w-100">
            @else
                <span>No Image</span>
            @endif
            {{-- <img src="{{ asset('photo/' . $panti_asuhan_operator->foto_panti_asuhan) }}" class="c-img d-block w-100"
                style="height: 420px; margin-top:-100px;" alt="{{ $panti_asuhan_operator->nama_panti_asuhan }}"> --}}
            <div class="glass-overlay" style="height: 420px;"></div>
        </div>
    </div>

    <div id="carouselExampleControlsNoTouching" class="carousel carousel-dark slide" data-bs-touch="false"
        data-bs-interval="false">
        <div class="d-flex justify-content-center mb-0 mt-sm-4">
            <div class="d-flex justify-content-center rounded-3 bg-button-carousel col-sm-6 py-3"
                style="z-index: 1000">
                <button type="button" class="button-carousel rounded-3 mx-2 px-5 text-uppercase active"
                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="0" aria-current="true"
                    aria-label="Slide 1">Ringkasan</button>
                <button type="button" class="button-carousel rounded-3 mx-2 px-5 text-uppercase"
                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="1" aria-current="true"
                    aria-label="Slide 2">Kisah</button>
                <button type="button" class="button-carousel rounded-3 mx-2 px-5 text-uppercase"
                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide-to="2" aria-current="true"
                    aria-label="Slide 3">Foto Kegiatan</button>
            </div>
        </div>
        <div class="carousel-inner my-5">
            <div class="col-sm-9 mx-auto">
                <div class="carousel-item active border border-dark border-2 bg-white" style="border-radius: 1rem;">
                    <div class="col-sm-11 mx-auto">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center flex-row justify-content-start mt-sm-3 mb-sm-5">
                                            <span
                                                class="badge bg-secondary d-flex align-items-center justify-content-center"
                                                style="border-radius: 1rem; width: 60px; height: 60px;">
                                                <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                                            </span>
                                            <p class="card-text ms-sm-3" style="text-align: justify">
                                                {{ $panti_asuhan_operator->alamat }}</p>
                                        </div>
                                        <div class="d-flex align-items-center flex-row justify-content-start mb-sm-5">
                                            <span
                                                class="badge bg-secondary d-flex align-items-center justify-content-center"
                                                style="border-radius: 1rem; width: 60px; height: 60px;">
                                                <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                                            </span>
                                            <p class="card-text ms-sm-3" style="text-align: justify">
                                                {{ $panti_asuhan_operator->jam_operasi }}</p>
                                        </div>
                                    </div>
                                    <iframe src="{{ htmlspecialchars_decode($panti_asuhan_operator->link_google_map) }}" class="ms-sm-4"
                                        width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="d-flex align-items-center flex-row justify-content-start mb-sm-3">
                                    <span class="badge bg-secondary d-flex align-items-center justify-content-center"
                                        style="border-radius: 1rem; width: 60px; height: 60px;">
                                        <i class="fa fa-phone fa-3x" aria-hidden="true"></i>
                                    </span>
                                    <p class="card-text ms-sm-3" style="text-align: justify">
                                        {{ $panti_asuhan_operator->no_handphone }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item bg-white" style="border-radius: 1rem;">
                    <div class="col-sm-11 mx-auto">
                        <div class="card border-3 mb-sm-5">
                            <div class="card-body ms-sm-3">
                                <div class="d-flex align-items-center">
                                    <div style="width: 10px; height: 75px; background-color: #305F72; margin-right: 10px;"></div>
                                    <div>
                                        <h2 class="fw-bold">Sejarah Panti Asuhan</h2>
                                        <h5>{{ $panti_asuhan_operator->nama_panti_asuhan }}</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-row justify-content-start mt-sm-3 mb-sm-5">
                                    <p class="card-text" style="text-align: justify">{{ $panti_asuhan_operator->sejarah }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 mx-auto">
                        <div class="card border-3 mb-sm-5">
                            <div class="card-body ms-sm-3">
                                <div class="d-flex align-items-center">
                                    <div style="width: 10px; height: 75px; background-color: #305F72; margin-right: 10px;"></div>
                                    <div>
                                        <h2 class="fw-bold">Visi</h2>
                                        <h5>{{ $panti_asuhan_operator->nama_panti_asuhan }}</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-row justify-content-start mt-sm-3 mb-sm-5">
                                    <p class="card-text" style="text-align: justify">{{ $panti_asuhan_operator->visi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-11 mx-auto">
                        <div class="card border-3">
                            <div class="card-body ms-sm-3">
                                <div class="d-flex align-items-center">
                                    <div style="width: 10px; height: 75px; background-color: #305F72; margin-right: 10px;"></div>
                                    <div>
                                        <h2 class="fw-bold">Misi</h2>
                                        <h5>{{ $panti_asuhan_operator->nama_panti_asuhan }}</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center flex-row justify-content-start mt-sm-3 mb-sm-5">
                                    <p class="card-text" style="text-align: justify">{{ $panti_asuhan_operator->misi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item text-center border border-dark border-2 bg-white" style="border-radius: 1rem;">
                    <div class="col-sm-11 mx-auto">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-start mt-sm-3 mb-sm-3">
                                    @if ($panti_asuhan_operator->foto_panti_asuhan)
                                        <img src="{{ asset('photo/' . $panti_asuhan_operator->foto_panti_asuhan) }}"
                                            class="card-img-top w-25" style="border-radius: 1rem"
                                            alt="{{ $panti_asuhan_operator->nama_panti_asuhan }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('[data-bs-slide-to]').forEach(button => {
            button.addEventListener('click', () => {
                // Hapus kelas 'active' dari semua tombol
                document.querySelectorAll('[data-bs-slide-to]').forEach(btn => btn.classList.remove(
                    'active'));

                // Tambahkan kelas 'active' ke tombol yang diklik
                button.classList.add('active');
            });
        });
    </script>
@endsection
