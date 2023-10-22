<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container align-items-center">
            <div class="card bg-glass">
                <div class="card-body">
                    <form class="form" action="">
                        @csrf
                        <div>
                            <h4 class="mb-3 text-center">LOGIN</h4>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama Pegawai"
                                required />
                            <label for="floatingInput">Nama Pegawai</label>
                        </div>
                        <!-- Password -->
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                required />
                            <label for="floatingPassword">Password</label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" style="width: 100%;" class="btn btn-primary btn-block mb-2 mt-3 ">
                            Login
                        </button>
                        </f </form>

                        <div>
                            Regis
                        </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
