<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .shadow-input {
            box-shadow: 0 0 10px rgba(4, 47, 102, 0.5); /* Ubah intensitas bayangan */
            transition: box-shadow 0.3s; /* Efek perubahan saat input mendapatkan fokus */
        }

        .shadow-input:focus {
            box-shadow: 0 0 15px rgba(4, 47, 102, 0.8); /* Bayangan yang lebih terlihat saat input mendapatkan fokus */
        }

        /* Tambahkan gaya untuk label yang tebal (bold) */
        label {
            font-weight: bold;
        }

        body {
            background-image: url('images/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative; /* Tambahkan properti position */
            overflow: hidden;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            width: 80%; /* Ubah lebar sesuai keinginan */
            margin: 0 auto; 
        }

        /* Tambahkan efek gelap sebelah kiri gambar */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 80%; /* Ubah lebar sesuai keinginan */
            height: 130%;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), transparent); /* Gradien dari hitam ke transparan */
        }

        .form-control {
            font-size: 14px;
            padding: 6px 12px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .school-name {
            position: absolute;
            top: 20px;
            left: 50px;
            font-weight: bold;
            font-size: 25px;
            color: white;
        }
    </style>

</head>

<body>
    <section>
    <div class="school-name">Semesta International High School</div>
        <div class="container d-flex align-items-center" style="min-height: 60vh;">
            <div class="card bg-glass mt-5 mx-auto" style="width: 80%; height: 90vh; max-width: 600px;">
                <div class="card-body">
                    <form class="form" action="">
                        <div>
                            <h4 class="mb-3 text-center" style="color: #042F66; font-weight: bold;">Registrasi</h4>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control shadow-input" id="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="no" class="form-label">Nomor Induk Siswa</label>
                            <input type="text" class="form-control shadow-input" id="no" placeholder="Nomor Induk Siswa">
                        </div>
                        <div class="mb-3">
                            <label for="tgl" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control shadow-input" id="tgl">
                        </div>
                        <div class="mb-3">
                            <label for="tlpn" class="form-label">No Telepon</label>
                            <input type="number" class="form-control shadow-input" id="tlpn" placeholder="Nomor Telepon">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control shadow-input" id="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control shadow-input" id="pass">
                        </div>
                        <div class="mb-3">
                            <label for="confirmpass" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control shadow-input" id="confirmpass">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="background-color: #042F66; border-color: #042F66;">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
