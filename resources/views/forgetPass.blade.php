<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            background-image: url('images/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
            overflow: hidden;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            width: 80%;
            max-width: 600px;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 80%;
            height: 100vh;
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

        .nav-active {
            background-color: #F9A835;
            padding: 3px 15px;
        }

        /* Responsive */
        @media screen and (max-width: 995px) {
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

            .nav-active {
                background-color: #F9A835;
                padding: 3px 15px;
                width: 4.3rem;
            }

            .card {
                background-color: rgba(255, 255, 255, 0.8);
                width: 80%;
            }
        }
    </style>
</head>

<body>
    <section>

        <div class="container d-flex flex-column justify-content-center align-items-center" style="padding-top: 10rem;">
            <div class="card bg-glass">
                <div class="card-body">
                    <form class="form" method="POST" action="{{ route('actionForget') }}">
                        @csrf
                        <div>
                            <h4 class="mb-3 text-center fw-bold" style="color: #042F66">FORGOT PASS</h4>
                        </div>
                        <div>
                            <h6 class="mb-3 text-center fw-bold" style="color: #042F66">Masukkan Password baru</h6>
                        </div>
                        <!-- Password -->
                        <div class="form-floating">
                            <input type="password" class="form-control mb-2" id="floatingPassword" name="password" placeholder="Password" required />
                            <label for="floatingPassword">Password</label>
                        </div>

                        <!-- <div class="form-floating">
                            <input type="password" class="form-control mb-2" id="floatingPassword" name="password" placeholder="Password" required />
                            <label for="floatingPassword">Password</label>
                        </div> -->
                        <!-- Submit button -->

                        <button type="submit" id="ubahPasswordButton" style="width: 25%;background-color:#042F66; border-color:#042F66" class="btn btn-primary btn-block mb-2 mt-4 d-grid col-6 mx-auto " data-bs-target="#staticBackdrop" data-bs-toggle="modal" disabled>
                            Ubah Password
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Password akan diganti, pastikan anda mengingat password baru anda
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Gas!!!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('ubahPasswordButton').disabled = true;

            // Listen for changes in the password input
            document.getElementById('floatingPassword').addEventListener('input', function() {
                document.getElementById('ubahPasswordButton').disabled = this.value.trim() === '';
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>