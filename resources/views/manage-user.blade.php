@extends('admin-dashboard')
@section('content')
    <style>
        td {
            padding: .5rem;
        }

        .card-body {
            height: 100vh;
        }

        /* Responsive */
        @media screen and (max-width: 420px) {
            .table-container {
                overflow-x: auto;
            }

            th,
            td {
                font-size: 12px;
            }

            th {
                padding-left: 4px;
                padding-right: 4px;
            }

            .card-body {
                height: 100%;
            }
        }
    </style>
    <div class="container-details">
        <div class="" style="background-color: #F5F5F5; padding-top: 10px;">
            <div class="card" style=" margin-top: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                <div class="card-body">
                    <div class="card-title">
                        <h2>Data Siswa</h2>
                    </div>
                    <div class="position-relative mb-5">
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
                        <div class="position-absolute top-0 end-0">
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
                                <tr>
                                    <td class="text-center">1234</td>
                                    <td class="text-center">Alexis</td>
                                    <td class="text-center">14-Okt-2008</td>
                                    <td class="text-center">Islam</td>
                                    <td class="text-center">Jl. Budi Utomo Gang IV</td>
                                    <td class="text-center">4</td>
                                    <td class="text-center">MIPA</td>
                                    <td class="text-center">SMP Cahaya Kebenaran</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">5028</td>
                                    <td class="text-center">Geby</td>
                                    <td class="text-center">02-Des-2007</td>
                                    <td class="text-center">Kristen</td>
                                    <td class="text-center">Jl. Budi Utomo Gang IV</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">MIPA</td>
                                    <td class="text-center">SMP Cahaya Kebenaran</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2245</td>
                                    <td class="text-center">William</td>
                                    <td class="text-center">02-Jul-2007</td>
                                    <td class="text-center">Katolik</td>
                                    <td class="text-center">Jl. Budi Utomo Gang IV</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">MIPA</td>
                                    <td class="text-center">SMP Cahaya Kebenaran</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">1587</td>
                                    <td class="text-center">Budi</td>
                                    <td class="text-center">24-Jan-2008</td>
                                    <td class="text-center">Buddha</td>
                                    <td class="text-center">Jl. Budi Utomo Gang IV</td>
                                    <td class="text-center">4</td>
                                    <td class="text-center">Bahasa</td>
                                    <td class="text-center">SMP Cahaya Kebenaran</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9678</td>
                                    <td class="text-center">Michael</td>
                                    <td class="text-center">01-Jan-2007</td>
                                    <td class="text-center">Konghucu</td>
                                    <td class="text-center">Jl. Budi Utomo Gang IV</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">IPS</td>
                                    <td class="text-center">SMP Cahaya Kebenaran</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9678</td>
                                    <td class="text-center">Michael</td>
                                    <td class="text-center">01-Jan-2007</td>
                                    <td class="text-center">Konghucu</td>
                                    <td class="text-center">Jl. Budi Utomo Gang IV</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">IPS</td>
                                    <td class="text-center">SMP Cahaya Kebenaran</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9678</td>
                                    <td class="text-center">Michael</td>
                                    <td class="text-center">01-Jan-2007</td>
                                    <td class="text-center">Konghucu</td>
                                    <td class="text-center">Jl. Budi Utomo Gang IV</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">IPS</td>
                                    <td class="text-center">SMP Cahaya Kebenaran</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9678</td>
                                    <td class="text-center">Michael</td>
                                    <td class="text-center">01-Jan-2007</td>
                                    <td class="text-center">Konghucu</td>
                                    <td class="text-center">Jl. Budi Utomo Gang IV</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">IPS</td>
                                    <td class="text-center">SMP Cahaya Kebenaran</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9678</td>
                                    <td class="text-center">Michael</td>
                                    <td class="text-center">01-Jan-2007</td>
                                    <td class="text-center">Konghucu</td>
                                    <td class="text-center">Jl. Budi Utomo Gang IV</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">IPS</td>
                                    <td class="text-center">SMP Cahaya Kebenaran</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">9678</td>
                                    <td class="text-center">Michael</td>
                                    <td class="text-center">01-Jan-2007</td>
                                    <td class="text-center">Konghucu</td>
                                    <td class="text-center">Jl. Budi Utomo Gang IV</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">IPS</td>
                                    <td class="text-center">SMP Cahaya Kebenaran</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-success btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
