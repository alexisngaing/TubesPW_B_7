@extends('admin/admin-dashboard')
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

            th {
                padding-left: 4px;
                padding-right: 4px;
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
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="fw-medium">
                                @forelse ($siswa as $s)
                                    <tr>
                                        <td class="text-center">{{ $s['nis'] }}</td>
                                        <td class="text-center">{{ $s['nama'] }}</td>
                                        <td class="text-center">{{ $s['tanggal_lahir'] }}</td>
                                        <td class="text-center">{{ $s['agama'] ?? '-' }}</td>
                                        <td class="text-center">{{ $s['alamat'] }}</td>
                                        <td class="text-center">{{ $s['semester'] ?? '-' }}</td>
                                        <td class="text-center">{{ $s['penjurusan'] ?? '-' }}</td>
                                        <td class="text-center">{{ $s['asal_sekolah'] ?? '-' }}</td>
                                        <td class="text-center">{{ $s['kelas']['nama_kelas'] ?? '-' }}</td>
                                        <td class="text-center">{{ $s['status'] ?? '-' }}</td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $s->nis }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $s->nis }}">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">Tidak ada data</td>
                                    </tr>
                                @endforelse

                                @foreach ($siswa as $s)
                                    <!-- Modal -->
                                    <div class="modal fade" id="editModal{{ $s->nis }}" tabindex="-1"
                                        aria-labelledby="editModalLabel{{ $s->nis }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{ $s->nis }}">Edit
                                                        Data
                                                        Siswa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST"
                                                        action="{{ route('admin.update', ['nis' => $s->nis]) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" name="nama" class="form-control"
                                                                value="{{ old('nama', $s->nama) }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Tanggal Lahir</label>
                                                            <input type="text" name="tanggal_lahir" class="form-control"
                                                                value="{{ old('tanggal_lahir', $s->tanggal_lahir) }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="agama" class="form-label">Agama</label>
                                                            <select name="agama" class="form-select" required>
                                                                <option value="" disabled selected>Pilih Agama
                                                                </option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Buddha">Buddha</option>
                                                                <option value="Konghucu">Katolik</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Alamat</label>
                                                            <input type="text" name="alamat" class="form-control"
                                                                value="{{ old('alamat', $s->alamat) }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Semester</label>
                                                            <input type="text" name="semester" class="form-control"
                                                                value="{{ old('semester', $s->semester) }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Jurusan</label>
                                                            <select name="penjurusan" class="form-select" required>
                                                                <option value="" disabled selected>Pilih Jurusan
                                                                </option>
                                                                <option value="IPA">IPA</option>
                                                                <option value="IPS">IPS</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="tanggal_lahir" class="form-label">Asal
                                                                Sekolah</label>
                                                            <input type="text" name="asal_sekolah"
                                                                class="form-control"
                                                                value="{{ old('tanggal_lahir', $s->tanggal_lahir) }}"
                                                                required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Kelas</label>
                                                            <select name="id_kelas" class="form-select" required>
                                                                <option value="" selected>Pilih Kelas</option>
                                                                @foreach ($kelas as $k)
                                                                    <option value="{{ $k->id }}">
                                                                        {{ $k->nama_kelas }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Status</label>
                                                            <input type="text" name="status" class="form-control"
                                                                value="{{ old('status', $s->status) }}" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary mt-3">Simpan
                                                            Perubahan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="deleteModal{{ $s->nis }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel{{ $s->nis }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $s->nis }}">
                                                        Hapus
                                                        Data Siswa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah Anda yakin ingin menghapus data siswa {{ $s->nama }}?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form method="POST"
                                                        action="{{ route('admin.delete', ['nis' => $s->nis]) }}">
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
        {{-- </div> --}}
    </div>
@endsection
