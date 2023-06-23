<!DOCTYPE html>
<html lang="en">

    @extends('components.head')
    @section('title', 'PAGETOT | LOGIN')

<body class="main-theme">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 70vh;">
            <div class="col-md-7">
                <h3 class="header text-center text-light">PAGETOT</h3>
                <div class="card ps-4 pe-4">
                    <div class="mb-3 mt-2">
                        <form action="{{ route('login.submit') }}" method="post">
                            @csrf
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control mb-2" placeholder="Username">
                            @csrf
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control mb-2" placeholder="Password">
                            <input type="submit" class="btn btn-primary mt-3 mb-4" value="Login">
                            <p>Belum memiliki akun? Segera konfirmasi ke Bapak Kos</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p class="text-center text-light mt-5 mb-1 fs-6">PAGETOT</p>
            <p class="text-center text-light mb-0 fs-6 text-light">Aplikasi Layanan Kos | PAGETOT © 2023</p>
        </footer>
    </div>
</body>
</html>