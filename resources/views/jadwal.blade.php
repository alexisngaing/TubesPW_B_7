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
                            @forelse ($jadwal as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $item->hari }}</td>
                                    <td class="text-center">{{ $item->mapel->nama_mapel }}</td>
                                    <td class="text-center">{{ $item->guru->nama_guru }}</td>
                                    <td class="text-center">{{ $item->kelas->nama_kelas }}</td>
                                    <td class="text-center">{{ $item->jam_pelajaran }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
