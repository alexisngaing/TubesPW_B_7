@extends('admin-dashboard')
@section('content')
    <style>
        td {
            padding: .5rem;
        }

        th {
            padding-left: 4px;
            padding-right: 4px;
        }

        .card-body {
            height: 100vh;
        }

        .data-control {
            position: relative;
            margin-bottom: 5rem;
            margin-top: 3rem;
            display: flex;
        }

        .data-control-entries {
            position: absolute;
            top: 0;
            left: 0;
        }

        .data-control-show {
            position: absolute;
            top: 0;
            right: 0;
        }

        /* Responsive */

        /* Tablet */
        @media screen and (max-width: 920px) {
            .card-body {
                overflow-x: auto;
            }

            .card-body {
                height: 100%;
            }

            .aksi {
                padding-bottom: 2px;
            }
        }

        /* Handphone */
        @media screen and (max-width: 420px) {
            .table-container {
                overflow-x: auto;
            }

            th,
            td {
                font-size: 12px;
            }

            .card-body {
                height: 100%;
            }

            .data-control {
                position: 0;
                margin-top: 3rem;
                margin-bottom: 1rem;
                display: block;
            }

            .data-control-entries {
                position: relative;
                top: 0;
                left: 0;
            }

            .data-control-show {
                position: relative;
                top: 0;
                right: 0;
            }

            .aksi {
                padding-bottom: 2px;
            }
        }
    </style>
    <div class="container-details">
        {{-- <div class="" style="padding-top: 10px;"> --}}
        <div class="card" style=" margin-top: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="card-title">
                    <h2>Data Siswa</h2>
                </div>
                <div class="data-control">
                    <div class="d-flex gap-1 fw-semibold data-control-entries">
                        <p>Show</p>
                        <select name="entries" id="entries" class="form-select form-select-sm"
                            style="width: 70px; height: 30px;">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <p>entries</p>
                    </div>
                    <div class="data-control-show">
                        <form class="content-end" role="search">
                            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                        </form>
                    </div>
                </div>
                <div class="table-container">
                    <table class="table-bordered border-2 border-black" style="width: 100%; margin-top: 20px;">
                        <thead style="background-color: #042F66; color: white; height: 50px;">
                            <tr>
                                <th class="text-center">NIS</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Agama</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Semester</th>
                                <th class="text-center">Jurusan</th>
                                <th class="text-center">Asal Sekolah</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="fw-medium">
                            @forelse ($siswa as $s)
                                <tr>
                                    <td class="text-center">{{ $s['nis'] }}</td>
                                    <td class="text-center">{{ $s['nama'] }}</td>
                                    <td class="text-center">{{ $s['tanggal_lahir'] }}</td>
                                    <td class="text-center">{{ $s['agama'] }}</td>
                                    <td class="text-center">{{ $s['alamat'] }}</td>
                                    <td class="text-center">4</td>
                                    <td class="text-center">{{ $s['penjurusan'] }}</td>
                                    <td class="text-center">{{ $s['asal_sekolah'] }}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    </div>
@endsection
