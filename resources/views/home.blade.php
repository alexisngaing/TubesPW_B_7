@extends('dashboard')
@section('content')
    <style>
        .headline {
            width: 60rem;
            height: 35rem;
            background-color: rgb(222, 222, 222);

        }

        .secondary-headline {
            width: 35rem;
            height: 35rem;
            background-color: rgb(222, 222, 222);
        }

        .tertiary-headline {
            width: 31.2rem;
            height: 10rem;
            background-color: rgb(255, 255, 255);
        }

        .img-headline {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(70%);
        }

        .title {
            bottom: 0;
            left: 0;
            width: 80%;
            color: #E4F1FE;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.50);
        }
    </style>
    <div class="container-details">
        <div class="d-flex justify-content-center gap-4 p-4 mt-4">
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
        <div class="d-flex justify-content-center gap-4">
            <div class="tertiary-headline rounded-2">
                <h4 class="text-black p-4 fs-5 fw-semibold">Sosialisasi Penyalahgunaan Narkotika oleh Polsek Sleman</h4>
                <p class="fw-medium" style="padding-left: 1.5rem; padding-top: .7rem;">Senin, 6 November 2023</p>
            </div>
            <div class="tertiary-headline rounded-2">
                <h4 class="text-black p-4 fs-5 fw-semibold">Informasi Pergantian Ruangan Kelas 12 MIPA & 11 MIPA</h4>
                <p class="fw-medium" style="padding-left: 1.5rem; padding-top: .7rem;">Kamis, 26 Oktober 2023</p>
            </div>
            <div class="tertiary-headline rounded-2">
                <h4 class="text-black p-4 fs-5 fw-semibold">Surat Keputusan Kepala Sekolah SHIS Tentang Kegiatan HUT Pramuka
                </h4>
                <p class="fw-medium" style="padding-left: 1.5rem; padding-top: .7rem;">Selasa, 1 Agustus 2023</p>
            </div>
        </div>
    </div>
@endsection
