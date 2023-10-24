<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .shadow-input {
            box-shadow: 0 0 10px rgba(4, 47, 102, 0.5);
            transition: box-shadow 0.3s;
        }

        .shadow-input:focus {
            box-shadow: 0 0 15px rgba(4, 47, 102, 0.8);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-image: url('images/8c133d30490aee2c8573657decda8bf9.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
            overflow: hidden;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            width: 80%;
            margin: 0 auto;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 80%;
            height: 200%;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), transparent);
        }

        .form-control {
            font-size: 14px;
            padding: 6px 12px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .school-name {
            padding-top: .6rem;
            font-weight: bolder;
            font-size: 25px;
            color: white;
        }

        .school-name-short {
            display: none;
        }

        .logo {
            width: 4rem;
        }

        /* Responsive */
        @media screen and (max-width: 420px) {
            .school-name {
                display: none;
            }

            .school-name-short {
                display: inline;
                padding-top: .6rem;
                font-weight: bolder;
                font-size: 20px;
                color: white;
            }

            .logo {
                width: 3rem;
            }
        }
    </style>
</head>

<body>
    <header>
        @csrf
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="d-flex gap-2 p-2">
                    <img class="logo" src="{{ asset('img/logosekolah.png') }}" alt="logo-sekolah">
                    <h3 class="school-name">Semesta International High School</h3>
                    <h3 class="school-name-short">SIHS</h3>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav pe-2">
                        <li class="nav-item">
                            <a class="nav-link active rounded mt-1 ms-0 text-light" aria-current="page"
                                style="background-color: #F9A835; padding: 3px 15px;" href="{{ url('/admin') }}">Login
                                as Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class=" align-items-center h-100">
        <div class="container d-flex flex-column justify-content-center" style="width: 600px;">
            <div class="card bg-glass " style="margin-top: 250px;">
                <div class="card-body">
                    <form class="form" action="{{ url('/admin-home') }}">
                        @csrf
                        <div>
                            <h4 class="mb-3 text-center" style="color: #042F66">LOGIN</h4>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama Pegawai"
                                required />
                            <label for="floatingInput">No. Pegawai</label>
                        </div>
                        <!-- Password -->
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                required />
                            <label for="floatingPassword">Password</label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" style="width: 25%;background-color:#042F66; border-color:#042F66"
                            class="btn btn-primary btn-block mb-2 mt-4 d-grid col-6 mx-auto ">
                            Login
                        </button>
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
