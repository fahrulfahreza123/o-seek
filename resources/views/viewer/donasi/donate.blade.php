@extends('viewer.layouts.master')

@section('css')
    <style>
        /* Mengubah warna lingkaran radio button */
        .form-check input[type="radio"]:checked + label::before {
            background-color: #305F72; /* Warna biru Bootstrap */
        }
    
        .form-check input[type="radio"] + label::before {
        content: "";
        display: inline-block;
        width: 16px;
        height: 16px;
        border: 2px solid #000;
        background-color: #dfdfdf;
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
                                    <img src="{{ asset('assets2/images/logo_footer.png') }}" class="card-img-top mb-sm-4" style="width: 150px" alt="Berdonasi">
                                    <p class="card-text text-dark text-center mb-sm-3 fw-bold fs-5 me-5">Terimakasih Sudah Berdonasi Melalui Website Kami</p>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session()->has('error'))
        <div class="alert alert-danger mb-sm-5" role="alert">
            {{ session()->get('error') }}
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-sm-8">
                    <div class="card mt-sm-3 mb-sm-5" style="border-radius: 1rem">
                        <div class="card-body border border-3" style="border-radius: 1rem;">
                            <form id="donasiForm" action="{{ route('donasi.store') }}" method="POST" class="needs-validation" novalidate>
                                @csrf

                                <div class="d-flex flex-column mb-sm-3">
                                    <div class="d-flex align-items-center">
                                        <p class="card-text mb-sm-2 fw-bold fs-5 mx-sm-2">Pilih Jenis Donasi</p>
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center m-0">

                                                <div class="form-check mx-sm-5">
                                                    <input class="form-check-input d-none @error('jenis_donasi') is-invalid @enderror" type="radio" name="jenis_donasi" id="jenis_donasi_infaq" value="infaq" {{ old('jenis_donasi') == 'infaq' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="jenis_donasi_infaq">
                                                      Infaq
                                                    </label>
                                                </div>
                                                
                                                <div class="form-check">
                                                    <input class="form-check-input d-none @error('jenis_donasi') is-invalid @enderror" type="radio" name="jenis_donasi" id="jenis_donasi_sedekah" value="sedekah" {{ old('jenis_donasi') == 'sedekah' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="jenis_donasi_sedekah">
                                                        Sedekah
                                                    </label>
                                                </div>

                                            </div>
                                            @error('jenis_donasi')
                                                <div class="invalid-feedback d-block mt-0" style="margin-left: 70px;">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <!-- Pilih Panti Asuhan -->
                                <div class="d-flex align-items-center mb-sm-3">
                                    <label for="panti_asuhan_operators_id" class="card-text mb-sm-2 fw-bold fs-5 ms-sm-2 me-sm-5">Pilih Panti Asuhan</label>
                                    <div class="col-sm-6">
                                        <div class="ms-sm-4">

                                            <select class="form-select border border-dark @error('panti_asuhan_operators_id') is-invalid @enderror" name="panti_asuhan_operators_id" id="panti_asuhan_operators_id" required aria-label=". form-select example">
                                                <option selected disabled value="">Pilih Panti Asuhan</option>

                                                @foreach ($pantiAsuhanOperator as $panti)
                                                    <option value="{{ $panti->id }}" {{ old('panti_asuhan_operators_id') == $panti->id ? 'selected' : '' }}>{{ $panti->nama_panti_asuhan }}</option>
                                                @endforeach
                                            </select>

                                            @error('panti_asuhan_operators_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <!-- Pilih Program Donasi -->
                                <div class="d-flex align-items-center mb-sm-3">
                                    <label for="program_donasis_id" class="card-text mb-sm-2 fw-bold fs-5 ms-sm-2" style="margin-right: 19px">Pilih Program Donasi</label>
                                    <div class="col-sm-6">
                                        <div class="ms-sm-4">

                                            <select class="form-select border border-dark @error('program_donasis_id') is-invalid @enderror" name="program_donasis_id" id="program_donasis_id" required aria-label=". form-select example">
                                                <option selected disabled value="">Pilih Program Donasi</option>
                                                <!-- Program Donasi akan diubah lewat JavaScript setelah memilih Panti Asuhan -->
                                            </select>
                                            
                                            @error('program_donasis_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-8">
                                    <div class="mb-sm-3 ms-sm-2">
                                        <label for="nama_donatur" class="form-label fs-5 fw-bold me-sm-5">Info Donatur</label>

                                        <input class="form-control mt-sm-2 border border-dark @error('nama_donatur') is-invalid @enderror" type="text" id="nama_donatur" name="nama_donatur" placeholder="Nama Lengkap" aria-label="Masukkan Nama Lengkap" value="{{ old('anonymous') ? 'Hamba Allah' : old('nama_donatur') }}" @if(old('anonymous')) disabled @endif required>
                                        @error('nama_donatur')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                        <div class="form-check mt-sm-2">
                                            <input class="form-check-input border border-dark" type="checkbox" id="anonymous" name="anonymous" onclick="toggleNameField()" {{ old('anonymous') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="anonymous">
                                              Tampilkan Sebagai Hamba Allah
                                            </label>
                                        </div>

                                        <input class="form-control mt-sm-3 border border-dark @error('phoneNumber') is-invalid @enderror" type="text" id="phoneNumber" name="phoneNumber" placeholder="No.Handphone (Wajib Isi)" aria-label="Masukkan No Handphone" value="{{ old('phoneNumber') }}">
                                        @error('phoneNumber')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                        <input type="email" class="form-control mt-sm-3 border border-dark @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <p class="mt-sm-2">Tidak wajib diisi, berguna untuk pengiriman bukti pdf berdonasi</p>

                                        <div class="form-check mt-sm-2">
                                            <input class="form-check-input border border-dark" type="checkbox" id="sendMessage" name="sendMessage" {{ old('sendMessage') ? 'checked' : '' }} onclick="togglePesanField()">
                                            <label class="form-check-label" for="sendMessage">
                                              Saya Ingin Mengirimkan Pesan atau Do'a
                                            </label>
                                        </div>

                                        <textarea class="form-control mt-sm-2 border border-dark" id="pesan" name="pesan" placeholder="Pesan do'a atau yang ingin disampaikan" rows="3" {{ old('sendMessage') ? '' : 'disabled' }}></textarea>
                                        @error('pesan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <p class="mt-sm-2" style="font-size: 14px">Minimal 5 Karakter</p>
                                    </div>
                                </div>

                                <div class="col-sm-7">
                                    <div class="ms-sm-2">
                                        @foreach ([10000, 20000, 30000, 40000, 50000, 60000, 70000, 80000] as $nominal)
                                            <input type="radio" class="btn-check" name="nomDonasi_radio" id="nominal_{{ $nominal }}" value="{{ $nominal }}" {{ old('nomDonasi_radio') == $nominal ? 'checked' : '' }}>
                                            <label class="btn btn-outline-dark ms-sm-2 mb-sm-2" for="nominal_{{ $nominal }}" data-nominal="{{ $nominal }}">Rp. {{ number_format($nominal, 0, ',', '.') }}</label>
                                        @endforeach
                                    </div>
                            
                                    
                                    <p class="mb-sm-1">Atau Nominal Donasi Lainnya</p>
                                    <input class="form-control border border-dark" type="number" id="nominal_lain" name="nomDonasi_lain" placeholder="Nominal Lain (Minimal Rp. 2.000)" min="2000" max="1000000000" aria-label="Masukkan Nominal Donasi" value="{{ old('nomDonasi_lain') }}">
                                    
                                    @error('nomDonasi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    
                                    @error('nomDonasi_lain')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mx-auto mt-sm-3 text-decoration-none d-grid gap-2">
                                    <button class="btn btn-cloud text-uppercase fw-bold" type="submit">Selanjutnya</button>
                                </div>

                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk mengubah pilihan Program Donasi -->
    <script>
        // Menangani perubahan pada select Panti Asuhan
        document.getElementById('panti_asuhan_operators_id').addEventListener('change', function() {
            let pantiAsuhanOperatorId = this.value;

            if (pantiAsuhanOperatorId) {
                fetch(`/get-program-donasi/${pantiAsuhanOperatorId}`)
                    .then(response => response.json())
                    .then(data => {
                        let programDonasiSelect = document.getElementById('program_donasis_id');
                        programDonasiSelect.innerHTML = `<option selected disabled value="">Pilih Program Donasi</option>`; // Reset options

                        data.programDonasis.forEach(program => {
                            let option = document.createElement('option');
                            option.value = program.id;
                            option.textContent = program.nama_program_donasi;
                            programDonasiSelect.appendChild(option);
                        });
                    });
            } else {
                document.getElementById('program_donasis_id').innerHTML = `<option selected disabled value="">Pilih Program Donasi</option>`;
            }
        });

        <!-- JavaScript untuk mengaktifkan dan menonaktifkan input nama donatur -->
        function toggleNameField() {
            var isChecked = document.getElementById('anonymous').checked;
            var nameField = document.getElementById('nama_donatur');
            
            // Menonaktifkan input field jika checkbox dicentang
            nameField.disabled = isChecked;
            
            // Jika dicentang, set value ke 'Hamba Allah'
            if (isChecked) {
                nameField.value = 'Hamba Allah';
            } else {
                nameField.value = '';  // Mengosongkan nilai jika tidak dicentang
            }
        }

        function togglePesanField() {
            var pesanField = document.getElementById('pesan');
            if (!document.getElementById('sendMessage').checked) {
                pesanField.disabled = true;
                pesanField.value = null; // Pastikan pesan null ketika tidak dicentang
            } else {
                pesanField.disabled = false;
            }
        }

        document.getElementById('donasiForm').addEventListener('submit', function(event) {
            var radioButtons = document.getElementsByName('nomDonasi_radio');
            var textField = document.getElementById('nominal_lain');
            var errorMessage = '';

            // Cek jika tidak ada yang dipilih di radio button dan text field kosong
            var isRadioSelected = Array.from(radioButtons).some(radio => radio.checked);
            var isTextFieldFilled = textField.value.trim() !== '';

            if (!isRadioSelected && !isTextFieldFilled) {
                errorMessage = 'Anda harus memilih nominal donasi atau memasukkan nominal lain.';
            }

            // Jika ada error, tampilkan pesan dan batalkan pengiriman form
            if (errorMessage) {
                event.preventDefault();
                alert(errorMessage);
            }
        });
    </script>

    @include('viewer.partials.footer')
@endsection