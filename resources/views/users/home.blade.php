@extends('users/dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <div class="container-details">
        <div class="flex-container gap-4 p-4 mt-4">
            <div class="headline rounded-2 position-relative">
                <img class="img-headline rounded-2 position-relative" src="{{ asset('img/headline.jpg') }}" alt="headline">
                <h3 class="title position-absolute p-4 fw-semibold">Tim Robotik SIHS Berhasil Meraih Emas Dalam Kompetisi
                    Nasional di Universitas Gadjah Mada</h3>
            </div>
            <div class="secondary-headline rounded-2 position-relative">
                <img class="img-headline rounded-2 position-relative" src="{{ asset('img/secondary-headline.jpg') }}"
                    alt="secondary-headline">
                <h3 class="title position-absolute p-4 fw-semibold">Informasi Kelulusan Tahun 2023/2024</h3>
            </div>
        </div>
        <div class="flex-tertiary gap-4">
            <div class="tertiary-headline rounded-2">
                <h4 class="tertiary-title">Sosialisasi Penyalahgunaan Narkotika oleh Polsek Sleman</h4>
                <p class="fw-medium" style="padding-left: 1.5rem; padding-top: .7rem;">Senin, 6 November 2023</p>
            </div>
            <div class="tertiary-headline rounded-2">
                <h4 class="tertiary-title">Informasi Pergantian Ruangan Kelas 12 MIPA & 11 MIPA</h4>
                <p class="fw-medium" style="padding-left: 1.5rem; padding-top: .7rem;">Kamis, 26 Oktober 2023</p>
            </div>
            <div class="tertiary-headline rounded-2">
                <h4 class="tertiary-title">Surat Keputusan Kepala Sekolah SHIS Tentang Kegiatan HUT Pramuka
                </h4>
                <p class="fw-medium" style="padding-left: 1.5rem; padding-top: .7rem;">Selasa, 1 Agustus 2023</p>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            window.history.pushState({}, '', '/');
        }
    </script>
@endsection
