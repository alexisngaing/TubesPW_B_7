@extends('dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/profile-style.css') }}">
    <div class="container-details">
        <div class="flex-container p-4 mt-4">
            <div class="d-flex top-profile rounded-2 mb-3">
                <img class="profile p-4" src="{{ asset('img/top-pfp.jpg') }}" alt="foto pas">
                <div class="d-flex flex-column justify-content-center">
                    <h3 class="fw-semibold">Putri</h3>
                    <p class="mb-2">210711407</p>
                    <p class="mb-2">12 MIPA 2</p>
                    <p class="mb-2">Status: Aktif</p>
                </div>
            </div>
            <div class="down-profile rounded-2">
                <div class="p-4">
                    <p>Nama Lengkap</p>
                    <h6>Putri</h6>
                    <p>NIS</p>
                    <h6>210711407</h6>
                    <p>Tempat, Tanggal Lahir</p>
                    <h6>Bandung, 11 September 2002</h6>
                    <p>Agama</p>
                    <h6>Atheis</h6>
                    <p>Penjurusan</p>
                    <h6>Matematika IPA (MIPA)</h6>
                    <p>Asal Sekolah</p>
                    <h6>SMP Negeri 2 Yogyakarta</h6>
                    <p>Alamat</p>
                    <h6>Jl. Dirgantara IV No.2, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa
                        Yogyakarta 55281</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
