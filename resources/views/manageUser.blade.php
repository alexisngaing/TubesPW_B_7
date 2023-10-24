<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title>GD5_B_11407</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .list-group-item.custom-bg-color {
            background-color: #F9A835;
            /* transition: background-color 0.3s; */
        }

        .list-group-item.custom-bg-color:hover {
            background-color: #DA9430;
        }

        /* .list-group-item.custom-bg-color:active {
            background-color: #DA9430;
        } */
        .list-group-item.custom-bg-color:active {
            background-color: #DA9430;
            /* Replace "different-color" with the desired color */
        }

        .list-group-item {
            border: none;
        }
    </style>

</head>


<body>
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
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end" style="background-color: #F9A835" id="sidebar-wrapper">
            <div class="d-flex sidebar-heading border-bottom gap-3 p-4" style="background-color: #042F66">
                <img src="{{ asset('images/pfp.jpg') }}" alt="logo" class="img-fluid rounded-4" style="width: 4rem">
                <div class="text-white fw-bold d-flex flex-column justify-content-center align-items-start">
                    <p class="mb-0" style="font-size: 16px">Putri Cantika</p>
                    <p class="mb-0" style="font-size: 12px">12 MIPA 2</p>
                </div>

            </div>
            <div class="list-group list-group-flush">
                <a class="list-group-item p-3 custom-bg-color" href="#!">Home</a>
                <a class="list-group-item p-3 custom-bg-color" href="#!">Profil</a>
                <a class="list-group-item p-3 custom-bg-color" href="#!">Jadwal</a>
                <a class="list-group-item p-3 custom-bg-color" href="#!">Pembayaran SPP</a>
                <a class="list-group-item p-3 custom-bg-color" href="#!">Logout</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                    <div class="" id="">
                        <div class="d-flex align-items-center ms-auto mt-2 mt-lg-0 gap-3">
                            <p class="m-0">Semesta Internasional High School</p>
                            <img style="width: 4rem" src="{{ asset('images/logosekolah.png') }}" alt="logo_sekolah">
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid" style="background-color: #F5F5F5; padding-top: 1px;">
                <div class="card" style="width: 90rem; height: 50rem; margin-top: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
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
        </div>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>