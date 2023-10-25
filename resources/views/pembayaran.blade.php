@extends('dashboard')
@section('content')
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
<div class="container-fluid" style="background-color: #F5F5F5; padding-top: 1px;">
    <div class="card" style="max-width: 150rem; max-height: 150rem;height: 55rem; margin-top: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
        <div class="card-body">
            <div class="card-title">
                <h1>Informasi Pembayaran <span><i class="fa-solid fa-circle-exclamation fa-2xs" type="button" data-bs-toggle="modal" data-bs-target="#modal1"></i></span></h1>
            </div>
            <br>
            <div class="card-title">
                <h5>Tagihan Pembayaran</h5>
            </div>
            <div style="display: flex;">
                <table class="table-bordered" style="width: 100%; max-height: 500px; margin-top: 20px;">
                    <thead style="background-color: #042F66; color: white; height: 50px;">
                        <tr>
                            <th class="text-center" style="width: 150px;">Kode Tagihan</th>
                            <th class="text-center" style="width: 100px;">Semester</th>
                            <th class="text-center" style="width: 100px;">Status</th>
                            <th class="text-center" style="width: 170px;">Jumlah Kekurangan</th>
                            <th class="text-center" style="width: 100px;">Tanggal Mulai</th>
                            <th class="text-center" style="width: 100px;">Tanggal Berakhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">006</td>
                            <td class="text-center">1</td>
                            <td class="text-center">Belum Lunas</td>
                            <td class="text-center">Rp.300.000,00</td>
                            <td class="text-center">08-Nov-2023</td>
                            <td class="text-center">14-Nov-2023</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <div class="card-title">
                <h5>History Pembayaran</h5>
            </div>
            <div style="display: flex;">
                <table class="table-bordered" style="width: 100%; max-height: 500px; margin-top: 20px;">
                    <thead style="background-color: #042F66; color: white; height: 50px;">
                        <tr>
                            <th class="text-center" style="width: 100px;">Tanggal Pembayaran</th>
                            <th class="text-center" style="width: 100px;">Bank</th>
                            <th class="text-center" style="width: 200px;">Jenis Tagihan</th>
                            <th class="text-center" style="width: 150px;">Jumlah Bayar</th>
                            <th class="text-center" style="width: 100px;">Denda</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">08-okt-2023</td>
                            <td class="text-center">BCA</td>
                            <td class="text-center">SPP Bulan Oktober Semester Gasal TA 2023/2024</td>
                            <td class="text-center">Rp.300.000,00</td>
                            <td class="text-center">Rp.0,00</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="text-center">08-sep-2023</td>
                            <td class="text-center">BCA</td>
                            <td class="text-center">SPP Bulan September Semester Gasal TA 2023/2024</td>
                            <td class="text-center">Rp.300.000,00</td>
                            <td class="text-center">Rp.0,00</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="text-center">08-Agu-2023</td>
                            <td class="text-center">BCA</td>
                            <td class="text-center">SPP Bulan Agustus Semester Gasal TA 2023/2024</td>
                            <td class="text-center">Rp.300.000,00</td>
                            <td class="text-center">Rp.0,00</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="text-center">08-Jul-2023</td>
                            <td class="text-center">BCA</td>
                            <td class="text-center">SPP Bulan Juli Semester Gasal TA 2023/2024</td>
                            <td class="text-center">Rp.300.000,00</td>
                            <td class="text-center">Rp.0,00</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection