@extends('viewer.layouts.master')

@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-5 mt-sm-5 mx-auto">
                    <div class="text-center">
                        <h2 class="text-uppercase fw-bold">Temukan Panti Asuhan di Daerah Bandung Raya</h2>
                    </div>
                </div>
                <div class="col-md-5 mt-sm-5 mx-auto">
                    <form action="/panti_asuhan_all">
                        <div class="input-group mb-3">
                            {{-- <button class="btn btn-outline-secondary" type="submit">
                                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                            </button> --}}
                            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                            <button class="btn btn-pink" type="submit">
                                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($panti_asuhan_operator->count())
        <div class="container-fluid">
            <div class="row d-flex justify-content-start mt-sm-5">
                @foreach ($panti_asuhan_operator as $panti)
                    <div class="col-md-4 px-4">
                        <div class="card text-center mb-sm-5" style="border-radius: 1rem; height: 100%;">
                            @if($panti['foto_panti_asuhan'])
                                <img src="{{ asset('photo/' . $panti['foto_panti_asuhan']) }}" alt="{{ $panti['nama_panti_asuhan'] }}" 
                                style="object-fit: cover; height: 300px; border-radius: 1rem;" class="card-img-top img-fluid p-3">
                            @else
                                <span>No Image</span>
                            @endif
                            {{-- <img src="{{ asset('photo/' . $panti['foto_panti_asuhan']) }}" class="card-img-top img-fluid p-3" style="object-fit: cover; height: 300px; border-radius: 1rem;" alt="{{ $panti->nama_panti_asuhan }}"> --}}
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h3 class="card-title">{{ $panti->nama_panti_asuhan }}</h3>
                                <p class="card-text text-uncrate" style="min-height: 60px;">{{ $panti->alamat }}</p>
                                <a href="panti_asuhan_all/{{ $panti->id }}" class="panti-button rounded-3 border border-dark border-2 fw-bold">
                                    Lihat Selengkapnya</a>
                            </div>      
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
    <div class="my-sm-5">
        <p class="text-center fs-4">Panti Asuhan Tidak Ditemukan</p>
    </div>
    @endif
    
    <div class="d-flex justify-content-center mb-sm-5">
        {{ $panti_asuhan_operator->links() }}
    </div>

    @include('viewer.partials.footer')
@endsection