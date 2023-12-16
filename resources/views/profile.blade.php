@extends('dashboard')
@section('content')
<link rel="stylesheet" href="{{ asset('css/profile-style.css') }}">
<div class="container-details">
    <div class="flex-container p-4 mt-4">
        <div class="d-flex top-profile rounded-2 mb-3 shadow-sm">
            <img class="profile p-4" src="{{ asset('img/top-pfp.jpg') }}" alt="foto pas">
            <div class="d-flex flex-column justify-content-center">
                <h3 class="fw-semibold">{{ Auth::user()->nama }}</h3>
                <p class="mb-2">{{ Auth::user()->nis }}</p>
                <p class="mb-2">12 MIPA 2</p>
                <p class="mb-2">Status: Aktif</p>

                <a href="{{url('forgetPass')}}" style="width: 100%;background-color:#042F66; border-color:#042F66" class="btn btn-primary btn-block mb-2 mt-2 d-grid col-6 mx-auto ">
                    Ubah Password
                </a>
            </div>
        </div>
        <div class="down-profile rounded-2 shadow-sm">
            <div class="p-4">
                <p>Nama Lengkap</p>
                <h6>{{ Auth::user()->nama }}</h6>
                <p>NIS</p>
                <h6>{{ Auth::user()->nis }}</h6>
                <p>Tempat, Tanggal Lahir</p>
                <h6>{{ Auth::user()->tanggal_lahir }}</h6>
                <p>Agama</p>
                <h6>{{ Auth::user()->agama }}</h6>
                <p>Penjurusan</p>
                <h6>{{ Auth::user()->penjurusan }}</h6>
                <p>Asal Sekolah</p>
                <h6>{{ Auth::user()->asal_sekolah }}</h6>
                <p>Alamat</p>
                <h6>{{ Auth::user()->alamat }}</h6>
            </div>
        </div>
    </div>
</div>
@endsection