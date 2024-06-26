@extends('admin/admin-dashboard')
@section('content')
    <style>
        td {
            padding: .5rem;
        }

        .data-control-show {
            display: flex;
            position: relative;
            padding-bottom: 4rem;
        }

        .data-control-show-button {
            position: absolute;
            display: flex;
            top: 0;
            left: 0;
        }

        .data-control-show-select {
            position: absolute;
            display: flex;
            top: 0;
            right: 0;
        }

        .tahun-select {
            width: 250px;
            height: 30px;
        }

        .bulan-select {
            width: 250px;
            height: 30px;
        }

        th {
            padding-left: 6px;
            padding-right: 6px;
        }

        /* Responsive */

        /* Handphone & Tablet */
        @media screen and (max-width: 920px) {
            .table-container {
                overflow-x: auto;
            }

            .data-control-show {
                display: block;
                position: 0;
                padding-bottom: 1rem;
            }

            .data-control-show-button {
                position: relative;
                display: flex;
                top: 0;
                left: 0;
                padding-bottom: 1.5rem;
            }

            .data-control-show-select {
                position: relative;
                display: block;
                top: 0;
                right: 0;
            }

            .tahun-select {
                width: 100%;
                height: 30px;
            }

            .bulan-select {
                width: 100%;
                height: 30px;
            }
        }
    </style>
    <div class="container-details">
        <div class="container-fluid" style="padding: 10px;">
            <div class="card" style=" margin-top: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                <div class="card-body" style="height: 100vh;">
                    <div class="card-title" style="padding-bottom: 1rem;">
                        <h2>Pembayaran SPP</h2>
                    </div>
                    <div class="table-container" style="display: flex;">
                        <table class="table-bordered" style="width: 100%; max-height: 500px; margin-top: 20px;">
                            <thead style="background-color: #042F66; color: white; height: 50px;">
                                <tr>
                                    <th class="text-center">NIS Siswa</th>
                                    <th class="text-center">Nama Siswa</th>
                                    <th class="text-center">Semester</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Jumlah Kekurangan</th>
                                    <th class="text-center">Tanggal Mulai</th>
                                    <th class="text-center">Tanggal Berakhir</th>
                                    <th class="text-center">Tanggal Pembayaran</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($payment as $item)
                                    <tr>
                                        <td class="text-center">{{ $item['nis_siswa'] }}</td>
                                        <td class="text-center">{{ $item['user']['nama'] }}</td>
                                        <td class="text-center">{{ $item['spp']['semester'] }}</td>
                                        <td class="text-center">{{ $item['status'] }}</td>
                                        <td class="text-center">{{ $item['spp']['biaya'] }}</td>
                                        <td class="text-center">{{ $item['spp']['tanggal_mulai'] }}</td>
                                        <td class="text-center">{{ $item['spp']['tanggal_berakhir'] }}</td>
                                        <td class="text-center">{{ $item['tanggal_bayaran'] }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('konfirmasiPembayaran', ['kode_riwayat_pembayaran' => $item]) }}"
                                                class="btn btn-primary btn-sm"><i class="fas fa-check"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak Ada Tagihan</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
