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

        td {
            text-align: center;
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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('store-jadwal') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Jadwal</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Mata Pelajaran</label>
                                <select class="form-control" name="kode_mapel_mapel" id="">
                                    @foreach ($mapel as $m)
                                        <option value="{{ $m['kode_mapel'] }}">{{ $m['nama_mapel'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Guru</label>
                                <select class="form-control" name="nuptk_guru_guru" id="">
                                    @foreach ($guru as $g)
                                        <option value="{{ $g['nuptk_guru'] }}">{{ $g['nama_guru'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <select class="form-control" name="id_kelas" id="">
                                    @foreach ($kelas as $k)
                                        <option value="{{ $k['id'] }}">{{ $k['nama_kelas'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Hari</label>
                                <input type="text" class="form-control shadow-input" name="hari" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jam Pelajaran</label>
                                <input type="number" class="form-control shadow-input" name="jam_pelajaran" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="padding: 10px;">
            <div class="card" style=" margin-top: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                <div class="card-body" style="height: 100vh;">
                    <div class="card-title" style="padding-bottom: 1rem;">
                        <h2>Data Jadwal</h2>
                    </div>
                    <div class="data-control-show">
                        <div class="data-control-show-button gap-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fas fa-circle-plus"></i> Tambah
                            </button>
                        </div>
                        <div class="data-control-show-select gap-2">
                            <h5>Filter Data</h5>
                            <div class="d-flex gap-2">
                                <select name="tahun-ajaran" id="tahun-ajaran"
                                    class="form-select form-select-sm tahun-select">
                                    <option value="semua-tahun">Semua Tahun Ajaran</option>
                                    <option value="2023/2024">2023/2024</option>
                                    <option value="2022/2023">2022/2023</option>
                                    <option value="2021/2022">2021/2022</option>
                                </select>
                                <select name="bulan" id="bulan" class="form-select form-select-sm bulan-select">
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
                        <div class="table-container">
                            <table class="table-bordered border-2 border-black" style="width: 100%; margin-top: 20px;">
                                <thead style="background-color: #042F66; color: white; height: 50px;">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Mapel</th>
                                        <th class="text-center">Nama Mapel</th>
                                        <th class="text-center">Guru</th>
                                        <th class="text-center">Kelas</th>
                                        <th class="text-center">Hari</th>
                                        <th class="text-center">Sesi</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-medium">
                                    @forelse ($jadwal as $index => $item)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td class="text-center">{{ $item['mapel']['kode_mapel'] }}</td>
                                            <td class="text-center">{{ $item['mapel']['nama_mapel'] }}</td>
                                            <td class="text-center">{{ $item['guru']['nama_guru'] }}</td>
                                            <td class="text-center">{{ $item['kelas']['nama_kelas'] }}</td>
                                            <td class="text-center">{{ $item['hari'] }}</td>
                                            <td class="text-center">{{ $item['jam_pelajaran'] }}</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-edit" data-bs-toggle="modal" data-bs-target="#editModal{{ $item['id_jadwal'] }}"></i>
                                                </a>
                                                <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $item['id_jadwal'] }}" data-itemid="{{ $item['id_jadwal'] }}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse

                                    @foreach ($jadwal as $item)
                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal{{ $item['id_jadwal'] }}" tabindex="-1" aria-labelledby="editModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="{{ route('update-jadwal', $item['id_jadwal']) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="editModalLabel">Edit Data Jadwal</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Isi formulir dengan data yang akan diupdate -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Mata Pelajaran</label>
                                                            <select class="form-control" name="kode_mapel_mapel">
                                                                @foreach ($mapel as $m)
                                                                    <option value="{{ $m['kode_mapel'] }}"
                                                                        {{ $m['kode_mapel'] == $item['mapel']['kode_mapel'] ? 'selected' : '' }}>
                                                                        {{ $m['nama_mapel'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Guru</label>
                                                            <select class="form-control" name="nuptk_guru_guru">
                                                                @foreach ($guru as $g)
                                                                    <option value="{{ $g['nuptk_guru'] }}"
                                                                        {{ $g['nuptk_guru'] == $item['guru']['nuptk_guru'] ? 'selected' : '' }}>
                                                                        {{ $g['nama_guru'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Kelas</label>
                                                            <select class="form-control" name="id_kelas">
                                                                @foreach ($kelas as $k)
                                                                    <option value="{{ $k['id'] }}"
                                                                        {{ $k['id'] == $item['kelas']['id'] ? 'selected' : '' }}>
                                                                        {{ $k['nama_kelas'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Hari</label>
                                                            <input type="text" class="form-control shadow-input" name="hari" value="{{ $item['hari'] }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Jam Pelajaran</label>
                                                            <input type="number" class="form-control shadow-input" name="jam_pelajaran"
                                                                value="{{ $item['jam_pelajaran'] }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="confirmDeleteModal{{ $item['id_jadwal'] }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $item['id_jadwal'] }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmDeleteModalLabel{{ $item['id_jadwal'] }}">Konfirmasi Hapus</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <!-- Change the form action to include the item ID -->
                                                    <form method="POST" action="{{ route('delete-jadwal', ['id_jadwal' => $item['id_jadwal']]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-danger">Ya</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="mt-5">
                                <h5>Keterangan</h5>
                                <table class="table-bordered border-2 border-black">
                                    <thead style="background-color: #042F66; color: white; height: 40px;">
                                        <tr>
                                            <th class="text-center">Sesi</th>
                                            <th class="text-center">Masuk</th>
                                            <th class="text-center">Keluar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>07.00</td>
                                            <td>08.30</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>09.00</td>
                                            <td>10.30</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>11.00</td>
                                            <td>12.30</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>13.00</td>
                                            <td>14.30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
