@extends('admin-dashboard')
@section('content')
    <style>
        td {
            padding: .5rem;
        }
    </style>
    <div class="container-details">
        <div class="container-fluid" style="background-color: #F5F5F5; padding-top: 10px;">
            <div class="card" style=" margin-top: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                <div class="card-body" style="height: 100vh;">
                    <div class="card-title" style="padding-bottom: 1rem;">
                        <h2>Data Pembayaran SPP</h2>
                    </div>
                    <div class="d-flex position-relative" style="padding-bottom: 4rem;">
                        <div class="d-flex gap-2 position-absolute top-0 start-0">
                            <button class="btn btn-success rounded-1"><i class="fas fa-circle-plus"></i> Tambah</button>
                            <button class="btn btn-primary rounded-1"><i class="fas fa-file-lines"></i> Laporan</button>
                        </div>
                        <div class="d-flex gap-2 position-absolute top-0 end-0">
                            <h5>Filter Data</h5>
                            <select name="tahun-ajaran" id="tahun-ajaran" class="form-select form-select-sm"
                                style="width: 250px; height: 30px;">
                                <option value="semua-tahun">Semua Tahun Ajaran</option>
                                <option value="2023/2024">2023/2024</option>
                                <option value="2022/2023">2022/2023</option>
                                <option value="2021/2022">2021/2022</option>
                            </select>
                            <select name="bulan" id="bulan" class="form-select form-select-sm"
                                style="width: 250px; height: 30px;">
                                <option value="semua-bulan">Semua Bulan</option>
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="position-relative" style="padding-bottom: 2rem;">
                        <div class="d-flex gap-1 fw-semibold position-absolute top-0 start-0">
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
                    </div>
                    <div style="display: flex;">
                        <table class="table-bordered border-2 border-black" style="width: 100%; margin-top: 20px;">
                            <thead style="background-color: #042F66; color: white; height: 50px;">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Aksi</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tanggal Pembayaran</th>
                                    <th class="text-center">Nominal Pembayaran</th>
                                    <th class="text-center">Tahun Ajaran</th>
                                    <th class="text-center">Bulan</th>
                                </tr>
                            </thead>
                            <tbody class="fw-medium">
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                    <td class="text-center">Alexis</td>
                                    <td class="text-center">29 Januari 2023</td>
                                    <td class="text-center">Rp 600.000</td>
                                    <td class="text-center">2023/2024</td>
                                    <td class="text-center">Februari</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                    <td class="text-center">Alexis</td>
                                    <td class="text-center">29 Januari 2023</td>
                                    <td class="text-center">Rp 600.000</td>
                                    <td class="text-center">2023/2024</td>
                                    <td class="text-center">Februari</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                    <td class="text-center">Alexis</td>
                                    <td class="text-center">29 Januari 2023</td>
                                    <td class="text-center">Rp 600.000</td>
                                    <td class="text-center">2023/2024</td>
                                    <td class="text-center">Februari</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                    <td class="text-center">Alexis</td>
                                    <td class="text-center">29 Januari 2023</td>
                                    <td class="text-center">Rp 600.000</td>
                                    <td class="text-center">2023/2024</td>
                                    <td class="text-center">Februari</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                    <td class="text-center">Alexis</td>
                                    <td class="text-center">29 Januari 2023</td>
                                    <td class="text-center">Rp 600.000</td>
                                    <td class="text-center">2023/2024</td>
                                    <td class="text-center">Februari</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
