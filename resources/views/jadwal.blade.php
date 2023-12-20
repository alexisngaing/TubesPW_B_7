@extends('dashboard')
@section('content')
    <style>
        th,
        td {
            padding-left: 6px;
            padding-right: 6px;
        }

        @media screen and (max-width: 920px) {
            .table-all-container {
                display: block;
            }

            .table-container {
                overflow-x: auto;
            }
        }
    </style>
    <div class="container-fluid" style="padding: .3rem;">
        <div class="card" style=" height: 55rem; margin-top: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="card-title">
                    <h2>Jadwal Sekolah</h2>
                </div>
                <div class="table-container">
                    <table class="table-bordered" style="margin-top: 20px;">
                        <thead style="background-color: #042F66; color: white; height: 50px;">
                            <tr>
                                <th class="text-center" style="width: 50px;">No</th>
                                <th class="text-center" style="width: 150px;">Hari</th>
                                <th class="text-center" style="width: 200px;">Mata Pelajaran</th>
                                <th class="text-center" style="width: 170px;">Guru</th>
                                <th class="text-center" style="width: 90px;">Kelas</th>
                                <th class="text-center" style="width: 150px;">Jam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Senin</td>
                                <td class="text-center">Bahasa Inggris</td>
                                <td class="text-center">Nuriz Akbar</td>
                                <td class="text-center">A</td>
                                <td class="text-center">08.00-09.00</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">Senin</td>
                                <td class="text-center">Matematika</td>
                                <td class="text-center">Duratul Hafizah</td>
                                <td class="text-center">A</td>
                                <td class="text-center">08.00-09.00</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">Selasa</td>
                                <td class="text-center">Bahasa Indonesia</td>
                                <td class="text-center">Nuriz Akbar</td>
                                <td class="text-center">A</td>
                                <td class="text-center">08.00-09.00</td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center">Rabu</td>
                                <td class="text-center">Sejarah</td>
                                <td class="text-center">Nuriz Akbar</td>
                                <td class="text-center">A</td>
                                <td class="text-center">08.00-09.00</td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="text-center">Kamis</td>
                                <td class="text-center">Biologi</td>
                                <td class="text-center">Duratul Hafizah</td>
                                <td class="text-center">A</td>
                                <td class="text-center">08.00-09.00</td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td class="text-center">Jumat</td>
                                <td class="text-center">Penjaskes</td>
                                <td class="text-center">Nuriz Akbar</td>
                                <td class="text-center">A</td>
                                <td class="text-center">08.00-09.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
