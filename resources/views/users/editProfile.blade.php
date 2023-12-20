@extends('users/dashboard')
@section('content')
    <style>
        .custom-input {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
        }

        .button-container {
            position: relative;
            top: -15px;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/profile-style.css') }}">
    <div class="container-details">
        <div class="flex-container p-4 mt-4">
            <div class="d-flex top-profile rounded-2 mb-3 shadow-sm">
                <img class="profile p-4" src="{{ asset('img/top-pfp.jpg') }}" alt="foto pas">
                <div class="d-flex flex-column justify-content-center">
                    <h3 class="fw-semibold">{{ $user->nama }}</h3>
                    <p class="mb-2">{{ $user->nis }}</p>
                    @if ($user->kelas)
                        <p class="mb-2">{{ $user->kelas->nama_kelas }}</p>
                    @else
                        <p class="mb-2">-</p>
                    @endif
                    <p class="mb-2">Status: Aktif</p>

                </div>
            </div>
            <div class="down-profile rounded-2 shadow-sm">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    <div class="p-4">
                        <p>Nama Lengkap</p>
                        <h6>{{ Auth::user()->nama }}</h6>
                        <p>NIS</p>
                        <h6>{{ Auth::user()->nis }}</h6>
                        <p>Penjurusan</p>
                        <h6>{{ Auth::user()->penjurusan }}</h6>
                        <p>Tanggal Lahir</p>
                        <input type="date" name="tanggal_lahir" value="" required class="custom-input"
                            style="margin-bottom: 10px;">
                        <p>Agama</p>
                        <select name="agama" class="custom-input" style="margin-bottom: 10px;">
                            <option value="" disabled selected>Pilih Agama</option>
                            <option value="Islam" {{ $user->agama === 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ $user->agama === 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ $user->agama === 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ $user->agama === 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha" {{ $user->agama === 'Buddha' ? 'selected' : '' }}>Buddha</option>
                        </select>

                        <p>Asal Sekolah</p>
                        <input type="text" name="asal_sekolah" value="" required class="custom-input"
                            style="margin-bottom: 10px;">

                        <p>Alamat</p>
                        <input type="text" name="alamat" value="" required class="custom-input"
                            style="margin-bottom: 10px;">
                    </div>
                    <div class="button-container">
                        <button type="submit" style="margin-left: 25px;" class="btn btn-success mt-3">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
