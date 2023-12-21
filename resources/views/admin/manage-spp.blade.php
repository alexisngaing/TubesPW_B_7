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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data SPP</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Kode Pembayaran</label>
                                <input type="text" class="form-control shadow-input" name="kode_pembayaran" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tahun Pembayaran</label>
                                <input type="date" class="form-control shadow-input" name="tahun_pembayaran" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Semester</label>
                                <input type="text" class="form-control shadow-input" name="semester" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control shadow-input" name="tanggal_mulai" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Berakhir</label>
                                <input type="date" class="form-control shadow-input" name="tanggal_berakhir" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Biaya</label>
                                <input type="number" class="form-control shadow-input" name="biaya" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control shadow-input" name="status" required>
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

        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data SPP</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <form method="POST" action="{{ route('addClass', $item['kode_pembayaran']) }}">
                    <select name="id_kelas" id="entries" class="form-select form-select-sm" style="width: 70px; height: 30px;">
                        @foreach ($kelas as $k)
                        <option value="{{ $k['id'] }}">{{ $k['nama_kelas'] }}</option>
                        @endforeach
                    </select>
                    </form> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="padding: 10px;">
            <div class="card" style=" margin-top: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                <div class="card-body" style="height: 100vh;">
                    <div class="card-title" style="padding-bottom: 1rem;">
                        <h2>Data Pembayaran SPP</h2>
                    </div>
                    <div class="data-control-show">
                        <div class="data-control-show-button gap-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fas fa-circle-plus"></i> Tambah
                            </button>
                            <!-- <button class="btn btn-primary rounded-1"><i class="fas fa-file-lines"></i> Laporan</button> -->
                        </div>
                    </div>
                    <div style="display: flex;">
                        <div class="table-container">
                            <table class="table-bordered border-2 border-black" style="width: 100%; margin-top: 20px;">
                                <thead style="background-color: #042F66; color: white; height: 50px;">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Kode Pembayaran</th>
                                        <th class="text-center">Semester</th>
                                        <th class="text-center">Tanggal Mulai</th>
                                        <th class="text-center">Tanggal Berakhir</th>
                                        <th class="text-center">Biaya</th>
                                        <th class="text-center">Input</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-medium">
                                    @forelse ($spp as $index => $item)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $item->kode_pembayaran }}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $item->kode_pembayaran }}">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                            <td class="text-center">{{ $item['kode_pembayaran'] }}</td>
                                            <td class="text-center">{{ $item['semester'] }}</td>
                                            <td class="text-center">{{ $item['tanggal_mulai'] }}</td>
                                            <td class="text-center">{{ $item['tanggal_berakhir'] }}</td>
                                            <td class="text-center">{{ $item['biaya'] }}</td>
                                            <td class="text-center">
                                                <form method="POST"
                                                    action="{{ route('addToSpesificKelas', $item['kode_pembayaran']) }}">
                                                    @csrf
                                                    <div class="d-flex gap-2">
                                                        <select name="id_kelas" id="entries"
                                                            class="form-select form-select-sm"
                                                            style="width: 70px; height: 30px;">
                                                            @foreach ($kelas as $k)
                                                                <option value="{{ $k['id'] }}">
                                                                    {{ $k['nama_kelas'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <button type="submit" class="btn btn-primary btn-sm"><i
                                                                class="fas fa-add"></i></button>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Tidak ada data</td>
                                        </tr>
                                    @endforelse

                                    <!--modal edit-->
                                    @foreach ($spp as $index => $item)
                                        <div class="modal fade" id="editModal{{ $item->kode_pembayaran }}"
                                            tabindex="-1" aria-labelledby="editModalLabel{{ $item->kode_pembayaran }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="editModalLabel{{ $item->kode_pembayaran }}">Edit Data
                                                            Siswa</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Isi form edit di sini -->
                                                        <form method="POST"
                                                            action="{{ route('adminSpp.update', ['kode_pembayaran' => $item->kode_pembayaran]) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <!-- Tambahkan input field sesuai kebutuhan -->
                                                            <div class="mb-3">
                                                                <label class="form-label">Tahun Pembayaran</label>
                                                                <input type="date" class="form-control shadow-input"
                                                                    name="tahun_pembayaran" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Tanggal Mulai</label>
                                                                <input type="date" class="form-control shadow-input"
                                                                    name="tanggal_mulai" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Tanggal Berakhir</label>
                                                                <input type="date" class="form-control shadow-input"
                                                                    name="tanggal_berakhir" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="semester" class="form-label">Semester</label>
                                                                <input type="text" name="semester"
                                                                    class="form-control" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="biaya" class="form-label">Biaya</label>
                                                                <input type="text" name="biaya" class="form-control"
                                                                    required>
                                                            </div>

                                                            <button type="submit" class="btn btn-primary mt-3">Simpan
                                                                Perubahan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- Modal delete -->
                                    @foreach ($spp as $index => $item)
                                        <div class="modal fade" id="deleteModal{{ $item->kode_pembayaran }}"
                                            tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->kode_pembayaran }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="deleteModalLabel{{ $item->kode_pembayaran }}">Hapus Data
                                                            Siswa</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin ingin menghapus data SPP dengan kode
                                                            {{ $item->kode_pembayaran }}?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="POST"
                                                            action="{{ route('adminSpp.delete', ['kode_pembayaran' => $item->kode_pembayaran]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
