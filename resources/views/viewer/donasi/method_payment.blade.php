@extends('viewer.layouts.master')

@section('css')
<style>
    .dashed-line {
        border-left: 2px dashed #000; 
        height: 180px;
    }
    .method-button {
        background-color: #fff;
        border: 2px solid #000;
        color: #305F72;
        font-size: 14px;
        padding: 8px 30px;
        border-radius: 5px;
        text-decoration: none;
        transition: 0.3s background-color;
        text-transform: uppercase;
        font-weight: 600;
    }
    .method-button:hover {
        /* background-color: white; */
        color: #fff; /* Warna teks pink (sesuai warna btn-pink Bootstrap 5) */
        background-color: #C5E1F6;
        transition: all 0.3s ease; /* Transisi lembut */
    }
</style>
@endsection

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card text-center mt-sm-4" style="border-radius: 1rem">
                        <div class="card-body" style="border-radius: 1rem; background-color: #F2F2F2">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets2/images/anak1.jpg') }}" class="card-img-top w-50 me-5" style="border-radius: 1rem" alt="Berdonasi">
                                <div class="flex-grow-1">
                                    <img src="{{ asset('assets2/images/logo_footer.png') }}" class="card-img-top mb-sm-4" style="width: 200px" alt="Berdonasi">
                                    <p class="card-text text-dark text-center mb-sm-3 fw-bold fs-5 me-5">Terimakasih Sudah Berdonasi Melalui Website Kami</p>
                                    <h2 class="card-text text-dark text-center mb-sm-2 fw-bold me-5">Infaq</h2>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card text-center mt-sm-4" style="background-color: #C5E1F6; border-color:#000 !important; border-radius: 1rem;">
                        <div class="card-body" style="border-radius: 1rem;">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="card-text fw-bold fs-4 mb-0" style="color: #000">Total Donasi</p>
                                    <h1 class="card-text mb-sm-2 fw-bold" style="font-size: 70px; color: #000">
                                        @if(Session::has('donation_data'))
                                            Rp.{{ number_format(Session::get('donation_data')['nomDonasi'], 0, ',', '.') }}
                                        @else
                                            Rp.0
                                        @endif
                                    </h1>
                                </div>
                                <div class="dashed-line" style="color: #000"></div>
                                <div class="flex-grow-1">
                                    <p class="card-text fw-bold fs-4 mb-0 text-center mb-sm-3" style="color: #000">Rincian Donatur</p>
                                    <p class="card-text fs-6 mb-0 fw-bold text-start ms-4" style="color: #000">
                                        @if(Session::has('donation_data'))
                                            {{ Session::get('donation_data')['nama_donatur'] }}
                                        @else
                                            Nama Tidak Tersedia
                                        @endif
                                    </p>
                                    <p class="card-text fs-6 mb-0 fw-bold text-start ms-4" style="color: #000">
                                        @if(Session::has('donation_data'))
                                            {{ Session::get('donation_data')['phoneNumber'] }}
                                        @else
                                            Nomor Tidak Tersedia
                                        @endif
                                    </p>
                                    <p class="card-text fs-6 mb-0 fw-bold text-start ms-4" style="color: #000">
                                        @if(Session::has('donation_data'))
                                            {{ Session::get('donation_data')['email'] }}
                                        @else
                                            Email Tidak Tersedia
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('donasi.storeMethodPayment') }}" method="POST">
        @csrf
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-sm-8">
                        <div class="card mt-sm-3 mb-sm-5" style="border-radius: 1rem">
                            <div class="card-body border border-1 m-0 p-0" style="border-color: #000 !important; border-radius: 1rem">
                                <div class="d-flex justify-content-center m-0 p-0">
                                    <p class="card-text col-sm-8 text-center fw-bold fs-5 text-white py-3 rounded-top text-uppercase" style="background-color: #305F72; border-radius: 1rem">Pilih Metode Pembayaran</p>
                                </div>

                                <!-- Menampilkan pesan error jika ada -->
                                @if ($errors->has('methodPayment'))
                                    <div class="alert alert-danger text-center">
                                        {{ $errors->first('methodPayment') }}
                                    </div>
                                @endif

                                <div class="mt-sm-5">
                                    <h5 class="mb-sm-2 fw-bold ms-sm-4">Pembayaran Cepat</h5>
                                    <h6 class="ms-sm-4 mt-sm-2 fw-bormal text-secondary">Virtual Account (VA)</h6>
                                    <div class="col-sm-12 m-0 p-0">
                                        <div class="row d-flex justify-content-center m-0 p-0 mt-sm-3">
                                            <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                <button type="submit" name="methodPayment" value="BRI" class="method-button d-flex justify-content-center align-items-center m-0 py-sm-3 w-75">
                                                    <img src="{{ asset('assets2/images/bri.png') }}" alt="BRI" class="w-75 me-sm-5" style="object-fit: contain;">
                                                    <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                <button type="submit" name="methodPayment" value="BNI" class="method-button d-flex justify-content-center align-items-center m-0 py-sm-3 w-75">
                                                    <img src="{{ asset('assets2/images/bni.png') }}" alt="BNI" class="w-75 me-sm-5" style="object-fit: contain;">
                                                    <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                <button type="submit" name="methodPayment" value="BCA" class="method-button d-flex justify-content-center align-items-center m-0 py-sm-3 w-75">
                                                    <img src="{{ asset('assets2/images/bca.png') }}" alt="BCA" class="w-75 me-sm-5" style="object-fit: contain;">
                                                    <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                <button type="submit" name="methodPayment" value="BJB" class="method-button d-flex justify-content-center align-items-center m-0 py-0 w-75">
                                                    <img src="{{ asset('assets2/images/bjb.png') }}" alt="BJB" class="w-75 me-sm-5" style="object-fit: contain;">
                                                    <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                <button type="submit" name="methodPayment" value="BSI" class="method-button d-flex justify-content-center align-items-center m-0 py-0 w-75">
                                                    <img src="{{ asset('assets2/images/bsi.png') }}" alt="BSI" class="w-75 me-sm-5" style="object-fit: contain;">
                                                    <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                            <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                <button type="submit" name="methodPayment" value="Mandiri" class="method-button d-flex justify-content-center align-items-center m-0 py-0 w-75">
                                                    <img src="{{ asset('assets2/images/mandiri.png') }}" alt="Mandiri" class="w-75 me-sm-5" style="object-fit: contain;">
                                                    <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <p class="d-grid gap-2 my-3 text-decoration-none">
                                    <button class="btn btn-cloud text-start fw-bold rounded-3 mx-4 d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="collapse-button">
                                        Pembayaran Cepat Lainnya...
                                        <i class="fa fa-chevron-right fa-1x d-flex align-items-center mt-sm-1" aria-hidden="true"></i>
                                    </button>
                                </p>
                                <div class="row">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="collapse-button">
                                            <div class="card card-body rounded-top" style="border-radius: 1rem">
                                                <h5 class="mb-sm-2 fw-bold ms-sm-4">Electronic Wallet</h5>
                                                <h6 class="ms-sm-4 mt-sm-2 fw-bormal text-secondary">Dompet Digital Online</h6>
                                                <div class="col-sm-12 m-0 p-0">
                                                    <div class="row d-flex justify-content-center m-0 p-0 mt-sm-3">
                                                        <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                            <button type="submit" name="methodPayment" value="Gopay" class="method-button d-flex justify-content-center align-items-center m-0 py-sm-3 w-75">
                                                                <img src="{{ asset('assets2/images/gopay.png') }}" alt="Gopay" class="w-75 me-sm-5" style="object-fit: contain;">
                                                                <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                            <button type="submit" name="methodPayment" value="OVO" class="method-button d-flex justify-content-center align-items-center m-0 py-sm-3 w-75">
                                                                <img src="{{ asset('assets2/images/ovo.png') }}" alt="OVO" class="w-25 me-sm-5" style="object-fit: contain;">
                                                                <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                            <button type="submit" name="methodPayment" value="Dana" class="method-button d-flex justify-content-center align-items-center m-0 py-sm-3 w-75">
                                                                <img src="{{ asset('assets2/images/dana.png') }}" alt="Dana" class="w-75 me-sm-5" style="object-fit: contain;">
                                                                <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h5 class="mb-sm-2 mt-sm-3 fw-bold ms-sm-4">Payment Point</h5>
                                                <h6 class="ms-sm-4 mt-sm-2 fw-bormal text-secondary">Convenience Store/Minimarket</h6>
                                                <div class="col-sm-12 m-0 p-0">
                                                    <div class="row d-flex justify-content-center m-0 p-0 mt-sm-3">
                                                        <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                            <button type="submit" name="methodPayment" value="Indomaret" class="method-button d-flex justify-content-center align-items-center m-0 w-75">
                                                                <img src="{{ asset('assets2/images/indomaret.png') }}" alt="Indomaret" class="w-75 me-sm-5" style="object-fit: contain;">
                                                                <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-4 mb-sm-3 m-0 p-0 d-flex justify-content-center">
                                                            <button type="submit" name="methodPayment" value="Alfamart" class="method-button d-flex justify-content-center align-items-center m-0 w-75">
                                                                <img src="{{ asset('assets2/images/alfamart.png') }}" alt="Alfamart" class="w-75 me-sm-5" style="object-fit: contain;">
                                                                <i class="fa fa-chevron-right fa-2x mt-sm-1" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @include('viewer.partials.footer')
@endsection