@extends('dashboard')
@section('content')
    <div class="container-fluid" style="background-color: #F5F5F5; padding-top: 1px;">
        <div class="card"
            style="width: 90rem; height: 50rem; margin-top: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="card-title">
                    <h2>Jadwal Sekolah</h2>
                </div>
                <div style="display: flex;">
                    <table class="table-bordered" style="width: 70%; height: 500px; margin-top: 20px;">
                        <thead style="background-color: #042F66; color: white; height: 50px;">
                            <tr>
                                <th class="text-center" style="width: 50px;">No</th>
                                <th class="text-center" style="width: 100px;">Hari</th>
                                <th class="text-center" style="width: 200px;">Mata Pelajaran</th>
                                <th class="text-center" style="width: 170px;">Guru</th>
                                <th class="text-center" style="width: 90px;">Kelas</th>
                                <th class="text-center" style="width: 70px;">Jam</th>
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

                    <div style="width: 30%;">
                        <table class="table-bordered"
                            style="width: 80%; height: 200px; margin-top: 20px; margin-left: 40px;">
                            <tbody>
                                <tr>
                                    <td class="text-center"
                                        style="width: 100px; background-color: #042F66; color: white; font-weight: bold;">
                                        Jurusan</td>
                                    <td class="text-center" style="width: 70px;">
                                        <select class="form-select"
                                            style="width: 150px; margin-left: 50px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-color: #042F66;">
                                            <option selected>IPA</option>
                                            <option value="1">IPS</option>
                                            <option value="2">Bahasa</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"
                                        style="width: 50px; background-color: #042F66; color: white; font-weight: bold;">
                                        Semester</td>
                                    <td style="width: 50px;">
                                        <select class="form-select "
                                            style="width: 150px; margin-left: 50px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-color: #042F66;">
                                            <option selected>Genap</option>
                                            <option value="1">Ganjil</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn"
                            style="margin-left: 40px; margin-top: 10px; background-color:  #042F66; color: white;">
                            <i class="fa-solid fa-plus"></i>
                            Daftar Mata Pelajaran
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
