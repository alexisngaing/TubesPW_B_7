@extends('users/dashboard')
@section('content')
    <style>
        td,
        th {
            padding-left: 6px;
            padding-right: 6px;
        }

        .card {
            max-width: 150rem;
            margin-top: 10px;
            height: 100vh;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        @media screen and (max-width: 920px) {
            .table-container {
                overflow-x: auto;
            }

            .card {
                max-width: 150rem;
                margin-top: 10px;
                height: 100vh;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            }
        }

        @media screen and (max-width: 420px) {
            .table-container {
                overflow-x: auto;
            }

            .card {
                max-width: 150rem;
                margin-top: 10px;
                height: 100%;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            }
        }
    </style>
    <!-- modal -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal1">Tata Cara Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Melihat Jadwal Pembayaran</li>
                        <li>Pergi Ke Tata Usaha</li>
                        <li>Melakukan Pembayaran dengan Staff Tata Usaha</li>
                        <li>Pembayaran dapat dilakukan secara cash atau Transfer</li>
                        <li>Staff akan Mengkonfirmasi</li>
                        <li>Pembayaran Selesai</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Page content-->
    <div class="container-fluid" style="padding-top: 1rem;">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Informasi Pembayaran <span><i class="fa-solid fa-circle-exclamation fa-2xs" type="button"
                                data-bs-toggle="modal" data-bs-target="#modal1"></i></span></h3>
                </div>
                <br>
                <div class="card-title">
                    <h5>Tagihan Pembayaran</h5>
                </div>
                <div class="table-container" style="display: flex;">
                    <table class="table-bordered" style="width: 100%; max-height: 500px; margin-top: 20px;">
                        <thead style="background-color: #042F66; color: white; height: 50px;">
                            <tr>
                                <th class="text-center" style="width: 150px;">Kode Tagihan</th>
                                <th class="text-center" style="width: 100px;">Semester</th>
                                <th class="text-center" style="width: 100px;">Status</th>
                                <th class="text-center" style="width: 170px;">Jumlah Kekurangan</th>
                                <th class="text-center" style="width: 100px;">Tanggal Mulai</th>
                                <th class="text-center" style="width: 100px;">Tanggal Berakhir</th>
                                <th class="text-center">Konfirmasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tagihan as $item)
                                <tr>
                                    <td class="text-center">{{ $item['kode_pembayaran_spp'] }}</td>
                                    <td class="text-center">{{ $item['spp']['semester'] }}</td>
                                    <td class="text-center">{{ $item['status'] ?? 'Belum Dibayar' }}</td>
                                    <td class="text-center">{{ $item['spp']['biaya'] }}</td>
                                    <td class="text-center">{{ $item['spp']['tanggal_mulai'] }}</td>
                                    <td class="text-center">{{ $item['spp']['tanggal_berakhir'] }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('ajukanKonfirmasi', ['kode_riwayat_pembayaran' => $item]) }}"
                                            class="btn btn-primary"><i class="fas fa-check"></i></a>
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
                <br>
                <br>
                <div class="card-title">
                    <h5>History Pembayaran</h5>
                </div>
                <div class="table-container" style="display: flex;">
                    <table class="table-bordered" style="width: 100%; margin-top: 20px;">
                        <thead style="background-color: #042F66; color: white; height: 50px;">
                            <tr>
                                <th class="text-center">Tanggal Pembayaran</th>
                                <th class="text-center">Bank</th>
                                <th class="text-center">Jenis Tagihan</th>
                                <th class="text-center">Jumlah Bayar</th>
                                <th class="text-center">Denda</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($history as $item)
                                <tr>
                                    <td class="text-center">{{ $item['tanggal_bayaran'] }}</td>
                                    <td class="text-center">BCA</td>
                                    <td class="text-center">SPP Semester {{ $item['spp']['semester'] }}</td>
                                    <td class="text-center">{{ $item['spp']['biaya'] }}</td>
                                    <td class="text-center">{{ $item['denda'] }}</td>
                                    <td class="text-center">{{ $item['status'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak Ada Riwayat</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
